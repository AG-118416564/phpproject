<!DOCTYPE html>
<html>
    <style>
        body, a{
            font-family: Courier New;
            background-color: #4d90fe;
            color: white;
        }
    </style><body>
    <?php
    
    session_start();
    $totalValue2 = $_POST['txtTotal'];
    $fullNameValue = $_POST['txtName'];
    echo "The name is : ".$fullNameValue.".";
    echo "<br></br>";
    echo "the total value is ".$totalValue2.".";
    ?>
    </body>
    <br></br>
     <a href="index.html" class="button">Back to My Webpage!</a></center>
    </html>
