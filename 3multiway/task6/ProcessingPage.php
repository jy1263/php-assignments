<!-- Written by June Yan (c) 2021 -->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Answer</title>
	</head>
    <?php	
        $name = $_POST['name'];
        $age=$_POST['age'];
        if (intval($age) < 5) {
            echo "$name is too young for school.";
        }
        else {
            if (intval($age) >= 5 && intval($age) <= 7) {
                echo "$name is in infants school.";
            }
            else {
                if (intval($age) >= 8 && intval($age) <= 12) {
                    echo "$name  is in primary school.";
                } 
                else {
                    if (intval($age) >= 13 && intval($age) <= 16) {
                        echo "$name  is in secondary school.";
                    }	
                    else {
                        if (intval($age) >= 17 && intval($age) <= 18) {
                            echo "$name  is in senior school.";
                        }	
                        else {
                            if (intval($age) > 18) {
                                echo "$name has left school.";
                            }
                            else {
                                echo "None.";
                            }
                        }
                    }
                }
            }
        }
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