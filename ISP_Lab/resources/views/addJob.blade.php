@extends('mainLayouts.home')
@include('layouts.jobs')
@section('right')
    <div id="contentRight">
        <form action="">
            <div class="row">
                <div class="leftcol">
                    <label for="name">Pavadinimas</label>
                </div>
                <div class="rightcol">
                    <input type="text" id="name" name="name" placeholder="darbo pavadinimas..">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="about">Aprašymas</label>
                </div>
                <div class="rightcol">
                    <textarea class="about" name="about" placeholder="darbo aprašymas.."></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection

