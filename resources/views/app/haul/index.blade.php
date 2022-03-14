@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (Session::has('messages'))
            {{ Session::get('messages') }}
        @endif
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">LISTADO DE PARADAS SEGUN RUTAS</div>
                        <div class="card-body">
                            <form action="{{ route('haul.create') }}" method="GET">
                                <div class="gap-2 d-md-block">
                                    <button class="btn btn-primary" type="submit">CREAR PARADAS DE LAS RUTAS</button>
                                  </div>
                            </form>
                            <table class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th># Unidad</th>
                                        <th># Asientos</th>
                                        <th>Movilizados</th>
                                        <th>Origen</th>
                                        <th>Destino</th>
                                        <th>Kilometros</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        {{-- <th>Acciones</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($exits as $exit) --}}
                                        <tr>
                                            {{-- <td>{{ $exit['id_egress'] }}</td>
                                            <td>{{ $exit['co_unit'] }}</td>
                                            <td>{{ $exit['nu_place'] }}</td>
                                            <td>{{ $exit['nu_mobilization'] }}</td>
                                            <td>{{ $exit['origin']['na_station']}}<b> ({{ $exit['origin']['sg_station'] }})</b></td>
                                            <td>{{ $exit['destiny']['na_station']}}<b> ({{ $exit['destiny']['sg_station'] }})</td>
                                            <td>{{ $exit['kilometer'] }}</td>
                                            <td>{{ $exit['fe_exit'] }}</td>
                                            <td>{{ $exit['hr_exit'] }}</td> --}}
                                            {{-- <td>
                                                <form action="" method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <input type="submit" value="Borrar" onclick="return confirm('¿Quieres Borrar?')">
                                                </form>
                                            </td> --}}
                                        </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

