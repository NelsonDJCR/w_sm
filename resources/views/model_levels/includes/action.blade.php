<div class="btn-group">
    <a href="{{route('model-levels.edit',['model_levels'=>$model_levels])}}" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="Editar" data-original-title="Edit" aria-describedby="tooltip796058">
        <i class="fa fa-fw fa-pencil-alt"></i>
    </a>

    {!! Form::open(['route'=>['model-levels.destroy', $model_levels->id], 'method'=>'DELETE', 'role' => 'form']) !!}
        <button type="submit" class="btn btn-sm btn-light js-tooltip-enabled confirm-submit" data-toggle="tooltip" title="" data-original-title="Remove Level">
            <i class="fa fa-fw fa-times"></i>
        </button>
    {!! Form::close() !!}
</div>


