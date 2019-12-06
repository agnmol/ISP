@extends('mainLayouts.home')
@include('layouts.rooms')
@section('right')
    <div id="contentRight">
        <table id="customers">
            <tr>
                <th>Kambario nr.</th>
                <th>Kambario tipas</th>
                <th>Klientas</th>
                <th>Data nuo</th>
                <th>Data iki</th>
                <th>Kaina</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($reservations as $reservation)
            <tr>
                <td>{{$reservation->room->id}}</td>
                <td>{{$reservation->room->size->name}}</td>
                <td>{{$reservation->customer->person->vardas}} {{$reservation->customer->person->pavarde}}</td>
                <td>{{$reservation->data_nuo}}</td>
                <td>{{$reservation->data_iki}}</td>
                <td>{{$reservation->room->kaina}}</td>
                <td><button  onclick="window.location='{{ route("confirmReservation", $reservation->id) }}'" class="btn" {{($reservation->patvirtinta == 1) ? "disabled": ""}}>Patvirtinti</button></td>
                <td><button onclick="window.location='{{ route('editReservation', $reservation->id) }}'" class="btn">Redaguoti</button></td>
            </tr>
                @endforeach
        </table>

    </div>
@endsection

