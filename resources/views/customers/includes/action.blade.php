<div class="btn-group">
    {!! Form::open(['route'=>['customers.destroy',$customer->id], 'method'=>'DELETE', 'role' => 'form']) !!}

    <a href = "{{route('customers.show', ['customer'=>$customer])}}" class="btn btn-sm btn-outline-secondary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit" aria-describedby="tooltip796058">
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{route('customers.edit',['customer'=>$customer])}}" class="btn btn-sm btn-outline-secondary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit" aria-describedby="tooltip796058">
        <i class="fa fa-fw fa-pencil-alt"></i>
    </a>
    <button type="submit" class="btn btn-sm btn-outline-danger js-tooltip-enabled confirm-submit" data-toggle="tooltip" title="" data-original-title="Remove Client">
        <i class="fa fa-fw fa-times"></i>
    </button>
    {!! Form::close() !!}
</div>
