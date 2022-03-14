@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-primary">CREAR RUTA</div>
                        <div class="card-body">
                            <form action="{{ route('travels.store') }}" method="post">

                                @csrf

                                @include('app.routes.routes.form');

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
