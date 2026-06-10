<?php

$pesan = "";

$username = "admin";
$password = "123";

if(isset($_POST['login'])){

    if(
        $_POST['username'] == $username &&
        $_POST['password'] == $password
    ){

        $pesan = "Login berhasil ✅";

    }else{

        $pesan = "Username atau password salah ❌";

    }
}

include 'partials/header.php';
?>

<div class="container py-5">

    <div class="card shadow p-4">

        <h2 class="text-center mb-4">
            Login Akun
        </h2>

        <form method="POST">

            <label>Username</label>

            <input type="text"
            name="username"
            class="form-control mb-3"
            required>

            <label>Password</label>

            <input type="password"
            name="password"
            class="form-control mb-3"
            required>

            <button type="submit"
            name="login"
            class="btn btn-primary w-100">

                Login

            </button>

        </form>

        <h5 class="text-center mt-3">
            <?php echo $pesan; ?>
        </h5>

    </div>

</div>

<?php include 'partials/footer.php'; ?>