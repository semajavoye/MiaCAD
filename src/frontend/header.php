<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>MiaCAD <?php echo isset($title) ? "- $title" : ""; ?></title>
    <?php
    if (isset($css_files)) {
        foreach ($css_files as $file) {
            echo '<link rel="stylesheet" type="text/css" href="' . $file . '">';
        }
    }
    ?>
</head>