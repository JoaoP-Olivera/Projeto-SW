<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
      <div class="row">
        <div class="col">
          <select class="custom-select">
            <option value="">Todas as empresas</option>
            @foreach ($empresas as $id => $nome )
            <option {{ $id == request('empresas_id') ? 'selected' : '' }}  value="{{ $id }}">{{ $nome }}</option>
            @endforeach
          </select>
        </div>
        <div class="col">
          <div class="input-group mb-3">
            <input type="text" name="pesquisar" class="form-control" value="{{ request('pesquisar') }}" placeholder="Pesquisar..." aria-label="Search..." aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-refresh"></i>
                  </button>
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
