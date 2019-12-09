@extends('mainLayouts.home')
@include('layouts.rooms')
@section('right')
    <div id="contentRight">
        <?php
        $db = mysqli_connect("localhost", "root", "", "isp");
        $row = NULL;
        if(isset($_GET['id'])){
            $idGautas = $_GET['id'];
            $sql = "SELECT id FROM kambariu_rezervacijos WHERE id = '".$idGautas."'";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_row($result);
            echo $row[0];
        }
        ?>
        <form action="" method="GET">
            <br><textarea rows="4" cols="50" name="newKomentaras" placeholder="Komentaras"></textarea>
            <input type="hidden" name="idy" value="<?php echo $row[0]; ?>" >
            <br><input type="submit" value=" Pateikti " class="btn">
            <?php
           // $id=99999;


         //   $komentaras = "";


             if(isset($_GET['newKomentaras']) && isset($_GET['idy'])){

                 $id = $_GET['idy'];
                 $komentaras = $_GET['newKomentaras'];
                 $sql = "UPDATE kambariu_rezervacijos SET komentaras = '".$komentaras."' WHERE kambariu_rezervacijos.id = '".$id."'";
                 echo $sql;
                 $result = mysqli_query($db, $sql);
                 header("Location: " . URL::to('/rooms/user-reservations'), true, 302);
                 exit();
             }

            ?>


                </form>
    </div>
@endsection

