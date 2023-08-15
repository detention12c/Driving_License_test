<html>
    <head>
        <title>driver backened</title>
    </head>
    <body>
        <h3 style="color:blue">Driving Detail</h3>
        <?php
        $a = $_POST["firstname"];
        $b = $_POST["surname"];
        $c = $_POST["gender"];
        $d = $_POST["mycountry"];
        $e = $_POST["phone"];
        $f = $_POST["myaddress"];
        $g = $_POST["apply"];
        $h = $_POST["myemail"];
        $i = $_POST["mytest"];
        ?>
        <table border="3px solid black">
            <tr>
                <th>First Name</th>
                <th>Surname</th>
                <th>Gender</th>
                <th>Country code</th>
                <th>Phone no.</th>
                <th>Address</th>
                <th>Apllied</th>
                <th>Email</th>
                <th>Test date</th>
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
                <td>
                    <?php
                    echo $d
                    ?>
                </td>
                <td>
                    <?php
                    echo $e
                    ?>
                </td>
                <td>
                    <?php
                    echo $f
                    ?>
                </td>
                <td>
                    <?php
                    echo $g
                    ?>
                </td>
                <td>
                    <?php
                    echo $h
                    ?>
                </td>
                <td>
                    <?php
                    echo $i
                    ?>
                </td>

            </tr>
        </table>
    </body>
</html>