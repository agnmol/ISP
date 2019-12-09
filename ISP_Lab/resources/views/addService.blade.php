@extends('mainLayouts.home')
@include('layouts.services')
@section('right')
    <div id="contentRight">
        <?php
        $db=mysqli_connect("localhost", "root", "", "isp");
        $sql = "select * from grupes";
        $grupes = mysqli_query($db, $sql);
        ?>
        <form action="">
            <div class="row">
                <div class="leftcol">
                    <label for="name">Pavadinimas</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="name" placeholder="paslaugos pavadinimas..">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="about">Kaina</label>
                </div>
                <div class="rightcol">
                    <input type="number" class="field" name="price" min="0" placeholder="paslaugos kaina.."></input>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="about">Aprašymas</label>
                </div>
                <div class="rightcol">
                    <textarea class="about" name="about" placeholder="paslaugos aprašymas.."></textarea>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="grupe">Grupė</label>
                </div>
                <div class="rightcol">
                    <select name="grupe">
                        <?php
                        while ($row = mysqli_fetch_assoc($grupes)){
                            echo "<option value=\"".$row['id']."\">".$row['pavadinimas']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="galima">Galima</label>
                </div>
                <div class="rightcol">
                    <select name="galima">
                        <option value=\"1\">Taip</option>
                        <option value=\"0\">Ne</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
        <?php
        $path = "/ISP/ISP_Lab/public/index.php";
        if (isset($_GET['name']) && isset($_GET['price']) && isset($_GET['about']) && isset($_GET['grupe'])){
            $pavadinimas = $_GET['name'];
            $kaina = $_GET['price'];
            $aprasymas = $_GET['about'];
            $grupe = $_GET['grupe'];
            $galima = $_GET['galima'];
            $sql = "insert into paslaugos (pavadinimas, aprasymas, kaina, grupe, galima) VALUES
                ('$pavadinimas', '$aprasymas', '$kaina', '$grupe', '$galima')";
            mysqli_query($db, $sql);
            header("Location: " . URL::to('/services/'), true, 302);
            exit();
        }
        ?>
    </div>
@endsection

