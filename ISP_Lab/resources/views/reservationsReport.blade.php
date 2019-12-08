@extends('mainLayouts.home')
@include('layouts.reports')
@section('right')
    <div id="contentRight">
        <form action="" method="GET">
            <div id="filter">
                <h2> Kambario Tipas :  </h2>

                    <select name="tipas" class="field">
                        <option value="1">Vienvietis</option>
                        <option value="2">Mažas dvivietis</option>
                        <option value="3">Didelis Dvivietis</option>

                    </select>

             </div>


            <div id="filter">
                <h2> Data: </h2>
                <input type="date" name="data">
            </div>

            <div id="filter">
                <h2> Kainos filtras (<=): </h2>
                <input type="number" step="0.01" name="filtras">
            </div>
            <div id="contentLeft">
                <input type="submit" value=" Rodyti ataskaitą " class="btn">
            </div>
        </form>

        <br><br><br><br><br><br><br>
        <table id="customers">;
            <?php
            $db = mysqli_connect("localhost", "root", "", "isp");
            if(isset($_GET['tipas']) &&  isset($_GET['data']) && isset($_GET['filtras'])){
                if($_GET['tipas'] == NULL){
                    echo "Pasirinkite tipą";
                    echo "<br>";
                }
                else if($_GET['data'] == NULL){
                    echo "Įveskite datą ";
                    echo "<br>";
                }
                else if($_GET['filtras'] == NULL){
                    echo "Įveskite kainą" ;
                    echo "<br>";
                }
                else {
                    echo " <tr>
                        <th>Kambario tipas</th>
                        <th>Kaina</th>
                        <th>Balkonas</th>
                        <th>Rūkančiųjų zonoje</th>
                                   </tr>";
                    $norimasTipas = $_GET['tipas'];
                    $norimaData = $_GET['data'];
                    $filtras = $_GET['filtras'];
                    $radau = FALSE;
               //     $klientoid = session('klientas.id');
                    $sql = "SELECT dydis, kaina, balkonas, rukanciu_zonoje, id FROM kambariai WHERE dydis = '".$norimasTipas."'";
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
                                if($rows2['data_nuo'] >= $norimaData || $rows2['data_iki'] <= $norimaData){

                                    continue;

                                }
                                else {
                                    $uzimtas = TRUE;
                                }

                            }
                            if(!$uzimtas) {
                                $sql3 = "SELECT id, name FROM kambariu_dydziai WHERE id = ".$norimasTipas;
                                $row = mysqli_fetch_row(mysqli_query($db, $sql3));
                                $radau = TRUE;
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

                                echo "</tr>";
                            }
                            if(!$radau)
                            {
                                  echo "Laisvo norimo kambario nera";
                            }
                        }
                    }

                }
            }




            ?>

        </table>

    </div>
@endsection

