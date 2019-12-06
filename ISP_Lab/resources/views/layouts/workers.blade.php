@section('left')
    <div id="contentLeft">
        <h2>Kategorijos</h2>
        <ul>
            <li><a href="{{url('workers')}}" class="{{Request::is('workers') ? 'active' : ''}}">Darbuotojai</a></li>

            <li><a href="{{url('workers/add')}}" class="{{Request::is('workers/add') ? 'active' : ''}}">Pridėti darbuotoją</a></li>
        </ul>
    </div>
@endsection

