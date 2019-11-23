@extends('layout.app')

@section('body')
<div class="jumbotron bg-light">
<div class="row">
        <div class="container col-md-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <h5 class="card-title">Novo Cliente</h5>
                </div>
                <div class="card-body">
                    <form action="cliente" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name"> Nome do  Cliente </label>
                            <input type="text" id="name" 
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" 
                                    name="name" placeholder="Nome do Cliente">
@if(($errors->has('name')))
                            <div class="invalid-feedback">
{{ $errors-> first('name') }}

                            </div>
@endif
                        </div>
                            <div class="form-group">
                                <label for="adress"> Endereço </label>
                                <input type="text" id="adress" 
                                        class="form-control" 
                                        name="adress" placeholder="Endereço">
                            </div>
                        

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="city"> Cidade </label>
                                     <input type="text" id="city" 
                                            class="form-control" 
                                            name="city" placeholder="Cidade">
                                </div>
                            </div>

                            <div class="col col-md-2">
                                <div class="form-group">
                                    <label for="state"> Estado </label>
                                    <input type="text" id="state" 
                                            class="form-control" 
                                            name="state" placeholder="UF">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="cpf"> CPF </label>
                                    <input type="text" id="cpf"
                                            class="form-control {{ $errors->has('cpf') ? 'is-invalid' : ''}}" 
                                            name="cpf" placeholder="CPF do Cliente">
@if(($errors->has('cpf')))
                                <div class="invalid-feedback">
{{ $errors-> first('cpf') }}

                                </div>
@endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="phone"> Telefone </label>
                                    <input type="text" id="phone" 
                                            class="form-control {{ $errors->has('phone') ? 'is-invalid' : ''}}" 
                                            name="phone" placeholder="Número de Telefone">
@if(($errors->has('phone')))
                                <div class="invalid-feedback">
{{ $errors-> first('phone') }}

                                </div>
@endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email"> E-mail </label>
                            <input type="text" id="email" 
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" 
                                    name="email" placeholder="@">
@if(($errors->has('email')))
                            <div class="invalid-feedback">
{{ $errors-> first('email') }}

                            </div>
@endif
                        </div> 
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <button type="cancel" class="btn  btn-danger btn-sm">Cancelar</button>
                    </form>
                </div>
                <div class="card-footer"></div>
            </div>
            </div>
        </div>
    </div>  
@endsection
