@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (Session::has('messages'))
            {{ Session::get('messages') }}
        @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">LISTADO</div>
                        <div class="card-body">
                            <form action="{{ route('clothingSize.create') }}" method="GET">
                                {{-- <div class="gap-2 d-md-block">
                                    <button class="btn btn-primary" type="submit">CREAR TALLAS</button>
                                  </div> --}}
                            </form>
                            <table class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Cedula</th>
                                        <th>Nombre</th>
                                        <th>T Camisa</th>
                                        <th># Pantalon</th>
                                        <th># Calzado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($datas as $data)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $data['id_personal_information'] }}</td>
                                            <td>{{ $data['na_personal_information'] }}</td>
                                            <td>{{ $data['tx_Shirt_Size'] }}</td>
                                            <td>{{ $nu_Pant_Size = ($data['nu_Pant_Size'] == 0) ? '' : $data['nu_Pant_Size']  }}</td>
                                            <td>{{ $Footwear_Size = ($data['nu_Footwear_Size'] == 0) ? '' : $data['nu_Footwear_Size']  }}</td>
                                            @php $cedula = $data['id_personal_information']; @endphp
                                            <td>
                                                <a href="{{ url( '/clothingSize/'.$cedula.'/edit' ) }}">Editar</a>
                                            </td>
                                        </tr>
                                        @php $i++; @endphp
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
