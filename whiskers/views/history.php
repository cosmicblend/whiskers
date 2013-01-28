<div class="posting-history">
	<div class="post-utilities">
		<nav>
			<ul class="row">
				<li class="btn new-post">
				<?php $att_current = (strstr(current_url(), 'post')) ? 'class="active"' : NULL; echo anchor('post', 'New Post', $att_current); ?>
				</li>
			</ul>
		</nav>
	</div>

	<div class="app-lists mobile">
		<?php if (count($posts) > 1): ?>
		<ul>
			<?php foreach ($posts as $key => $val): ?>
			<li>
				<?php if (is_object($val)) : ?>
				<div class="row">
					<?php foreach ($val->source_urls as $source => $permalink) : ?>
					<div class="service-icons <?php echo $source ?>-icon"></div>
					<?php endforeach; ?>
					
					<p class="posting"><?php echo anchor('post/'.$key, $val->text); ?></p>
				<?php else: ?>
					<?php var_dump($key); ?>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
		</ul>
		<?php else: ?>
		<p>Make a <?php $att_current = (strstr(current_url(), 'post')) ? 'class="active"' : NULL; echo anchor('post', 'post', $att_current); ?>first!</p>
		<?php endif; ?>
	</div>

<!-- <?php if (count($posts) > 1): ?>
<?php foreach ($posts as $key => $val): ?>

    <?php if (is_object($val)) : ?>
    <div class="post clearfix">
        <div class="text"><?php echo anchor('post/'.$key, $val->text); ?></div>
        <div class="date"><?php $val->time != '' ? print date('ga, F j', $val->time) : NULL ?></div>
    </div>
    <?php else: ?>
        <?php var_dump($key); ?>
    <?php endif; ?>

<?php endforeach; ?>
<?php else: ?>
<p>Make a post!</p>
<?php endif; ?> -->

</div>