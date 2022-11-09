<?php
if (session_status() == 1) session_start();
?>
<html>
<link rel="stylesheet" href="stylelogin.php">
<body class="background"> 
<section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-9e13">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-shape-rectangle u-white u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <div class="u-form u-form-1">
                    <?php

                    if (isset($_GET["msg"])) {
                        $msg = 1;
                    } else {
                        $msg = 2;
                    }
                    if ($msg == 1) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">

                            <strong>Usuario o Password incorrectos. Intentelo nuevamente</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <br><br><br><br><br><br>
                    <section class="loginsesion">
                    <form action="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("validar") ?>" method="post" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form";>
                        <div class="u-form-group u-form-name">
                            <label for="name-7bf1" class="u-label1">Usuario</label>
                            <input type="text" placeholder="Introduzca su usuario" id="name-7bf1" name="Usuario" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                        </div>
                        <br>
                        <div class="u-form-email u-form-group">
                            <label for="pass-7bf1" class="u-label2">Contraseña</label>
                            <input type="password" placeholder="Introduzca su contraseña." id="pass-7bf1" name="Contra" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                        </div>
                        <br>
                        <div class="u-align-center u-form-group u-form-submit">
                            <button type="subtmit" class="btn btn-danger btn-lg">Enviar</button>
                        </div>
                        <br>
                        <input type="hidden" value="<?php echo seg::getToken() ?>" name="token">
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="#">Olvidaste la contraseña?</a>
                        <br>
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="#">No tienes cuenta?</a>
                    </form>
            </div>
        </div>
    </div>
    </section>
</section>
</body>
</html>