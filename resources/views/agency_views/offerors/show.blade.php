@extends('layouts.agency')

@include('includes.datatables')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    @lang('generics.cities')
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Listado</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">@lang('generics.cities')</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{route('cities.index')}}">index</a>
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


            <div class="block-content">

                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Hola, &nbsp;&nbsp;{{$offerors->nick}} </h3>
                    </div>

                    <div>
                        <p>NICK:&nbsp;&nbsp;{{$offerors->nick}}</p>
                    </div>

                    <div>
                        <p>PAIS:&nbsp;&nbsp;{{$offerors->country}}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('city', __('generics.city')) . " " . $offerors->city !!}

                    </div>


                    <div>
                        <p>ADDRESS:&nbsp;&nbsp;{{$offerors->address}}</p>
                    </div>

                    <div>
                        <p>TELEFONO:&nbsp;&nbsp;{{$offerors->phone}}</p>
                    </div>

                    <div>
                        <img src="{{$offerors->photo}}"></img>
                    </div>
                </div>


            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection


