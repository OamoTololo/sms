<?php
$this->view('includes/Header');
$this->view('includes/Navbar');
?>
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php $this->view('includes/BreadCrumb'); ?>

        <div class="row">
            <div class="col-4">
                <img src="assets/img/SA.png" class="border border-danger d-block mx-auto img-fluid rounded-circle" style="width: 150px;">
            </div>
            <div class="col-8 bg-light p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr><th>Name:</th><td>Oamogetswe</td></tr>
                    <tr><th>Surname:</th><td>Mgidi</td></tr>
                    <tr><th>Gender:</th><td>Male</td></tr>
                </table>
            </div>
        </div>

        <div>

        </div>
    </div>
<?php
$this->view('includes/Footer-links');
?>