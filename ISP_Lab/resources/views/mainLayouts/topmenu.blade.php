<div id="topMenu">
    <ul>
        @if (Session::has('darbuotojas') && Session::get('darbuotojas.atleistas') == 0)
            <li><a href="{{url('jobs')}}" class="{{Request::is('jobs*') || Request::is('/') ? 'active' : ''}}" title="jobs">Darbai</a></li>
            @if (Session::get('darbuotojas')->pareigos == 1)
                <li><a href="{{url('customers')}}" class="{{Request::is('customers*') ? 'active' : ''}}" title="customers">Klientai</a></li>
                <li><a href="{{route('workers')}}" class="{{Request::is('workers*') ? 'active' : ''}}" title="workers">Darbuotojai</a></li>
                <li><a href="{{url('reports')}}" class="{{Request::is('reports*') ? 'active' : ''}}" title="rooms">Ataskaitos</a></li>
            @endif
            @else
            <li><a href="{{url('services')}}" class="{{Request::is('services*') ? 'active' : ''}}" title="services">Paslaugos</a></li>

        @endif
            <li><a href="{{url('restaurant')}}" class="{{Request::is('restaurant*') ? 'active' : ''}}" title="restaurant">Restoranas</a></li>
            <li><a href="{{url('rooms')}}" class="{{Request::is('rooms*') ? 'active' : ''}}" title="rooms">Kambarių rezervacija</a></li>
        <li><a href="{{route('logout')}}" title="rooms">Atsijungti</a></li>
    </ul>
</div>
