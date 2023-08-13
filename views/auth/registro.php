<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <p class="auth__texto">Regístrate en DevWebCamp</p>

    <?php require_once __DIR__ .'/../templates/alertas.php'; ?>

    <form action="/registro" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre:</label>
            <input 
                type="text"
                class="formulario__input" 
                placeholder="Tu nombre"
                name="nombre" 
                id="nombre"
                value="<?php echo $usuario->nombre; ?>"
            />
        </div>

        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido:</label>
            <input 
                type="text"
                class="formulario__input" 
                placeholder="Tu apellido"
                name="apellido" 
                id="apellido"
                value="<?php echo $usuario->apellido; ?>"
            />
        </div>

        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email:</label>
            <input 
                type="email"
                class="formulario__input" 
                placeholder="Tu email"
                name="email" 
                id="email"
                value="<?php echo $usuario->email; ?>"
            />
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password:</label>
            <input 
                type="password"
                class="formulario__input" 
                placeholder="Tu password"
                name="password" 
                id="password"
            />
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir password:</label>
            <input 
                type="password"
                class="formulario__input" 
                placeholder="Repite tu password"
                name="password2" 
                id="password2"
            />
        </div>

        <input type="submit" class="formulario__submit" value="Crear Cuenta">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>