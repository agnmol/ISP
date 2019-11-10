<div id="contentLeft">
    <h2>Kategorijos</h2>
    <ul>
        @foreach($groups as $group)
            <li><a href="{{url('books/'.str_replace(' ', '_', $group->pavadinimas))}}">{{$group->pavadinimas}}</a></li>
        @endforeach
    </ul>
</div>
