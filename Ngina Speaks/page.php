<?php get_header(); ?>
	<div id="primary" class="content-area col-lg-9 col-md-8 col-sm-12 col-xs-12">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

	 <section data-page-name="about" class="page default">
	 	 <h3 class="title"><?php the_title( ); ?></h3>
    <img class="profile-img" src="<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>" alt="Annalise Mabe"/>
    <div class="about-me">
      <p><?php the_content(); ?></p>
    </div>

			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; ?>

		</main>
	</div>

<?php get_sidebar('page'); ?>

<?php get_footer(); ?>