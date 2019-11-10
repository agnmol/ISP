@extends('mainLayouts.home')
@include('layouts.restaurant')
@section('right')
    <div id="contentRight">
        <form action="">
            <div class="row">
                <div class="leftcol">
                    <label for="name">Pavadinimas</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="name" placeholder="patiekalo pavadinimas..">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="about">Kaina</label>
                </div>
                <div class="rightcol">
                    <input type="" class="field" name="price"></input>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="about">Aprašymas</label>
                </div>
                <div class="rightcol">
                    <textarea class="about" name="about" placeholder="patiekalo aprašymas.."></textarea>
                </div>
            </div>

            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection

