<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información del Evento</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre del Evento:</label>
        <input 
            type="text" 
            class="formulario__input"
            name="nombre"
            id="nombre"
            placeholder="Nombre del evento"
            value="<?php echo $evento->nombre; ?>"
        />
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripción del Evento:</label>
        <textarea
            type="text" 
            class="formulario__input"
            name="descripcion"
            id="descripcion"
            placeholder="Descripcion del evento"
            rows="8"
        ><?php echo $evento->descripcion; ?></textarea>
    </div>

    <div class="formulario__campo">

        <label for="categoria" class="formulario__label">Categorías o Tipo de Evento</label>

        <select 
            name="categoria_id" 
            id="categoria" 
            class="formulario__select"
        >
            <option class="formulario__option">- Seleccionar -</option>
            <?php foreach($categorias as $categoria) { ?>
                <option <?php echo $categoria->id === $evento->categoria_id ? 'selected' : ''; ?> value="<?php echo $categoria->id;?>"><?php echo $categoria->nombre; ?></option>
            <?php } ?>
        </select>

    </div>

    <div class="formulario__campo">
        <label id="dias" for="dias" class="formulario__label">Seleccione el día</label>

        <div class="formulario__radio">
            <?php foreach($dias as $dia) { ?>
                <div>
                    <label for="<?php echo strtolower($dia->nombre); ?>"><?php echo $dia->nombre; ?></label>
                    <input 
                        type="radio"
                        id="<?php echo strtolower($dia->nombre); ?>"
                        name="dia"
                        value="<?php echo $dia->id; ?>"
                        <?php echo ($evento->dia_id === $dia->id) ? 'checked' : ''; ?>
                    >
                </div>
            <?php } ?>
        </div>

        <input type="hidden" name="dia_id" value="<?php echo $evento->dia_id; ?>">

    </div>

    <div class="formulario__campo">
        <label class="formulario__label">Seleccionar hora</label>

        <ul id="horas" class="horas">
            <?php foreach($horas as $hora) { ?>
                <li data-hora-id="<?php echo $hora->id; ?>" name="hora" value="<?php echo $hora->id; ?>" class="horas__hora horas__hora--deshabilitada"><?php echo $hora->hora; ?></li>
            <?php } ?>
        </ul>

        <input type="hidden" name="hora_id" id="hora_id" value="<?php echo $evento->hora_id; ?>">

    </div>
    
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>
    <div class="formulario__campo">
            <label for="ponente" class="formulario__label">Ponente</label>
            <input 
                type="text" 
                class="formulario__input"
                id="ponentes"
                placeholder="Buscar Ponente"
            >

            <ul class="listado-ponentes" id="listado-ponentes"></ul>
            <input type="hidden" name="ponente_id" value="<?php echo $evento->ponente_id; ?>">
        </div>

        <div class="formulario__campo">
            <label for="disponibles" class="formulario__label">Disponibles</label>
            <input 
                type="number" 
                class="formulario__input"
                min="1"
                id="disponibles"
                name="disponibles"
                placeholder="Ejemplo: 5"
                value="<?php echo $evento->disponibles; ?>"
            >
        </div>
</fieldset>