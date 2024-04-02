<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaApiController extends Controller
{
    public function listarEmpresas()
    {
        $empresas = Empresa::orderBy('created_at','ASC')
        ->get();
        return $empresas;
    }
    public function listarEmpresa(string $id)
    {
        $empresa = Empresa::findOrFail($id);
        return $empresa;
    }
    public function criarEmpresa(Request $request)
    {
        $novaEmpresa = new Empresa();
        $novaEmpresa->nome = $request->nome;
        $novaEmpresa->save();
        $empresaCriada = $this->listarEmpresas();
        return [
            'mensagem' => 'Empreasa criada com sucesso',
            'dados' => $empresaCriada
        ];
    }
    public function deletarEmpresa(string $id)
    {
        $empresaParaDeletar = Empresa::find($id);
        $empresaParaDeletar->delete();
        return "Empresa deletada com sucesso";
    }
    public function atualizarEmpresa(Request $request, string $id)
    {
        $empresaParaAtualizar = Empresa::find($id);
        if(empty($empresaParaAtualizar))
        {
            $this->criarEmpresa($request);
        }
        $empresaParaAtualizar->update($request->all());
        $empresaAtualizada = $this->listarEmpresa($id);
        return [
            'mensagem' => 'Empresa atualizada com sucesso!',
            'dados'=> $empresaAtualizada,
        ];
    }
}
