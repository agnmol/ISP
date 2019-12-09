@extends('mainLayouts.home')
@include('layouts.rooms')
@section('right')
    <div id="contentRight">
        <?php
        $db = mysqli_connect("localhost", "root", "", "isp");
        if(isset($_GET['id']) && isset($_GET['nuo']) && isset($_GET['iki']) && isset($_GET['klientoid'])){
            $idGautas = $_GET['id'];
            $nuo = $_GET['nuo'];
            $iki = $_GET['iki'];
            $klientoid = $_GET['klientoid'];
            $patvirtinta = 0;
            $komentaras = "";
            $sql = "INSERT INTO kambariu_rezervacijos (data_nuo, data_iki, patvirtinta, komentaras, klientas, kambarys)"
            ."VALUES ('$nuo', '$iki','$patvirtinta','$komentaras',  '$klientoid', '$idGautas')";

            $result = mysqli_query($db, $sql);
            header("Location: " . URL::to('/rooms/user-reservations'), true, 302);
            exit();
        }
        ?>
        <
    </div>
@endsection

