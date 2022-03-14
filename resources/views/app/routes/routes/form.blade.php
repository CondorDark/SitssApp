<div class="row g-3 align-items-center">

    <div class="col-4">
        <select name="origin" class="form-select">
            <option selected>Tipo Ruta</option>
                <option value="U">Urbano</option>
                <option value="I">InterUrbano</option>
        </select>
    </div>

    <div class="col-4">
        <input class="form-control" placeholder="Codigo Ruta" type="text" name="codRoute" id="codRoute">
    </div>

    <div class="col-4">
        <input class="form-control" placeholder="Kilometraje" type="text" name="km" id="km">
    </div>

    <div class="col-6">
        <select name="origin" class="form-select">
            <option selected>Origen</option>
            @foreach ($stations as $key => $station)
                <option value="{{ $station->id_station }}">{{ $station->na_station }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-6">
        <select name="destiny" class="form-select">
            <option selected>Destino</option>
            @foreach ($stations as $key => $station)
                <option value="{{ $station->id_station }}">{{ $station->na_station }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-check col-2" style="margin-left: 10px;">
        <input class="form-check-input" type="radio" name="checkstatus" id="permanent"><label class="form-check-label" for="permanent">Permanente</label>
    </div>

    <div class="form-check col-2" style="margin-left: 45px;">
        <input class="form-check-input" type="radio" name="checkstatus" id="temporary"><label class="form-check-label" for="temporary">Temporal</label>
    </div>

    <div class="form-check col-6" style="margin-left: 25px;">
        <input class="form-check-input" type="radio" name="checkstatus" id="permanentTemporary"><label class="form-check-label" for="permanentTemporary">Permanente-Temporal</label>
    </div>

    <div class="d-grid"> <input class="btn btn-primary" type="submit"> </div>

</div>
