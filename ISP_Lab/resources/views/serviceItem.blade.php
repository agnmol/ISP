@extends('mainLayouts.home')
@include('layouts.services')
@section('right')
    <div id="contentRight">
        <?php
            $superUser = 0;
            if ((Session::has('darbuotojas') && Session('darbuotojas.atleistas') == 0) || Session::has('administratorius'))
                $superUser = 1;

            $path = "/ISP/ISP_Lab/public/index.php";
            $db=mysqli_connect("localhost", "root", "", "isp");
            if (isset($groupId)){
                $sql = "SELECT * FROM grupes where id = ".$groupId;
            }
            else{
                $sql = "SELECT * FROM grupes";
            }
            $groups = mysqli_query($db, $sql);



        while ($group = mysqli_fetch_assoc($groups)){
            $sql = "SELECT * FROM paslaugos where grupe = ".$group['id'];
            $paslaugos = mysqli_query($db, $sql);
            if (mysqli_num_rows($paslaugos) > 0){
                echo "<h2 id=\"pageTitle\">".$group['pavadinimas']."</h2>";
                echo "<table id=\"customers\" style='width:750px'>";

                /*if ($superUser == 1){

                }*/
                $header = "<tr><th>Pavadinimas</th><th>Aprašymas</th><th>Kaina</th>";
                if ($superUser)
                    $header = $header."<th>Redagavimas</th><th>Šalinimas</th>";
                else
                    $header = $header."<th>Užsakymas</th>";
                echo $header."</tr>";

                while ($paslauga = mysqli_fetch_assoc($paslaugos)){
                    $meniuData = "<tr><td>".$paslauga['pavadinimas']."</td><td>";
                    $meniuData = $meniuData.$paslauga['aprasymas']."</td><td>".$paslauga['kaina']."</td>";

                    if ($superUser == 1)
                        $meniuData = $meniuData."<td><button onclick=\"window.location='".$path."/services/edit/".$paslauga['id']."' \"class=\"btn\">Redaguoti</button></td>
                        <td><button onclick=\"window.location='".$path."/services/remove/".$paslauga['id']."' \"class=\"btn\">Šalinti</button></td>";
                    else if($paslauga['galima']==1)
                        $meniuData = $meniuData."<td><button onclick=\"window.location='".$path."/services/order/".$paslauga['id']."' \"class=\"btn\">Užsakyti</button></td>";
                    else
                        $meniuData = $meniuData."<td>Negalima</td>";
                    echo $meniuData."</tr>";
                }
            }
            echo "</table>";
        }
        ?>
    </div>
@endsection

