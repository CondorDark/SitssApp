<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte Excel</title>
    {{-- <style TYPE="text/css">
    table.minimalistBlack {
        font-family: "Arial Black", Gadget, sans-serif;
        width: 100%;
        text-align: center;
    }
    table.minimalistBlack td, table.minimalistBlack th {}
    table.minimalistBlack tbody td {
        font-size: 13px;
    }
    table.minimalistBlack tr:nth-child(even) {
        background: #D0E4F5;
    }
    table.minimalistBlack thead {
        background: #CFCFCF;
        background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
        border-bottom: 3px solid #000000;
    }
    table.minimalistBlack thead th {
        font-size: 15px;
        font-weight: bold;
        color: #000000;
        text-align: center;
    }
    table.minimalistBlack tfoot {
        font-size: 14px;
        font-weight: bold;
        color: #000000;
        border-top: 3px solid #000000;
    }
    table.minimalistBlack tfoot td {
        ont-size: 14px;
    }
    </style> --}}
</head>
<body>
    @php
        $nombreImagen = 'C:\Users\admin\Desktop\SitssApp\storage\app\public\images\Cintillo.jpg';
        /* $imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen)); */

        $nombreImagen2 = 'C:\Users\admin\Desktop\SitssApp\storage\app\public\images\Sitssa.jpg';
        /* $imagen2Base64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen2)); */
    @endphp
    <div>
        <img src="{{ $nombreImagen }}" alt="Cintillo" width="100%" height="50">
        <img src="{{ $nombreImagen2 }}" alt="Logo" width="25%" height="50" style="float:right; margin-left:250px; margin-top:-4.33%">
    </div>
    <br>
    <div>
        <h1 style="text-align: center">REPORTE DE ZAFRA</h1>
        <h4 style="text-align: center">CARNAVALES 2022</h4>
    </div>
    <table class="minimalistBlack">
        <thead>
            <tr>
                <th>#</th>
                <th>Unidad</th>
                <th>Movilizados Ida</th>
                <th>Movilizados Retorno</th>
                <th>Total Movilizados</th>
                <th>Salidas</th>
                <th>Vueltas</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i =1;
                $total_mov_ida = 0;
                $total_mov_ret = 0;
                $total_moviliz = 0;
                $total_exit    = 0;
                $total_return  = 0;
            @endphp
            @foreach ($reports as $report)
                {{dd($report)}}
                @php
                    $total_mov_ida = $total_mov_ida + $report['nu_mobilization'];
                    $total_mov_ret = $total_mov_ret + $report['nu_return']      ;
                    // $total_moviliz = $total_moviliz + $report['cant_total']      ;
                    // $total_exit    = $total_exit    + $report['cant_exit']       ;
                    // $total_return  = $total_return  + $report['cant_exit_return'];
                @endphp
                <tr>
                    <td>{{ $i                           }}</td>
                    <td>{{ $report['nu_bus']            }}</td>
                    <td>{{ $report['nu_mobilization']   }}</td>
                    <td>{{ $report['nu_return']         }}</td>
                    <td>{{ $report['cant_total']        }}</td>
                    <td>{{ $report['cant_exit']         }}</td>
                    <td>{{ $report['cant_exit_return']  }}</td>
                </tr>
                @php $i++; @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td>{{ $total_mov_ida }}</td>
                <td>{{ $total_mov_ret }}</td>
                <td>{{ $total_moviliz }}</td>
                <td>{{ $total_exit    }}</td>
                <td>{{ $total_return  }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
