<div class="hero big">
	<?php 
		$mp4    = get_field('video_link_mp4');
		$webm   = get_field('video_link_webm');
		$poster = get_field('video_poster_image');
	?>
	<?php if (is_mobile() ){ ?>
		<figure class="masthead_poster">
			<img src="<?php echo $poster; ?>" alt="">
		</figure>	
	<?php } else { ?>
		<video class="masthead_video" poster="<?php echo $poster; ?>" autoplay loop muted>
			<source src="<?php echo $mp4; ?>" type="video/mp4">
			<source src="<?php echo $webm; ?>" type="video/webm">
		</video>
	<?php } ?>

	<div class="tint"></div>

	<?php get_template_part('templates/inc', 'header-main'); ?>



	<div class="hero_entry animated fadeIn" >
		<?php
			$hp = 24;
			$ep = 6;
			$tag = get_field('tag_line', $hp);
			$date = get_field('friday_date', $ep);
		?>
		<h2 class="tag">
			<?php if ($tag) {
				echo $tag;
				} else {
				echo 'Welcome to Templefest';
				}
			?>
		</h2>
		
		<!-- -->
		<div class="countdown">
			<ul id="timer">
				<?php 
					$day = '2015-07-30';
					$d = strtotime($date);
					
					if ($d <= time())
				{ ?>
					<li>
						<h1 style="color: #fc6; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);"><?php  echo 'Welcome to Templefest'; ?></h1>
					</li>

				<?php } else { ?>
				
					<li><span class="days">00</span><p class="days_text">Days</p></li>
					<li class="seperator">&nbsp;</li>
					<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
					<li class="seperator">&nbsp;</li>
					<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
					<li class="seperator">&nbsp;</li>
					<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>

				<?php } ?>
			</ul>
				
		</div>

		<h3 class="year"><?php echo $date; ?></h3>
	</div>
</div>

