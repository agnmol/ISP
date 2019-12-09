@extends('mainLayouts.home')
@include('layouts.services')
@section('right')
    <div id="contentRight">
        <table id="customers">
    <?php
        $UserId = 0;
        if ((Session::has('darbuotojas')))
            $UserId = Session('darbuotojas.id');
        else
            $UserId = Session('klientas.id');
        $db=mysqli_connect("localhost", "root", "", "isp");
        $sql = "SELECT grupes.pavadinimas AS grupespav, paslaugos.pavadinimas, paslaugos.aprasymas, paslaugos.kaina, paslaugu_uzsakymai.komentaras,  paslaugu_uzsakymai.laikas, paslaugu_uzsakymai.vykdoma FROM paslaugos
                RIGHT JOIN paslaugu_uzsakymai ON paslaugos.id = paslaugu_uzsakymai.paslauga
                LEFT JOIN grupes ON grupes.id = paslaugos.grupe
                WHERE paslaugu_uzsakymai.klientas = ".$UserId;
        $paslaugos = mysqli_query($db, $sql);
        $header = "<tr><th>Įvykdyta</th><th>Laikas</th><th>Komentaras</th><th>Grupe</th><th>Pavadinimas</th><th>Aprašymas</th><th>Kaina</th>";
        echo $header."</tr>";
        while ($paslauga = mysqli_fetch_assoc($paslaugos)){
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
        }
        echo "</table>";
    ?>
    </div>
@endsection

