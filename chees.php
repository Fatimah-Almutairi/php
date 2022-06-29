<table>
    <?php

        for($row = 1; $row <= 6; $row++){
            echo "<tr>";
            for($col = 1; $col <= 6; $col++){
                    if($col %2 == 0){
                        $color = '#fff';
                    }else{
                        $color = "#000";
                    }

                    if($row %2 == 0){
                        if($col %2 == 0){
                            $color = '#000';
                        }else{
                            $color = "#fff";
                        }
                    }
                    echo "<td style = 'border:0px solid; height:90px; width:90px; background-color:".$color."'> </td >";
            }
           echo "</tr>";

        }
    ?>

</table>