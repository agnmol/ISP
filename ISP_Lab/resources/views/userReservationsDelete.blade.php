@extends('mainLayouts.home')
@include('layouts.rooms')
@section('right')
    <div id="contentRight">
        <?php
        $db = mysqli_connect("localhost", "root", "", "isp");
        if(isset($_GET['id'])){
            $idGautas = $_GET['id'];
            $sql = "DELETE FROM kambariu_rezervacijos WHERE id = '".$idGautas."'";
            $result = mysqli_query($db, $sql);
            header("Location: " . URL::to('/rooms/user-reservations'), true, 302);
            exit();
        }
        ?>
        <
    </div>
@endsection

