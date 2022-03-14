@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">CREAR PARADA SEGUN RUTAS</div>
                        <div class="card-body">
                            <form action="{{ route('haul.store') }}" method="POST">

                                @csrf

                                @include('app.haul.form')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
