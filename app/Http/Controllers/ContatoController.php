<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Empresa;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::MaisRecentes()->simplePaginate(10);
        $empresas = Empresa::orderBy('nome','ASC')->pluck('nome', 'id');
        return view('contatos.index', compact('contatos','empresas'));
    }
    public function listarContato(string $id)
    {
        $contato = Contato::findOrFail($id);
        return view('contatos.mostrar', compact('contato'));

    }
    public function criarContato()
    {
        $empresas = Empresa::orderBy('nome','ASC')->pluck('nome', 'id');
        return view('contatos.criar',compact('empresas'));
    }
    public function atualizarContato(string $id)
    {
        $contato = Contato::find($id);
        $empresas = Empresa::orderBy('nome')->pluck('nome', 'id');
        return view('contatos.atualizar', compact('contato','empresas'));

    }
    public function update( string $id, Request $request)
    {
        $contato = Contato::find($id);
        $contato->nome = $request->nome;
        $contato->sobrenome = $request->sobrenome;
        $contato->data_de_nascimento = $request->data_de_nascimento;
        $contato->telefone = $request->telefone;
        $contato->celular = $request->celular;
        $contato->email = $request->email;
        $contato->empresa_id = $request->empresa_id;
        $contato->save();
        return redirect()->route('contatos.home')->with('mensagem','Contato atualizado com sucesso');
    }
    public function deletarContato(string $id)
    {

    }
    public function salvar(Request $request)
    {
        $contato = new Contato();
        $contato->nome = $request->nome;
        $contato->sobrenome = $request->sobrenome;
        $contato->data_de_nascimento = $request->data_de_nascimento;
        $contato->telefone = $request->telefone;
        $contato->celular = $request->celular;
        $contato->email = $request->email;
        $contato->empresa_id = $request->empresa_id;
        $contato->save();
        return redirect()->route('contatos.home')->with('mensagem','Contato criado com sucesso');
    }
}
