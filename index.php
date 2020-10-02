<?php

// Import file config untuk koneksi ke database
include_once 'config.php';

// Ngambil data dari database, isi nye disimpan di variabel result
$result = mysqli_query($mysqli, "SELECT * FROM users");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="container mt-3">
        <a href="add.php" class="btn btn-success">Tambah User</a> <br><br>

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
            while($user_data = mysqli_fetch_array($result)) {
                echo "<tbody>";
                echo "<tr>";
                echo "<td>" . $user_data['name'] . "</td>";
                echo "<td>" . $user_data['mobile'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td><a class='btn btn-primary mr-3' href='edit.php?id=$user_data[id]'>Edit</a><a class='btn btn-danger' href='delete.php?id=$user_data[id]'>Delete</a></td></tr></tbody>";        
            }
            
            ?>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
