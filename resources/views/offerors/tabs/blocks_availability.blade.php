<div class="tab-pane" id="btabs-static-block_availability" role="tabpanel">
    <h2 class="font-w400">@lang('generics.availability_lock')</h2>

    <div class="col-md-3 ml-auto text-right" style="padding: 1% 0;">
        <a class="btn btn-smirrow" href="{{route('offeror_blocks_availability.create', $offeror->id)}}">@lang('generics.add') <i class="fa fa-plus"></i></a>
    </div>

    <table class="table table-vcenter">
        <thead>
        <tr>
            <th class="d-none d-sm-table-cell">@lang('generics.id')</th>
            <th class="d-none d-sm-table-cell">@lang('generics.from_date')</th>
            <th class="d-none d-sm-table-cell">@lang('generics.to_date')</th>
            <th class="text-center" style="width: 100px;">@lang('generics.actions')</th>
        </tr>
        </thead>

        <tbody>
        @foreach($offeror->blocksAvailability as $blockAvailability)
            <tr>
                <th class="font-w600 font-size-sm">
                    {{$blockAvailability->id}}
                </th>

                <td class="font-w600 font-size-sm">
                    {{$blockAvailability->initial_date}}
                </td>

                <td class="font-w600 font-size-sm">
                    {{$blockAvailability->final_date}}
                </td>

                <td class="text-center">
                    <div class="btn-group">
                        <a href="{{route('offeror_blocks_availability.edit', $blockAvailability)}}">
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Client">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                            </button>
                        </a>

                        {!! Form::open(['route'=>['offeror_blocks_availability.destroy', $blockAvailability], 'method'=>'DELETE', 'role' => 'form']) !!}
                        <button type="button" class="btn btn-sm btn-light confirm-submit" data-toggle="tooltip" title="Remove Client">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
