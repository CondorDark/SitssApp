@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">CREAR TALLAS</div>
                        <div class="card-body">
                            <form action="" method="post">

                                @csrf

                                @include('app.clothingSize.form')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
