<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
<aside id="side-overlay" class="font-size-sm">
    <!-- Side Header -->
    <div class="content-header border-bottom">
        <!-- User Avatar -->

        <!-- END User Avatar -->

        <!-- User Info -->
        <div class="ml-2">
            {{__('generics.stage')}}
        </div>
        <!-- END User Info -->

        <!-- Close Side Overlay -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times text-danger"></i>
        </a>
        <!-- END Close Side Overlay -->
    </div>
    <!-- END Side Header -->

    <!-- Side Content -->
    <div class="content-side">
        <div class="ml-2">
            <p>{{__('messages.stage_explain')}}</p>
        </div>
        <div class="ml-2">
            @php($cartContent = Cart::content())
            @php($cartTotal = Cart::total())
            @if($cartContent->isEmpty())
                <p>{{__('messages.empty_stage')}}</p>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;">
                            <i class="far fa-user"></i>
                        </th>
                        <th>{{__('generics.name')}}</th>
                        <th style="width: 30%;">{{__('generics.service')}}</th>
                        <th style="width: 15%;">{{__('generics.quantity')}}</th>
                        <th style="width: 15%;">{{__('generics.total')}}</th>
                        <th class="text-center" style="width: 50px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cartContent as $product)
                        <tr>
                            <td class="text-center">
                                <a href="{{route('offerors.show', $product->model->offeror)}}"><img class="img-avatar img-avatar48" src="{{$product->model->offeror->user->getAvatar()}}" alt=""></a>
                            </td>
                            <td class="font-w600 font-size-sm">
                                {{$product->model->offeror->user->name}}
                            </td>
                            <td class="font-size-sm">{{$product->name}}</td>
                            <td>
                                {{$product->qty}} x {{number_format($product->price, 0)}} {{$product->model->currency->code}}
                            </td>
                            <td>
                                ${{number_format($product->total, 0)}} {{$product->model->currency->code}}
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{route('stage.remove', $product->rowId)}}" class="btn btn-sm btn-smirrow js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete">
                                        <i class="fa fa-fw fa-trash-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>${{$cartTotal}}</td>
                        <td></td>
                    </tr>

                    </tbody>
                </table>


                <div class="btn-group float-right">
                    <a href="{{route('stage.checkout')}}" class="btn btn-sm btn-smirrow js-tooltip-enabled @if($cartContent->isEmpty()) disabled @endif"  data-toggle="tooltip" title="" data-original-title="Delete">
                        <i class="fa fa-fw fa-calendar-plus"></i> {{__('buttons.go_to_checkout')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Side Content -->
</aside>
