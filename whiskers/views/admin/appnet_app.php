<h2>App.net App</h2>

<form name="appnet_app" action="<?php echo site_url("admin/appnet_app"); ?>" method="post">

    <p>You need to create a App.net app and add the details here to continue:</p>

    <ul>
        <li>Go to <a target="_blank" href="http://app.net">http://app.net</a></li>
        <li>Sign in with your App.net account if you're not already</li>
        <li>Click on your avatar in the top-right and select "My Apps".</li>
        <li>Click "Create An App".</li>
        <li>Fill in the Name field with something like "John's Whiskers"</li>
        <li>Add a website url (the current url if you'd like).</li>
        <li>Enter your callback url: <strong><?php print site_url('admin/appnet_connect'); ?></strong></li>
        <li>Save the app and copy the "Client ID" and "Client Secret" to Whiskers. You should be good to go!</li>
    </ul>

    <p>Add your App.net details:</p>

    <hr />

    <p>
    <label for="appnet_consumer_key">Consumer Key</label>
    <input name="appnet_consumer_key" type="text" value="<?php echo $old_consumer_key ?>">
    </p>

    <p>
    <label for="appnet_consumer_secret">Consumer Secret</label>
    <input name="appnet_consumer_secret" type="text" value="<?php echo $old_consumer_secret ?>">
    </p>

    <input type="submit" value="Save details" />

</form>
