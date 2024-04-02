<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>Criar Novo Contato</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="first_name" class="col-md-3 col-form-label">Nome</label>
                    <div class="col-md-9">
                      <input type="text" name="nome" id="nomeid" class="form-control is-invalid">
                      <div class="invalid-feedback">
                        Insira o seu nome
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="last_name" class="col-md-3 col-form-label">Sobrenome</label>
                    <div class="col-md-9">
                      <input type="text" name="sobrenome" id="sobrenomeid" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                      <input type="text" name="email" id="email" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phone" class="col-md-3 col-form-label">Telefone</label>
                    <div class="col-md-9">
                      <input type="text" name="telefone" id="telefoneid" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phone" class="col-md-3 col-form-label">Celular</label>
                    <div class="col-md-9">
                      <input type="text" name="celular" id="celularid" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phone" class="col-md-3 col-form-label">Data de Nascimento</label>
                    <div class="col-md-9">
                      <input type="date" name="data_de_nascimento"  id="data_de_nascimentoid" class="form-control" value="">
                      <option value="yyyy-mm-dd">
                      <option value="yyyy-mm-dd">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="company_id" class="col-md-3 col-form-label">Empresas</label>
                    <div class="col-md-9">
                      <select name="empresa_id" id="empresa_id" class="form-control">
                        @foreach ($empresas as $id => $nome)
                         <option value="{{ $id }}">{{ $nome }}</option>
                        @endforeach

                      </select>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Criar</button>
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
