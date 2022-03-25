query = "SELECT * FROM  seats where seat =1";
$result = @mysqli_query($query);
        $display = (@mysqli_num_rows($result) == 1 );
        $disable = $display?'':'disabled="disabled"';

        <input type="ch1" type="checkbox" id="A1" value=""<?php echo $disable; ?>/>