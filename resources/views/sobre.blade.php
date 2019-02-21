@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"> Detalhes da aplicação</div>

                    <div class="card-body">


                        <ul class="container-fluid">
                            <li role="presentation">
                                Sistema de Loguin do Próprio framework
                            </li>
                            <br>
                            <li role="presentation">
                                Crud para entidade Pessoa
                            </li>
                            <br>
                            <li role="presentation">
                                Crud para entidade Endereço, esta é possivel cadastrar vários endereços para a mesma
                                pessoa.
                            </li>
                            <br>
                            <li role="presentation">
                                Crud para entidade Filmes Favoritos, esta é possivel cadastrar vários Filmes para a
                                mesma pessoa.

                            </li>
                            <br>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
