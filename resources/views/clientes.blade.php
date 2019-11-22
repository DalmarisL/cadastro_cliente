<html>
<header>
    <title> Cadastro de Clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
    body{
        padding: 20px;
    }
    </style>
</header>
<body>
    <main>
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Lista de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                       <table class="table table-bordered table-hover" id="tabelaClientes">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Nome</th>
                                   <th>Endereço</th>
                                   <th>Cidade</th>
                                   <th>Estado</th>
                                   <th>CPF</th>
                                   <th>Telefone</th>
                                   <th>E-mail</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($clientes as $c)
                                <tr>
                                    <td>{{$c->id}}</td>
                                    <td>{{$c->name}}</td>
                                    <td>{{$c->adress}}</td>
                                    <td>{{$c->city}}</td>
                                    <td>{{$c->state}}</td>
                                    <td>{{$c->cpf}}</td>
                                    <td>{{$c->phone}}</td>
                                    <td>{{$c->email}}</td>

                                </tr>                                  
                               @endforeach
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>    
    </main>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>