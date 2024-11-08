<?php
$this->view('includes/Header');
$this->view('includes/Navbar');
?>

    <div class="container-fluid">
        <i class="fa-solid fa-home"></i> This is home
    </div>

<?php
    echo "<pre>";
    print_r($rows);
    echo "</pre>";
?>

<?php
$this->view('includes/Footer-links');
?>