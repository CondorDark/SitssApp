<div class="row g-3 align-items-center">

    @php
       $nombre =  $user[0]['na_personal_information'];
       $camisa =  $user[0]['tx_Shirt_Size'];
       $zapato =  $user[0]['nu_Footwear_Size'];
       $pantal =  $user[0]['nu_Pant_Size'];
    @endphp

    <div>
        <label for="identi">Cedula</label>
        <input disabled class="form-control" value="{{ isset($cedula)?$cedula:old('identi') }}" type="number" name="identi" id="identi">
    </div>

    <div class="col-4">
        <label for="origin">Camisa</label>
        <select name="origin" class="form-select">
            <option selected>{{ isset($camisa)?$camisa:'Talla Camisa' }}</option>
            <option value="P">P</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="XXXL">XXXL</option>
        </select>
    </div>

    <div class="col-4">
        <label for="nu_pantSize">Pantalon</label>
        <input value="{{ isset($pantal)?$pantal:old('nu_pantSize') }}" class="form-control" placeholder="Pantalón" type="text" name="nu_pantSize" id="nu_pantSize">
    </div>

    <div class="col-4">
        <label for="nu_footerSize">Zapato</label>
        <input value="{{ isset($zapato)?$zapato:old('nu_pantSize') }}" class="form-control" placeholder="Zapato" type="text" name="nu_footerSize" id="nu_footerSize">
    </div>

    <div class="d-grid">
        <input class="btn btn-primary" type="submit">
    </div>

</div>
