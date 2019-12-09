@section('left')
    <div id="contentLeft">
        <h2 >Restoranas</h2>
        <ul>
            <li><a href="{{url('restaurant')}}" class="{{Request::is('restaurant') ? 'active' : ''}}">Meniu</a></li>
            <ul>
                @php
                $superUser = 0;
                if ((Session::has('darbuotojas') && Session('darbuotojas.atleistas') == 0) || Session::has('administratorius'))
                    $superUser = 1;

                $path = "/ISP/ISP_Lab/public/index.php";
                $db=mysqli_connect("localhost", "root", "", "isp");
                $sql = "SELECT * FROM grupes";
                $result = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                    //echo "<li><a href=\"{{url('restaurant//".$row['id']."')}}\" class=\"{{Request::is('restaurant') ? 'active' : ''}}\">".$row['pavadinimas']."</a></li>";
                    echo "<li><a href=\"".$path."/restaurant/".$row['id']."\" class=\"{{Request::is('restaurant') ? 'active' : ''}}\">".$row['pavadinimas']."</a></li>";
                }
                    //<li><a href="{{url('restaurant/3')}}" class="{{Request::is('restaurant') ? 'active' : ''}}">1grupė</a></li>
                    //<li><a href="{{url('restaurant/group')}}" class="{{Request::is('restaurant/group') ? 'active' : ''}}">2grupė</a></li>
                @endphp

            </ul>

            @if ((Session::has('darbuotojas') && Session('darbuotojas.atleistas') == 0) || Session::has('administratorius'))
            <li><a href="{{url('restaurant/add')}}" class="{{Request::is('restaurant/add') ? 'active' : ''}}">Pridėti patiekalą</a></li>
            @else
            <li><a href="{{url('restaurant/book')}}" class="{{Request::is('restaurant/book') ? 'active' : ''}}">Stalo rezervacija</a></li>
            @endif
        </ul>
    </div>
@endsection

