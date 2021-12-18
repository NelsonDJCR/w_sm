<div class="modal fade" id="modal-block-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fadein modal-xl" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Elija el servicio a solicitar</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <p>A continuación seleccione el servicio y el tiempo que desea contratar</p>

                    <table class="table table-vcenter">
                        <thead class="thead-dark">
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>{{__('generics.service')}}</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">{{__('generics.fare')}}</th>
                            <th class="text-center" style="width: 200px;">{{__('generics.quantity')}}</th>
                            <th class="text-center" style="width: 15%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($offeror->services as $index => $service)
                            <tr>

                                <th class="text-center" scope="row">{{$index+1}}</th>
                                <td class="font-w600 font-size-sm">
                                    <span class="s-tooltip-enabled" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$service->service->description}}">{{$service->service->name}}</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    ({{$service->quantity}}) {{$service->time_unit->name}} / {{$service->currency->symbol}} {{number_format($service->getBuyablePrice(),0)}} {{$service->currency->code}}
                                </td>
                                <td class="text-center">
                                    {!! Form::open(['route'=>['stage.addService',$service], 'method'=>'POST', 'role' => 'form']) !!}
                                    {!! Form::hidden('index',$index,['class'=>'form-control']) !!}
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant-{{$index}}">
                                                <span class="fa fa-minus-circle"></span>
                                            </button>
                                        </span>
                                        <input type="text" name="quant-{{$index}}" class="form-control input-number" value="1" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant-{{$index}}">
                                                <span class="fa fa-plus-circle"></span>
                                            </button>
                                        </span>
                                    </div>
                                    {!! Form::submit(__('buttons.add_to_cart'), ['class' => 'btn btn-smirrow btn-sm']) !!}
                                    {!! Form::close() !!}

                                </td>

                            </tr>

                        @endforeach

                        </tbody>
                    </table>

                    <table class="table table-vcenter">
                        <thead class="thead-dark">
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>{{__('generics.accessories')}}</th>
                            <th >{{__('generics.fare')}}</th>
                            <th class="text-right"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($offeror->accessories as $index => $accessory)
                            <tr>
                                <th class="text-center" scope="row">{{$index+1}}</th>
                                <td class="font-w600 font-size-sm">
                                    <span class="s-tooltip-enabled" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$accessory->accessory->description}}">{{$accessory->accessory->name}}</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    ${{number_format($accessory->getBuyablePrice(),0)}}
                                </td>
                                <td>
                                    <a href="{{route('stage.addAccessory', [$accessory, 1])}}" class="btn btn-smirrow float-right" >{{__('buttons.add_to_cart')}}</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
                <div class="block-content block-content-full text-right border-top">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">{{__('buttons.cancel')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>
