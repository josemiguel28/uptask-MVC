<div class="contenedor crear">

    <?php include_once __DIR__ . '/../templates/nombre_sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">
            Crea tu cuenta en UpTask
        </p>


        <form class="formulario" action="/" method="post">

            <div class="campo">
                <label for="nombre">Nombre</label>
                <input
                        type="text"
                        name="nombre"
                        id="nombre"
                        placeholder="Tu Nombre">
            </div>

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

            <div class="campo">
                <label for="confirmPassword">Repite tu contraseña</label>
                <input
                        type="password"
                        name="confirmPassword"
                        id="confirmPassword"
                        placeholder="Repite tu contraseña">
            </div>

            <input type="submit" value="Iniciar Sesión" class="boton">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
            <a href="/reset-password">¿Olvidaste tu contraseña?</a>
        </div>
    </div>

</div>
