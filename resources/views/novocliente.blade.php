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
                            Cadastro de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="cliente" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name"> Nome do  Cliente </label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Nome do Cliente">
                            </div>
                            <div class="form-group">
                                <label for="adress"> Endereço </label>
                                <input type="text" id="adress" class="form-control" name="adress" placeholder="Endereço">
                            </div>
                            <div class="form-group">
                                <label for="city"> Cidade </label>
                                <input type="text" id="city" class="form-control" name="city" placeholder="Cidade">
                            </div>
                            <div class="form-group">
                                <label for="state"> Estado </label>
                                <input type="text" id="state" class="form-control" name="state" placeholder="Estado">
                            </div>
                            <div class="form-group">
                                <label for="cpf"> Cpf </label>
                                <input type="text" id="cpf" class="form-control" name="cpf" placeholder="CPF do Cliente">
                            </div>
                            <div class="form-group">
                                <label for="phone"> Telefone </label>
                                <input type="text" id="phone" class="form-control" name="phone" placeholder="Número de Telefone">
                            </div>
                            <div class="form-group">
                                <label for="email"> E-mail </label>
                                <input type="text" id="email" class="form-control" name="email" placeholder="@">
                            </div> 
                            <button type="submit" class="btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn-danger btn-sm">Cancelar</button>
                        </form>
                    </div>
@if($errors->any())
                    <div class="card-footer">
    @foreach($errors->all() as $error) 
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
    @endforeach

                    </div>
@endif
                </div>
            </div>
        </div>    
    </main>

    @if(isset($errors))
    {{ var_dump($errors) }}
    @endif

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>