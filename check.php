<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_php1";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = " SELECT * FROM usuarios";
$result = $conn->query($sql);
$conn->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>LISTADO USUARIOS</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
            </tr>
            <?php 
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['subname'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>