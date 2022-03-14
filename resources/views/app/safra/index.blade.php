@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (Session::has('messages'))
            {{ Session::get('messages') }}
        @endif
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">LISTADO SALIDAS SAFRA</div>
                        <div class="card-body">
                            <form action="{{ route('safra.create') }}" method="get">
                                <div class="gap-2 d-md-block">
                                    <button class="btn btn-primary" type="submit">CREAR RUTAS</button>
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
                                        {{-- <th>Fecha</th> --}}
                                        <th>Hora</th>
                                        <th>Movilizados.R</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exits as $exit)
                                        <tr>
                                            <td>{{ $exit['id_egress'] }}</td>
                                            <td>{{ $exit['co_unit'] }}</td>
                                            <td>{{ $exit['nu_place'] }}</td>
                                            <td>{{ $exit['nu_mobilization'] }}</td>
                                            <td>{{ $exit['origin']['na_station']}} <b> ({{ $exit['origin']['sg_station'] }})</b></td>
                                            <td>{{ $exit['destiny']['na_station']}}<b> ({{ $exit['destiny']['sg_station'] }})</td>
                                            <td>{{ $exit['kilometer'] }}</td>
                                            {{-- <td>{{ $exit['fe_exit'] }}</td> --}}
                                            <td>{{ $exit['hr_exit'] }}</td>
                                            @if ($exit['nu_return'] == NULL || $exit['nu_return'] == '')
                                                <form action="{{ route('safra.update', $exit['id_egress']) }}" method="POST">
                                                    @csrf
                                                    {{ method_field('PATCH') }}
                                                    <td class="col-1">
                                                        <input class="form-control" type="text" name="nu_return" id="nu_return">
                                                    </td>
                                                    <td>
                                                        <input class="btn btn-warning" type="submit" value="Retorno">
                                                    </td>
                                                </form>
                                            @else
                                                <td>{{ $exit['nu_return'] }}</td>
                                            @endif

                                            {{-- <a class="btn btn-warning" href="{{ route('travels.index', ) }}">Retorno</a> --}}
                                            {{-- <td>
                                                <form action="" method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <input type="submit" value="Borrar" onclick="return confirm('¿Quieres Borrar?')">
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

