/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/main_counter.js":
/*!*********************************************!*\
  !*** ./resources/assets/js/main_counter.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*!
 * jQuery Countdown plugin v1.0
 * http://www.littlewebthings.com/projects/countdown/
 *
 * Copyright 2010, Vassilis Dourdounis
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
(function ($) {
  $.fn.countDown = function (options) {
    config = {};
    $.extend(config, options);
    diffSecs = this.setCountDown(config);

    if (config.onComplete) {
      $.data($(this)[0], 'callback', config.onComplete);
    }

    if (config.omitWeeks) {
      $.data($(this)[0], 'omitWeeks', config.omitWeeks);
    }

    $('#' + $(this).attr('id') + ' .digit').html('<div class="top"></div><div class="bottom"></div>');
    $(this).doCountDown($(this).attr('id'), diffSecs, 500);
    return this;
  };

  $.fn.stopCountDown = function () {
    clearTimeout($.data(this[0], 'timer'));
  };

  $.fn.startCountDown = function () {
    this.doCountDown($(this).attr('id'), $.data(this[0], 'diffSecs'), 500);
  };

  $.fn.setCountDown = function (options) {
    var targetTime = new Date();

    if (options.targetDate) {
      targetTime = new Date(options.targetDate.month + '/' + options.targetDate.day + '/' + options.targetDate.year + ' ' + options.targetDate.hour + ':' + options.targetDate.min + ':' + options.targetDate.sec + (options.targetDate.utc ? ' UTC' : ''));
    } else if (options.targetOffset) {
      targetTime.setFullYear(options.targetOffset.year + targetTime.getFullYear());
      targetTime.setMonth(options.targetOffset.month + targetTime.getMonth());
      targetTime.setDate(options.targetOffset.day + targetTime.getDate());
      targetTime.setHours(options.targetOffset.hour + targetTime.getHours());
      targetTime.setMinutes(options.targetOffset.min + targetTime.getMinutes());
      targetTime.setSeconds(options.targetOffset.sec + targetTime.getSeconds());
    }

    var nowTime = new Date();
    diffSecs = Math.floor((targetTime.valueOf() - nowTime.valueOf()) / 1000);
    $.data(this[0], 'diffSecs', diffSecs);
    return diffSecs;
  };

  $.fn.doCountDown = function (id, diffSecs, duration) {
    $this = $('#' + id);

    if (diffSecs <= 0) {
      diffSecs = 0;

      if ($.data($this[0], 'timer')) {
        clearTimeout($.data($this[0], 'timer'));
      }
    }

    secs = diffSecs % 60;
    mins = Math.floor(diffSecs / 60) % 60;
    hours = Math.floor(diffSecs / 60 / 60) % 24;

    if ($.data($this[0], 'omitWeeks') == true) {
      days = Math.floor(diffSecs / 60 / 60 / 24);
      weeks = Math.floor(diffSecs / 60 / 60 / 24 / 7);
    } else {
      days = Math.floor(diffSecs / 60 / 60 / 24) % 7;
      weeks = Math.floor(diffSecs / 60 / 60 / 24 / 7);
    }

    $this.dashChangeTo(id, 'seconds_dash', secs, duration ? duration : 800);
    $this.dashChangeTo(id, 'minutes_dash', mins, duration ? duration : 1200);
    $this.dashChangeTo(id, 'hours_dash', hours, duration ? duration : 1200);
    $this.dashChangeTo(id, 'days_dash', days, duration ? duration : 1200);
    $this.dashChangeTo(id, 'weeks_dash', weeks, duration ? duration : 1200);
    $.data($this[0], 'diffSecs', diffSecs);

    if (diffSecs > 0) {
      e = $this;
      t = setTimeout(function () {
        e.doCountDown(id, diffSecs - 1);
      }, 1000);
      $.data(e[0], 'timer', t);
    } else if (cb = $.data($this[0], 'callback')) {
      $.data($this[0], 'callback')();
    }
  };

  $.fn.dashChangeTo = function (id, dash, n, duration) {
    $this = $('#' + id);

    for (var i = $this.find('.' + dash + ' .digit').length - 1; i >= 0; i--) {
      var d = n % 10;
      n = (n - d) / 10;
      $this.digitChangeTo('#' + $this.attr('id') + ' .' + dash + ' .digit:eq(' + i + ')', d, duration);
    }
  };

  $.fn.digitChangeTo = function (digit, n, duration) {
    if (!duration) {
      duration = 800;
    }

    if ($(digit + ' div.top').html() != n + '') {
      $(digit + ' div.top').css({
        'display': 'none'
      });
      $(digit + ' div.top').html(n ? n : '0').slideDown(duration);
      $(digit + ' div.bottom').animate({
        'height': ''
      }, duration, function () {
        $(digit + ' div.bottom').html($(digit + ' div.top').html());
        $(digit + ' div.bottom').css({
          'display': 'block',
          'height': ''
        });
        $(digit + ' div.top').hide().slideUp(10);
      });
    }
  };
})(jQuery);

function email_focus() {
  if ($(this).val() == 'your@email.com') {
    $(this).val('');
    $(this).removeClass('faded');
  }
}

function email_blur() {
  if ($(this).val() == '') {
    $(this).val('your@email.com');
    $(this).addClass('faded');
  }
}

function subscribe_submit() {
  email = $('#email_field').val();
  $.post('subscribe.php?json=1', $('#subscribe_form').serialize(), subscribe_result, 'json');
  $('#subscribe_button').attr("disabled", "disabled");
  $('.form_message').fadeOut('fast');
  $('#loading').fadeIn('fast');
  return false;
}

function subscribe_result(data) {
  $('#loading').hide();

  if (data.error) {
    display_message(data.error);
  } else {
    display_message(data.info, 'info');
  }

  $('#subscribe_button').removeAttr("disabled");
}

function display_message(msg, type) {
  if (!type) type = 'error';

  if (type == 'error') {
    $('#error_message').html(msg).fadeIn('slow');
    setTimeout('hide_error()', 4000);
  } else {
    $('#error_message').hide();
    $('#info_message').html(msg).fadeIn('slow');
  }
}

function hide_error() {
  $('#error_message').fadeOut('slow');
}

/***/ }),

/***/ 2:
/*!***************************************************!*\
  !*** multi ./resources/assets/js/main_counter.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\ADMIN-PC\Documents\projects\Smirrow\resources\assets\js\main_counter.js */"./resources/assets/js/main_counter.js");


/***/ })

/******/ });