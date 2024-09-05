<?php
    //Template Name: home
?>

<?php get_header(); ?>
<div class="clear"></div>
<br /><br />
<div class="w50 time-descricao">
    <h2><?php the_field('chamada_topo') ?></h2>
    <p>Consultoria especializad em startups, empresas, e princilapmente, pessoa</p>
    <a target="_blank" href="href://dankicode.com">Ver demostração</a>
</div>
<div class="w50 time-imagem">
    <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/ilustracao.png">
</div>
<div class="clear"></div>
</div>
</section>
<div class="circle"><i class="fas fa-angle-down"></i></div>
<section class="conteudo-da-pagina">
    <?php the_content();?>
</section>

<section class="clientes-slider">
    <div class="center">
        <div style="max-width: 700px; margin: 0 auto;overflow: hidden;" class="slider-container">
            <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/amazon.png" />
            <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/costco.png" />
            <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/dominos.png" />
            <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/uber.png" />
            <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/walmart.png" />
            <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/amazon.png" />
            <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/costco.png" />
            <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/dominos.png" />
            <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/uber.png" />
            <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/walmart.png" />
        </div>
    </div>
    </div>
</section>

<section class="diferenciais">

    <div class="center">
        <h2>Contribuímos de ponta a ponta</h2>

        <div class="icons-diferenciais">

            <div class="box-single-diferenciais">
                <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/ilustracao-01.png" />
                <h3>Ambientes Mobile</h3>
                <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
            </div>

            <div class="box-single-diferenciais">
                <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/ilustracao-02.png" />
                <h3>Ambientes Mobile</h3>
                <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
            </div>

            <div class="box-single-diferenciais">
                <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/ilustracao-03.png" />
                <h3>Ambientes Mobile</h3>
                <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
            </div>
        </div>
    </div>
</section>

<section class="sobre-time">
    <div class="center">
        <div class="w50 time-descricao-2">
            <h2><?php the_field('sobre_home') ?></h2>
            <p><?php the_field('abaixo_de_sobre_home') ?>
            </p>
        </div>
        <div class="w50 img-time">
            <img src=" <?php the_field('imagem_lateral') ?>" />
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="depoimentos">
    <div class="center">
        <h2>Depoimentos</h2>
        <div class="depoimentos-box">
            <div class="depoimento-single">
                <p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in
                    consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in
                    sed laborum irure mollit culpa."</p>
                <p>Guilherme Grillo</p>
                <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/oval-2.png" />
            </div>
            <div class="depoimento-single">
                <p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in
                    consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in
                    sed laborum irure mollit culpa."</p>
                <p>Guilherme Grillo</p>
                <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/oval-2.png" />
            </div>
            <div class="depoimento-single">
                <p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in
                    consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in
                    sed laborum irure mollit culpa."</p>
                <p>Guilherme Grillo</p>
                <img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/oval-2.png" />
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>