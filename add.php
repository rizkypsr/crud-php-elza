<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Tambah User</title>
</head>
<body>
    <div class="container mt-3">
        <a class="btn btn-secondary" href="index.php">Kembali ke Home</a> <br><br>
    
        <form action="add.php" method="POST" name="form1">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="mobile">No Hp</label>
                <input type="text" class="form-control" name="mobile">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Add"></input>
        </form>
    </div>

    <?php 
    
    // Ngecek form submit, terus insert data ke database
    if (isset($_POST['submit'])) {
        $name = $_POST['name']; // Simpan nilai dari form ke variabel name
        $email = $_POST['email']; // Simpan nilai dari form ke variabel email
        $mobile = $_POST['mobile']; // Simpan nilai dari form ke variabel mobile

        include_once('config.php');

        // Insert user data ke tabel database
        $result = mysqli_query($mysqli, 
            "INSERT INTO data_users (name, email, mobile) VALUES ('$name', '$email', '$mobile')");

        header("Location:index.php");
    }

     ?>
</body>
</html>