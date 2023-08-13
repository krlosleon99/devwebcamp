<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>

    <p class="auth__texto">Coloca tu nueuvo password</p>

    <?php include_once __DIR__ . '/../templates/alertas.php'; 
    
        if($token_valido) {
    ?>

    <form method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Nuevo password:</label>
            <input 
                type="password"
                class="formulario__input" 
                placeholder="Tu password"
                name="password" 
                id="password"
            />
        </div>

        <input type="submit" class="formulario__submit" value="Guardar Password">
    </form>

    <?php } ?>

    <div class="acciones">
        <a href="/olvide" class="acciones__enlace">¿Ya tienes cuenta? Inicia sesión</a>
        <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? ¡Crea una!</a>
    </div>
</main>