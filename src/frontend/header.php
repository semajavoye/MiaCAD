<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>MiaCAD <?php echo isset($title) ? "- $title" : ""; ?></title>
    <?php
    foreach ($css_files as $css_file) {
        echo '<link rel="stylesheet" href="' . $css_file . '">' . "\n";
    }
    ?>
</head>