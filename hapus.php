<html>
    <head>
        <title>Hapus Data</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>       
</html>
<?php
    include './koneksi.php';

    $id = $_GET['id_siswa'];


    $sql = "DELETE FROM siswa WHERE id_siswa='$id'";
    if($conn->query($sql) === TRUE){
        echo "<div class='alert alert-primary alert-info' role='alert'>=====Hapus Data Berhasil=====</div>";
    }else{
        echo "Eror: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
<a href='tampil.php' class='btn btn-link btn-lg'>Tampil</a>