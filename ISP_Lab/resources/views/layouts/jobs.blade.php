@section('left')
    <div id="contentLeft">
        <h2>Kategorijos</h2>
        <ul>
            <li><a href="{{url('jobs')}}" class="{{Request::is('jobs') ? 'active' : ''}}">Darbai</a></li>
            @if (Session::get('darbuotojas')->pareigos == 1)
            <li><a href="{{route('newJob')}}" class="{{Request::is('jobs/add') ? 'active' : ''}}">Pridėti darbą</a></li>
            @endif
        </ul>
    </div>
@endsection

