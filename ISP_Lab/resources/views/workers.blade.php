@extends('mainLayouts.home')
@include('layouts.workers')
@section('right')
    <div id="contentRight">
        <table id="customers">
            <tr>
                <th>Vardas Pavardė</th>
                <th>tab. nr.</th>
                <th>Pareigos</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Ernst Handel</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Königlich Essen</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Laughing Bacchus Winecellars</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>

            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Ernst Handel</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Königlich Essen</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Laughing Bacchus Winecellars</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
            <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td>AA000000000</td>
                <td>pareigos</td>
                <td><button onclick="window.location='{{ url("workers/worker") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
            </tr>
        </table>

    </div>
@endsection

