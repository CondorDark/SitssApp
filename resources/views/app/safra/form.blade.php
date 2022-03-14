<div class="row g-3 align-items-center">

    <div class="col-12">
        <select class="form-select" name="rutas">
            <option selected>Seleccionar Ruta</option>
            @foreach ($routers as $router)
                <option value="{{ $router['co_route'] }}">
                    {{ $router['origin']['na_origin'] }} ({{ $router['origin']['sg_origin'] }})
                    -
                    {{ $router['destiny']['na_destiny'] }} ({{ $router['destiny']['sg_destiny'] }})
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-6">
        <input class="form-control" type="date" name="date" id="date">
    </div>

    <div class="col-6">
        <input class="form-control" type="time" name="time" id="time">
    </div>

    <div class="col-6">
        <select class="form-select" name="unit">
            <option selected>Seleccionar Unidad</option>
            @foreach ($buses as $bus)
                <option value="{{ $bus->id_unit }}">{{ $bus->nu_bus }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-6">
        <input class="form-control" placeholder="Movilización" type="text" name="mobilization" id="mobilization">
    </div>

    <div class="d-grid">
        <input class="btn btn-primary" type="submit">
    </div>

</div>

