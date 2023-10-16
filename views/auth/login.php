<div class="contenedor login">

<?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>

        <form class="formulario" method="POST" action="/">
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email"
                id="email"
                placeholder="Tu E-mail"
                name="email">
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input type="password"
                id="password"
                placeholder="Tu Password"
                name="password">
            </div>

            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>

        <div class="acciones">
            <a href="/crear">Aun no tienes una cuenta? Crear Una.</a>
            <a href="/olvide">Olvidaste tu Password?</a>
        </div>
    </div> <!--.contenedor-sm -->
</div>