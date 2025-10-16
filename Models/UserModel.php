<?php
//requerimos la conexión a la base de datos
require_once "Conexion.php";

class UserModel {

    public static function findByEmail(string $email): ?array
    {
        // return "Estoy en el modelo";
        $consultaSql = "SELECT id_usuario, nombre_usuario, email_usuario, password_usuario
                        FROM usuarios
                        WHERE email_usuario = :email_usuario
                        LIMIT 1
        ";

        try{

            $stmt = Conexion::pdo()->prepare($consultaSql);
            $stmt->bindParam(":email_usuario", $email, PDO::PARAM_STR);
            $stmt->execute();

            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario ?: null;

        } catch (PDOException $e){
            error_log("Error en findByEmail: " . $e->getMessage());
            return null;
        }

    }

}