@extends('layouts.customer')
​
@section('title', '| Resultado del pago')
​
@section('content')
    <div class="content-home">
        ​
        <section class="basic-hero" style="background-color: #F0F0F0" id="opciones">
            <div class="basic-hero-content">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h3 class="text-center text-uppercase font-weight-bold">El estado de tu transacción es: {{$response['x_respuesta']}}</h3>
                            <p class="text-center text-uppercase font-weight-bold">{{$response['x_response_reason_text']}}</p>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="row text-center">
                        ​
                        <h4><small>Hola</small> {{$response['x_customer_name']}} {{$response['x_customer_lastname']}}</h4>
                        ​
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 ">
                            <p>Los detalles del pago están a continuación</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td># Comprobante</td>
                                        <td id="referencia">{{$response['x_ref_payco']}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Número de radicado</td>
                                        <td id="fecha">{{$response['x_id_factura']}} Descripción: {{$response['x_description']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Respuesta</td>
                                        <td id="respuesta">{{$response['x_response']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Banco/Entidad</td>
                                        <td id="banco">{{$response['x_bank_name']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Motivo</td>
                                        <td id="motivo">{{$response['x_response_reason_text']}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Recibo</td>
                                        <td id="recibo">{{$response['x_response']}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Total</td>
                                        <td class="" id="total">$ {{number_format( $response['x_amount'], 0, ',', '.' )}} {{$response['x_currency_code']}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="col-lg-8 col-lg-offset-2">
                                <img src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/pagos_procesados_por_epayco_260px.png" style="margin-top:10px; float:left"> <img src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/credibancologo.png"</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        ​
        <div class="bar-gradient-separator" style="margin: 0; height: 1em"></div>
    </div>
@endsection