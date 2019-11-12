@extends('mainLayouts.home')
@include('layouts.services')
@section('right')
    <div id="contentRight">
        <h2 id="pageTitle"><a href="{{url('services/group')}}" class="{{Request::is('services/group') ? 'active' : ''}}">1grupe</a></h2>
        </table>
        <h2 id="pageTitle"><a href="{{url('services/group2')}}" class="{{Request::is('services/group2') ? 'active' : ''}}">2grupe</a></h2>
    </div>
@endsection

