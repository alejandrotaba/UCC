<?php

require_once "Models/UserModel.php";

class UserController
{
    public function login(){

        if(isset($_POST['email']) && isset($_POST['password']))
        {
            $email    = $_POST['email'];
            $password = $_POST['password'];

            if(
                filter_var($email, FILTER_VALIDATE_EMAIL) &&
                preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $password)
            ){
                //Consulta base de Datos
                $usuario = UserModel::findByEmail($email);

                // var_dump($usuario);
                // return;
                //la password que viene de base de datos    
                $passBD = $usuario["password_usuario"];

                //Valido que la contraseña sea igual a la base de datos
                if($usuario && $passBD !== null && $password === $passBD){
                    $_SESSION['admin'] = "ok";
                    $_SESSION['nombre'] = $usuario["nombre_usuario"];
                    // header('Location: dashboard');

                        echo '
                            <script>
                                window.location = "dashboard"
                            </script>
                        ';
                    exit;

                }else{
                    echo '<div class="alert alert-danger mt-3">
                            Error, Usuario o contraseña incorrectos 
                        </div>';
                        
                    return;     
                }

            }else{
                echo '<div class="alert alert-danger mt-3">Error, Ingresa valores válidos </div>';
                return;
            }

        }
    }


}