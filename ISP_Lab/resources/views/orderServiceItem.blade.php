@extends('mainLayouts.home')
@include('layouts.services')
@section('right')
    <div id="contentRight">
        <?php
        $db=mysqli_connect("localhost", "root", "", "isp");
        ?>
        <form action="">
            <div class="row">
                <div class="leftcol">
                    <label for="about">Komentaras</label>
                </div>
                <div class="rightcol">
                    <textarea class="about" name="about" placeholder="komentaras.."></textarea>
                </div>
            </div>

            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
        <?php
        $path = "/ISP/ISP_Lab/public/index.php";
        if (isset($_GET['about'])){
            $aprasymas = $_GET['about'];
            $UserId = 0;
            if ((Session::has('darbuotojas')))
                $UserId = Session('darbuotojas.id');
            else
                $UserId = Session('klientas.id');
            $sql = "insert into paslaugu_uzsakymai (laikas, vykdoma, komentaras, paslauga, klientas) VALUES
                (NOW(), 1, '$aprasymas', '$serviceItemId', '$UserId')";
            mysqli_query($db, $sql);
            header("Location: " . URL::to('/services/'), true, 302);
            exit();
        }
        ?>
    </div>
@endsection

