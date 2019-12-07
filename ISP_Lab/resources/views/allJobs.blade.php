@extends('mainLayouts.home')
@include('layouts.jobs')
@section('right')
    <div id="contentRight">
        <table id="customers">
            <tr>
                <th>Darbas</th>
                <th>Atlikti iki</th>
                <th>Priskirtas</th>
                @if (Session::get('darbuotojas')->pareigos == 1)
                <th></th>
                <th></th>
                <th></th>
                @endif
            </tr>
            @foreach($jobs as $job)
            <tr>
                <td>{{$job->pavadinimas}}</td>
                <td><a>{{$job->data}}</a></td>
                @if (isset($job->worker))
                <td>{{$job->worker->tab_nr}}</td>
                @else
                <td></td>
                @endif
                @if (Session::get('darbuotojas')->pareigos == 1)
                <td><button class="btn" onclick="window.location='{{route('jobDelete', $job->id)}}'">Baigtas</button></td>
                <td><button class="btn" onclick="window.location='{{route('jobReminder', $job->id)}}'">Siųsti priminimą</button></td>
                <td><button class="btn" onclick="window.location='{{route('editJob', $job->id)}}'">Redaguoti</button></td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
@endsection

