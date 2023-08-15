<html>
    <head>
        <title>driver backened</title>
    </head>
    <body>
        <h3 style="color:blue">Driving Detail</h3>
        <?php
        $a = $_POST["yourname"];
        $b = $_POST["surname"];
        $c = $_POST["mr"];
        $d = $_POST["dateofbirth"];
        $e = $_POST["gender"];
        $f = $_POST["phone"];
        $g = $_POST["add"];
        $h = $_POST["valid"];
        $i = $_POST["myemail"];
        $j = $_POST["mytest"];
        ?>
        <table border="3px solid black">
            <tr>
                <th>First Name</th>
                <th>Surname</th>
                <th>Mr/Mrs/Mr/Ms</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Validity</th>
                <th>Email</th>
                <th>Test Date</th>
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
                <td>
                    <?php
                    echo $j
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>