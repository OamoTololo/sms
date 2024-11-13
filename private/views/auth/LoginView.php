<?php
$this->view('includes/Header');
?>
<title>Login</title>
<div class="container-fluid">
    <div class="p-5 mt-5 mx-auto border border-dark shadow rounded" style="width: 100%; max-width: 340px;">
        <h2 class="text-center">SA Schools</h2>
        <img class="border border-primary d-block mx-auto img-fluid rounded-circle" style="width: 100px;" src="assets/img/SA.png" alt="SA Schools Logo">

        <form method="POST">
            <h3 class="text-center">Login</h3>
            <input class="form-control" type="email" name="email" placeholder="Email" required>
            <br>
            <input class="form-control" type="password" name="password" placeholder="Password" required>
            <br>
            <button type="submit" class="btn btn-success w-100">Login</button>
        </form>
    </div>
</div>
<?php
$this->view('includes/Footer-links');
?>
