@extends('mainLayouts.home')
@include('layouts.restaurant')
@section('right')
    <div id="contentRight">
        <form action="">
            <div class="row">
                <div class="leftcol">
                    <label for="date">Data ir laikas</label>
                </div>
                <div class="rightcol">
                    <input type="datetime-local" id="date" name="date">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="minichairs">Vaikiškos kėdutės</label>
                </div>
                <div class="rightcol">
                    <input type="number" id="minichairs" name="minichairs">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="table">Stalas</label>
                </div>
                <div class="rightcol">
                    <select>
                        <option value="table1">Stalas1</option>
                        <option value="table2">Stalas2</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>

        </form>
    </div>
@endsection

