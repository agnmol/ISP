@extends('mainLayouts.home')
@include('layouts.workers')
@section('right')
    <div id="contentRight">
        <form action="">
            <div class="row">
                <div class="leftcol">
                    <label for="date">Įsidarbinimo data</label>
                </div>
                <div class="rightcol">
                    <input type="date" id="date" name="date">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="person">Asmuo</label>
                </div>
                <div class="rightcol">
                    <select class="field">
                        <option value="person1">Asmuo1</option>
                        <option value="person2">Asmuo2</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="duties">Pareigos</label>
                </div>
                <div class="rightcol">
                    <select class="field">
                        <option value="duties1">Pareigos1</option>
                        <option value="duties2">Pareigos2</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="address">Adresas</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="address">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection

