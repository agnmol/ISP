@extends('mainLayouts.home')
@include('layouts.rooms')
@section('right')
    <div id="contentRight">
        <table id="customers">
            <tr>
                <th>Kambario tipas</th>
                <th>Kaina</th>
                <th>Balkonas</th>
                <th>Rūkančiųjų zonoje</th>
                <th></th>

            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>100000</td>
                <td>taip</td>
                <td>ne</td>
                <td><button onclick="" class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>100000</td>
                <td>taip</td>
                <td>ne</td>
                <td><button onclick="" class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>100000</td>
                <td>taip</td>
                <td>ne</td>
                <td><button onclick="" class="btn">Įvertinti</button></td>

            </tr>

        </table>

    </div>
@endsection

