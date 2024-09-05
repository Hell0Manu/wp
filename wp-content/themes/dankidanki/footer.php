<?php
$title = get_the_title();
?>

<footer <?php if ($title == 'contato') {
    echo 'style="padding:20px 0;"';
} ?>>
    <?php
    if ($title != 'contato' && is_404() == false) {
        ?>
        <section class="metodologia">
            <div class="center">
                <h2>Conheça nossa Metodologia</h2>
                <p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br />Entre em contato por e-mail ou
                    telefone.</p>
                <a href="/contato">Entrar Contato</a>
            </div>
        </section>
    <?php } ?>
    <div class="center">
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="">Contato</a>
            <a href="">FAQ</a>
        </div>
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="">Contato</a>
            <a href="">FAQ</a>
        </div>
        <div class="col-footer">
            <h2>Suporte</h2>
            <a href="">Contato</a>
            <a href="">FAQ</a>
        </div>
        <div style="width: 40%;text-align: right;" class="col-footer">
            <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/logo-dummy.png" />
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="<?php echo get_theme_root_uri(); ?> /dankidanki/js/jquery.js"></script>
<script src="<?php echo get_theme_root_uri(); ?> /dankidanki/js/slick.min.js"></script>
<script>
    $('section.clientes-slider .slider-container').slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 1000,
        slidesToShow: 4,
        autoplay: true,
        centerMode: false,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        responsive:
            [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
    });

    $('section.depoimentos .depoimentos-box').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 2000,
        slidesToShow: 1,
        autoplay: true,
        centerMode: false
    });
</script>
<script>
    $('.menu-mobile i').click(function () {
        $('.menu-mobile').find('ul').slideToggle();
    })
</script>
</body>

</html>