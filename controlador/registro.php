<?php
include('modelo/conexion.php');
 if (isset($_POST['btnregistrar'])) {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);
    $mensaje = trim($_POST['mensaje']);
    
    if (!empty($nombre) && !empty($email) && !empty($telefono) && !empty($mensaje)) {
        $insertardatos = "INSERT INTO mensaje (nombre, email, telefono, mensaje) VALUES ('$nombre', '$email', '$telefono', '$mensaje')";
        $ejecutar = mysqli_query($connexion, $insertardatos);

        if ($ejecutar) {
            echo "
            <script>
                Swal.fire({
                    icon: 'success',
                    title: '¡Bienvenido!',
                    text: 'Mensaje Enviado',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'contact.php';
                    }
                });
            </script>
            ";
        } else {
            echo "
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Mensaje no enviado: " . mysqli_error($connexion) . "',
                });
            </script>
            ";
        }
    } else {
        echo "
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Campos vacíos!',
                text: 'Por favor completa todos los campos.',
            });
        </script>
        ";
    }
}

?>