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
            @foreach($workers as $worker)
                <tr>
                    <td>{{$worker->person->vardas}} {{$worker->person->pavarde}}</td>
                    <td>{{$worker->tab_nr}}</td>
                    <td>{{$worker->duty->name}}</td>
                    <td><button onclick="window.location='{{ route('editWorker', $worker->id) }}'" class="btn">Redaguoti</button></td>
                    <td><button class="btn" onclick="javascript:if (confirm('Ar tikrai norite pašalinti darbuotoją?'))
                                window.location='{{route('deleteWorker', $worker->id)}}' ">Naikinti</button></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

