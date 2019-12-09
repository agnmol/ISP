@extends('mainLayouts.home')
@include('layouts.services')
@section('right')
    <?php
        $db=mysqli_connect("localhost", "root", "", "isp");
        $sql = "select * from paslaugos where id = ".$serviceItemId;
        $currentMenuItem = mysqli_fetch_assoc(mysqli_query($db, $sql));
        //$sql = "select grupe from meniu_gaminiai where id = ".$menuItemId;
        //$result = mysqli_query($db, $sql);
        $sql = "select * from grupes where id = ".$currentMenuItem['grupe'];
        $currentGroup = mysqli_fetch_assoc(mysqli_query($db, $sql));
        $sql = "select * from grupes where id <> ".$currentGroup['id'];
        $allGroups = mysqli_query($db, $sql);


    ?>
    <div id="contentRight">
        <form action="" method="get">
            <div class="row">
                <div class="leftcol">
                    <label for="pavadinimas">Pavadinimas</label>
                </div>
                <div class="rightcol">
                    <input style="width:150px" type="text" name="pavadinimas" value="<?php echo $currentMenuItem['pavadinimas'];?>">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="kaina">Kaina</label>
                </div>
                <div class="rightcol">
                    <input type="number" min="0" name="kaina" value="<?php echo $currentMenuItem['kaina'];?>"></input>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="aprasymas">Aprašymas</label>
                </div>
                <div class="rightcol">
                    <textarea class="about" name="aprasymas" placeholder="Paslaugos aprašymas"><?php echo $currentMenuItem['aprasymas'];?></textarea>
                </div>
            </div>

            <div class="row">
                <div class="leftcol">
                    <label for="grupe">Grupė</label>
                </div>
                <div class="rightcol">
                    <select name="grupe">
                    <?php
                        echo "<option value=\"".$currentGroup['id']."\">".$currentGroup['pavadinimas']."</option>";
                        while ($row = mysqli_fetch_assoc($allGroups)){
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
                        <?php
                        $galima = $currentMenuItem['galima'];
                        if ($galima == 1)
                            {
                                echo "<option selected=\"selected\" value=\"1\">Taip</option>";
                                echo "<option value=\"0\">Ne</option>";
                            }
                        else
                            {
                                echo "<option value=\"1\">Taip</option>";
                                echo "<option selected=\"selected\" value=\"0\">Ne</option>";
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
        if (isset($_GET['pavadinimas']) && isset($_GET['kaina']) && isset($_GET['aprasymas']) && isset($_GET['grupe'])  && isset($_GET['galima'])){
            $sql = "update paslaugos set pavadinimas = '".$_GET['pavadinimas']."', aprasymas = '".$_GET['aprasymas']."',
            kaina = '".$_GET['kaina']."', grupe = '".$_GET['grupe']."', galima='".$_GET['galima']."' where id = ".$serviceItemId;
            $result = mysqli_query($db, $sql);
            header("Location: " . URL::to('/services/'), true, 302);
            exit();
        }
        ?>
    </div>
@endsection
