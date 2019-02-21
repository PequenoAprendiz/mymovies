<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    {!! Form::label('titulo', 'Titulo', ['class' => 'control-label']) !!}
    {!! Form::text('titulo', null,['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ano') ? 'has-error' : ''}}">
    {!! Form::label('ano', 'Ano', ['class' => 'control-label']) !!}
    {!! Form::text('ano', null, ['class' => 'form-control', 'required' => 'required'] ) !!}
    {!! $errors->first('ano', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('diretor') ? 'has-error' : ''}}">
    {!! Form::label('diretor', 'Diretor', ['class' => 'control-label']) !!}
    {!! Form::text('diretor', null,['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('diretor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pessoas') ? 'has-error' : ''}}">
    {!! Form::label('Pessoa', 'Pessoa', ['class' => 'control-label']) !!}
    {!! Form::select('id_pessoa', $pessoas, null,['class' => 'form-control', 'placeholder' => 'Escolha uma pessoa',  'required' => 'required']) !!}
    {!! $errors->first('pessoas', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
