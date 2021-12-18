    @extends('layouts.customer')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/scheduler/scheduler.css') }}">
@endpush
@push('scripts')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/slick-carousel/slick.js') }}"></script>
    <script src="{{ asset('js/plugins/raty-js/jquery.raty.js') }}"></script>
    <script>jQuery(function () {
            One.helpers('slick');
        });</script>
    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>
        //plugin bootstrap minus and plus
        //http://jsfiddle.net/laelitenetwork/puJ6G/
        $('.btn-number').click(function(e){
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type      = $(this).attr('data-type');
            var input = $("input[name='"+fieldName+"']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if(type == 'minus') {

                    if(currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if(type == 'plus') {

                    if(currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }
                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').focusin(function(){
            $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {

            minValue =  parseInt($(this).attr('min'));
            maxValue =  parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if(valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if(valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }

        });

        var modalImg = $('#img01')
        $('.box-copy').click(function() {
            var imgSrc = $(this).children('img').attr('src')
            $('#box_modal_gallery').css('display', 'block')
            modalImg.attr('src', imgSrc)
        });
        $('.btn_close').click(function() {
            $('#box_modal_gallery').css('display', 'none')
        });

       






        $(".input-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    </script>
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script>jQuery(function(){ One.helpers(['datepicker']); });
        $(function () {
            $('#availability').datepicker({
                startDate: '+1d',
                endDate: '+3m',
                format: "yy-mm-dd",
                datesDisabled:@php echo json_encode($datesDisabled) @endphp,
                daysOfWeekDisabled:@php echo json_encode($daysOfWeekDisabled) @endphp,
            });
        });
    </script>
@endpush
@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="col-md-12">
            <!-- Page Content -->
            <div class="row">
                <div class="col-12 col-sm-3 align-content-center">
                    <!-- About Offeror (Foto) -->
                    <div class="block block-rounded block-link-shadow">
                        <div class="block-content block-content-full text-center">
                            <div class="push">
                                <img class="img-avatar" src="{{ $offeror->user->getAvatar()}}" alt="{{ $offeror->user->id }}">
                            </div>
                            <div class="light font-w600">Id # {{ $offeror->id }}</div>
                            <div class="js-rating">
                                @for($i=1; $i<=5; $i++)
                                    @if($offeror->getRating() >= $i)
                                        <i class="fa fa-fw fa-1x fa-star text-warning"></i>
                                    @elseif((($i - $offeror->getRating()) <  1))
                                        <i class="fa fa-fw fa-1x fa-star-half-alt text-warning"></i>
                                    @else
                                        <i class="fa fa-fw fa-1x fa-star text-muted"></i>
                                    @endif
                                @endfor
                                ({{ $offeror->getRating() }})
                            </div>

                            <div class="light">@lang('generics.nick') {{ $offeror->user->nick_name }}</div>
                            <div class="light">@lang('generics.height') {{  $offeror->height }} cm</div>
                            <div class="light">@lang('generics.age') {{\Carbon\Carbon::parse($offeror->birthday)->age}}</div>
                            <div class="light">@lang('generics.gender')  {{ $offeror->gender }}</div>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-smirrow push" href="#" data-toggle="modal" data-target="#modal-block-fadein"> <i class=" fa fa-fw fa-plus-circle"></i> @lang('generics.request_service')</a>
                        </div>
                   </div>

                </div>
                <div class="col-12 col-sm-9">
                    <!-- Block Tabs Default Style -->
                    <div class="block">
                        @php(
                        $tabs = array(
                        'book' => ['name' => __('generics.book'), 'icon' => 'fa fa-fw fa-camera'],
                        'gallery' => ['name' => __('generics.gallery'), 'icon' => 'fa fa-fw fa-images'],
                        'profile' => ['name' => __('generics.profile'), 'icon' => 'fa fa-fw fa-address-card'],
                        'availability' => ['name' => __('generics.availability'), 'icon' => 'fa fa-fw fa-calendar-check'],
                        'fares' => ['name' => __('generics.fares'), 'icon' => 'fa fa-fw fa-money-bill-alt'],
                        'ratings' => ['name' => __('generics.ratings'), 'icon' => 'fa fa-fw fa-thumbs-up'],
                        ))
                        @include('client_views.offerors.includes.menu-tabs', ['tabs' => $tabs])
                        <div class="block-content tab-content">
                            @foreach($tabs as $tab => $tabDetail)
                                @include('client_views.offerors.tabs.'.$tab, ['tabDetail' => $tabDetail])
                            @endforeach
                        </div>
                    </div>
                    <!-- END Block Tabs Default Style -->
                </div>
            </div>
            <!-- END Page Content -->
        </div>
    </div>
    @include('client_views.offerors.modal_request')
    <!-- END Page Content -->
@endsection
    @section('css_after')
        <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
        <style>
            .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
                text-decoration: line-through;
                color: #ccc;
            }
            .day
            {
                color: #0a0302;
            }
        </style>
    @endsection
