<?php

require_once "Models/Conexion.php";

class ModelCategory
{
    public static function registrarCategoria(string $nombre): ?int{
        
        $nombre = trim($nombre);
        
        if($nombre === ''){
            return null;
        }

        $sql = "INSERT INTO categorias (nombre_categoria) VALUES (:nombre_categoria)";

        try{
            $pdo = Conexion::pdo();
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':nombre_categoria', $nombre, PDO::PARAM_STR);

            if(!$stmt->execute()){
                return null;
            }

            $id = (int) $pdo->lastInsertId();
            return $id > 0 ? $id : null;

        }catch (PDOException $e){
            //nunca mostrar detalles al usuario; solo loguear
            error_log("Error en registrarCategoria: " . $e->getMessage());
            return null;


        }
    }
    
    }
