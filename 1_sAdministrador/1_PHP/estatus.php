<?php

if (isset($_POST['sendForm'])) {
    if (isset($_POST['conditions']) && $_POST['conditions'] == '1')
        echo '<div class="alert alert-success">dado de baja.</div>';
        
        if (isset($_POST['conditions']) && $_POST['conditions'] == '2')
        echo '<div class="alert alert-success">falta docimentos</div>';
        
        if (isset($_POST['conditions']) && $_POST['conditions'] == '3')
        echo '<div class="alert alert-success">falta archivos.</div>';
        
        if (isset($_POST['conditions']) && $_POST['conditions'] == '4')
        echo '<div class="alert alert-success">Felicidades todo correcto.</div>';
    else
        echo '<div class="alert alert-danger">Debes aceptar las condiciones de uso.</div>';
}

?>