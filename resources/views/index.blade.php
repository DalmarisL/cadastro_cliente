@extends('layout.app')

@section('body')
<div class="jumbotron bg-light">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Clientes</h5>
                    <p class="card-text">
                        Aqui você pode cadastrar um novo cliente.
                    </p>
                    <a href="/novocliente" class="btn btn-primary btn-sm">Novo cliente</a>
                </div>
            </div>
        </div>
        
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Listar Clientes</h5>
                        <p class="card-text">
                            Aqui você pode visuzlizar seus clientes.
                        </p>
                        <a href="/" class="btn btn-primary btn-sm">Listar Clientes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection