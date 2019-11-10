@section('left')
    <div id="contentLeft">
        <h2>Kategorijos</h2>
        <ul>
            <li><a href="{{url('reports/reservations')}}" class="{{Request::is('reports/reservations') || Request::is('reports') ? 'active' : ''}}">Kambarių ataskaita</a></li>
            <li><a href="{{url('reports/restaurant')}}" class="{{Request::is('reports/restaurant') ? 'active' : ''}}">Restorano ataskaita</a></li>
            <li><a href="{{url('reports/services')}}" class="{{Request::is('reports/services') ? 'active' : ''}}">Paslaugų ataskaita</a></li>
        </ul>
    </div>
@endsection

