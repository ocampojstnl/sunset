<h1>Sunset Sidebar options</h1>
<h3 class="title">Something to put, not important at all, just for demonstration purposes.</h3>
<p>Customize sidebar options</p>
<?php settings_errors();

$picture = esc_attr(get_option('profile_picture'));
$firstName = esc_attr(get_option('first_name'));
?>
<!-- <div class="profile-picture" style="background-image: url('')"> -->
<img id="profile-picture-general" src="<?php print $picture?>" alt="" width="100px" height="100px">

</div>
<!-- <img src="<?php print $picture; ?>" /> -->
<form action="options.php" method="POST">
    <?php settings_fields('sunset-settings-group');?>
    <?php do_settings_sections('sunset')?>
    <?php submit_button()?>
</form>