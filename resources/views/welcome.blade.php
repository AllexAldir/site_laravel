@extends('layouts.main')


@section('title', 'Produtos')

@section('content')


<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Eventos</h3>
          </div>
          <div class="card-body">
            @if (count($arr) == 0)
              <p>Não possui dados</p>
            @endif
            @foreach ($arr as $registro)

              <div class="row mt-4">
                <div class="col-sm-4"> {{--Aqui para cada registro cria uma imagem--}}
                  <div class="position-relative">
                    <img src="../../dist/img/photo1.png" alt="{{$registro->titulo}}" class="img-fluid">
                    <div class="ribbon-wrapper ribbon-lg">
                      {{-- <div class="ribbon bg-success text-lg">
                        Ribbon
                      </div> --}}
                    </div>
                  </div>
                </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
