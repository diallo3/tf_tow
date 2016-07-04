<div id="volForm" class="reveal-modal reveal_full" data-reveal>
	<article class="form_container">
		<div class="form">
			<header>
				<h3 class="title">2016 Volunteer form</h3>
				<div class="description">
					<p>TempleFest volunteers may receive a refund of some or all of their registration fee; to qualify for the refund, volunteers must complete their assigned work-shifts. Most shifts will be 90 minutes to two hours. Please note your area(s) of interest on the submission form and a Team TempleFest member will coordinate the details with you.</p>
				</div>
			</header>
				<?php gravity_form(
					'Volunteer', false, false, false, '', true, 12
					); 
				?>
			<footer>
				<p><small>*Pre-festival training is required; details will be shared with approved volunteers.</small></p>

				<p><small>Questions? Email <a href="<?php echo antispambot( 'mailto:volunteer@templeofwitchcraft.org' ) ; ?>">volunteer@templeofwitchcraft.org</a> with “Volunteer TempleFest” in the subject line.</small></p>
			</footer>
		</div>
	</article>

	<a class="close-reveal-modal">×</a>
</div>