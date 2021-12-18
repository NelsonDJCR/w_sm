<div class="btn-group">
    {!! Form::open(['route'=>['document-validates.destroy',$documentValidate->id], 'method'=>'DELETE', 'role' => 'form']) !!}
    <a href="{{route('document-validates.edit',['documentValidate'=>$documentValidate])}}" class="btn btn-sm btn-smirrow js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit" aria-describedby="tooltip796058">
        <i class="fa fa-fw fa-pencil-alt"></i>
    </a>
    <button type="submit" class="btn btn-sm btn-smirrow js-tooltip-enabled confirm-submit" data-toggle="tooltip" title="" data-original-title="Remove Client">
        <i class="fa fa-fw fa-times"></i>
    </button>
    {!! Form::close() !!}
</div>
