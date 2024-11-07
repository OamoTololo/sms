<?php
$this->view('includes/header');
?>
    <title>Login</title>
    <div class="container-fluid">
        <div class="p-5 mt-5 mx-auto shadow rounded" style="width: 100%; max-width: 340px;">
            <h2 class="text-center">SA Schools</h2>
            <img class="d-block mx-auto img-fluid rounded-circle" style="width: 100px;" src="assets/img/SA.png" alt="Test Image">
            <h3>Register</h3>
            <input class="form-control" type="text" name="name" placeholder="Name" autocomplete="off">
            <br>
            <input class="form-control" type="text" name="surname" placeholder="Surname" autocomplete="off">
            <br>
            <input class="form-control" type="date" name="date" placeholder="Email" autocomplete="off">
            <br>
            <input class="form-control" type="text" name="url_address" placeholder="URL Address" autocomplete="off">
            <br>
            <input class="form-control" type="text" name="gender" placeholder="Gender" autocomplete="off">
            <br>
            <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off">
            <br>
            <input class="form-control" type="password" name="password" placeholder="Password">
            <br>
            <button class="btn btn-success">Login</button>
        </div>
    </div>
<?php
$this->view('includes/footer-links');
?>