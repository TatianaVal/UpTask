<div class="contenedor restablecer">

<?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Ingresa tu nuevo Password</p>

        <form class="formulario" method="POST" action="/restablecer">
            

            <div class="campo">
                <label for="password">Password</label>
                <input type="password"
                id="password"
                placeholder="Tu Password"
                name="password">
            </div>

            <input type="submit" class="boton" value="Guardar Password">
        </form>

        <div class="acciones">
            <a href="/crear">Aun no tienes una cuenta? Crear Una.</a>
            <a href="/olvide">Olvidaste tu Password?</a>
        </div>
    </div> <!--.contenedor-sm -->
</div>