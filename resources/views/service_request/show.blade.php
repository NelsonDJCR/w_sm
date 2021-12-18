@extends('layouts.offerors')

@include('includes.datatables')

@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Invoice -->
        <div class="block">
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    <!-- Invoice Info -->
                    <div class="row mb-4">
                        <!-- Company Info -->
                        <div class="col-6 font-size-sm">
                            <p class="h3">Solicitud #{{$serviceRequest->consecutive}}</p>
                            <address>
                                Inicio: {{$serviceRequest->initial_date}}<br>
                                Fin: {{$serviceRequest->final_date}}<br>
                                {{$serviceRequest->description}}
                            </address>
                        </div>
                        <!-- END Company Info -->

                        <!-- Client Info -->
                        <div class="col-6 text-right font-size-sm">
                            <p class="h3">Client</p>
                            <address>
                                {{$serviceRequest->customer->user->name}}<br>
                                {{$serviceRequest->customer->user->phone}}<br>
                                {{$serviceRequest->customer->user->email}}
                            </address>
                        </div>
                        <!-- END Client Info -->
                    </div>
                    <!-- END Invoice Info -->
                    <div class="progress push">
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated " role="progressbar" style="width:25%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"><span class="font-size-sm font-w600">25% Solicitud</span></div>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive push">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center" ></th>
                                <th class="text-center" >
                                    <i class="far fa-user"></i>
                                </th>
                                <th>Product</th>
                                <th class="text-center" >Qnt</th>
                                <th class="text-right" >Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $Numero=1; ?>
                            @foreach($serviceRequest->serviceRequestOfferor as $serviceRequestOfferor)
                                <tr>
                                    <td class="text-center">{{$Numero}}</td>
                                    <td class="text-center">
                                        <img class="img-avatar img-avatar48" src="{{$serviceRequestOfferor->offeror->user->getAvatar()}}" alt="">
                                    </td>
                                    <td class="">
                                        <b class="font-w600 font-size-sm"> Model: {{$serviceRequestOfferor->offeror->user->name}}</b><br>
                                        <p align="justify" style="margin-bottom: 0;">{{$serviceRequestOfferor->description}}</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-pill ">1</span><br>
                                        @if($Numero%3==1)
                                            <span class="badge badge-success"><i class="fa fa-check"></i> Aprobado!</span>
                                        @elseif($Numero%3==2)
                                            <span class="badge badge-warning"><i class="fa fa-exclamation-circle"></i> Pendiente</span>
                                        @else
                                            <span class="badge badge-danger"><i class="fa fa-times-circle"></i> Rechazado</span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        ${{number_format($serviceRequestOfferor->total_value, 0)}}
                                    </td>
                                </tr>
                                <?php $Numero++; ?>
                            @endforeach
                            <tr>
                                <td colspan="4" class="font-w600 text-right">Subtotal</td>
                                <td class="text-right">${{number_format($serviceRequest->total_value, 0)}}</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="font-w600 text-right">Vat Rate</td>
                                <td class="text-right">19%</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="font-w600 text-right">Vat Due</td>
                                <td class="text-right">${{number_format($serviceRequest->total_value*0.19, 0)}}</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="font-w700 text-uppercase text-right bg-body-light">Total Due</td>
                                <td class="font-w700 text-right bg-body-light">${{number_format($serviceRequest->total_value*1.19, 0)}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <a href="{{route('service_request.confirm',$serviceRequest->id)}}" class="btn btn-smirrow">Confirmar </a>
                    <a href="{{route('service_request.cancel',$serviceRequest->id)}}" class="btn btn-smirrow"><i class="fa fa-times-circle"></i> Rechazar </a>
                    <a href="#" onclick="One.helpers('print');" class="btn btn-secondary"><i class="fa fa-print"></i> Print request </a>
                </div>
            </div>
        </div>
        <!-- END Invoice -->
    </div>
    <!-- END Page Content -->


@endsection


