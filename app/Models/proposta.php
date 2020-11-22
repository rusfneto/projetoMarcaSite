<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proposta extends Model
{
    protected $fillable = array('listcliente', 'enderecodaobra', 'tiposervico', 'propostaem', 'valortotal', 'valorsinal', 'qtdparcelas', 'valorparcelas','datainiciopg', 'dataparcelas', 'status');
    
    public function localizarproposta($filtro = null){
        $results = $this->where(function ($query) use ($filtro){
            if($filtro){
                $query->where('listcliente', '=', $filtro);
                $query->orWhere('propostaem', '=', $filtro);
                $query->orWhere('status', '=', $filtro);
                //$query->where('propostaem', '=', $filtro);
                //$query->where('status', '=', $filtro);
            }
        })//->toSql();
       ->paginate();
        return $results;
    }
}
