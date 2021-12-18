@extends('layouts.customer')

@section('css_before')

@endsection
@section('js_after')

@endsection

@section('content')


    <!-- Page Content -->
    <div class="content">

        @if(auth()->user()->provider != "" && auth()->user()->password == "")
            <a href="{{route('change_password')}}">
                <div class="alert alert-warning alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p class="mb-0">@lang('messages.change_password_social_login')</p>
                </div>
            </a>
        @endif

     
        @if(auth()->user()->customer->getValidation(auth()->user()->id)=="Process")
            <a href="{{route('validations.index_customer', auth()->user()->customer)}}">
                <div class="alert alert-warning alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="alert-heading font-w300 my-2"><b> <i class="fa fa-fw fa-check-circle"></i> @lang('messages.process_validation')</b></h3>
                    <p class="mb-0">@lang('messages.users_process_validation')</p>
                </div>
            </a>
        @endif
        @if(auth()->user()->customer->getValidation(auth()->user()->id)=="Reject")
            <a href="{{route('validations.index_customer', auth()->user()->customer)}}">
                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="alert-heading font-w300 my-2"><b> <i class="fa fa-fw fa-check-circle"></i> @lang('messages.rejected_documents')</b></h3>
                    <p class="mb-0">@lang('messages.users_reject_validation')</p>
                </div>
            </a>
        @endif
        {{-- @if(auth()->user()->email_verified_at==NULL)
            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="alert-heading font-w300 my-2"><i class="fa fa-fw fa-times-circle"></i> <b>@lang('messages.no_validate_email')</b></h3>
                <p class="mb-0">@lang('messages.validate_email')</p>
                <a class="btn btn-secondary" href="{{ route('verification.resend') }}">{{ __('auth.click here to request the verification email') }}</a>
            </div>
        @endif --}}
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form class="js-form-icon-search push" action="{{route('search.simple')}}" method="GET" id="search-form">
                    <div class="input-group input-group-lg">
                        <input type="text" class="js-icon-search form-control font-size-base" placeholder="@lang('generics.search_for')" name="term" value="{{Request::get('term')}}">
                        <div class="input-group-append" onclick="document.getElementById('search-form').submit()">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                        </div>
                    </div>
                </form>
                <model-featured-component route-url={{route('getFeaturedModels')}}></model-featured-component>
                </div>
            <div class="col-md-2">
                <div class="alert  d-flex align-items-center" style="background: #E71C79; color: white" role="alert">
                    <div class="flex-00-auto">
                        <i class="fa fa-fw fa-fire"></i>
                    </div>
                    <div class="flex-fill ml-3">
                        <p class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID #{{auth()->user()->customer->id}}</font></font></p>
                    </div>
                </div>
                <a class="link-fx font-size-h2" style="color: white" href="{{route('service_request.index', auth()->user()->customer)}}">{{ auth()->user()->customer->getServiceRequest() }} @lang('generics.requests')</a>
                <br>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
