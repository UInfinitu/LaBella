<?php
    session_start();

        //Endcerra a sessão aberta
    session_destroy();

    
        //Redireciona para o index.php
    header("Location: http://localhost/LaBella/admin/index.php");

?>
