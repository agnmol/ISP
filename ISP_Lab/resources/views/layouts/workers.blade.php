@section('left')
    <div id="contentLeft">
        <h2>Kategorijos</h2>
        <ul>
            <li><a href="{{url('workers')}}" class="{{Request::is('workers') ? 'active' : ''}}">Visi darbuotojai</a></li>
            <li><a href="{{url('workers/group1')}}" class="{{Request::is('workers/group1') ? 'active' : ''}}">1 grupė</a></li>
            <li><a href="{{url('workers/group2')}}" class="{{Request::is('workers/group2') ? 'active' : ''}}">2 grupė</a></li>

            <li><a href="{{url('workers/add')}}" class="{{Request::is('workers/add') ? 'active' : ''}}">Pridėti darbuotoją</a></li>
        </ul>
    </div>
@endsection

