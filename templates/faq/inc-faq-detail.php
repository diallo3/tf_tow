<?php
	$q = get_sub_field('question');
	$a = get_sub_field('answer');
?>
<section class="block faq_detail">
	<article class="faq">
		<div class="entry">
			<header>
				<h4><?php echo $q; ?></h4>
			</header>
			<?php echo $a; ?>
		</div>
	</article>
</section>