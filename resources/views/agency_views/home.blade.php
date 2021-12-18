@extends('layouts.agency')

@section('content')

    @push('scripts')
        <script src="{{ asset('js/plugins/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('js/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('js/plugins/chart.js/Chart.bundle.min.js') }}"></script>
        <script>
            !function(r){var e={};function t(a){if(e[a])return e[a].exports;var o=e[a]={i:a,l:!1,exports:{}};return r[a].call(o.exports,o,o.exports,t),o.l=!0,o.exports}t.m=r,t.c=e,t.d=function(r,e,a){t.o(r,e)||Object.defineProperty(r,e,{enumerable:!0,get:a})},t.r=function(r){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(r,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(r,"__esModule",{value:!0})},t.t=function(r,e){if(1&e&&(r=t(r)),8&e)return r;if(4&e&&"object"==typeof r&&r&&r.__esModule)return r;var a=Object.create(null);if(t.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:r}),2&e&&"string"!=typeof r)for(var o in r)t.d(a,o,function(e){return r[e]}.bind(null,o));return a},t.n=function(r){var e=r&&r.__esModule?function(){return r.default}:function(){return r};return t.d(e,"a",e),e},t.o=function(r,e){return Object.prototype.hasOwnProperty.call(r,e)},t.p="",t(t.s=2)}([,,function(r,e,t){r.exports=t(3)},function(r,e){function t(r,e){for(var t=0;t<e.length;t++){var a=e[t];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(r,a.key,a)}}var a=function(){function r(){!function(r,e){if(!(r instanceof e))throw new TypeError("Cannot call a class as a function")}(this,r)}var e,a,o;return e=r,o=[{key:"initChartsChartJS",value:function(){Chart.defaults.global.defaultFontColor="#999",Chart.defaults.global.defaultFontStyle="600",Chart.defaults.scale.gridLines.color="rgba(0,0,0,.05)",Chart.defaults.scale.gridLines.zeroLineColor="rgba(0,0,0,.1)",Chart.defaults.scale.ticks.beginAtZero=!0,Chart.defaults.global.elements.line.borderWidth=2,Chart.defaults.global.elements.point.radius=4,Chart.defaults.global.elements.point.hoverRadius=6,Chart.defaults.global.tooltips.cornerRadius=3,Chart.defaults.global.legend.labels.boxWidth=15;var r,e,t=jQuery(".js-chartjs-lines"),a=jQuery(".js-chartjs-bars"),o=jQuery(".js-chartjs-radar"),n=jQuery(".js-chartjs-polar"),l=jQuery(".js-chartjs-pie"),i=jQuery(".js-chartjs-donut");r={labels:["MON","TUE","WED","THU","FRI","SAT","SUN"],datasets:[{label:"This Week",fill:!0,backgroundColor:"rgba(220,220,220,.3)",borderColor:"rgba(220,220,220,1)",pointBackgroundColor:"rgba(220,220,220,1)",pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:"rgba(220,220,220,1)",data:[30,32,40,45,43,38,55]},{label:"Last Week",fill:!0,backgroundColor:"rgba(171, 227, 125, .3)",borderColor:"rgba(171, 227, 125, 1)",pointBackgroundColor:"rgba(171, 227, 125, 1)",pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:"rgba(171, 227, 125, 1)",data:[15,16,20,25,23,25,32]}]},e={labels:["Earnings","Sales","Tickets"],datasets:[{data:[48,26,26],backgroundColor:["rgba(171, 227, 125, 1)","rgba(250, 219, 125, 1)","rgba(117, 176, 235, 1)"],hoverBackgroundColor:["rgba(171, 227, 125, .75)","rgba(250, 219, 125, .75)","rgba(117, 176, 235, .75)"]}]},t.length&&new Chart(t,{type:"line",data:r}),a.length&&new Chart(a,{type:"bar",data:r}),o.length&&new Chart(o,{type:"radar",data:r}),n.length&&new Chart(n,{type:"polarArea",data:e}),l.length&&new Chart(l,{type:"pie",data:e}),i.length&&new Chart(i,{type:"doughnut",data:e})}},{key:"initRandomEasyPieChart",value:function(){jQuery(".js-pie-randomize").on("click",function(r){jQuery(r.currentTarget).parents(".block").find(".pie-chart").each(function(r,e){return jQuery(e).data("easyPieChart").update(Math.floor(100*Math.random()+1))})})}},{key:"init",value:function(){this.initChartsChartJS(),this.initRandomEasyPieChart()}}],(a=null)&&t(e.prototype,a),o&&t(e,o),r}();jQuery(function(){a.init()})}]);
        </script>

        <script>jQuery(function(){ One.helpers(['easy-pie-chart', 'sparkline']); });</script>
    @endpush
    <div class="bg-image overflow-hidden" style="background-image: url({{URL::asset('media/photos/photo8@2x.jpg')}});">
        <div class="bg-primary-dark-op">
            <div class="content content-narrow content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                    <div class="flex-sm-fill">
                        <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Dashboard</h1>
                        <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Bienvenido {{auth()->user()->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content content-narrow">
        <!-- Stats -->
        <div class="row">
            {{-- <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Solicitudes</div>
                        <div class="font-size-h2 font-w400 text-dark">{{$request_quantity}}</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Transacciones</div>
                        <div class="font-size-h2 font-w400 text-dark">{{$transactions_quantity}}</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Facturado Hoy</div>
                        <div class="font-size-h2 font-w400 text-dark"> ${{ number_format($total_invoiced, 2, ",", ".") }}</div>
                    </div>
                </a>
            </div> --}}
            {{-- <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Ofertantes</div>
                        <div class="font-size-h2 font-w400 text-dark">{{$total_offerors}}</div>
                    </div>
                </a>
            </div> --}}
        </div>
        <!-- END Stats -->


        {{-- <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                <tr>
                    <th class="text-center" style="width: 80px;">Id</th>
                    <th class="d-none d-sm-table-cell">Consecutivo</th>
                    <th class="d-none d-sm-table-cell">Cliente</th>
                    <th class="d-none d-sm-table-cell">No Ofertantes</th>
                    <th class="d-none d-sm-table-cell">Fecha</th>
                    <th class="d-none d-sm-table-cell">Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td class="text-center font-size-sm">{{$service->id}}</td>
                        <td class="font-w600 font-size-sm">
                            <a href="">{{$service->consecutive}}</a>
                        </td>
                        <td class="font-w600 font-size-sm">
                            {{$service->customer_id}}
                        </td>
                        <td class="font-w600 font-size-sm">
                            {{$service->total_models}}
                        </td>
                        <td class="font-w600 font-size-sm">
                            {{$service->initial_date}}
                        </td>
                        <td class="font-w600 font-size-sm">
                            {{$service->total_value}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> --}}
</div>
@endsection
