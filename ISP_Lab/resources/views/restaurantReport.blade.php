@extends('mainLayouts.home')
@include('layouts.reports')
@section('right')
    <div id="contentRight">
        <?php
        $db=mysqli_connect("localhost", "root", "", "isp");

        $currentSelectedTable = null;
        $i = 0;

        $sql = "SELECT * from vietos";
        $vietos = mysqli_query($db, $sql);
        ?>
        <form acion="" method="get">
        <center><h1>Laisvų stalų filtravimas</h1></center>
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
                <label for="vieta">Vieta</label>
            </div>
            <div class="rightcol">
                <select class="field" name="vieta">
                    <?php
                        echo "<option value=\"0\">Nesvarbu</option>";
                        while ($row = mysqli_fetch_assoc($vietos)){
                            echo "<option value=\"".$row['id']."\">".$row['name']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="leftcol">
                <label for="minVietos">Minimalus vietų skaičius</label>
            </div>
            <div class="rightcol">
                <input type="number" id="minVietos" name="minVietos" min="0" value="0" placeholder="vietų skaičius..">
            </div>
        </div>
        <div class="row">
            <div class="leftcol">
                <label for="rukanciuZonoje">Rūkančiųjų zonoje?</label>
            </div>
            <div class="rightcol">
                <select class="field" name="rukanciuZonoje">
                    <option value="-1">Nesvarbu</option>
                    <option value="0">Ne</option>
                    <option value="1">Taip</option>
                </select>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Rodyti">
        </div>
        </form>
        <br>
        <?php
            if (isset($_GET['parinktaData']) && $_GET['parinktaData'] != null && isset($_GET['vieta']) && isset($_GET['minVietos']) && isset($_GET['rukanciuZonoje'])){

                $test = date("m/d/Y H:i:s", strtotime($_GET['parinktaData'])); ///anglu formatas
                $parinktaData = new DateTime($test);
                $vieta = $_GET['vieta'];
                $minVietos = $_GET['minVietos'];
                $rukanciuZonoje = $_GET['rukanciuZonoje'];

                $sql = "SELECT * from stalai where vietu_sk >= ".$minVietos;
                if ($vieta != 0)
                    $sql = $sql." and vieta = ".$vieta;
                if ($rukanciuZonoje != -1)
                    $sql = $sql." and rukanciu_zonoje = ".$rukanciuZonoje;
                $tables = mysqli_query($db, $sql);

                $atrinktuStaluSkaicius = 0;

                while ($table = mysqli_fetch_assoc($tables)){
                    $sql = "select * from stalu_rezervacijos where stalas = ".$table['id'];
                    $rezervacijos = mysqli_query($db, $sql);
                    $uzimta = 0;
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
                    if ($uzimta == 1)
                        continue;
                    if ($atrinktuStaluSkaicius == 0)
                        echo "<table id=\"customers\"><tr><th>Stalo numeris</th><th>Vietų skaičius</th><th>Rūkančiųjų zonoje?</th><th>Vieta</th></tr>";
                    $atrinktuStaluSkaicius++;

                    $rukanciuVieta = "Ne";
                    if ($table['rukanciu_zonoje'] == 1)
                        $rukanciuVieta = "Taip";

                    mysqli_data_seek($vietos, 0);
                    $vieta_string = "Nežinoma";
                    while ($vieta_row = mysqli_fetch_assoc($vietos)){
                        if ($table['vieta'] == $vieta_row['id']){
                            $vieta_string = $vieta_row['name'];
                            break;
                        }
                    }

                    echo "<tr><td>".$table['id']."</td><td>".$table['vietu_sk']."</td><td>".$rukanciuVieta."</td><td>".$vieta_string."</td></tr>";
                }
                if ($atrinktuStaluSkaicius > 0)
                    echo "</table>";
            }
            else{
                echo "Ne visi filtravimo laukai užpildyti..";
            }
        ?>
    </div>
@endsection

