@extends('mainLayouts.home')
@include('layouts.jobs')
@section('right')
    <div id="contentRight">
        <form action="{{route('jobAdd')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="leftcol">
                    <label for="name">Pavadinimas</label>
                </div>
                <div class="rightcol">
                    <input type="text" id="name" name="name" placeholder="Darbo pavadinimas">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="about">Aprašymas</label>
                </div>
                <div class="rightcol">
                    <textarea class="about" name="about" placeholder="Darbo aprašymas"></textarea>
                </div>
            </div>
            <div class="row">
            <div class="leftcol">
                    <label for="about">Atlikimo data</label>
                </div>
                <div class="rightcol">
                    <input name="date" type="date"></input>
                </div>
            </div>
            <div class="row">
            <div class="rightcol">
            <button type="submit">Pridėti darbą</button>
                </div>
              
            </div>
        </form>
    </div>
@endsection

