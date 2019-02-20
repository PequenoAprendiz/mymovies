@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        Aplicação Desenvolvida com apoio das seguintes packages:
                        <a href="https://github.com/appzcoder/crud-generator"> Crud Generator</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
