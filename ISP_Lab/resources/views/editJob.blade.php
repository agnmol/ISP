@extends('mainLayouts.home')
@include('layouts.jobs')
@section('right')
    <div id="contentRight">
        <form action="{{route('editJobVal', $job->id)}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="leftcol">
                    <label for="name">Pavadinimas</label>
                </div>
                <div class="rightcol">
                    <input type="text" id="name" name="name" placeholder="Darbo pavadinimas" value="{{$job->pavadinimas}}">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="about">Aprašymas</label>
                </div>
                <div class="rightcol">
                    <textarea class="about" name="about">{{$job->aprasymas}}</textarea>
                </div>
            </div>
            <div class="row">
            <div class="leftcol">
                    <label for="about">Atlikimo data</label>
                </div>
                <div class="rightcol">
                    <input name="date" type="date" value="{{$job->data}}"></input>
                </div>
            </div>
            <div class="row">
            <div class="leftcol">
                    <label for="about">Atlieka</label>
                </div>
                <div class="rightcol">
                    <select name="assignee">
                      @foreach($workers as $worker)
                        <option value="{{$worker->id}}">{{$worker->tab_nr}}</option>
                      @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
            <div class="rightcol">
            <button type="submit">Redaguoti darbą</button>
                </div>
              
            </div>
        </form>
    </div>
@endsection

