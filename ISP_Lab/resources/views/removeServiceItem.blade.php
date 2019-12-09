@extends('mainLayouts.home')
@include('layouts.services')
@section('right')
            <?php
                $path = "/ISP/ISP_Lab/public/index.php";
                $db=mysqli_connect("localhost", "root", "", "isp");
                $userId = session('asmuo.id');
                $sql = "DELETE FROM paslaugu_uzsakymai where paslauga = ".$serviceItemId;
                mysqli_query($db, $sql);
                $sql = "DELETE FROM paslaugos WHERE id = ".$serviceItemId;
                mysqli_query($db, $sql);
                header("Location: " . URL::to('/services/'), true, 302);
                exit();
            ?>
@endsection

