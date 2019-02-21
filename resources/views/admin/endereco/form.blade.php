<div class="form-group {{ $errors->has('endereco') ? 'has-error' : ''}}">
    {!! Form::label('endereco', 'Endereco', ['class' => 'control-label']) !!}
    {!! Form::text('endereco', null, ['class' => 'form-control', 'required' => 'required'])!!}
    {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pessoas') ? 'has-error' : ''}}">
    {!! Form::label('Pessoa', 'Pessoa', ['class' => 'control-label']) !!}
    {!! Form::select('id_pessoa', $pessoas,null,['class' => 'form-control', 'placeholder' => 'Escolha uma pessoa',  'required' => 'required']) !!}
    {!! $errors->first('pessoas', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
