<?php if( have_rows('faq_items', 'option') ): ?>
<section class="faq">
	<div class="container">
		<h2 class="faq__heading" data-aos="fade-left"><?php the_field('faq_heading', 'option'); ?></h2>
		<div class="accordion faq__accordion" id="faqAccordion">
			<?php 
			$counter = 0;
			while( have_rows('faq_items', 'option') ): the_row(); 
				$question = get_sub_field('question', 'option');
				$answer = get_sub_field('answer', 'option');
				$counter++; ?>
				<div class="accordion-item">
					<div class="accordion-header" id="heading<?php echo $counter; ?>" data-aos="fade-right">
						<button class="accordion-button <?php echo $counter > 1 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="<?php echo $counter === 1 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $counter; ?>">
							<h3><?php echo esc_html($question); ?></h3>
						</button>
					</div>
					<div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php echo $counter === 1 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $counter; ?>" data-bs-parent="#faqAccordion">
						<div class="accordion-body" data-aos="fade-left">
							<p><?php echo wp_kses_post($answer); ?></p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>