@extends('mainLayouts.home')
@include('layouts.reports')
@section('right')
    <div id="contentRight">
            <div class="row">
                <div class="leftcol">
                    <label for="person">Filtras1</label>
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
                    <label for="duties">Filtras2</label>
                </div>
                <div class="rightcol">
                    <select class="field">
                        <option value="duties1">Pareigos1</option>
                        <option value="duties2">Pareigos2</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Rodyti">
            </div>
        </form>
    </div>
@endsection

