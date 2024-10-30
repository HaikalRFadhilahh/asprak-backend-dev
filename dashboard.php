<?php

require "./koneksi.php";

$query = "SELECT * FROM user";
$data = mysqli_query($sambung, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h2>Data Users (Demo Delete Only)</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nomer</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomer = 1;

            while ($d = mysqli_fetch_array($data)) {
                echo "<tr>";
                echo "<td>$nomer</td>";
                echo "<td> $d[username] </td>";
                echo "<td> $d[password] </td>";
                echo "<td><a href=./proses_delete.php?username=$d[username]>hapus</a></td>";
                echo "</tr>";

                $nomer++;
            }

            ?>
        </tbody>
    </table>
</body>

</html>