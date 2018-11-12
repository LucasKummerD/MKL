<?php
   require_once ('../model/class.conection.php');
   require_once ('../model/class.requests.php');
   
// aca hay que hacer que cuando se elimine el producto, baje el stock! 

    if(isset($_GET['id_']))
    {
    
       $id = $_GET['id_'];
       
       $request = new Request();
       $resultado =$request->eliminarProductos($id);
       echo $resultado;
       
       header('Location:../consultar_productos.php');  //Ojo!! aca no es esta ruta. Todavía no la armé
    } 
?>