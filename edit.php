<?php

include_once 'config.php';

// Ngecek form submit untuk user update, terus redirect ke home setelah update
if (isset($_POST['update'])) {
    $id = $_POST['id']; // Simpan nilai dari form ke variabel id
    $name = $_POST['name']; // Simpan nilai dari form ke variabel name
    $email = $_POST['email']; // Simpan nilai dari form ke variabel email
    $mobile = $_POST['mobile']; // Simpan nilai dari form ke variabel mobile

    // Update user data ke tabel database
    $result = mysqli_query($mysqli,
        "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");

    // Setelah update pindah ke Home
    header("Location:index.php");
}

?>

<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $oldName = $user_data['name'];
    $oldEmail = $user_data['email'];
    $oldMobile = $user_data['mobile'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Tambah User</title>
</head>

<body>
    <div class="container mt-3">
        <a href="index.php" class="btn btn-secondary">Kembali ke Home</a> <br><br>

        <form action="edit.php" method="POST" name="update_user">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value=<?php echo $oldName ?>>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value=<?php echo $oldEmail ?>>
            </div>
            <div class="form-group">
                <label for="mobile">No Hp</label>
                <input type="text" class="form-control" name="mobile" value=<?php echo $oldMobile ?>>
            </div>
            <input type="hidden" name="id" value=<?php echo $_GET['id'] ?>>
            <input type="submit" class="btn btn-primary" name="update" value="Update">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>