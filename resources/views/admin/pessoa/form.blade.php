{{--<div class="form-group ">--}}
    {{--{!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}--}}
    {{--<input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome"--}}
           {{--value="{{ old('nome') }}" required autofocus>--}}
    {{--@if ($errors->has('nome'))--}}
        {{--<span class="invalid-feedback" role="alert">--}}
          {{--<strong>{{ $errors->first('nome') }}</strong>--}}
        {{--</span>--}}
    {{--@endif--}}
{{--</div>--}}
{{--<div class="form-group ">--}}
    {{--{!! Form::label('sobrenome', 'Sobrenome', ['class' => 'control-label']) !!}--}}
    {{--<input id="sobrenome" type="text" class="form-control{{ $errors->has('sobrenome') ? ' is-invalid' : '' }}"--}}
           {{--name="sobrenome" value="{{ old('sobrenome') }}" required autofocus>--}}
    {{--@if ($errors->has('sobrenome'))--}}
        {{--<span class="invalid-feedback" role="alert">--}}
          {{--<strong>{{ $errors->first('sobrenome') }}</strong>--}}
        {{--</span>--}}
    {{--@endif--}}
{{--</div>--}}
{{--<div class="form-group ">--}}
    {{--{!! Form::label('titulacao', 'Titulacao', ['class' => 'control-label']) !!}--}}
    {{--<input id="titulacao" type="text" class="form-control{{ $errors->has('titulacao') ? ' is-invalid' : '' }}"--}}
           {{--name="titulacao" value="{{ old('titulacao') }}" required autofocus>--}}
    {{--@if ($errors->has('titulacao'))--}}
        {{--<span class="invalid-feedback" role="alert">--}}
          {{--<strong>{{ $errors->first('titulacao') }}</strong>--}}
        {{--</span>--}}
    {{--@endif--}}
{{--</div>--}}
{{--<div class="form-group ">--}}
    {{--{!! Form::label('cpf', 'Cpf', ['class' => 'control-label']) !!}--}}
    {{--<input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" maxlength="11"--}}
           {{--value="{{ old('cpf') }}" required autofocus>--}}
    {{--@if ($errors->has('cpf'))--}}
        {{--<span class="invalid-feedback" role="alert">--}}
          {{--<strong>{{ $errors->first('cpf') }}</strong>--}}
        {{--</span>--}}
    {{--@endif--}}
{{--</div>--}}
{{--<div class="form-group ">--}}
    {{--{!! Form::label('rg', 'Rg', ['class' => 'control-label']) !!}--}}
    {{--<input id="rg" type="text" class="form-control{{ $errors->has('rg') ? ' is-invalid' : '' }}" name="rg" maxlength="10"--}}
           {{--value="{{ old('rg') }}" required autofocus>--}}
    {{--@if ($errors->has('rg'))--}}
        {{--<span class="invalid-feedback" role="alert">--}}
          {{--<strong>{{ $errors->first('rg') }}</strong>--}}
        {{--</span>--}}
    {{--@endif--}}
{{--</div>--}}

<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
{!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
{!! Form::text('nome', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
{!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sobrenome') ? 'has-error' : ''}}">
{!! Form::label('sobrenome', 'Sobrenome', ['class' => 'control-label']) !!}
{!! Form::text('sobrenome', null, ('true' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
{!! $errors->first('sobrenome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('titulacao') ? 'has-error' : ''}}">
{!! Form::label('titulacao', 'Titulacao', ['class' => 'control-label']) !!}
{!! Form::text('titulacao', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
{!! $errors->first('titulacao', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cpf') ? 'has-error' : ''}}">
{!! Form::label('cpf', 'Cpf', ['class' => 'control-label']) !!}
{!! Form::number('cpf', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
{!! $errors->first('cpf', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rg') ? 'has-error' : ''}}">
{!! Form::label('rg', 'Rg', ['class' => 'control-label']) !!}
{!! Form::text('rg', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
{!! $errors->first('rg', '<p class="help-block">:message</p>') !!}
</div>
{{--<div class="form-group {{ $errors->has('id_user') ? 'has-error' : ''}}">--}}
{{--{!! Form::label('id_user', 'Id User', ['class' => 'control-label']) !!}--}}
{{--{!! Form::number('id_user', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}--}}
{{--{!! $errors->first('id_user', '<p class="help-block">:message</p>') !!}--}}
{{--</div>--}}


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
