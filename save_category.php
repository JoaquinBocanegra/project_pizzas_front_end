<?php
//$product = $_POST['producto'];
//$price = $_POST['precio'];
$category = $_POST['categoria'];

include_once("config_products.php");
include_once("db.php");

$link = new Db();
//include_once("upload_image.php");
//$path_img = $directorio . $nombre_img; //Ruta completa de la imagen levantada.
$sql = "INSERT into categories (category_name) VALUES (:category)";
$stmt = $link->prepare($sql);
//$stmt->bindValue(':product', $product);
//$stmt->bindValue(':price', $price);
$stmt->bindValue('category', $category);
//$stmt->bindValue(':path_img', $path_img); //No es necesario sanear la imagen.
if ($stmt->execute()) {
?>
    <script>
        alert("Categoria ingresado correctamente!");
        window.location ="insert_products.php";
    </script>
<?php
}

?>