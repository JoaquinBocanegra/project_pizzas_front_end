<?php
session_start();
 if($_SESSION['logueado']){
    $idUpt = $_GET['q'];
    include_once("config_products.php");
    include_once("db.php");
    $link=new Db();
    $sql="SELECT p.id_product as id_product ,product_name, p.price,c.category_name from products p inner join categories c on p.id_category=c.id_category where id_product=".$idUpt;
    $stmt = $link->prepare($sql);
    $stmt->execute();
    $data=$stmt->fetch();
    echo $data['id_product'];
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- no se porque tantos link, necesitabamos la conexion con bootstrap(revisar) -->
   
   <title>Document</title>
</head>
<body>
   <div class="container">
      <div class="row">
           <div class="col-md-12">
               <h3 class="text-center">Actualizar producto</h3>
           </div>
           <div class="col-md-12">
                 <form class="form-group" accept-charset="utf-8" action="update_products.php" method="post">
                  <div class="form-group">
                     <input type="hidden" name="id" value="<?php echo $data['id_product']?>">
                  </div>
                 </form>
           </div>
         </div>
   </div>











<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>