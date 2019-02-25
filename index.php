<?php get_header(); ?>
<?php $home = get_template_directory_uri(); ?>
<header class="header">
    <div class="container-fluid"><!-- IMG GRATUITA -->
        <h1><!--<img src="img/seta.png" height="12%"/>--><?php bloginfo($show = 'name'); ?></h1><h2><?php bloginfo($show = 'description'); ?></h2>
    </div>
</header>
<nav class="navemail"><!-- AJUSTAR POSICIONAMENTO EM XS -->
    <div class="container">
        <h3>Se cadastre e fique por dentro das novidades!</h3>
        <div class="input-group mb-3">
            <input type="text" class="capture-email-field form-control" placeholder="E-mail" aria-label="E-mail do usuario" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="capture-email-button btn btn-secondary" type="submit">Enviar</button>
            </div>
        </div>
    </div>
</nav>
<main class="main">
    <div class="row" style="width: 100%">

        <?php if(is_active_sidebar('sidebar-2')): ?>
        <aside class="social social-absolute" id="social-bar"><!-- FADE EM ANDAMENTO -->
            <ul class="no-margin-padding">
        <?php dynamic_sidebar( 'sidebar-2' )?>
            </ul>
        </aside>
        <?php endif; ?>




        <div id="art" class="col-xs-12 col-md-9">
            <!-- AQUI CRIA O BOTÃO PARA TIRAR A SELEÇÃO DE CATEGORIA -->
            <div class="row">
                <?php
                if(have_posts()){
                while(have_posts()){
                the_post();
                ?>

                <div class="col-md-12" name="">
                    <article class="article-main">
                        <div class="row">
                            <div class="col-md-4" style="display: block">
                                <img class="thumbnail" src="<?php
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                echo $thumb_url[0];
                                ?>">
                            </div>
                            <div class="col-md-8">
                                <a href="#" name="category" onclick="listaCat()">Categoria 1</a><!-- ATUALIZAR 'Categoria 1' COM VARIÁVEL PHP -->
                                <p class="autor-date">Autor: <?php the_author(); ?> | <?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?>, às <?php the_time() ?></p>
                                <h1><?php the_title();?></h1>
                                <p><?php the_content();?></p>
                                <a href="<?php the_permalink(); ?>">Leia Mais...</a>
                            </div>

                        </div>
                    </article>
                </div>

                <?php
                }
                }
                ?>


                <nav aria-label="..." class="pages-group">
                    <ul class="pagination justify-content-center">
                        <div class="paginacao-main"><?php wordpress_pagination(); ?></div>

                    </ul>
                </nav>


                <!--

                 <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1<span class="sr-only">(current)</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">2 </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                 -->

            </div>
        </div>
        <div class="col-xs-12 col-md-3"><!-- AJUSTAR NO TAMANHO XS -->
            <div class="row container">
                <aside class="sidebar">

                    <!-- Widget -->
                    <?php if(is_active_sidebar('sidebar-1')): ?>
                    <?php dynamic_sidebar( 'sidebar-1' )?>
                    <?php endif; ?>


                    <div class="row align-items-center">
                        <div class="container d-none d-md-block col-md-12"><!-- DESAPARECE EM GRID MENOR QUE MD -->
                            <h4>Se cadastre e fique por dentro das novidades!</h4>
                            <div class="input-group mb-3">
                                <input type="text" class="capture-email-field form-control" placeholder="E-mail" aria-label="E-mail do usuario" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="capture-email-button btn btn-secondary" type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
