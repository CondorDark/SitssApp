@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (Session::has('messages'))
            {{ Session::get('messages') }}
        @endif
        <div class="py-5 col-md-5">
                <div class="card">
                    <div class="card-header bg-primary">LISTADO DE RUTAS</div>
                        <div class="card-body">
                            <form action="{{ route('imprimir') }}" method="POST" target="_black">
                                @csrf

                                <div class="row g-3 align-items-center">

                                    <div class="col-12">
                                        <label for="date">Calendario</label>
                                        <input class="form-control" type="date" name="date" id="date" min="2022-02-26" max="2022-04-03">
                                    </div>

                                    <div class="col-6">
                                        <label for="time1">Desde</label>
                                        <input placeholder="Desde" class="form-control" type="time" name="time1" id="time1">
                                    </div>

                                    <div class="col-6">
                                        <label for="time2">Hasta</label>
                                        <input placeholder="Hasta" class="form-control" type="time" name="time2" id="time2">
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                        {{-- <div class="d-grid gap-2"> --}}
                                        <button value="pdf" name="typeDocument" class="btn btn-danger   col-6" type="submit" >GENERAR PDF</button>
                                        {{-- <button value="excel" name="typeDocument" class="btn btn-success col-6" type="submit">GENERAR EXCEL</button> --}}
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
