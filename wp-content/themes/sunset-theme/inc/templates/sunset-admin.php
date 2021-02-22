<h1>Sunset theme options</h1>
<h3 class="title">Something to put, not important at all, just for demonstration purposes.</h3>
<p>Customize sidebar options</p>
<?php settings_errors();?>
<form action="options.php" method="POST">
    <?php settings_fields('sunset-settings-group');?>
    <?php do_settings_sections('sunset')?>
    <?php submit_button()?>
</form>