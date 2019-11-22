<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regas= [
            
            'name' => 'required|min:3|max:25',
            'cpf' => 'required|min:11|max:11|unique:clientes',
            'phone'=> 'required|min:9|max:12',
            'email'=> 'required|email'
        ];

        $mensagens = [

            'required' => 'O campo :attribute é obrigatório.',
            'nome.min' => 'O nome não poder ter menos que 3 letras.',
            'nome.max' => 'O nome não pode ter mais que 25 letras.',
            'cpf.min' => 'O CPF não pode ter menos que 11 dígitos.',
            'cpf.max' => 'O CPF não pode ter mais que 11 dígitos. Não é necessario colocar pontos e traços.',
            'cpf.unique' => 'Esse CPF já existe.',
            'phone.min' => 'Número de telefone muito curto. Verifique o se número está correto.',
            'phone.max' => 'Número de telefone muito longo. Verifique o se o número está correto.',
            'email.email' => 'Digite um E-mail valido.'

        ];

        $request ->validate($regas, $mensagens);

        /*
        $request->validate([
            'name' => 'required|min:3|max:25',
            'cpf' => 'required|min:11|max:11|unique:clientes',
            'phone'=> 'min:9|max:12',
            'email'=> 'email'
        ]); */

        $cliente = new Cliente();
        $cliente->name = $request->input('name');
        $cliente->adress = $request->input('adress');
        $cliente->city = $request->input('city');
        $cliente->state = $request->input('state');
        $cliente->cpf = $request->input('cpf');
        $cliente->phone = $request->input('phone');
        $cliente->email = $request->input('email');
        $cliente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
