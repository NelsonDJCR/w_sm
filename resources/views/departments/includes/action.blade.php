<div class="btn-group">

    <a href="{{route('departments.edit',['city'=>$department])}}" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit" aria-describedby="tooltip796058">
        <i class="fa fa-fw fa-pencil-alt"></i>
    </a>
    {!! Form::open(['route'=>['departments.destroy',$department->id], 'method'=>'DELETE', 'role' => 'form']) !!}
    <button type="submit" class="btn btn-sm btn-light js-tooltip-enabled confirm-submit" data-toggle="tooltip" title="" data-original-title="Remove register">
        <i class="fa fa-fw fa-times"></i>
    </button>
    {!! Form::close() !!}
</div>


