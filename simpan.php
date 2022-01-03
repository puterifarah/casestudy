<?php
require 'conn.php';

$nama = $_POST['nama'];
$nomatriks = $_POST['nomatriks'];
$track = $_POST['track'];

$sql = "SELECT * FROM trackstudent WHERE track ='$track'";
#echo $sql; exit;
$result = $conn->query($sql);
if ($result->num_rows < 5) {
    $sql = "INSERT INTO trackstudent(nama, nomatriks, track) VALUES(?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $nama, $nomatriks, $track);
    $stmt->execute();
    /* if ($conn->error) {
?>
        <script>
            alert('anda sudah mendaftar');
            window.location = 'index.php';
        </script>
    <?php
    } */
    header('location: index.php');
} else {
?>
    <script>
        alert('track anda pilih sudah penuh');
        window.location = 'index.php';
    </script>
<?php
}
