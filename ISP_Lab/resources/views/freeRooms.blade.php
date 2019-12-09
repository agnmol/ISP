@extends('mainLayouts.home')
@include('layouts.rooms')
@section('right')
    <div id="contentRight">
        <div id="filter">
            <h2> filtrai: </h2>
            <select>
                <option value="true">Filtras1</option>
                <option value="false">Filtras1</option>
            </select>
            <select>
                <option value="true">Filtras2</option>
                <option value="false">Filtras2</option>
            </select>
        </div>
        <table id="customers">
            <tr>
                <th>Kambario tipas</th>
                <th>Kaina</th>
                <th>Balkonas</th>
                <th>Rūkančiųjų zonoje</th>
                <th></th>
            </tr>
            <?php
            $db = mysqli_connect("localhost", "root", "", "isp");
            $sql = "SELECT dydis, kaina, balkonas, rukanciu_zonoje FROM kambariai";
            $result = mysqli_query($db, $sql);
            while ($rows = mysqli_fetch_assoc($result))
            {
                $sql2 = "SELECT id, name FROM kambariu_dydziai WHERE id = ".$rows['dydis'];
                $row = mysqli_fetch_row(mysqli_query($db, $sql2));
                echo "<tr>";
                echo "<td>".$row[1]. "</td>";
                echo "<td>".$rows['kaina']. "</td>";
                if($rows['balkonas'] == 0)
                    echo "<td>Ne</td>";
                else
                    echo "<td>Taip</td>";
                if($rows['rukanciuju_zonoje'] == 0)
                    echo "<td>Ne</td>";
                else
                    echo "<td>Taip</td>";
                echo "<td><button onclick=\"window.location='{{ url(\"workers/worker\") }}'\" class=\"btn\">Rezervuoti</button></td>";
                echo "</tr>";

            }

            ?>

        </table>

    </div>
@endsection

