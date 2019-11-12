@extends('mainLayouts.home')
@include('layouts.services')
@section('right')
    <div id="contentRight">
        <h2 id="pageTitle">1Grupė</h2>
        </table>
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
            <tr>
                <td>Ernst Handel</td>
                <td>aprašymas</td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>aprašymas</td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
            </tr>
            <tr>
                <td>Königlich Essen</td>
                <td>aprašymas</td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
            </tr>
            <tr>
                <td>Laughing Bacchus Winecellars</td>
                <td>aprašymas</td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
            </tr>
            <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td>aprašymas</td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
            </tr>

        </table>
    </div>
@endsection

