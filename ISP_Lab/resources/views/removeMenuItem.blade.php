@extends('mainLayouts.home')
@include('layouts.restaurant')
@section('right')
            <?php
                $path = "/ISP/ISP_Lab/public/index.php";
                $db=mysqli_connect("localhost", "root", "", "isp");
                $userId = session('asmuo.id');
                $sql = "UPDATE atsiliepimai set gaminys = NULL where gaminys = ".$menuItemId;
                mysqli_query($db, $sql);
                $sql = "DELETE FROM meniu_gaminiai WHERE id = ".$menuItemId;
                mysqli_query($db, $sql);
                header("Location: " . URL::to('/restaurant/'), true, 302);
                exit();
            ?>
@endsection

