@extends('mainLayouts.home')
@include('layouts.restaurant')
@section('right')

    <div id="contentRight">
        <?php
        $db=mysqli_connect("localhost", "root", "", "isp");
        $sql = "SELECT * from stalai";
        $tables = mysqli_query($db, $sql);

        $currentSelectedTable = null;
        $i = 0;

        $sql = "SELECT * from vietos";
        $vietos = mysqli_query($db, $sql);
        ?>
        <form action="" method="get">
            <div class="row">
                <div class="leftcol">
                    <label for="parinktaData">Data ir laikas</label>
                </div>
                <div class="rightcol">
                    <input type="datetime-local" id="parinktaData" name="parinktaData" min="<?php echo date('Y-m-d'."T".'H:i');?>">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="minichairs">Vaikiškos kėdutės</label>
                </div>
                <div class="rightcol">
                    <input type="number" id="minichairs" name="minichairs" min="0">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="table">Stalas</label>
                </div>
                <div class="rightcol">
                    <select name="table">
                        <?php
                            while ($row = mysqli_fetch_assoc($tables)){
                                $rukanciuju = "Ne";
                                if ($row['rukanciu_zonoje'] == 1)
                                    $rukanciuju = "Taip";

                                mysqli_data_seek($vietos, 0);

                                $staloVieta = "Nežinoma";
                                while ($row1 = mysqli_fetch_assoc($vietos)){
                                    if ($row1['id'] == $row['vieta']){
                                        $staloVieta = $row1['name'];
                                        break;
                                    }
                                }
                                echo "<option value=\"".$row['id']."\">Stalas nr. ".$row['id']." Vietų skaičius: ".$row['vietu_sk']." Vieta: ".$staloVieta." Rūkančiųjų zonoje? ".$rukanciuju."</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
            <?php
            $path = "/ISP/ISP_Lab/public/index.php";
            if (isset($_GET['parinktaData']) && $_GET['minichairs'] != null && isset($_GET['table'])){

                $userId = -1;
                if (Session::has('darbuotojas'))
                    $userId = session('darbuotojas.id');
                else
                    $userId = session('klientas.id');

                $sql = "select * from stalu_rezervacijos where stalas = ".$_GET['table'];
                $rezervacijos = mysqli_query($db, $sql);

                //$new_time = date("Y-m-d H:i:s", strtotime('+1 hours'));

                $uzimta = 0;
                $parinktaData = null;
                if ($_GET['parinktaData'] != null){
                    $test = date("m/d/Y H:i:s", strtotime($_GET['parinktaData'])); /// anglu formatas
                    $parinktaData = new DateTime($test);
                }
                while ($row = mysqli_fetch_assoc($rezervacijos)){
                    $dataBase = DateTime::createFromFormat("Y-m-d H:i:s", $row['laikas']);
                    $dataIki = clone($dataBase);//DateTime::createFromFormat("Y-m-d H:i:s", $row['laikas']);
                    $dataNuo = clone($dataBase);
                    $dataIki->modify('+2 hours');
                    $dataNuo->modify('-2 hours');
                    if ($dataNuo <= $parinktaData && $dataIki >= $parinktaData){
                        $uzimta = 1;
                        break;
                    }
                }

                if ($uzimta == 1){
                    echo "Deja, pasirintą datą šis stalas yra užimtas. Šio stalo užimtų laikų sąrašas: ";
                    mysqli_data_seek($rezervacijos, 0);
                    echo "<table id=\"customers\"><tr><th>Numeris</th><th>Laikas</th></tr>";
                    $i = 0;
                        while ($row = mysqli_fetch_assoc($rezervacijos)){
                            $i++;
                            echo "<tr><td>".$i."</td><td>".$row['laikas']."</td></tr>";
                        }
                    echo "</table>";
                }
                else{
                    $kedutes = $_GET['minichairs'];
                    $parinktasStalas = $_GET['table'];
                    $data = $parinktaData->format('Y-m-d H:i:s');
                    $sql = "insert into stalu_rezervacijos (laikas, komentaras, vaikiskos_kedutes, klientas, darbuotojas, stalas)
                     VALUES ('$data', NULL, '$kedutes', '$userId', NULL, '$parinktasStalas')";
                    mysqli_query($db, $sql);
                    header("Location: " . URL::to('/restaurant/'), true, 302);
                    exit();
                }
            }
            else{
                echo "Yra neužpildytų laukų...";
            }
            ?>
    </div>
@endsection

