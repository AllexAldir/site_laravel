@extends('layouts.main')


@section('title', 'Produtos')

@section('content')

  <h1>Criação de eventos</h1>
  <section class="content contanierform">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Formulário</h3>
      </div>
      <div class="card-body">
        <form action="{{url('/events')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Título Evento</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Enter ...">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" rows="3" id="descricao" name="descricao" placeholder="Escreva a descrição do evento" maxlength="100"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i>Cidade</label>
            <input type="text" class="form-control is-valid" id="cidade" name="cidade" placeholder="Informe a Cidade">
          </div>
          {{-- <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Checkbox</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" >
                  <label class="form-check-label">Checkbox checked</label>
                </div>
              </div>
            </div>
          </div> --}}
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Select</label>
                <select class="form-control" id="tipo_evento" name="tipo_evento">
                  <option value="P">Privado</option>
                  <option value="PU">Público</option>
                  <option value="O">Opcional</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <input type="checkbox" name="items[]" value="teste1"> Cadeira
              <input type="checkbox" name="items[]" value="teste1"> Banco
              <input type="checkbox" name="items[]" value="teste1"> Sofá

            </div>

            <div class="form-group">
              <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i>Data</label>
              <input type="date" class="form-control is-valid" id="date" name="date">
            </div>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </section>
@endsection
