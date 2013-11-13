
        <?php
            $num = $_GET['numero'];
            $numero0=0;
            $numero1=1;
            
            for($i=0;$i<$num;$i++){

                $numero=$numero1+$numero0;
                $numero0=$numero1;
                $numero1=$numero;
                echo $numero."  ";
            }
        ?>
   
