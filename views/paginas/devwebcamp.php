<main class="devwebcamp">
    <h2 class="devwebcampp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>
    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" src="build/img/sobre_devwebcamp.jpg" alt="Sobre DevWebCamp" width="280" height="300">
            </picture>
        </div>

        <div class="devwebcamp__contenido">
            <p class="devwebcamp__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam iusto provident nihil ad tempora. Laudantium iure quos amet, esse perferendis quod aperiam expedita maiores dolores, mollitia qui nobis nostrum pariatur.</p>
            <p class="devwebcamp__texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis est cumque deleniti nemo consequatur quo. Nesciunt sit accusantium, atque doloribus saepe animi, odit libero tenetur, eligendi quas magnam distinctio reprehenderit?</p>
        </div>
    </div>
</main>