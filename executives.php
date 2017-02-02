<?php
<!DOCTYPE html>
<html>
    <head>
        <title>TGMS Website and Discord Executives</title>
        <link href="style.css" media="all" rel="stylesheet" type="text/css" />
        <link href="markdown.css" media="all" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <article>
	    <?php echo Markdown(file_get_contents("executives.md")); ?>
        </article>
    </body>
</html>
