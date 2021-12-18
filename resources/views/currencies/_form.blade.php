<div class="form-group">
    {!! Form::label('name', __('generics.name')) !!}
    {!! Form::text('name',$currency->name,['class'=>'form-control', 'placeholder'=>__('generics.name'), 'required' => 'required']) !!}
</div>


<div class="form-group">
    {!! Form::label('code', __('generics.code')) !!}
    {!! Form::text('code',$currency->code,['class'=>'form-control', 'placeholder'=>__('generics.code'), 'required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('symbol', __('generics.symbol')) !!}
    {!! Form::text('symbol',$currency->symbol,['class'=>'form-control', 'placeholder'=>__('generics.code'), 'required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', __('generics.description')) !!}
    {!! Form::text('description',$currency->description,['class'=>'form-control', 'placeholder'=>__('generics.description')]) !!}
</div>

<div class="form-group">
    <div class="custom-control custom-switch custom-control-lg mb-2">
        {!! Form::checkbox('state', 1, $currency->state, ['class'=>'custom-control-input', 'checked', 'id'=>'state']) !!}
        {!! Form::label('state', __('generics.state'), ['class' => 'custom-control-label']) !!}
    </div>
</div>

<div class="form-group pull-right">
    <a href="{{route('currencies.index')}}">
        <button type="button" class="btn btn-secondary btn-sm">
            @lang('generics.cancel')
        </button>
    </a>
    {!! Form::submit('Guardar', ['class' => 'btn btn-smirrow btn-sm']) !!}
</div>

