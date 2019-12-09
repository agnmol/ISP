@extends('mainLayouts.home')
@include('layouts.restaurant')
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
            echo "<h2 id=\"pageTitle\">".$group['pavadinimas']."</h2>";
            echo "<table id=\"customers\" style='width:750px'>";
            if ($superUser == 1){

            }
            $header = "<tr><th>Pavadinimas</th><th>Vidutinis įvertinimas</th><th>Aprašymas</th><th>Kaina</th>";
            if ($superUser)
                $header = $header."<th>Redagavimas</th><th>Šalinimas</th>";
            else
                $header = $header."<th>Vertinimas</th>";
            echo $header."</tr>";
            $sql = "SELECT * FROM meniu_gaminiai where grupe = ".$group['id'];
            $meniu_gaminiai = mysqli_query($db, $sql);
            if (mysqli_num_rows($meniu_gaminiai) < 1){
                echo "<tr><td colspan='7'>Šioje meniu grupėje nėra jokių gaminių.</td></tr>";
            }
            else{
                while ($menu_item = mysqli_fetch_assoc($meniu_gaminiai)){
                    $sql = "SELECT * FROM atsiliepimai where gaminys = ".$menu_item['id'];
                    $ivertinimai = mysqli_query($db, $sql);
                    $averageRating = -10;
                    if (mysqli_num_rows($ivertinimai) < 1){
                        $averageRating = -1;
                    }
                    else{
                        $averageRating = 0;
                        while ($ivertinimas = mysqli_fetch_assoc($ivertinimai)){
                            $averageRating += $ivertinimas['zvaigzdutes'];
                        }
                        $averageRating = $averageRating / mysqli_num_rows($ivertinimai);
                    }
                    $meniuData = "<tr><td>".$menu_item['pavadinimas']."</td><td>";
                    if ($averageRating == -1){
                        $meniuData = $meniuData."Neįvertintas</td><td>";
                    }
                    else{
                        $meniuData = $meniuData.$averageRating."</td><td>";
                    }
                    $meniuData = $meniuData.$menu_item['aprasymas']."</td><td>".$menu_item['kaina']."</td>";

                    if ($superUser == 1)
                        $meniuData = $meniuData."<td><button onclick=\"window.location='".$path."/restaurant/edit/".$menu_item['id']."' \"class=\"btn\">Redaguoti</button></td>
                        <td><button onclick=\"window.location='".$path."/restaurant/remove/".$menu_item['id']."' \"class=\"btn\">Šalinti</button></td>";
                    else
                        $meniuData = $meniuData."<td><button onclick=\"window.location='".$path."/restaurant/rate/".$menu_item['id']."' \"class=\"btn\">Įvertinti</button></td>";
                    echo $meniuData."</tr>";
                }
            }
            echo "</table>";
        }
        ?>
    </div>
@endsection

