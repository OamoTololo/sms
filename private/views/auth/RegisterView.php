<?php
$this->view('includes/Header');
print_r($errors);
?>

    <div class="container-fluid">
        <form action="" method="post">
            <div class="p-5 mt-5 mx-auto border border-dark shadow rounded" style="width: 100%; max-width: 340px;">
                <h2 class="text-center">SA Schools</h2>
                <img class="d-block border border-primary mx-auto img-fluid rounded-circle" style="width: 100px;" src="assets/img/SA.png" alt="Test Image">
                <h3>Register User</h3>
                <input class="my-2 form-control" type="text" name="name" placeholder="Name" autocomplete="off">
                <input class="my-2 form-control" type="text" name="surname" placeholder="Surname" autocomplete="off">
                <input class="my-2 form-control" type="text" name="username" placeholder="Username" autocomplete="off">
                <input class="my-2 form-control" type="date" name="date" placeholder="Email" autocomplete="off">
                <input class="my-2 form-control" type="text" name="url_address" placeholder="URL Address" autocomplete="off">
                <input class="my-2 form-control" type="email" name="email" placeholder="Email" autocomplete="off">
                <select class="my-2 form-control" name="gender" id="gender">
                    <option class="text-center" value="">Gender</option>
                    <option class="" value="female">Female</option>
                    <option class="" value="male">Male</option>
                    <option class="" value="other">Other</option>
                </select>
                <select class="my-2 form-control" name="role" id="role">
                    <option class="text-center" value="">Role</option>
                    <option class="" value="student">Student</option>
                    <option class="" value="receptionist">Receptionist</option>
                    <option class="" value="lecturer">Lecturer</option>
                    <option class="" value="admin">Admin</option>
                    <option class="" value="super_admin">Super Admin</option>
                </select>
                <input class="my-2 form-control" type="password" name="password" placeholder="Password">
                <input class="my-2 form-control" type="password" name="retyped_password" placeholder="Retype Password">
                <br>
                <button class="btn btn-success">Register</button>
            </div>
        </form>
    </div>
<?php
$this->view('includes/Footer-links');
?>