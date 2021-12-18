@extends('layouts.simple')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}">
@endpush


@section('js_after')
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script>
        function agree() {
            document.getElementById('signup-terms').checked = true;
        }

        function acceptTyC() {
            let accept = document.getElementById('signup-terms');
            if (accept.checked == false) {
                Swal.fire({
                    type: 'warning',
                    title: 'Antes de continuar...',
                    html: 'Por favor acepta nuestros t\u00e9rminos y condiciones',
                    showConfirmButton: false,
                    timer: 2000
                })
                return false;
            }
        }
    </script>
@endsection
@section('title')@lang('messages.title_register')@endsection
@section('content')
    @php($introVideo = 'intro1')
    <!-- Page Content -->
    <div class="hero-static d-flex align-items-center">
        <video autoplay muted loop poster="{{ asset('videos/snap' . $introVideo . '.png') }}">
            <source src="{{ asset('videos/' . $introVideo . '.webm') }}" type="video/webm">
            <source src="{{ asset('videos/' . $introVideo . '.mp4') }}" type="video/mp4">
        </video>
        <div class="tint"
            style="background-image:url({{ asset('images/generics/texture.png') }});background-repeat:repeat;background-position:center center;opacity:1;">
        </div>
        <div class="w-100">

            <!-- Sign Up Section -->
            <div class="content content-full bg-white" style="background-color: #000000 !important; opacity: 80%">
                <div class="row justify-content-center" style=" opacity: 100%">
                    <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                        <!-- Header -->
                        <div class="text-center">
                            <p class="mb-2">
                                <img class="rounded" style="max-height: 50px"
                                    src="{{ URL::asset('images/icon/smirrow-icon.png') }}" alt="logo">
                            </p>

                            <h2 class="h6 font-w400 text-muted mb-3">
                                Registro de Agencia
                            </h2>
                        </div>
                        <!-- END Header -->
                        <!-- Sign Up Form -->
                        <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-signup" method="POST" action="{{ route('agency.sign_up') }}"
                            onsubmit="return acceptTyC()">
                            @csrf
                            <input type="hidden" name="agency" value="{{ $agency }}">

                            <div class="form-group">
                                <input id="name" type="text" placeholder="{{ __('generics.name') }}"
                                    class="form-control form-control-lg form-control-alt{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input id="document_number" type="hidden" placeholder="{{ __('generics.document') }}"
                                    class="form-control form-control-lg form-control-alt{{ $errors->has('document_number') ? ' is-invalid' : '' }}"
                                    name="document_number" value="{{ old('document_number') }}" required autofocus>

                                @if ($errors->has('document_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('document_number') }}</strong>
                                    </span>
                                @endif
                                <span class="badge badge-secondary">@lang('messages.create_acount_message1')</span>
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" placeholder="{{ __('generics.email') }}"
                                    class="form-control form-control-lg form-control-alt{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="{{ __('generics.password') }}"
                                        class="form-control form-control-lg form-control-alt{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">

                                    <input id="password-confirm" type="password"
                                        placeholder="{{ __('generics.confirm_password') }}"
                                        class="form-control form-control-lg form-control-alt" name="password_confirmation"
                                        required>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="d-md-flex align-items-md-center justify-content-md-between">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="signup-terms"
                                            name="signup-terms">
                                        <label class="custom-control-label font-w400 "
                                            for="signup-terms">@lang('messages.accept_T&C')</label>
                                    </div>
                                    <div class="py-2">
                                        <a class="font-size-sm text-smirrow" href="javascript:void(0)" data-toggle="modal"
                                            data-target="#one-signup-terms"> <i class="fa fa fa-list-alt"> </i>
                                            @lang('messages.view_terms')</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center mb-0">
                                <div class="col-md-6 col-xl-5">
                                    <button type="submit" class="btn btn-block btn btn-smirrow">
                                        @lang('generics.sign_up')
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row text-center pt-3">
                                {{-- <div class="col-md-6 ">
                                    <a href="{{ route('handleSocialLogin', ['offeror', 'facebook']) }}"
                                        class="btn btn-outline-secondary btn-block"><i class="fab fa-facebook"></i>
                                        Facebook</a>

                                </div> --}}
                                <div class="col-md-12 ">
                                    <a href="{{ route('handleSocialLogin', ['offeror', 'google']) }}"
                                        class="btn btn-outline-secondary btn-block"><i class="fab fa-google"></i> Google</a>
                                </div>
                            </div>
                        </form>
                        <!-- END Sign Up Form -->
                        <div class="col-md-12" style="text-align: left">
                            <a class="font-size-sm text-smirrow" href="javascript: history.go(-1)"><i
                                    class="fa fa fa-reply"> </i> {{ __('buttons.return') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Sign Up Section -->

            <!-- Footer -->
            <div class="font-size-sm text-center text-muted py-3">
                <strong>{{ config('app.name') }}</strong> &copy; <span data-toggle="year-copy"></span>
            </div>
            <!-- END Footer -->
        </div>
    </div>
    <!-- END Page Content -->

    <!-- Terms Modal -->
    <div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">@lang('messages.terms_conditions')</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <h4 class="text-uppercase text-center"><b>@lang('messages.terms_conditions')</b></h4>
                        <p class="text-center">@lang('terms.date')</p>
                        <h4>@lang('terms.contractual_relationship')</h4>
                        <p>@lang('terms.contractual_relationship_content')</p>
                        <h4>@lang('terms.services')</h4>
                        <p>@lang('terms.services_content')</p>
                        <p><b>@lang('terms.license')</b></p>
                        <p>@lang('terms.license_content')</p>
                        <p><b>@lang('terms.restrictions')</b></p>
                        <p>@lang('terms.restrictions_content')</p>
                        <p><b>@lang('terms.provision_services')</b></p>
                        <p>@lang('terms.provision_services_content')</p>
                        <p><b>@lang('terms.third_services')</b></p>
                        <p>@lang('terms.third_services_content')</p>
                        <p><b>@lang('terms.ownership')</b></p>
                        <p>@lang('terms.ownership_content')</p>
                        <h4>@lang('terms.use_services')</h4>
                        <p><b>@lang('terms.user_account')</b></p>
                        <p>@lang('terms.user_account_content')</p>
                        <p><b>@lang('terms.user_behavior')</b></p>
                        <p>@lang('terms.user_behavior_content')</p>
                        <p><b>@lang('terms.text_messages')</b></p>
                        <p>@lang('terms.text_messages_content')</p>
                        <p><b>@lang('terms.promotional_codes')</b></p>
                        <p>@lang('terms.promotional_codes_content')</p>
                        <p><b>@lang('terms.provided_user')</b></p>
                        <p>@lang('terms.provided_user_content')</p>
                        <p><b>@lang('terms.network_devices')</b></p>
                        <p>@lang('terms.network_devices_content')</p>
                        <h4>@lang('terms.payment')</h4>
                        <p>@lang('terms.payment_content')</p>
                        <p><b>@lang('terms.repair_cleaning_fees')</b></p>
                        <p>@lang('terms.repair_cleaning_fees_content')</p>
                        <h4>@lang('terms.waivers_indemnity')</h4>
                        <p><b>@lang('terms.resignation')</b></p>
                        <p>@lang('terms.resignation_content')</p>
                        <p><b>@lang('terms.limitation_liability')</b></p>
                        <p>@lang('terms.limitation_liability_content')</p>
                        <p><b>@lang('terms.indemnity')</b></p>
                        <p>@lang('terms.indemnity_content')</p>
                        <h4>@lang('terms.applicable_legislation')</h4>
                        <p>@lang('terms.applicable_legislation_content')</p>
                        <h4>@lang('terms.other_provisions')</h4>
                        <p><b>@lang('terms.copyright_claims')</b></p>
                        <p>@lang('terms.copyright_claims_content')</p>
                        <p><b>@lang('terms.notifications')</b></p>
                        <p>@lang('terms.notifications_content')</p>
                        <p><b>@lang('terms.general_disposition')</b></p>
                        <p>@lang('terms.general_disposition_content')</p>
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-sm btn-link mr-2"
                            data-dismiss="modal">@lang('generics.close')</button>
                        <button type="button" class="btn btn-sm btn-smirrow" onclick="agree()"
                            data-dismiss="modal">@lang('messages.i_agree')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
