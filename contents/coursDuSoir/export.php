<?php




        $db = @mysqli_connect("localhost", "c0_coursdusoir", "tinchen82") or die("Verbindung zu MySQL gescheitert");

                mysqli_set_charset($db, 'utf8');
                @mysqli_select_db($db, "c0_cds") or die("Datenbankzugriff gescheitert!");



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