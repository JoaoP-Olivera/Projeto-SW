<?php
namespace App\Scopes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class FiltroScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if($empresa_id = request('empresa_id'))
        {
            $builder->where('empresa_id',$empresa_id);
        }
        if($pesquisar = request('pesquisar'))
        {
            $builder->where('nome', 'LIKE', "%{$pesquisar}%");
            $builder->where('sobrenome', 'LIKE', "%{$pesquisar}%");
            $builder->orwhere('telefone', 'LIKE', "%{$pesquisar}%");
            $builder->orwhere('celular', 'LIKE', "%{$pesquisar}%");
            $builder->orwhere('email', 'LIKE', "%{$pesquisar}%");
        }
    }
}







?>
