@section('left')
    <div id="contentLeft">
        <h2>Kategorijos</h2>
        <ul>
            <li><a href="{{url('jobs')}}" class="{{Request::is('jobs') ? 'active' : ''}}">Darbai</a></li>
            <li><a href="{{url('jobs/add')}}" class="{{Request::is('jobs/add') ? 'active' : ''}}">Pridėti darbą</a></li>

        </ul>
    </div>
@endsection

