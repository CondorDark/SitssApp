<div class="row g-3 align-items-center">

    <div class="col-10">
        <input class="form-control" placeholder="Nombre Estación" type="text" name="na_station" id="na_station">
    </div>

    <div class="col-2">
        <input class="form-control" placeholder="Sigla" type="text" name="sg_station" id="sg_station">
    </div>

    {{-- <div class="col-12">

        <select name="origin" class="form-select">

            <option selected>Seleccionar Estación Origen</option>

            @foreach ($stations as $key => $station)

                <option value="{{ $station->id_station }}">{{ $station->na_station }}</option>

            @endforeach

        </select>

    </div>

    <div class="col-12">

        <select name="destiny" class="form-select">

            <option selected>Seleccionar Estación Destino</option>

            @foreach ($stations as $key => $station)

                <option value="{{ $station->id_station }}">{{ $station->na_station }}</option>

            @endforeach

        </select>

    </div> --}}

    <div class="d-grid">
        <input class="btn btn-primary" type="submit">
    </div>
</div>
