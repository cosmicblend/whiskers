<form id="post" class="service-posting" action="<?php echo site_url() ?>" method="post" data-endpoint="<?php echo $base_url ?>api/post">
	
	<div id="drivers">	
		<?php if ($valid_drivers) : ?>
		<ul>		
			<?php foreach ($valid_drivers as $driver => $obj) : ?>
			<li class="driver">
            	
            	<?php //echo ucwords($driver) ?>            	
            	<div class="row">
            		<div class="service-icons">
            		 <p>serv</p>
            		</div>
            		
            		<textarea id="<?php echo $driver ?>_text" class="driver-text" name="<?php echo $driver ?>_status" data-driver="<?php echo $driver ?>"></textarea>
            		
            		<div class="btn"><a href="#">x</a></div>
            	</div>
            	
            	</li>
            	<?php endforeach; ?>
		</ul>
		<?php else: ?>
		<p>You have to add an account before you can post. Visit the admin page to <a href="<?php echo site_url("/admin") ?>">manage your accounts</a>.</p>
		<?php endif; ?>
	</div>

	<div class="post-utilities">
		<p id="count">0 Chars</p>
		
		<input id="post-form-submit" name="op" type="submit" value="Post" />		
	</div>
	
	<textarea id="text" name="text" class="all-drivers_text"></textarea>

</form>