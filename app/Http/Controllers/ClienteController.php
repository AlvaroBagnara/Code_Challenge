<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Endereco;

define ('CLIENTE_PATH','/cliente');

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $search = request('search');

        if($search){
            $clientes = Cliente::where([
                ['nome','like','%'.$search.'%']
            ])->get();
        }else{
            $clientes = Cliente::all();
        }
        

        return view('cliente.index',['clientes' => $clientes, 'search' => $search]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $cliente = new Cliente;
        $endereco = new Endereco;
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->telefone = $request->telefone;
        $cliente->sexo = $request->sexo;

        $endereco->logradouro = $request->logradouro;
        $endereco->bairro = $request->bairro;
        $endereco->numero = $request->numero;
        $endereco->cep = $request->cep;
        $endereco->estado = $request->estado;
        $endereco->cidade = $request->cidade;

        $cliente->save();
        $endereco->id_cliente = $cliente->id;
        $endereco->save();

        return redirect(CLIENTE_PATH)->with('msg','Cliente criado com sucesso!');
    }
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.show',['cliente' => $cliente,'endereco'=>$cliente->endereco]);
    }
    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();
        return redirect(CLIENTE_PATH)->with('msg','Cliente excluido com Sucesso!');
    }
    public function edit(Request $request)
    {
        $cliente = Cliente::findOrFail($request->id);
        return view('cliente.edit',['cliente' => $cliente]);
    }
    public function update(Request $request)
    {
        Cliente::findOrFail($request->id)->update(
            ['nome'=>$request->nome,
            'email'=>$request->email,
            'telefone'=>$request->telefone,
            'sexo'=>$request->sexo]
        );
        Endereco::findOrFail($request->id)->update(
            ['logradouro'=>$request->logradouro,
            'bairro'=>$request->bairro,
            'numero'=>$request->numero,
            'cep'=>$request->cep,
            'estado'=>$request->estado,
            'cidade'=>$request->cidade]
        );
        
        return redirect(CLIENTE_PATH)->with('msg','Cliente Atualizado com Sucesso!');
    }
    public function home()
    {
        return view('home');
    }
}
