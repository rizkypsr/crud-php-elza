<?php

include_once 'config.php';

$keyword = $_GET['keyword'];

$result = mysqli_query($mysqli, "SELECT * FROM data_users WHERE name LIKE '%$keyword%';");

?>

<table class="table" width="80%" border=1>
    <thead class="thead-dark">
        <tr>
            <th>Nama</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Update</th>
        </tr>
    </thead>

    <?php
    // Menampilkan data ke tabel
    while ($user_data = mysqli_fetch_array($result)) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $user_data['name'] . "</td>";
        echo "<td>" . $user_data['mobile'] . "</td>";
        echo "<td>" . $user_data['email'] . "</td>";
        echo "<td><a class='btn btn-primary mr-3' href='edit.php?id=$user_data[id]'>Edit</a><a class='btn btn-danger' href='delete.php?id=$user_data[id]'>Delete</a></td></tr></tbody>";
    }

    ?>
</table>