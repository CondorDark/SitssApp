@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-primary">CREAR TERMINAL</div>
                        <div class="card-body">
                            <form action="{{ route('stations.store') }}" method="post">

                                @csrf

                                @include('app.routes.station.form')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
