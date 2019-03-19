<?php include 'header.php';?>

<div class="login">
    <div class="one">
        <h1>si ya estas registrado, inicia sesión</h1>
        <form name="login" method="POST" action="index.php">
            <!-- USER NAME  -->
            <input type="text" name="mail" placeholder="Ingresa tu correo electrónico" id="mail">
            <input type="password" name="password" placeholder="Ingresa tu contraseña" id="password">
            <div class="checkbox">
                <input type="checkbox" class="input-remember" id="input-rememeber" />
                <label for="input-rememeber">Recuérdame</label>
                <a href="#">Olvidaste tu contraseña</a>
            </div>
            <button type="submit" class="button-blue" name="login" value="Login">INICIAR SESIÓN</button>

            <div class="paragraph"><hr class="hr-left"><p>O ingresa con</p><hr class="hr-right"></div>
            <div class="social">
                <div class="social-login left"><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></div>
                <div class="social-login right"><a href="#"><i class="fab fa-google"></i>Google</a></div>
            </div>
            <hr class="center">
        </form>
    </div>

    <div class="middle">
        <hr>
        <h1>realiza tu compra como invitado</h1>
        <input type="text" name="correo" placeholder="Ingresa tu correo electrónico" id="correo">
        <button>seguir</button>
        <hr>
    </div>

    <?php if(!empty($message)): ?>
    <p><?php $message ?></p>
    <?php endif ?>

    <div class="two">
        <h1 class="h1-right">¿ERES NUEVO CLIENTE?</h1>
        <h2>REGÍSTRATE</h2>
        <form name="signin" method="POST" action="index.php">
            <input type="text" name="name" placeholder="Nombre*" id="name">
            <input type="text" name="last_name" placeholder="Apellido*" id="last_name">
            <input type="text" name="id_card" placeholder="No. de Cédula" id="id_card">
            <input type="text" name="email" placeholder="E-mail*" id="email">
            <input type="password" name="password_register" placeholder="Contraseña" id="password_register">
            <div class="city">
                <label>Ciudad</label>
                <input type="text" name="citi" placeholder="Ciudad" id="citi">
            </div>
            <div>
                <input type="checkbox" name="advertising" id="advertising">
                <label for="">Acepto recibir publicidad sobre ofertas o promociones en mi correo electrónico.</label>
            </div>
            <div>
                <input type="checkbox" name="terms" id="terms">
                <label for="">Acepto los <a href="#">Términos y condiciones.</a></label>
            </div>
            <hr class="two-center">
            <input type="checkbox" name="comany-singin" id="comany-singin">
            <label for="comany-singin" class="company-singin">Registrar a nombre de empresa</label>
            <fieldset id="hidden-div">
                <input type="text" name="company" placeholder="Nombre de la empresa *" id="company">
                <input type="text" name="nit" placeholder="NIT *" id="nit">
            </fieldset>


            <input type="submit" class="button-yellow" value="FINALIZAR REGISTRO">

            <div class="paragraph"><hr class="hr-left"><p>O ingresa con</p><hr class="hr-right"></div>
            <div class="social right">
                <div class="social-login left"><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></div>
                <div class="social-login right"><a href="#"><i class="fab fa-google"></i>Google</a></div>
            </div>
        </form>
    </div>
</div>



<?php include 'footer.php'; ?> 