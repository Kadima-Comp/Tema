<?php get_header(); ?>
<?php
if( have_posts() ){
    while( have_posts()){
        the_post();
        ?>
        <header class="headerpages"><!-- PRONTO -->
            <div class="parallax" style="background-image: url(<?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
            echo $thumb_url[0];
            ?>)"></div>
        </header>

        <nav class="navemail"><!-- AJUSTAR POSICIONAMENTO EM XS -->
            <div class="container">
                <h3>Se cadastre e fique por dentro das novidades!</h3><!-- TROCAR -->
                <div class="input-group mb-1">
                    <input type="text" class="capture-email-field form-control" placeholder="E-mail" aria-label="E-mail do usuario" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="capture-email-button btn btn-secondary" type="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </nav>
        <main class="main">
            <div class="row" style="width: 100%">
                <aside class="social social-absolute" id="social-bar">
                    <ul class="no-margin-padding">
                        <!-- MUDAR OS ICONES, ELES TEM LICENCA -->
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </aside>

                <div class="col-xs-12 container"><!-- TROCAR -->
                    <div class="row">

                        <div class="col-md-12">
                            <article class="article-main">
                                <div class="cat">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <a href="#" onclick="cat()">Categoria 1</a>
                                            <p class="autor-date">Autor: <?php the_author(); ?> | <?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?>, às <?php the_time() ?></p>
                                            <h1><?php the_title();?></h1>
                                            <p><?php the_content();?></p>
                                        </div>

                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                </div>

            </div>
        </main>
<script>
    function cat(){

        document.getElementByClass("article-main").children().not("cat").display.block = "none";


    }
</script>
    <?php }
}
?>
<?php get_footer(); ?>