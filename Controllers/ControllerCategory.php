<?php

require_once "Models/ModelCategory.php";

class ControllerCategory{

    //Método para crear categorías
    public static function crearCategoria(){
        if($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['nombre_categoria'])){
            return;
        }

        //tomamos el valor y saneamos
        $categoria = trim($_POST['nombre_categoria']);

          // 2) Validar: letras (con acentos), números, espacios y guiones

        if (!preg_match('/^[A-Za-zÁÉÍÓÚáéíóúÑñÜü0-9\s\-]+$/u', $categoria)) {
            echo '
                <script>
                    Swal.fire({
                        title: "Cuidado",
                        text: "No se permiten caracteres especiales.",
                        icon: "error",
                        confirmButtonText: "Entendido"
                    }).then(() => {
                        window.location = "categorias";
                    });
                </script>
            ';
            return;
        }


        // 3) Guardamos en la base de datos usando el modelo - la base de datos debe devolver el id insertado (int)
        $nuevopId = ModelCategory::registrarCategoria($categoria);

        if($nuevopId){
            echo '
                <script>
                    Swal.fire({
                        title: "Registro Exitoso",
                        text: "La categoría se registró exitosamente",
                        icon: "success",
                        confirmButtonText: "Entendido"
                    }).then(() => {
                        window.location = "categorias";
                    });
                </script>
            ';
            return;

        }else{
            echo '
                <script>
                    Swal.fire({
                        title: "Error",
                        text: "No fue posible guardar la categoría. Intenta nuevamente",
                        icon: "error",
                        confirmButtonText: "Entendido"
                    }).then(() => {
                        window.location = "categorias";
                    });
                </script>
            ';
            return;         
}}}
