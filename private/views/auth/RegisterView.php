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
                <input class="my-2 form-control" value="<?= getVar('name'); ?>" type="text" name="name" placeholder="Name" autocomplete="off">
                <input class="my-2 form-control" value="<?= getVar('surname'); ?>" type="text" name="surname" placeholder="Surname" autocomplete="off">
                <input class="my-2 form-control" value="<?= getVar('username'); ?>" type="text" name="username" placeholder="Username" autocomplete="off">
                <input class="my-2 form-control" type="date" value="<?= getVar('date'); ?>" name="date" placeholder="Date" autocomplete="off">
                <input class="my-2 form-control" value="<?= getVar('url_address'); ?>" type="text" name="url_address"
                       placeholder="URL Address"  autocomplete="off">
                <input class="my-2 form-control" value="<?= getVar('email'); ?>"  type="email" name="email" placeholder="Email" autocomplete="off">
                <select class="my-2 form-control" name="gender" id="gender">
                    <option <?= getSelect('gender', ''); ?> class="text-center" value="">Gender</option>
                    <option <?= getSelect('gender', 'female'); ?> class="" value="female">Female</option>
                    <option <?= getSelect('gender', 'male'); ?> class="" value="male">Male</option>
                    <option <?= getSelect('gender', 'other'); ?> class="" value="other">Other</option>
                </select>
                <select class="my-2 form-control" name="role" id="role">
                    <option <?= getSelect('role', ''); ?>  class="text-center" value="">Role</option>
                    <option <?= getSelect('role', 'student'); ?>  class="" value="student">Student</option>
                    <option <?= getSelect('role', 'receptionist'); ?>  class="" value="receptionist">Receptionist</option>
                    <option <?= getSelect('role', 'lecturer'); ?>  class="" value="lecturer">Lecturer</option>
                    <option <?= getSelect('role', 'admin'); ?>  class="" value="admin">Admin</option>
                    <option <?= getSelect('role', 'super_admin'); ?>  class="" value="super_admin">Super Admin</option>
                </select>
                <input class="my-2 form-control" value="<?= getVar('password'); ?>" type="password" name="password" placeholder="Password">
                <input class="my-2 form-control" value="<?= getVar('retyped_password'); ?>" type="password" name="retyped_password" placeholder="Retype Password">
                <br>
                <button class="btn btn-success">Register</button>
            </div>
        </form>
    </div>
<?php
$this->view('includes/Footer-links');
?>