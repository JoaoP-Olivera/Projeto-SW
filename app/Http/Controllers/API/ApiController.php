<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;

class ApiController extends Controller
{
    public function listarContatos()
    {
        $contatos = Contato::orderBy('created_at','DESC')
        ->take(10)
        ->get();
        return $contatos;

    }
    public function listarContato(string $id)
    {
        $contato = Contato::findOrFail($id);
        return $contato;
    }
    public function criarContato(Request $request)
    {
        $novoContato = new Contato();
        $novoContato->nome = $request->nome;
        $novoContato->sobrenome = $request->sobrenome;
        $novoContato->data_de_nascimento = $request->data_de_nascimento;
        $novoContato->telefone = $request->telefone;
        $novoContato->celular = $request->celular;
        $novoContato->email = $request->email;
        $novoContato->empresa_id = $request->empresa_id;
        $contatoCriado = $this->listarContatos();
        return [
            'mensagem' => 'Contato criado com sucesso',
            'dados' => $contatoCriado
        ];
    }
    public function deletarContato(string $id)
    {
        $contatoParaDeletar = Contato::find($id);
        $contatoParaDeletar->delete();
        return "Contato deletado com sucesso";
    }
    public function atualizarContato(Request $request, string $id)
    {
        $contatoParaAtualizar = Contato::find($id);
        if(empty($contatoParaAtualizar))
        {
            $this->criarContato($request);
        }
        $contatoParaAtualizar->update($request->all());
        $contatoAtualizado = $this->listarContato($id);
        return [
            'mensagem' => 'Contato atualizado com sucesso!',
            'dados'=> $contatoAtualizado
        ];
    }

}
