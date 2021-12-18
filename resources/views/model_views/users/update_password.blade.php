@extends('layouts.offerors')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    {{ __('passwords.update_password') }}
                </h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">{{ __('passwords.change_password') }}</h3>
            </div>


            <div class="block-content">

                <div class="col-xl-12 row">
                    <div class="col-xl-12">

                        <form method="POST" style="margin-bottom: 10px;" action="{{ route('change_password') }}">
                            @csrf
                            @method('put')

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">@lang('passwords.new_password')</label>

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

                            <input type="hidden" name="Edit" value="pass">

                            <div class="form-group row mb-0">
                                <div class="col-xl-12 text-center">
                                    <button type="submit" class="btn btn-smirrow">
                                        @lang('generics.save')
                                    </button>
                                    <a href="{{route('home')}}">
                                        <button type="button" class="btn btn-smirrow">
                                            @lang('generics.cancel')
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>


            </div>
            <!-- END Your Block -->
        </div>
        <!-- END Page Content -->
@endsection
