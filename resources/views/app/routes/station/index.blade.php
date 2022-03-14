@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (Session::has('messages'))
            {{ Session::get('messages') }}
        @endif
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">LISTADO DE TERMINALES</div>
                        <div class="card-body">
                            <form action="{{ route('stations.create') }}" method="GET">
                                <div class="gap-2 d-md-block">
                                    <button class="btn btn-primary" type="submit">CREAR TERMINAL</button>
                                  </div>
                            </form>
                            <table class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Terminales</th>
                                        <th>Sigla</th>
                                        {{-- <th>Acciones</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stations as $station)
                                        <tr>
                                            <td>{{ $station->id_station }}</td>
                                            <td>{{ $station->na_station }}</td>
                                            <td>{{ $station->sg_station }}</td>
                                            {{-- <td>
                                                <form action="{{ url('/stations/'.$station->id_station) }}" method="post">
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
