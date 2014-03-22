<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CodeIgniter Startup</title>
    <?php Assets::css(array('pure.css', 'style.css'));?>
</head>
<body>

    <div id="container">
        <?php echo $TEMPLATE_CONTENT;?>
    </div>

<?php Assets::js_group('footer', array(
    'jquery-1.11.0.js',
    'jquery.pjax.js',
    'script.js'
));?>
</body>
</html>
