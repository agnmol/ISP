@extends('mainLayouts.home')
@include('layouts.restaurant')
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
                    <input type="text" name="name" placeholder="patiekalo pavadinimas..">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="about">Kaina</label>
                </div>
                <div class="rightcol">
                    <input type="number" class="field" name="price" min="0" placeholder="patiekalo kaiina.."></input>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="about">Aprašymas</label>
                </div>
                <div class="rightcol">
                    <textarea class="about" name="about" placeholder="patiekalo aprašymas.."></textarea>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="grupe">Grupė</label>
                </div>
                <div class="rightcol">
                    <select name="grupe">
                        <?php
                        //echo "<option value=\"".$currentGroup['id']."\">".$currentGroup['pavadinimas']."</option>";
                        while ($row = mysqli_fetch_assoc($grupes)){
                            echo "<option value=\"".$row['id']."\">".$row['pavadinimas']."</option>";
                        }
                        ?>
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
                /*$sql = "update meniu_gaminiai set pavadinimas = '".$_GET['pavadinimas']."', aprasymas = '".$_GET['aprasymas']."',
            kaina = '".$_GET['kaina']."', grupe = '".$_GET['grupe']."' where id = ".$menuItemId;
                $result = mysqli_query($db, $sql);*/
                $pavadinimas = $_GET['name'];
                $kaina = $_GET['price'];
                $aprasymas = $_GET['about'];
                $grupe = $_GET['grupe'];
                $sql = "insert into meniu_gaminiai (pavadinimas, aprasymas, kaina, grupe) VALUES
                ('$pavadinimas', '$aprasymas', '$kaina', '$grupe')";
                mysqli_query($db, $sql);
                header("Location: " . URL::to('/restaurant/'), true, 302);
                exit();
            }
            ?>
    </div>
@endsection

