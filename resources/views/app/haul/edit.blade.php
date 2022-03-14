@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary">EDITAR RUTA</div>
                        <div class="card-body">
                            <form action="{{ route( 'safra'.$salida->id ) }}" method="post">

                                @csrf

                                {{ method_field('PATCH') }}

                                @include('app.safra.form');

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
