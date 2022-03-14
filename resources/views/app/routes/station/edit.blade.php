@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary">EDITAR TERMINAL</div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                {{ method_field('PATCH') }}
                                @include('app.routes.station.form');

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
