@extends('mainLayouts.home')
@include('layouts.rooms')
@section('right')
    <div id="contentRight">
        <table id="customers">
            <tr>
                <th>Data Nuo</th>
                <th>Data Iki</th>
                <th>Tipas</th>
                <th>Kaina</th>
                <th>Įvertinti</th>
                <th>Šalinti</th>

            </tr>
            <?php
            $db = mysqli_connect("localhost", "root", "", "isp");
            $sql3 = "SELECT data_nuo, data_iki, kambarys, id FROM kambariu_rezervacijos WHERE klientas ='".session('klientas.id')."'";
            $result = mysqli_query($db, $sql3);
            while ($rows = mysqli_fetch_assoc($result))
            {


                $sql = "SELECT dydis, kaina, balkonas, rukanciu_zonoje FROM kambariai WHERE id = '".$rows['kambarys']."'";
                $row = mysqli_fetch_row(mysqli_query($db, $sql));
                $sql2 = "SELECT id, name FROM kambariu_dydziai WHERE id = '".$row[0]."'";
                $row2 = mysqli_fetch_row(mysqli_query($db, $sql2));
                $id = $rows['id'];
                echo "<tr>";
                //echo "<td>".$row[1]. "</td>";
                echo "<td>".$rows['data_nuo']. "</td>";
                echo "<td>".$rows['data_iki']. "</td>";
                echo "<td>".$row2[1]. "</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td><a href=\"user-rate?id=$id\" class=\"btn\">Įvertinti</a></td>";
                echo "<td><a href=\"user-reservations-delete?id=$id\" class=\"btn\">Šalinti</a></td>";
                echo "</tr>";

            }

            ?>

        </table>

    </div>
@endsection

