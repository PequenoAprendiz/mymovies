<div class="form-group {{ $errors->has('endereço') ? 'has-error' : ''}}">
    {!! Form::label('endereço', 'Endere?o', ['class' => 'control-label']) !!}
    {!! Form::text('endereço', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('endereço', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_pessoa') ? 'has-error' : ''}}">
    {!! Form::label('id_pessoa', 'Id Pessoa', ['class' => 'control-label']) !!}
    {!! Form::number('id_pessoa', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('id_pessoa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
