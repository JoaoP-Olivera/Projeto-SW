@extends('layouts.main')
@section('title', 'Lista de Contatos | Todos os Contatos')
@section('conteudo')
<main class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
              <div class="card-header card-title">
                <div class="d-flex align-items-center">
                  <h2 class="mb-0">Todos os Contatos</h2>
                  <div class="ml-auto">
                    <a href="{{ route('contatos.criar') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Criar Contato</a>
                  </div>
                </div>
              </div>
            <div class="card-body">
              @include('contatos._filtro')
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                @if ($message = session('messagem'))

                    <div class="alert alert-success">{{ $messagem }}</div>

                @endif
                 @foreach ($contatos as $index => $contato )
                 <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $contato->nome }}</td>
                    <td>{{ $contato->sobrenome }}</td>
                    <td>{{ $contato->empresa->nome }}</td>
                    <td>{{ $contato->telefone }}</td>
                    <td>{{ $contato->celular }}</td>
                    <td width="150">
                        <a href="{{ route('contatos.mostar',$contato->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('contatos.atualizar',$contato->id ) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('contatos.deletar', $contato->id) }}" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                      </td>
                 </tr>
                 @endforeach
                </tbody>
              </table>
              {{$contatos->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </main >
@endsection
