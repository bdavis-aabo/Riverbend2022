<?php /* Template Name: Page - Homepage */ ?>

<?php get_header(); ?>

	<?php if(have_posts()): ?>
	<section class="homepage-section homepage-slider">
		<?php while(have_posts()): the_post(); ?>
		<div class="swiper homepage-slider">
			<?php if(have_rows('homepage_slides')): $_s = 0; ?>
			<div class="swiper-wrapper">
				<?php while(have_rows('homepage_slides')): the_row(); $_lgImage = get_sub_field('large_image'); $_mobImage = get_sub_field('mobile_image'); ?>
					<div class="swiper-slide">
						<picture>
			        <source media="(max-width: 768px)" srcset="<?php echo $_mobImage['url'] ?>">
			        <img src="<?php echo $_lgImage['url'] ?>" alt="<?php echo $_lgImage['alt'] ?>" class="heroimage-img" />
			      </picture>
						<h1 class="slide-text"><?php echo get_sub_field('slide_text') ?></h1>
					</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			<div class="swiper-pagination"></div>
		</div>
		<?php endwhile; ?>
	</section>

	<?php endif; ?>

<?php get_footer(); ?>
