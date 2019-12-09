@extends('mainLayouts.home')
@include('layouts.restaurant')
@section('right')
    <div id="contentRight">
        <form action="" method="get">
            <div class="row">
                <div class="leftcol">
                    <label for="name">Įvertinimas</label>
                </div>
                <div class="rightcol">
                    <input style="width:50px" type="number" min="0" max="5" name="rating" placeholder="0">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="about">Aprašymas</label>
                </div>
                <div class="rightcol">
                    <textarea class="about" name="tekstas" placeholder="Ką manote apie šį patiekalą..."></textarea>
                </div>
            </div>

            <div class="row">
                <input type="submit" value="Vertinti">
            </div>
        </form>
            <?php
                $path = "/ISP/ISP_Lab/public/index.php";
                if (isset($_GET['tekstas']) && isset($_GET['rating'])){
                    $db=mysqli_connect("localhost", "root", "", "isp");

                    if (Session::has('darbuotojas'))
                        $userId = session('darbuotojas.id');
                    else
                        $userId = session('klientas.id');

                    $sql = "select * from atsiliepimai where klientas = ".$userId." and gaminys = ".$menuItemId;
                    $result = mysqli_query($db, $sql);
                    if (mysqli_num_rows($result) > 0){
                        $sql = "update atsiliepimai set tekstas = '".$_GET['tekstas']."', zvaigzdutes = '".$_GET['rating']."' where klientas = ".$userId." and gaminys = ".$menuItemId;
                    }
                    else{
                        $sql = "insert into atsiliepimai (tekstas, zvaigzdutes, gaminys, klientas) VALUES ('".$_GET['tekstas']."', '".$_GET['rating']."', '".$menuItemId."', '".$userId."')";
                    }
                    $result1 = mysqli_query($db, $sql);
                    echo "Įvertinimas išsaugotas";
                    header("Location: " . URL::to('/restaurant/'), true, 302);
                    exit();
                }
                else{
                    echo "Yra neužpildytų laukų";
                }
            ?>

    </div>
@endsection

