
<?php include 'header.php';


?>

    <!-- Empezamos con la fuente -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <!-- Finaliza. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include 'main_sidebar.php';?>

        <!-- navegacion superior -->
       <?php include 'top_nav.php';?>      <!-- /fin de navegacion -->
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
  </style>
         <?php            
          //Añadimos un condicionar de id_temporada (recibiendo el dato de label)
                    if(isset($_REQUEST['id_temporada'])) {
                      $id_temporada=$_REQUEST['id_temporada'];
                    } else{
                      $id_temporada=$_POST['id_temporada'];
                    }
         ?>