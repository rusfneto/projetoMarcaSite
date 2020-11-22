@extends('site.master.layout')
@section('title','Editar Propostas')
@section ('content')
<div class="container py-5">
<br>
<div class="row"><h2 class='text-danger'>Editar Proposta Nº {{$propo->id}}</h2></div>
<form action="{{ route('site.updateproposta', $propo->id) }}" method="post">
@csrf
<div class="row">
<div class="col">Nome do Cliente<input class="form-control" type="text" name="listcliente" disabled="disabled" value="{{$propo->listcliente}}"></input></div>
<div class="w-100"></div><br>
<div class="col">Endereço da Obra<input class="form-control" type="text" name="enderecodaobra" value="{{$propo->enderecodaobra}}"></input></div>
<div class="col">Tipo de Serviço<input class="form-control" type="text" name="tiposervico" value="{{$propo->tiposervico}}"></input></div>
<div class="w-100"></div><br>
<div class="col">Data da Proposta<input class="form-control" type="text" name="propostaem" value="{{$propo->propostaem}}"></input></div>
<div class="col">Valor Total da Obra<input class="form-control" type="text" name="valortotal" value="{{$propo->valortotal}}"></input></div>
<div class="col">Valor de Sinal<input class="form-control" type="text" name="valorsinal" value="{{$propo->valorsinal}}"></input></div>
<div class="w-100"></div><br>
<div class="col">Quantidade de Parcelas<input class="form-control" type="text" name="qtdparcelas" value="{{$propo->qtdparcelas}}"></input></div>
<div class="col">Valor das Parcelas<input class="form-control" type="text" name="valorparcelas" value="{{$propo->valorparcelas}}"></input></div>
<div class="w-100"></div><br>
<div class="col">Data de Início do Pagamento<input class="form-control" type="text" name="datainiciopg" value="{{$propo->datainiciopg}}"></input></div>
<div class="w-100"></div><br>
<div class="col">Data das Parcelas<input class="form-control" type="text" name="dataparcelas" value="{{$propo->dataparcelas}}"></input></div>
<div class="col">Situação<select name="status" class="form-control">
    <option value="Em aberto">Em aberto</option>
    <option value="Fechado">Fechado</option>
    </select></div>

</div>
<br><div class="col-lg"><center><input type="submit" class="btn btn-danger btn-lg" value="ATUALIZAR PROPOSTA Nº {{$propo->id}}"></input></center></div>
</form>
</div>