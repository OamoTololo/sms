<?php
$this->view('includes/Header');
$this->view('includes/Navbar');
?>
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php $this->view('includes/BreadCrumb'); ?>

        <div class="row">
            <div class="col-sm-4 col-md-3">
                <img src="assets/img/SA.png" class="border border-danger d-block mx-auto img-fluid rounded-circle" style="width: 150px;">
                <h3 class="text-center">Oamogetswe</h3>
            </div>
            <div class="col-sm-8 col-md-9 bg-light p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr><th>Name:</th><td>Oamogetswe</td></tr>
                    <tr><th>Surname:</th><td>Mgidi</td></tr>
                    <tr><th>Gender:</th><td>Male</td></tr>
                    <tr><th>Date Created:</th><td>08 Nov 2024</td></tr>
                </table>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tests</a>
                </li>
            </ul>
            <nav class="navbar bg-light">
                <form class="form-check-inline">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp;</span>
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                    </div>
                </form>
            </nav>
        </div>
    </div>
<?php
$this->view('includes/Footer-links');
?>