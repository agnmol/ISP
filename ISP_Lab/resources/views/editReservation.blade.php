@extends('mainLayouts.home')
@include('layouts.rooms')
@section('right')
    <div id="contentRight">
        <h2 id="pageTitle">Redaguoti rezervaciją</h2>
        <form method="post" action="{{route('confirmEditReservation', $reservation->id)}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="leftcol">
                    <label for="id">Kambario nr.</label>
                </div>
                <div class="rightcol">
                    <input type="text" id="room_id" name="room_id" value="{{$reservation->room->id}}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="person">Data nuo</label>
                </div>
                <div class="rightcol">
                    <input type="date" name="from" value="{{$reservation->data_nuo}}">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="duties">Data iki</label>
                </div>
                <div class="rightcol">
                    <input type="date" name="to" value="{{$reservation->data_iki}}">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="address">Komentaras</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="comment" value="{{$reservation->komentaras}}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="tab">Darbuotojas</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="worker" value="{{$reservation->worker->tab_nr}} {{$reservation->worker->person->vardas}} {{$reservation->worker->person->pavarde}}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="tab">Klientas</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="customer" value="{{$reservation->customer->person->vardas}} {{$reservation->customer->person->pavarde}}" readonly>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection

