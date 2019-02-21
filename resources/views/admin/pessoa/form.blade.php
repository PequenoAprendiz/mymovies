<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
{!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
{!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required'])!!}
{!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sobrenome') ? 'has-error' : ''}}">
{!! Form::label('sobrenome', 'Sobrenome', ['class' => 'control-label']) !!}
{!! Form::text('sobrenome', null,['class' => 'form-control', 'required' => 'required']) !!}
{!! $errors->first('sobrenome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('titulacao') ? 'has-error' : ''}}">
{!! Form::label('titulacao', 'Titulacao', ['class' => 'control-label']) !!}
{!! Form::text('titulacao', null,['class' => 'form-control', 'required' => 'required']) !!}
{!! $errors->first('titulacao', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cpf') ? 'has-error' : ''}}">
{!! Form::label('cpf', 'Cpf', ['class' => 'control-label']) !!}
{!! Form::number('cpf', null,['class' => 'form-control', 'required' => 'required'] )!!}
{!! $errors->first('cpf', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rg') ? 'has-error' : ''}}">
{!! Form::label('rg', 'Rg', ['class' => 'control-label']) !!}
{!! Form::text('rg', null,['class' => 'form-control', 'required' => 'required']) !!}
{!! $errors->first('rg', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
