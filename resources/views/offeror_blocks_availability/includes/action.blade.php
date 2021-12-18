<div class="btn-group">

    {!! Form::open(['route'=>['offeror_blocks_availability.destroy',$offerorBlocksAvailability->id], 'method'=>'DELETE', 'role' => 'form']) !!}
    <a href="{{route('offeror_blocks_availability.edit',['offerorBlocksAvailability'=>$offerorBlocksAvailability])}}" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit" aria-describedby="tooltip796058">
        <i class="fa fa-fw fa-pencil-alt"></i>
    </a>
    <button type="submit" class="btn btn-sm btn-light js-tooltip-enabled confirm-submit" data-toggle="tooltip" title="" data-original-title="Remove Client">
        <i class="fa fa-fw fa-times"></i>
    </button>
    {!! Form::close() !!}
</div>

