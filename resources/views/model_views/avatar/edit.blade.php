@extends('layouts.offerors')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css"/>
    <style>
        .lui-croppie-initial-visible, .lui-croppie-cropping-visible, .lui-croppie-uploading-visible,
        .lui-croppie-success-visible, .lui-croppie-error-visible {display: none;}
        .lui-croppie-initial .lui-croppie-initial-visible {display: block;}
        .lui-croppie-cropping .lui-croppie-cropping-visible {display: block;}
        .lui-croppie-uploading .lui-croppie-uploading-visible {display: block;}
        .lui-croppie-success .lui-croppie-success-visible {display: block;}
        .lui-croppie-error .lui-croppie-error-visible {display: block;}
    </style>

@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.js"></script>
    <script>
        (function(){
            var Stage = {
                initial: {label:'initial'},
                cropping: {label:'cropping'},
                uploading: {label:'uploading'},
                success: {label:'success'},
                error: {label:'error'},
            }
            function State(form){
                this.form = form;
                this.avatarImage = form.querySelector('[data-lui-croppie-image]');
                this.croppieElement = form.querySelector('[data-lui-croppie-viewport]');
                this.progressTextElement = form.querySelector('[data-lui-croppie-progress-text]');
                this.progressBarElement = form.querySelector('[data-lui-croppie-progress-bar]');
                this.errorElement = form.querySelector('[data-lui-croppie-errors]');
                this.successElement = form.querySelector('[data-lui-croppie-success]');
                this.rotateLeftBtn = form.querySelector('[data-lui-croppie-rotate-left]');
                this.rotateRightBtn = form.querySelector('[data-lui-croppie-rotate-right]');
                this.file_input_name = "{{ config('lui-croppie.form_input_name') }}";
                this.setStage = function(stage) {
                    if(this.stage != stage){
                        this.stage && this.form.classList.remove('lui-croppie-' + this.stage.label);
                        this.stage = stage;
                        this.form.classList.add('lui-croppie-' + this.stage.label);
                    }
                }
                this.setStage(Stage.initial);
            }
            function readFile(input, callback) {
                var reader = new FileReader();
                reader.onload = callback;
                reader.readAsDataURL(input.files[0]);
            }
            function prepareUploadForm(state){
                let vanilla = new Croppie(state.croppieElement, {
                    viewport: {
                        width: {{ config('lui-croppie.image.size.width') }},
                        height: {{ config('lui-croppie.image.size.height') }},
                        type: "{{ config('lui-croppie.image.type') }}"
                    },
                    boundary: {
                        width: {{ config('lui-croppie.image.boundary.width') }},
                        height: {{ config('lui-croppie.image.boundary.height') }}
                    },
                    showZoomer: true,
                    enableOrientation: true
                });
                state.rotateLeftBtn&&state.rotateLeftBtn.addEventListener('click', function (event) {
                    vanilla.rotate(-90);
                });
                state.rotateRightBtn&&state.rotateRightBtn.addEventListener('click', function (event) {
                    vanilla.rotate(90);
                });
                state.croppieElement.addEventListener('update', function (event) {
                });
                state.form[state.file_input_name].addEventListener('change', function(event){
                    state.setStage(Stage.initial);
                    if (this.files && this.files.length && this.files[0]) {
                        readFile(this, function(e){
                            state.setStage(Stage.cropping);
                            vanilla.bind({
                                url: e.target.result,
                                zoom: 0,
                            });
                        });
                    }
                });
                state.form.addEventListener('submit', function(event){
                    event.preventDefault();
                    vanilla.result({
                        type: 'blob'
                    }).then(function (blob) {
                        if(blob) uploadImage(state, blob);
                        state.form[state.file_input_name].value = null;
                    });
                });
            }
            function uploadImage(state, blob){
                var formData = new FormData(state.form);
                formData.delete(state.file_input_name);
                formData.append(state.file_input_name, blob, 'avatar.png');
                var xhr = new XMLHttpRequest();
                if (xhr.upload) {
                    xhr.upload.addEventListener("progress", function(e) {
                        if (e.lengthComputable) {
                            var pc = parseInt(e.loaded / e.total * 100);
                            if(state.progressTextElement) state.progressTextElement.innerText = pc + "%";
                            if(state.progressBarElement) state.progressBarElement.style.width = pc + "%";
                        }
                    }, false);
                };
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4) {
                        var response = JSON.parse(this.responseText);
                        if(this.status == 200) {
                            if(response.success){
                                state.successElement.innerHTML = response.message;
                                state.setStage(Stage.success);
                                if(response.uploaded_image_url && state.avatarImage) {
                                    state.avatarImage.src = response.uploaded_image_url;
                                }
                                if(response.redirect_url) location.href = response.redirect_url;
                            }
                        }
                        else{
                            state.errorElement.innerText = '';
                            for(var z in response.errors){
                                response.errors[z].forEach(function(errorText){
                                    let el = document.createElement('li');
                                    el.innerHTML = errorText;
                                    state.errorElement.appendChild(el);
                                })
                            }
                            state.setStage(Stage.error);
                        }
                    }
                };
                xhr.open(state.form.method, state.form.action, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.send(formData);
                state.setStage(Stage.uploading);
            }
            document.addEventListener("DOMContentLoaded", function(event) {
                let dataTag = 'data-lui-croppie-form';
                document.querySelectorAll('[' + dataTag + ']').forEach(function(form){
                    form.removeAttribute(dataTag);
                    prepareUploadForm(new State(form));
                });
            });
        })();
    </script>


