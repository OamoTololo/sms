<?php
$this->view('includes/Header');
?>

<div class="container-fluid">
    <form action="" method="post">
        <div class="p-5 mt-5 mx-auto border border-dark shadow rounded" style="width: 100%; max-width: 340px;">
            <h2 class="text-center">SA Schools</h2>
            <img class="d-block border border-primary mx-auto img-fluid rounded-circle" style="width: 100px;" src="assets/img/SA.png" alt="Test Image">
            <h3 class="text-center">Register User</h3>

            <!-- Name Field -->
            <input class="my-2 form-control <?= isset($errors['name']) ? 'is-invalid has-tooltip' : ''; ?>"
                   value="<?= htmlspecialchars(getVar('name')); ?>" type="text" name="name" placeholder="Name" autocomplete="off"
                   title="<?= isset($errors['name']) ? htmlspecialchars($errors['name']) : ''; ?>">

            <!-- Surname Field -->
            <input class="my-2 form-control <?= isset($errors['surname']) ? 'is-invalid has-tooltip' : ''; ?>"
                   value="<?= htmlspecialchars(getVar('surname')); ?>" type="text" name="surname" placeholder="Surname" autocomplete="off"
                   title="<?= isset($errors['surname']) ? htmlspecialchars($errors['surname']) : ''; ?>">

            <!-- Username Field -->
            <input class="my-2 form-control <?= isset($errors['username']) ? 'is-invalid has-tooltip' : ''; ?>"
                   value="<?= htmlspecialchars(getVar('username')); ?>" type="text" name="username" placeholder="Username" autocomplete="off"
                   title="<?= isset($errors['username']) ? htmlspecialchars($errors['username']) : ''; ?>">

            <!-- Date Field -->
            <input class="my-2 form-control <?= isset($errors['date']) ? 'is-invalid has-tooltip' : ''; ?>"
                   type="date" value="<?= htmlspecialchars(getVar('date')); ?>" name="date" placeholder="Date" autocomplete="off"
                   title="<?= isset($errors['date']) ? htmlspecialchars($errors['date']) : ''; ?>">

            <!-- Email Field -->
            <input class="my-2 form-control <?= isset($errors['email']) ? 'is-invalid has-tooltip' : ''; ?>"
                   value="<?= htmlspecialchars(getVar('email')); ?>" type="email" name="email" placeholder="Email" autocomplete="off"
                   title="<?= isset($errors['email']) ? htmlspecialchars($errors['email']) : ''; ?>">

            <!-- Gender Field -->
            <select class="my-2 form-select form-control <?= isset($errors['gender']) ? 'is-invalid has-tooltip' : ''; ?>"
                    name="gender" id="gender"
                    title="<?= isset($errors['gender']) ? htmlspecialchars($errors['gender']) : ''; ?>">
                <option <?= getSelect('gender', ''); ?> value="">Gender</option>
                <option <?= getSelect('gender', 'female'); ?> value="female">Female</option>
                <option <?= getSelect('gender', 'male'); ?> value="male">Male</option>
                <option <?= getSelect('gender', 'other'); ?> value="other">Other</option>
            </select>

            <!-- Role Field -->
            <select class="my-2 form-select form-control <?= isset($errors['role']) ? 'is-invalid has-tooltip' : ''; ?>"
                    name="role" id="role"
                    title="<?= isset($errors['role']) ? htmlspecialchars($errors['role']) : ''; ?>">
                <option <?= getSelect('role', ''); ?> value="">Role</option>
                <option <?= getSelect('role', 'student'); ?> value="student">Student</option>
                <option <?= getSelect('role', 'receptionist'); ?> value="receptionist">Receptionist</option>
                <option <?= getSelect('role', 'lecturer'); ?> value="lecturer">Lecturer</option>
                <option <?= getSelect('role', 'admin'); ?> value="admin">Admin</option>
                <option <?= getSelect('role', 'super_admin'); ?> value="super_admin">Super Admin</option>
            </select>

            <!-- Password Field -->
            <input class="my-2 form-control <?= isset($errors['password']) ? 'is-invalid has-tooltip' : ''; ?>"
                   value="<?= htmlspecialchars(getVar('password')); ?>" type="password" name="password" placeholder="Password"
                   title="<?= isset($errors['password']) ? htmlspecialchars($errors['password']) : ''; ?>">


            <br>
            <button class="btn btn-success w-100">Register</button>
        </div>
    </form>
</div>

<?php
$this->view('includes/Footer-links');
?>
