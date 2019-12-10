@section('left')
    <div id="contentLeft">
        <h2>Kategorijos</h2>
        <ul>
            <li><a href="{{url('services')}}" class="{{Request::is('services') ? 'active' : ''}}">Visos paslaugos</a></li>
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
                        $sql = "SELECT * FROM paslaugos where grupe = ".$row['id'];
                        $paslaugos = mysqli_query($db, $sql);
                        if (mysqli_num_rows($paslaugos) > 0)
                        {
                            echo "<li><a href=\"".$path."/services/".$row['id']."\" class=\"{{Request::is('restaurant') ? 'active' : ''}}\">".$row['pavadinimas']."</a></li>";
                        }
                    }
                @endphp
            </ul>
            @if($superUser==1)
            <li><a href="{{url('services/add')}}" class="{{Request::is('services/add') ? 'active' : ''}}">Pridėti paslaugą</a></li>
            @endif
            <li><a href="{{url('services/booked')}}" class="{{Request::is('services/booked') ? 'active' : ''}}">Užsakytos paslaugos</a></li>
        </ul>
    </div>
@endsection

