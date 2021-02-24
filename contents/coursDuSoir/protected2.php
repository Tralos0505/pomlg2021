<html>
    <head>
        <link rel="stylesheet" type="text/css" href="table.css">
        <title>Cours du soir</title>
    </head>

    <body>
            <?php




        $db = @mysqli_connect("localhost", "c0_coursdusoir", "tinchen82") or die("Verbindung zu MySQL gescheitert");

                mysqli_set_charset($db, 'utf8');
                @mysqli_select_db($db, "c0_cds") or die("Datenbankzugriff gescheitert!");

                $sql="SELECT * FROM inscriptionscds"; 

                $results = mysqli_query($db, $sql);
                $number = mysqli_num_rows($results);

                echo "Number of inscriptions: $number <br><br><hr><br><br>";

                echo "<table> \n";
                echo "<tr><th>id</th><th>timestamp</th><th>nom</th><th>prenom</th><th>matricule</th><th>Date Naiss.</th><th>Lieu Naiss.</th><th>Pays Naiss</th><th>Nat.</th><th>Sex</th>
                <th>Adresse</th><th>Code P.</th><th>Localite</th><th>Telephone</th><th>Email</th><th>Cours</th></tr>";

                while ($row = mysqli_fetch_assoc($results)) {
                    echo "<tr>";
                    foreach($row as $key => $value) {
                        $value = htmlentities($value, ENT_QUOTES, "UTF-8", FALSE);
                        echo "<td>$value&nbsp;</td>\n";
                    }
                    echo "</tr>";

                  
                }


                echo "</table>";

                // EXPORT STUFF

                if(isset($_POST["Export"])){
            
                        header('Content-Type: text/csv; charset=utf-8');  
                        header('Content-Disposition: attachment; filename=data.csv');  
                        $output = fopen("php://output", "w");
                         
                        
                        $query = "SELECT * FROM inscriptionscds";  
                        $result = mysqli_query($db, $query);  
                      
                        while($row = mysqli_fetch_assoc($result))  
                        {  
                            fputcsv($output, $row);  
                        }  
                        fclose($output); 
                        
                    }


            
                mysqli_close($db);                 
                

        // DATABSE PART END

        ?>

        <div>
            <br><br>
          
                <form class="form-horizontal" action="export.php" method="post" name="upload_excel" enctype="multipart/form-data">
                      
                                   
                <input type="submit" name="Export"  value="export to excel / csv"/>
                                  
                                        
                </form>           
        </div>
        <?php

        // if(isset($_POST["Export"])){
            
        //     header('Content-Type: text/csv; charset=utf-8');  
        //     header('Content-Disposition: attachment; filename=data.csv');  
        //     $output = fopen("php://output", "w");
        //     $db = @mysqli_connect("localhost", "c0_coursdusoir", "tinchen82") or die("Verbindung zu MySQL gescheitert");

        //                 mysqli_set_charset($db, 'utf8');
        //                 @mysqli_select_db($db, "c0_cds") or die("Datenbankzugriff gescheitert!");  
        //     
        //     $query = "SELECT * from inscriptionscds ORDER BY emp_id DESC";  
        //     $result = mysqli_query($db, $query);  
        //     var_dump($result);
        //     while($row = mysqli_fetch_assoc($result))  
        //     {  
        //         fputcsv($output, $row);  
        //     }  
        //     fclose($output);  
        // }  


        // ?>
        
    </body>

</html>


        
    
