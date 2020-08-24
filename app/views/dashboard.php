<?php  
// session_start();
    require_once("../includes/header.php"); 

    require_once('../controller/verifica_login.php');
?>


<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<!-- implementar mais ideias para essa home -->

<!-- <h2><a href="logout.php">Sair</a></h2> -->


<?php require_once("../includes/footer.php"); ?>