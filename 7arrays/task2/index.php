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
    $Names = array( "billy", "mary", "johno","sally","frank","jill" ); 
    $Scores = array( "75", "82", "68","93","87","88" ); 
    $count = 0;
    // while loop
    while ($count < sizeof($Names)) 
    {
        echo "$Names[$count] got a score of $Scores[$count] ";
        $count = $count + 1;
    };
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
        font-family: Open Sans, sans-serif;
        color: var(--textColor);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        margin: 0;
    }
    #formContainer {
        background: var(--background);
        border: black;
        border-radius: 50px;
        padding: 5%;
    }
    input {
        font-family: Open Sans, sans-serif;
        color: #fff;
        border-radius: 6px;
        border: 0;
        background: var(--background);
        width: 150px;
        padding: 5px 15px;
        text-align: center;
    }
    #inputCenter {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #submitButton {
        font-family: Open Sans, sans-serif;
        color: var(--textColor);
        border-radius: 6px;
        border: 0;
        background: var(--background);
        width: 150px;
        padding: 5px 15px;
        text-align: center;
        cursor: pointer;
    }
    p {
        white-space: nowrap;
        margin: 5px;
    }
</style>