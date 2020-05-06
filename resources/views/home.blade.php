@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            <div class = "card">
                <div class = "card-header">Pregunta</div>
                <div class = "card-body">
                    <form action="">
                        <div class="radio">
                            <label><input type="radio" name="optradio">Respuesta 1</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">Respuesta 2</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">Respuesta 3</label>
                          </div>
                        <button type="submit" class="btn-sm btn-primary">Enviar</button>
                    </form>
                </div>
                    
            </div>
            

        </div>
    </div>
</div>
@endsection
