<?php get_header(); ?>

        <!-- header -->
        <header class="header clear" role="banner">
            <!-- Navigation -->
            <nav class="always-collapsed navbar navbar-default navbar-fixed-top" role="navigation">

                <div class="container right-side">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li class="hidden">
                                <a class="page-scroll" href="#page-top"></a>
                            </li>
                            <li class="li-width">
                              <a class="page-scroll" href="#about"><?php _e('¿Qué es LaT?', 'html5blank'); ?></a>
                            </li>
                            <li class="li-width">
                              <a class="page-scroll" href="#proyectos"><?php _e('Proyectos', 'html5blank'); ?></a>
                            </li>
                            <li class="li-width">
                              <a class="page-scroll" href="#actividades"><?php _e('Actividades', 'html5blank'); ?></a>
                            </li>
                            <li class="li-width">
                                <a class="page-scroll" href="#who-are-we"><?php _e('Quiénes somos', 'html5blank'); ?></a>
                            </li>
                            <li class="li-width">
                              <a class="page-scroll" href="#participa"><?php _e('Participa', 'html5blank'); ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
                <div class="gtrans higher">
                  <a href="/?lang=ca" title="Català" class="glink nturl notranslate gtrans-link">Cat</a> <span>|</span> <a href="/?lang=es_ES" title="Español" class="glink nturl notranslate gtrans-link">Cas</a> <span>|</span> <a href="/?lang=en_US" title="English" class="glink nturl notranslate gtrans-link">Eng</a>
                </div>
            </nav>

        </header>
        <!-- /header -->

	<main role="main" class="full-page">
		<!-- section -->
		<section class="ciberfeminismo-section">


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article style="background-color: <?php echo(get_post_meta(get_the_ID(), 'color_fondo', true)); ?>;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="one-column">
        <img width="100%" src="<?php echo get_bloginfo('template_url') ?>/img/cfem.png" />
        <img width="8%" style="float: right;" src="<?php echo get_bloginfo('template_url') ?>/img/mini-logo-cfem.png" />
			<h1 class="page-title"><?php the_title(); ?></h1>

				<?php the_content(); ?>
</div>

        <img width="100%" src="<?php echo get_bloginfo('template_url') ?>/img/coord-cfem.png" />

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
