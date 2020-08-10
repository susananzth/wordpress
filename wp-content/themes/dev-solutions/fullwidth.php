<?php
/*
template name: Ancho completo
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <!-- Sustituyo el 'lang="es"' por ese llamado de wordpress donde obtiene el atributo de lenguaje de la instalación del wordpress. |
         I substitute the 'lang = "is"' for that wordpress call where it gets the language attribute of the wordpress installation-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
            <!-- Sustituyo el "uft-8" por la función que trae la información de la instalacion de wordpress. |
            I substitute the "uft-8" for the function that brings the information of the wordpress installation.-->
    <meta name="description" content="Primer network taxi del mundo. Aplicativo que conecta usuarios con conductores."/>
    <meta name="author" content="Susana Piñero"/>
    <meta name="keywords" content="taxi, network, win, taxiwin, wakiy"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <?php wp_head(); ?>
    <!-- Aquí llamo los script para cargar y ejecutar todas las funciones de cabecera. |
         I call the script to load and execute all the header functions.-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title> <?php wp_title(' | ', true, 'right') ?> <?php bloginfo('name'); ?> </title><!-- Susana's Theme WordPress | by Susana Piñero -->
            <!-- Imprimo el título de wordpress, coloco un separador, verdadero para que se imprima, lo ajusto a la derecha. Con bloginfo, obtengo el titulo de la página. |
            I print the wordpress title, I put a separator, true to be printed, I adjust it to the right. With bloginfo, I get the title of the page. -->
</head>
<body id="body">
	<div id="global-container">
		<header id="main-header-fullwidth">

            <a href="#">
                <div class="logo-fullwidth">
                </div>
                <!--<figure>
                    <img src="img/cropped-logo3.png" alt="Win Tecnologies INC logo" title="Win Tecnologies INC logo" class="logo">
                </figure> -->
            </a>
            <div class="info-page">
                <h1 class="site-title"> <?php bloginfo('name'); ?> </h1>
                <!-- Obtengo el título de la página y lo imprimo | I get the title of the page and print it -->
                <h3 class="site-description"> <?php bloginfo('description'); ?> </h3>
                <!-- Obtengo la descripción de la página y lo imprimo | I get the description of the page and print it -->
            </div>
		</header><!-- /#main-header -->
		<section id="global-content-fullwidth" class="cf">
			<section id="main-content" class="fullwidth">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- Si hay posts, mientras haya posts, muestra el post -->
				<article class="post">
					<header class="post-title">
						<h1><?php the_title(); ?></h1>
                        <!-- Muestra el título del post -->
					</header>
					<div class="post-content">
						<?php the_content(); ?>
                        <!-- Muestra el artículo -->
					</div>
				</article>	<!-- article -->
				<?php endwhile; endif ?>
			</section><!-- /#main-content -->
<?php get_footer(); ?><!-- Call to footer partial -->
