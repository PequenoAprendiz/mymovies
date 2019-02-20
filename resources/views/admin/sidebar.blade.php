<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="container-fluid">
                <li role="presentation">
                    <a href="{{ url('/') }}"> Home </a>
                </li>
                <br>
                <li role="presentation">
                    <a href="{{ url('admin/pessoa') }}"> Pessoas </a>
                </li>
                <br>
                <li role="presentation">
                    <a href="{{ url('admin/endereco') }}"> Endereços </a>
                </li>
                <br>
                <li role="presentation">
                    <a href="{{ url('admin/filme_favorito') }}"> Filmes </a>
                </li>
                <br>
                <li role="presentation">
                    <a href="{{ url('/sobre') }}"> Sobre </a>
                </li>
                </br>
            </ul>
        </div>
    </div>
</div>
