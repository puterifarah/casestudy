<?php
require 'conn.php'; #connection database
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Pendaftaran</title>
</head>

<body>

    <h2 align="center">Borang Pendaftaran</h2>
    <hr><br>

    <form action="simpan.php" method="post">
        <label for="nama">NAMA: </label>
        <input type="text" id="nama" name="nama"> <br><br>

        <label for="nomatriks">NO MATRIKS: </label>
        <input type="text" id="nomatriks" name="nomatriks"> <br><br>


        <label for="track">TREK: </label>
        <label>
            <input type="radio" id="track" name="track" value="software">
            Software
        </label>

        <label>
            <input type="radio" id="track" name="track" value="network">
            Network
        </label><br><br>

        <button type="submit">SUBMIT</button>
        <button type="reset">RESET</button><br><br><br>
    </form>

    <?php
    $sql = "SELECT * FROM trackstudent WHERE track ='software'";
    $result = $conn->query($sql);
    $software = $result->num_rows;

    $sql = "SELECT * FROM trackstudent WHERE track ='network'";
    $result = $conn->query($sql);
    $network = $result->num_rows;
    $network = $result->num_rows;
    ?>

    <table border="3" width="50%">
        <tr>
            <th>Senarai Trek</th>
            <th>Bilangan Pelajar</th>
            <th>Tindakan</th>
        </tr>

        <tr>
            <td>Software</td>
            <td>Bilangan: <?php echo $software; ?> </td>
            <td><a href="senarai.php?track=software">View</a></td>
        </tr>

        <tr>
            <td>Network</td>
            <td>Bilangan: <?php echo $network; ?></td>
            <td><a href="senarai.php?track=network">View</a></td>
        </tr>
    </table>
</body>

</html>