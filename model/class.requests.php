<?php
    class Requests
    {
        
        public function registroProducto($nombre,$descripcion,$id_categoria,$precio)
        {
            $modelo = new Conection();
            $conection = $modelo->getConection();
            $sql = "insert into productos (nombre, descripcion,id_categoria,precio) values (:nombre, :descripcion, :id_categoria,:precio)";
            $preparar = $conection->prepare($sql);
            $preparar->bindParam(":nombre",  $nombre);
            $preparar->bindParam(":descripcion", $descripcion);
            $preparar->bindParam(":id_categoria", $id_categoria);
            $preparar->bindParam(":precio", $precio);
            
            if(!$preparar)
            {
                return "Error al insertar el Producto";
            }else
            {
                $preparar->execute();
                return "Producto creado de manera exitosa..!!!";
            }

        }

        public function eliminarProductos($id)
        {
            $modelo= new Conexion();
            $conexion=$modelo->getConexion();
            $sql = "delete from productos where id =:id";
            $preparar= $conexion->prepare($sql);
            $preparar->bindParam(":id",  $id);  
            if(!$preparar)
            {
                return "Error al eliminar el producto";
            }else
            {
                $preparar->execute();
                return "Producto eliminado de manera exitosa..!!!";
            }
        }

        public function modificarProducto($campo,$valor,$id)
        {
            $modelo = new Conection();
            $conection = $modelo->getConection();
            // $conection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
            $sql = "update productos set $campo = :valor where id = :id";
            $preparar = $conection->prepare($sql);
            
            $preparar->bindParam(":valor",  $valor);
            
            $preparar->bindParam(":id", $id);
            
            if(!$preparar)
            {
                return "Error al modificar el producto";
            }else
            {
                $preparar->execute();
                return "Producto modificado de manera exitosa..!!!";
            }
        }
/*
        //Este metodo carga los registros que van a ser presentados en la consulta, ojo los muestra todos
        public function cargarProductos()
        {
            $row = null;
            $modelo= new Conexion();
            $conexion=$modelo->getConexion();
            $sql = "select * from productos";
            $preparar= $conexion->prepare($sql);
            $preparar->execute();
            while ($resultado = $preparar->fetch())
            {
                $row[]= $resultado;
            }
            return $row;
        }
        
        
        //Este metodo busca un registro que determine el usuario
        public function buscarProductos($nombre)
        {
            
            $row = null;
            $modelo= new Conexion();
            $conexion=$modelo->getConexion();
            $nombre = "%".$nombre."%";
            
            $sql = "select * from productos where nombre like :nombre";
           
            $preparar= $conexion->prepare($sql);
            $preparar->bindParam(":nombre",  $nombre);  
            $preparar->execute();
            while ($resultado = $preparar->fetch())
            {
                $row[]= $resultado;
            }
            return $row;
        }
        //Este metodo carga un sólo registro para luego ser eliminado o a ser modificado (Ojo: El que el usuario seleccione)
        public function cargarProducto($id)
        {
            $row = null;
            $modelo= new Conexion();
            $conexion=$modelo->getConexion();
            $sql = "select * from productos where id = :id";
            $preparar= $conexion->prepare($sql);
            $preparar->bindParam(":id",  $id);  
            $preparar->execute();
            while ($resultado = $preparar->fetch())
            {
                $row[]= $resultado;
            }
            return $row;
        }
 */


    }
?>