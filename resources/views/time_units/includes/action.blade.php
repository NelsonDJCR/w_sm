<div class="btn-group">

    <a href="{{route('time_units.edit',['timeUnit'=>$timeUnit])}}" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="Editar" data-original-title="Edit" aria-describedby="tooltip796058">
        <i class="fa fa-fw fa-pencil-alt"></i>
    </a>
    {!! Form::open(['route'=>['time_units.destroy',$timeUnit->id], 'method'=>'DELETE', 'role' => 'form']) !!}
    <button type="submit" class="btn btn-sm btn-light js-tooltip-enabled confirm-submit" data-toggle="tooltip" title="" data-original-title="Remove Client">

        <i class="fa fa-fw fa-times"></i>
    </button>
    {!! Form::close() !!}
</div>