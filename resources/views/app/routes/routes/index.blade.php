@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (Session::has('messages'))
            {{ Session::get('messages') }}
        @endif
        <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary">LISTADO DE RUTAS</div>
                        <div class="card-body">
                            <form action="{{ route('routes.create') }}" method="get">
                                <div class="gap-2 d-md-block">
                                    <button class="btn btn-primary" type="submit">CREAR RUTAS</button>
                                  </div>
                            </form>
                            <table class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Codigo Ruta</th>
                                        <th>Nombre Origen</th>
                                        <th>Nombre Destino</th>
                                        {{-- <th>Acciones</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($routes as $route)
                                        <tr>
                                            <td>{{ $route['id_travel'] }}</td>
                                            <td><strong>{{ $route['co_travel'] }}</strong></td>
                                            <td>{{ $route['origin']['na_station'] }} <strong>({{ $route['origin']['sg_station'] }})</strong></td>
                                            <td>{{ $route['destiny']['na_station'] }} <strong>({{ $route['destiny']['sg_station'] }})</strong></td>
                                            {{-- <td>
                                                <form action="{{ url('/travels/'.$route['id_travel']) }}" method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="sutmit" class="btn btn-outline-danger" onclick="return confirm('¿Quieres Borrar?')">Eliminar</button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
