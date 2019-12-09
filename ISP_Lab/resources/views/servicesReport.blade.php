@extends('mainLayouts.home')
@include('layouts.reports')
@section('right')
    <div id="contentRight">
        <?php
        $db=mysqli_connect("localhost", "root", "", "isp");

        $sql = "SELECT * from grupes";
        $grupes = mysqli_query($db, $sql);
        ?>
        <form acion="" method="get">
            <center><h1>Užsakytų paslaugų filtravimas</h1></center>
            <div class="row">
                <div class="leftcol">
                    <label for="parinktaDatanuo">Data nuo</label>
                </div>
                <div class="rightcol">
                    <input type="datetime-local" id="parinktaDatanuo" name="parinktaDatanuo" min="<?php echo date('Y-m-d'."T".'H:i');?>">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="parinktaDataiki">Data iki</label>
                </div>
                <div class="rightcol">
                    <input type="datetime-local" id="parinktaDataiki" name="parinktaDataiki" min="<?php echo date('Y-m-d'."T".'H:i');?>">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="vieta">Grupė</label>
                </div>
                <div class="rightcol">
                    <select class="field" name="grupe">
                        <?php
                        echo "<option value=\"0\">Nesvarbu</option>";
                        while ($row = mysqli_fetch_assoc($grupes)){
                            echo "<option value=\"".$row['id']."\">".$row['pavadinimas']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Rodyti">
            </div>
        </form>
        <br>
        <?php
        if (isset($_GET['parinktaDatanuo']) && $_GET['parinktaDatanuo'] != null && $_GET['parinktaDataiki'] && $_GET['parinktaDataiki'] != null && $_GET['grupe']){

            //$test = date("Y/m/d H:i:s", strtotime($_GET['parinktaDatanuo']));
            //$parinktaDatanuo = new DateTime($test);
            $parinktaDatanuo = $_GET['parinktaDatanuo'];
            //$test = date("Y/m/d H:i:s", strtotime($_GET['parinktaDataiki']));
            //$parinktaDataiki = new DateTime($test);
            $parinktaDataiki = $_GET['parinktaDataiki'];

            $grupe = $_GET['grupe'];

            $sql = "SELECT grupes.pavadinimas AS grupespav, paslaugos.pavadinimas, paslaugos.aprasymas, paslaugos.kaina, paslaugu_uzsakymai.komentaras,  paslaugu_uzsakymai.laikas, paslaugu_uzsakymai.vykdoma from paslaugu_uzsakymai
                    LEFT JOIN paslaugos ON paslaugos.id = paslaugu_uzsakymai.paslauga
                    LEFT JOIN grupes ON paslaugos.grupe = grupes.id
                    where laikas >= ".$parinktaDatanuo." AND laikas <= ".$parinktaDataiki;
            if ($grupe != 0)
                $sql = $sql." and grupes.id = ".$grupe;
            $paslaugos = mysqli_query($db, $sql);
            echo "<table id=\"customers\">";
            $header = "<tr><th>Įvykdyta</th><th>Laikas</th><th>Komentaras</th><th>Grupe</th><th>Pavadinimas</th><th>Aprašymas</th><th>Kaina</th>";
            echo $header."</tr>";
            /*while ($paslauga = mysqli_fetch_assoc($paslaugos)){
                if ($paslauga['vykdoma']==1)
                {
                    $meniuData = "<tr><td>Ne</td><td>";
                }
                else
                {
                    $meniuData = "<tr><td>Taip</td><td>";
                }
                $meniuData = $meniuData.$paslauga['laikas']."</td><td>";
                $meniuData = $meniuData.$paslauga['komentaras']."</td><td>";
                $meniuData = $meniuData.$paslauga['grupespav']."</td><td>";
                $meniuData = $meniuData.$paslauga['pavadinimas']."</td><td>";
                $meniuData = $meniuData.$paslauga['aprasymas']."</td><td>".$paslauga['kaina']."</td>";
                echo $meniuData."</tr>";
            }*/
            echo "</table>";
        }
        else{
            echo "Ne visi filtravimo laukai užpildyti..";
        }
        ?>
    </div>
@endsection

