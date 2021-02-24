<html>
        <body>
                <?php

                include 'passwordArray.php';

                $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
                $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
                
                        if ($pass !== null && $login !== null) {
                        if ($loginArray[$login] === $pass) {
                                include 'protected2.php';
                        } else {
                        echo "<p> Incorrect Login or Password </p>";
                        echo '<a href="index.php">Retour</a>';
                        }
                        }
                ?>
        </body>
</html>



        
    
