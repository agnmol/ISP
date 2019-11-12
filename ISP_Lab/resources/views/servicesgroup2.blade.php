@extends('mainLayouts.home')
@include('layouts.services')
@section('right')
    <div id="contentRight">
        </table>
        <h2 id="pageTitle">2Grupė</h2>
        <table id="customers">
            <tr>
                <th>Paslaugos pavadinimas</th>
                <th>Aprašymas</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>aprašymas</td>
                <td><button onclick="window.location='{{ url("jobs/darbopav") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>aprašymas</td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>aprašymas</td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
            </tr>
        </table>
    </div>
@endsection

