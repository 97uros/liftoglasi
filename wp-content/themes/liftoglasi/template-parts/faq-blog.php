<?php if( have_rows('faq_items') ): ?>
<section class="faq faq-blog">
	<div class="container p-0">
		<div class="accordion faq__accordion" id="faqAccordion">
			<?php 
			$counter = 0;
			while( have_rows('faq_items') ): the_row(); 
				$question = get_sub_field('question');
				$answer = get_sub_field('answer');
				$counter++; ?>
				<div class="accordion-item">
					<h3 class="accordion-header" id="heading<?php echo $counter; ?>" data-aos="fade-right">
						<button class="accordion-button <?php echo $counter > 1 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="<?php echo $counter === 1 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $counter; ?>">
							<h5><?php echo esc_html($question); ?></h5>
						</button>
					</h3>
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