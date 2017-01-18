<!DOCTYPE html>
<html>
    <head>
        <title>kalyani marks page</title>
    </head>
    <body>

        <h1>kalyani marks list</h1>
        <table style="border: 1px solid black;">
            <tr>
                <td>Standard</td>
                <td>percent</td>
            </tr>
            <?php
            foreach ($marks as $standard => $percent) {
                echo '<tr>';
                echo "<td>$standard</td>";
                echo "<td>$percent</td>";
                echo '</tr>';
            }
            ?>    
        </table>


    </body>
</html>

