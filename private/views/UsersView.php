<?php
$this->view('includes/Header');
$this->view('includes/Navbar');
?>
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php $this->view('includes/BreadCrumb'); ?>
        <div class="card-group justify-content-center">
            <?php foreach ($rows as  $row): ?>
            <div class="card m-2 shadow" style="max-width: 14rem;min-width: 14rem;">
                <div class="card-header">User Profile</div>
                <img src="assets/img/SA.png" class="card-img-top" alt="User Image">
                <div class="card-body">
                    <h5 class="card-title"><?= ucfirst($row->name) ?> <?= ucfirst($row->surname) ?></h5>
                    <p class="card-text"><?= ucfirst($row->role) ?></p>
                    <a href="#" class="btn btn-primary">Profile</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php
$this->view('includes/Footer-links');
?>