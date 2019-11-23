@extends('layout.app')

@section('body')
        <div class="jumbotron bg-light">
             <div class="card border">
                    <div class="card-header">
                            <h5 class="card-title">Lista de Cliente</h5>
                        </div>
                <div class="card-body">
                    <table class="table table-ordered table-hover table-striped" id="tabelaClientes">
                       <thead>
                           <tr>
                               <th scope="col">ID</th>
                               <th scope="col">Nome</th>
                               <th scope="col">Endereço</th>
                               <th scope="col">Cidade</th>
                               <th scope="col">Estado</th>
                               <th scope="col">CPF</th>
                               <th scope="col">Telefone</th>
                               <th scope="col">E-mail</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($clientes as $c)
                            <tr>
                                <td>{{$c->id}} </td>
                                <td>{{$c->name}}</td>
                                <td>{{$c->adress}}</td>
                                <td>{{$c->city}}</td>
                                <td>{{$c->state}}</td>
                                <td>{{$c->cpf}}</td>
                                <td>{{$c->phone}}</td>
                                <td>{{$c->email}}</td>
                                <td>
                                <a href="/clientes/editar/{{$c->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/clientes/editar/{{$c->id}}" class="btn btn-sm btn-danger">Excluir</a>
                                </td>
                            </tr>                                  
                           @endforeach
                       </tbody>
                   </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div> 
@endsection
