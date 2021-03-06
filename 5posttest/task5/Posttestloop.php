<!-- Written/Modified by June Yan (c) 2021 -->
<!doctype html>
<html lang="en">
	<head>
        <title>Posttest Loop Test</title>
        <meta name="description" content="June's Form">
        <meta name="author" content="June Y">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>
	<?php	
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $count = $number1;
    do{
        echo "Loop number; $count <br>";
        $count = $count  + 1;
    } while ($count <= $number2)
    ?>
</html>

<style>
	/* sets variables */
    :root {
        --textColor: #e22c78;
        --background: rgba(255, 255, 255, 0.1);
    }
	html {
		height: 100%;
	}
	body {
		background: #212629;
		font-family: Open Sans,sans-serif;
		color: var(--textColor);
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100%;
		margin: 0;
	}
</style>