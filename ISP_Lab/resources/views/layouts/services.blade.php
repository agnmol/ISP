@section('left')
    <div id="contentLeft">
        <h2>Kategorijos</h2>
        <ul>
            <li><a href="{{url('services')}}" class="{{Request::is('services') ? 'active' : ''}}">Visos paslaugos</a></li>
            <li><a href="{{url('services/group1')}}" class="{{Request::is('services/group1') ? 'active' : ''}}">1 grupė</a></li>
            <li><a href="{{url('services/group2')}}" class="{{Request::is('services/group2') ? 'active' : ''}}">2 grupė</a></li>

            <li><a href="{{url('services/add')}}" class="{{Request::is('services/add') ? 'active' : ''}}">Pridėti paslaugą</a></li>
        </ul>
    </div>
@endsection

