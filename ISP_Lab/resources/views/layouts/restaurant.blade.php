@section('left')
    <div id="contentLeft">
        <h2 >Restoranas</h2>
        <ul>
            <li><a href="{{url('restaurant')}}" class="{{Request::is('restaurant') ? 'active' : ''}}">Meniu</a></li>
            <ul>
                <li><a href="{{url('restaurant/group')}}" class="{{Request::is('restaurant/group') ? 'active' : ''}}">1grupė</a></li>
                <li><a href="{{url('restaurant/group')}}" class="{{Request::is('restaurant/group') ? 'active' : ''}}">2grupė</a></li>
            </ul>
            <li><a href="{{url('restaurant/book')}}" class="{{Request::is('restaurant/book') ? 'active' : ''}}">Stalo rezervacija</a></li>

            <li><a href="{{url('restaurant/add')}}" class="{{Request::is('restaurant/add') ? 'active' : ''}}">Pridėti patiekalą</a></li>
        </ul>
    </div>
@endsection

