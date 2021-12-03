<?php
 include('../Modelo/noticia.php');
 if($_POST){
$ModeloNoticia=new noticia();
$idNT=$_POST['idNoticia'];
$tituloNT=$_POST['titulo'];
$descripcionNT=$_POST['descripcion'];
$textoNT=$_POST['texto'];
$imagenNT=$_FILES['imagen']['name'];
$FechaCreateNT=$_POST['FechaCreate'];
$ModeloNoticia->update($idNT,$tituloNT,$descripcionNT,$textoNT,$imagenNT,$FechaCreateNT);


if(isset($imagenNT) && $imagenNT != ""){
       $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];
        $statement=$ModeloNoticia->getdb()->prepare("CALL proSelectNotVis();");
       $statement->execute();
}
if($statement){
    move_uploaded_file($temp,'../../Usuario/Vista/img/'.$imagenNT);
    echo 'Se subio';
    header('Location:../../usuario/Vista/index.php');
}


}

else{
    header('Location:../Vista/Noticias.php');
}

// if(isset($imagennt) && $imagennt != ""){
//     $tipo = $_FILES['imagenNT']['type'];
//     $temp  = $_FILES['imagen']['tmp_name'];

//    if (!((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))){
//       $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
//       $_SESSION['tipo'] = 'danger';
//       header('Location:../Vista/Noticias.php');
//    }else{
//      $statement=$ModeloNoticia->getdb()->prepare("CALL proSelectNotVis();");
//      $statement->execute();
//     echo "hola :(";
//      if($statement){
//           move_uploaded_file($temp,'../../assets/img/'.$imagennt);
//          $_SESSION['mensaje'] = 'se ha subido correctamente';
//          $_SESSION['tipo'] = 'success';
//          header('Location:../Vista/add.php');
//      }else{
//          $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
//          $_SESSION['tipo'] = 'danger';


//     }
//    }

// }
     ?>
