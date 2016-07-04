<?php
	$s_title = get_sub_field('short_title');
	$title   = get_sub_field('main_title');
	$content = get_sub_field('intro_text');
	$b_img   = get_sub_field('block_background');
?>
<section class="block intro"  style="background-image: url('<?php echo $b_img; ?>');"
	data-top-bottom="background-position: 50% -200px;"
	data-bottom-top="background-position: 50% 200px;"
>
	<div class="intro_content">
		<article class="entry">
			<header>
				<hgroup>
					<h6 class="small_title"><?php echo $s_title; ?></h6>
					<h1 class="title"><?php echo $title; ?></h1>
				</hgroup>
			</header>
			
			<?php echo $content; ?>	
		</article>
	</div>
</section>