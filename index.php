<?php include 'extend/header.php'; ?>


<div class="wrapper">
    <div class="one">
        <h1>si ya estas registrado, inicia sesión</h1>
        <form>
            <!-- USER NAME  -->
            <input type="text" name="mail" placeholder="Ingresa tu correo electrónico" id="mail">
            <input type="text" name="password" placeholder="Ingresa tu Ingresa tu contraseña" id="password">
            <input type="checkbox" id="remember_me" name="_remember_me" checked>
            <label for="remermber_me">Recuérdame</label>
            <a href="#">Olvidaste tu contraseña</a>
            <input type="submit" name="login">

            <p>O ingresa con</p>
            <div class="social-login"><i class="fab fa-facebook-f"></i><a href="#">Facebook</a></div>
            <div class="social-login"><i class="fab fa-google"></i><a href="#">Google</a></div>
        </form>
    </div>

    <div class="two">
        <h1>¿ERES NUEVO CLIENTE?</h1>
        <h2>REGÍSTRATE</h2>
        <input type="text" name="name" placeholder="Nombre*" id="name">
        <input type="text" name="last_name" placeholder="Apellido*" id="last_name">
        <input type="number" name="id_card" placeholder="No. de Cédula" id="id_card">
        <input type="text" name="email" placeholder="E-mail*" id="email">
        <input type="text" name="password_register" placeholder="Contraseña" id="password_register">
        <label>Ciudad</label>
        <input type="checkbox" name="advertising" id="advertising">
        <label for="">Acepto recibir publicidad sobre ofertas o promociones en mi correo electrónico.</label>
        <input type="checkbox" name="terms" id="terms">
        <label for="">Acepto los <a href="#">Términos y condiciones.</a></label>
        <hr>
        <input type="checkbox" name="terms" id="terms">
        <label for="">Registrar a nombre de empresa</label>
        <input type="submit" name="register">

        <p>O ingresa con</p>
        <div class="social-login"><i class="fab fa-facebook-f"></i><a href="#">Facebook</a></div>
        <div class="social-login"><i class="fab fa-google"></i><a href="#">Google</a></div>



    </div>
</div>



<?php include 'extend/footer.php'; ?> 