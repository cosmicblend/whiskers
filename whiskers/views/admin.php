<h2>Accounts</h2>
<?php //print_r($available_drivers); ?>
<form id="add_service" action="<?php echo site_url("admin/account_connect"); ?>" method="post">
<<<<<<< HEAD
	<p>Add an account for</p>
		
	<select name="add[driver]">
	<?php if (isset($available_drivers)) : foreach ($available_drivers as $driver) : ?>
		<option value="<?php echo $driver ?>"><?php echo ucwords($driver) ?></option>
	<?php endforeach; endif; ?>
	</select>
=======
    <p>Add an account for</p>

    <select name="add[driver]">
    <?php if (isset($available_drivers)) : foreach ($available_drivers as $driver) : ?>
        <option value="<?php echo $driver ?>"><?php echo ucwords($driver) ?></option>
    <?php endforeach; endif; ?>
    </select>
>>>>>>> upstream/master

    <input type="submit" value="Add" />
</form>

<p>Depending on the account, you'll be asked for a user name and password, or sent to the account's website to sign in and authorize <em>Whiskers App</em>.</p>
<?php //print_r($valid_drivers); //valid = running ?>
<<<<<<< HEAD

<h2>Current Accounts</h2>
=======
<h3>Current Accounts</h3>
>>>>>>> upstream/master
<?php if ($valid_drivers) : ?>
	<ul class="accounts-list">
<?php foreach ($valid_drivers as $driver => $obj): ?>
<<<<<<< HEAD
		 <?php if('twitter' === $driver) : ?>
		<li class="row">
			<div>
				<h3><?php echo ucwords($driver) ?></h3>
				<a href="http://twitter.com/<?php echo $obj->access_token->screen_name ?>"><?php echo $obj->access_token->screen_name ?></a>
			</div>
		<?php endif; ?>
		
		<?php if('facebook' === $driver) : ?>
		<li class="row">
		     <div>
				<h3><?php echo ucwords($driver) ?></h3>
				<a href="<?php echo $obj->user->link ?>"><?php echo $obj->user->name ?></a>
			</div>
		<?php endif; ?>
		
		<?php if('appnet' === $driver) : ?>
		<li class="row">
			<div>
				<h3><?php echo ucwords($driver) ?></h3>
				<a href="https://alpha.app.net/<?php echo $obj->user->nickname ?>"><?php echo $obj->user->name ?></a>
			</div>
		<?php endif; ?>
	
			<form id="remove-service" action="<?php echo site_url('admin'); ?>" method="post">
				<input type="hidden" name="rm[driver]" value="<?php echo $driver; ?>" />
				<input id="remove_service_submit" onclick="document.getElementById('face').className = 'chesire'" name="rm[op]" type="submit" value="Remove" />
			</form>
		</li>
=======

    <?php if('twitter' === $driver) : ?>
        <h4><?php echo ucwords($driver) ?></h4> 
        <a href="http://twitter.com/<?php echo $obj->access_token->screen_name ?>"><?php echo $obj->access_token->screen_name ?></a>
    <?php endif; ?>

    <?php if('facebook' === $driver) : ?>
        <h4><?php echo ucwords($driver) ?></h4>
        <a href="<?php echo $obj->user->link ?>"><?php echo $obj->user->name ?></a>
    <?php endif; ?>

    <?php if('appnet' === $driver) : ?>
        <h4><?php echo ucwords($driver) ?></h4>
        <a href="https://alpha.app.net/<?php echo $obj->user->nickname ?>"><?php echo $obj->user->name ?></a>
    <?php endif; ?>

    <form id="remove_service" action="<?php echo site_url('admin'); ?>" method="post" style="float:right">
    <input type="hidden" name="rm[driver]" value="<?php echo $driver; ?>" />
    <input id="remove_service_submit" onclick="document.getElementById('face').className = 'chesire'" name="rm[op]" type="submit" value="Remove" />
    </form>

    <hr>
>>>>>>> upstream/master
<?php endforeach; ?>
	</ul>
<?php else: ?>
    <p>None.</p>
<?php endif; ?>
