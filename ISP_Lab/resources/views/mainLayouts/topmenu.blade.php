<div id="topMenu">
    <ul>
        <li><a href="{{url('jobs')}}" class="{{Request::is('jobs*') || Request::is('/') ? 'active' : ''}}" title="jobs">Darbai</a></li>
        <li><a href="{{url('clients')}}" class="{{Request::is('clients*') ? 'active' : ''}}" title="clients">Klientai</a></li>
        <li><a href="{{url('restaurant')}}" class="{{Request::is('restaurant*') ? 'active' : ''}}" title="restaurant">Restoranas</a></li>
        <li><a href="{{url('services')}}" class="{{Request::is('services*') ? 'active' : ''}}" title="services">Paslaugos</a></li>
        <li><a href="{{url('workers')}}" class="{{Request::is('workers*') ? 'active' : ''}}" title="workers">Darbuotojai</a></li>
        <li><a href="{{url('rooms')}}" class="{{Request::is('rooms*') ? 'active' : ''}}" title="rooms">Kambarių rezervacija</a></li>
        <li><a href="{{url('reports')}}" class="{{Request::is('reports*') ? 'active' : ''}}" title="rooms">Ataskaitos</a></li>
    </ul>
</div>