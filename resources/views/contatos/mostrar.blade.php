@extends('layouts.main')
@section('conteudo')
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Contato em detalhes</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="first_name" class="col-md-3 col-form-label">Nome</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $contato->nome }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="last_name" class="col-md-3 col-form-label">Sobrenome</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $contato->sobrenome }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $contato->email }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phone" class="col-md-3 col-form-label">Telefone</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $contato->telefone }}</p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label">Celular</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $contato->celular }}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="company_id" class="col-md-3 col-form-label">Empresa</label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $contato->empresa->nome }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{ route('contatos.atualizar', $contato->id) }}" class="btn btn-info">Editar</a>
                        <a href="" class="btn btn-outline-danger">Deletar</a>
                        <a href="{{ route('contatos.home') }}" class="btn btn-outline-secondary">Cancelar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
