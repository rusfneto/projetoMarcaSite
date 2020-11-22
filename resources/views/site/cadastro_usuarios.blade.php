@extends('site.master.layout')
@section('title','Cadastrar Usuários')
@section ('content')
<form method="POST" action="{{ route('site.importar_usuario') }}">
<br>
{!! csrf_field() !!}
<div class="container py-5">
<div class="row">
<h2 class='text-danger'>Cadastro de Usuários</h2>
</div>
  <div class="row">
    <div class="col"><input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nome do Usuário" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror</div>
    <div class="col"><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror</div>
    <div class="w-100"></div><br>
    <div class="col">
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" required autocomplete="new-password">
<p class='text-danger'>Mínimo 8 caracteres obrigatórios.</p>
@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror</div>
    <div class="col"><input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmação de senha" required autocomplete="new-password"><p class='text-danger'>Mínimo 8 caracteres obrigatórios.</p></div>
  </div>
</div>
<!-- criado em atualizado em -->
<input type="hidden" name="created_at" value="{{date('Y-m-d h:i:s')}}"></input>
<input type="hidden" name="updated_at" value="{{date('Y-m-d h:i:s')}}"></input>
<div class="col-lg"><center><input type="submit" class="btn btn-danger btn-lg" value="CADASTRAR USUÁRIO"></input></center></div>
</form>
@endsection