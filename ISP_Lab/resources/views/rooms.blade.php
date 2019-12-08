@extends('mainLayouts.home')
@include('layouts.rooms')
@section('right')
    <div id="contentRight">
        <form action="" method="GET">
            <div id="filter">
                    <h2> data nuo: </h2>
                <input type="date" name="dataNuo">
             </div>


            <div id="filter">
                    <h2> data iki: </h2>
                <input type="date" name="dataIki">
            </div>

                <div id="filter">
                    <h2> Kainos filtras (<=): </h2>
                    <input type="number" step="0.01" name="filtras">
                </div>
                <div id="contentLeft">
                    <input type="submit" value=" Pateikti " class="btn">
                </div>
        </form>

                <br><br><br><br><br><br><br>
        <table id="customers">;
                    <?php
                    $db = mysqli_connect("localhost", "root", "", "isp");
                    if(isset($_GET['dataNuo']) &&  isset($_GET['dataIki']) && isset($_GET['filtras'])){
                        if($_GET['dataNuo'] == NULL){
                            echo "Įveskite datą nuo";
                            echo "<br>";
                        }
                        else if($_GET['dataIki'] == NULL){
                            echo "Įveskite datą iki";
                            echo "<br>";
                        }
                        else if($_GET['filtras'] == NULL){
                            echo "Įveskite filtrą" ;
                            echo "<br>";
                        }
                        else {
                            echo " <tr>
                        <th>Kambario tipas</th>
                        <th>Kaina</th>
                        <th>Balkonas</th>
                        <th>Rūkančiųjų zonoje</th>
                        <th></th>
                                   </tr>";
                            $norimaNuo = $_GET['dataNuo'];
                            $norimaIki = $_GET['dataIki'];
                            $filtras = $_GET['filtras'];
                            $klientoid = session('klientas.id');
                            $sql = "SELECT dydis, kaina, balkonas, rukanciu_zonoje, id FROM kambariai";
                            $result = mysqli_query($db, $sql);

                            while($rows = mysqli_fetch_assoc($result)){
                                $id = $rows['id'];
                                if($rows['kaina'] <= $filtras) {
                                    $sql2 = "SELECT data_nuo, data_iki, id, kambarys FROM kambariu_rezervacijos WHERE kambarys = '".$rows['id']."'";
                                   // echo $sql2;
                                 //   exit;
                                    $result2 = mysqli_query($db, $sql2);
                                    $uzimtas = FALSE;
                                    while($rows2 = mysqli_fetch_assoc($result2)){
                                        if($rows2['data_nuo'] >= $norimaIki || $rows2['data_iki'] <= $norimaNuo){

                                                continue;

                                        }
                                        else {
                                            $uzimtas = TRUE;
                                        }

                                }
                                if(!$uzimtas) {
                                    $sql3 = "SELECT id, name FROM kambariu_dydziai WHERE id = ".$rows['dydis'];
                                    $row = mysqli_fetch_row(mysqli_query($db, $sql3));
                                    echo "<tr>";
                                    echo "<td>".$row[1]. "</td>";
                                    echo "<td>".$rows['kaina']. "</td>";
                                    if($rows['balkonas'] == 0)
                                        echo "<td>Ne</td>";
                                    else
                                        echo "<td>Taip</td>";
                                    if($rows['rukanciu_zonoje'] == 0)
                                        echo "<td>Ne</td>";
                                    else
                                        echo "<td>Taip</td>";
                                    echo "<td><a href=\"rooms/user-reserve?id=$id&nuo=$norimaNuo&iki=$norimaIki&klientoid=$klientoid\" class=\"btn\">Rezervuoti</a></td>";
                                    echo "</tr>";
                                    }
                            }
                        }
                        }
                    }




                    ?>

                </table>

            </div>
@endsection

