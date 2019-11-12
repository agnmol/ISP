@section('left')
    <div id="contentLeft">
        <h2>Kategorijos</h2>
        <ul>
            <li><a href="{{url('rooms')}}" class="{{Request::is('rooms') ? 'active' : ''}}">Kambariai</a></li>
            <li><a href="{{url('rooms/user-reservations')}}" class="{{Request::is('rooms/user-reservations') ? 'active' : ''}}">Kliento rezervacijos</a></li>
            <li><a href="{{url('rooms/reservations')}}" class="{{Request::is('rooms/reservations') ? 'active' : ''}}">Rezervacijos</a></li>

        </ul>
    </div>
@endsection