@endpush

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Editar foto de perfil
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Foto
                    </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Examples</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Blank</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Editar foto perfil</h3>
            </div>
            <form role="form" method="post" action="{{route('user.avatar.update')}}" data-lui-croppie-form>
                @csrf
                @method('PUT')

                <div class="form-group text-center lui-croppie-initial-visible lui-croppie-uploading-visible lui-croppie-success-visible">
                    <img data-lui-croppie-image src="{{ auth()->user()->getAvatar() }}" alt="profile picture">
                </div>

                <div class="form-group">
                    <label class="control-label">{{ __('lui-croppie::form.file_input_label') }}</label>
                    <input type="file" name="{{ config('lui-croppie.form_input_name') }}" value="Choose an image"
                           accept="image/*"/>
                    <div class="help-block"></div>
                </div>

                <div class="upload-demo-wrap lui-croppie-cropping-visible">
                    <div data-lui-croppie-viewport></div>
                    <div class="help-block text-center">{{ __('lui-croppie::form.croppie_help_text') }}</div>
                    <button type="submit" class="btn btn-smirrow pull-right">
                        <i class="fa fa-upload margin-r-5"></i>
                        {{ __('lui-croppie::form.upload_button_text') }}
                    </button>
                    <button type="button" class="btn btn-smirrow margin-r-5" data-lui-croppie-rotate-right>
                        <i class="fa fa-rotate-left margin-r-5"></i>
                        {{ __('lui-croppie::form.rotate_left_button_text') }}
                    </button>
                    <button type="button" class="btn btn-smirrow margin-r-5" data-lui-croppie-rotate-left>
                        <i class="fa fa-rotate-right margin-r-5"></i>
                        {{ __('lui-croppie::form.rotate_right_button_text') }}
                    </button>
                </div>

                <div class="form-group lui-croppie-uploading-visible">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%"
                             data-lui-croppie-progress-bar>
                            <span data-lui-croppie-progress-text>0%</span>
                        </div>
                    </div>
                </div>

                <div class="alert alert-danger lui-croppie-error-visible">
                    <ul data-lui-croppie-errors></ul>
                </div>

                <div class="alert alert-success lui-croppie-success-visible">
                    <i class="fa fa-check margin-r-5"></i>
                    <span data-lui-croppie-success></span>
                </div>

            </form>

        </div>
    </div>
@endsection
