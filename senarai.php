<?php
require 'conn.php';

$track = $_GET['track'];

$sql = "SELECT * FROM trackstudent WHERE track = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $track);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pelajar</title>
</head>

<body>
    <h1 align="center">Senarai Pelajar <?php echo strtoupper($track); ?></h1>
    <center>
        <table id="student" width="80%" border="2">
            <tr>
                <th>Bilangan</th>
                <th>Nama</th>
                <th>No matriks</th>
            </tr>

            <?php
            $bil = 1;
            while ($row = $result->fetch_object()) {
            ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->nomatriks; ?></td>

                </tr>
            <?php
            }
            ?>
        </table><br><br>
    <a href="index.php">BACK</a>
    </center>

</body>

</html>