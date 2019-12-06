@extends('mainLayouts.home')
@include('layouts.workers')
@section('right')
    <div id="contentRight">
        <h2 id="pageTitle">Pridėti darbuotoją</h2>
        <form method="post" action="{{route('confirmEditWorker', $worker->id)}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="leftcol">
                    <label for="date">Įsidarbinimo data</label>
                </div>
                <div class="rightcol">
                    <input type="date" id="date" name="date" value="{{$worker->idarbinimo_data}}">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="person">Asmuo</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="" value="{{$worker->person->vardas}} {{$worker->person->pavarde}}" readonly>
                    <input type="text" name="person" value="{{$worker->id}}" hidden>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="duties">Pareigos</label>
                </div>
                <div class="rightcol">
                    <select class="field" name="duty">
                        <option value=""></option>
                        @foreach($duties as $duty)
                            <option value="{{$duty->id}}">{{$duty->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="address">Adresas</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="address" value="{{$worker->adresas}}">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="tab">Tabelio nr.</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="tab" value="{{$worker->tab_nr}}">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection

