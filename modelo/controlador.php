<?php

 include('conexion.php');

if(!empty($_POST["enviados"])){
    if(empty($_POST['usuario']) && empty($_POST['pass'])){
        echo "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'warning',
                    title: 'Error!',
                    text: 'Datos vacios.',
                });
            });
        </script>
    ";
    }
    elseif (empty($_POST['usuario'])){
        echo "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'warning',
                    title: 'Error!',
                    text: 'Usuario Vacio.',
                });
            });
        </script>
    ";
        
    }elseif (empty($_POST['pass'])){
        echo "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'warning',
                    title: 'Error!',
                    text: 'Ingrese su Contraseña',
                });
            });
        </script>
    ";
    }
    
    else{
        $user=$_POST["usuario"];
        $pass=$_POST["pass"];
        $Sql = "SELECT * FROM usuario WHERE Usuario = '$user' AND clave ='$pass'";
        $result = mysqli_query($connexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Usuario'] === $user && $row['clave'] === $pass) {
               
                echo "
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: '¡Bienvenido!',
                            text: 'Credenciales válidas',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'dash.php';
                            }
                        });
                    });
                </script>
            ";
            
            }else {
                echo "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Credenciales Invalidas',
                });
            });
        </script>
    ";
                
            }

        }else {
            echo "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Credenciales Invalidas',
                });
            });
        </script>
    ";
            
        }
    }
}
