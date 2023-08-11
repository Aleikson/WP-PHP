<?php
// Template Name: Menu da semana
?>
<?php get_header(); ?>

<?php if (have_posts()):
	while (have_posts()):
		the_post(); ?>

		<section class="container">
			<h2 class="subtitulo">
				<?php the_title(); ?>
			</h2>

			<div class="menu-item grid-8">
				<h2>
					<?php the_field('title1') ?>
				</h2>
				<ul>
					<?php
					$dishes = get_field('dishes');
					if (isset($dishes)) {
						foreach ($dishes as $i) { ?>
							<li>
								<span>
									<sup>R$</sup>
									<?php echo $i['price']; ?>
								</span>
								<div>
									<h3>
										<?php echo $i['name']; ?>
									</h3>
									<p>
										<?php echo $i['description']; ?>
									</p>
								</div>
							</li>
						<?php }
					} ?>
				</ul>
			</div>

			<div class="menu-item grid-8">
			<h2>
					<?php the_field('title2') ?>
				</h2>
				<ul>
					<?php
					$meats = get_field('meats');
					if (isset($meats)) {
						foreach ($meats as $meat) { ?>
							<li>
								<span>
									<sup>R$</sup>
									<?php echo $meat['meat_price']; ?>
								</span>
								<div>
									<h3>
										<?php echo $meat['meat_name']; ?>
									</h3>
									<p>
										<?php echo $meat['meat_description']; ?>
									</p>
								</div>
							</li>
						<?php }
					} ?>
				</ul>
			</div>

		</section>

	<?php endwhile; else: endif; ?>

<?php get_footer(); ?>