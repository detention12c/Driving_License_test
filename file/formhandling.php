<html>

<body>

    <?php
    $a = $_POST["name"];
    $b = $_POST["email"];
    $c =  $_POST["roll"];
?>

<table border='1'>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Roll No.</th>
    </tr>

    <tr>
        <td>
            <?php 
            echo $a
            ?>
        </td>
        <td>
            <?php 
            echo $b
            ?>
        </td>
        <td>
            <?php 
            echo $c
            ?>
        </td>
</tr>

</table>

</body>

</html>