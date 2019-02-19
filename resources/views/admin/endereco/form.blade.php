<div class="form-group {{ $errors->has('endere�o') ? 'has-error' : ''}}">
    {!! Form::label('endere�o', 'Endere?o', ['class' => 'control-label']) !!}
    {!! Form::text('endere�o', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('endere�o', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_pessoa') ? 'has-error' : ''}}">
    {!! Form::label('id_pessoa', 'Id Pessoa', ['class' => 'control-label']) !!}
    {!! Form::number('id_pessoa', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('id_pessoa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
