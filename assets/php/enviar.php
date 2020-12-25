<?php
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];
    $para = 'arydeg@gmail.com';
    echo "<script language='javascript'>
    alert('hola');
    </script>";
    $header = 'From: ' . $email;
    $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Asunto:\n $mensaje";
        echo "<script language='javascript'>
    alert('hola2');
    </script>";  
    /*if ($_POST['submit']) 
    {
                echo "<script language='javascript'>
    alert('hola3');
    </script>";
        if (mail($para, $subject, $msjCorreo, $header)) 
        {
            echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
            </script>";
        } 
        else 
        {
            echo "<script language='javascript'>
            alert('fallado');
            </script>";
        }
    } */
?>