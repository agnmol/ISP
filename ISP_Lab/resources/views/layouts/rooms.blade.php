@section('left')
    <div id="contentLeft">
        <h2>Kategorijos</h2>
        <ul>
            <li><a href="{{url('rooms')}}" class="{{Request::is('rooms') ? 'active' : ''}}">Kambariai</a></li>
            <li><a href="{{url('rooms/free')}}" class="{{Request::is('rooms/free') ? 'active' : ''}}">Laisvi kambariai</a></li>
            <li><a href="{{url('rooms/reservations')}}" class="{{Request::is('rooms/reservations') ? 'active' : ''}}">Rezervacijos</a></li>

        </ul>
    </div>
@endsection

