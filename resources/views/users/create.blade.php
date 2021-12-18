@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    @lang('generics.users')
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">@lang('generics.create')</small>
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
                <h3 class="block-title">Crear usuario</h3>
            </div>


            <div class="block-header">
                <h4 class="block-title">Datos Personales</h4>
            </div>




            <div class="block-content">


                <form method="POST" style="margin-bottom: 10px;" action="{{ route('users.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">@lang('generics.name')</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="document" class="col-md-4 col-form-label text-md-right">@lang('generics.document')</label>

                        <div class="col-md-6">
                            <input id="document" type="text" class="form-control{{ $errors->has('document') ? ' is-invalid' : '' }}" name="document" value="{{ old('document') }}" required autofocus>

                            @if ($errors->has('document'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('document') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">@lang('generics.email')</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">@lang('generics.password')</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">@lang('generics.confirm_password')</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class=" col-xl-12 text-center">
                        <div class="custom-control custom-switch custom-control-lg mb-2">

                                <input class="custom-control-input" id="state" name="state" type="checkbox">
                                <label for="state" class="custom-control-label">Estado</label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-xl-12 text-center">
                            <button type="submit" class="btn btn-smirrow">
                                @lang('generics.regist')
                            </button>
                            <a href="{{route('users.index')}}">
                                <button type="button" class="btn btn-smirrow">
                                    @lang('generics.cancel')
                                </button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Your Block -->
        </div>
        <!-- END Page Content -->
@endsection
