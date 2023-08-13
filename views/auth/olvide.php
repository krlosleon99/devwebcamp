<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <p class="auth__texto">Recupera tu acceso</p>

    <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

    <form action="/olvide" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email:</label>
            <input 
                type="email"
                class="formulario__input" 
                placeholder="Tu email"
                name="email" 
                id="email"
            />
        </div>

        <input type="submit" class="formulario__submit" value="Enviar instrucciones">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Inicia sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? ¡Crea una!</a>
    </div>
</main>