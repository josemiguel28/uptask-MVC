<div class="contenedor login">
    <?php include_once __DIR__ . '/../templates/nombre_sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">
            Iniciar sesión
        </p>


        <form class="formulario" action="/" method="post">
            <div class="campo">
                <label for="email">Email</label>
                <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Tu Email">
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Tu Password">
            </div>

            <input type="submit" value="Iniciar Sesión" class="boton">
        </form>

        <div class="acciones">
            <a href="/reset-password">¿Olvidaste tu contraseña?</a>
            <a href="/crear-cuenta">Crear cuenta</a>
        </div>
    </div>

</div>
