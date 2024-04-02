<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contato extends Model
{
    use HasFactory;
    protected $table = 'contato';
    protected $guarded = ['created_at','updated_at'];
    protected $fillable = ['nome','sobrenome','data_de_nascimento','telefone','celular','email'];

    public function empresa():BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }
    public function scopeMaisRecentes(Builder $query)
    {
        return $query->orderBy('created_at', 'ASC');
    }

}
