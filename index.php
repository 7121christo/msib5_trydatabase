<?php
 $db_connection = mysqli_connect("127.0.0.1", "root", "", "profil_teman") or die("Koneksi Gagal");
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MSIB5_Latihan05_6453950</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <style type="text/css">
    body {
        background-image: url("https://media.istockphoto.com/id/518979130/video/morning-light-rays-purple-loopable-background.jpg?b=1&s=640x640&k=20&c=CovzB-JnuCEsuM_J9MzRCg830FznitvtzYSHK9K-6WQ=");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>

<body>
    <h1 class="text-center m-3 text-white">Daftar Profile Teman Saya</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <div class="row justify-content-center m-3">
        <a class="btn btn-primary" href="add.php">+ Tambah Teman</a>
    </div>

    <div class="row justify-content-center m-3">
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Instagram</th>
                <th>Umur</th>

            </thead>
            <tbody>
                <?php  
                $sql = "SELECT * FROM profil";
                $result = mysqli_query($db_connection,$sql);
                $nomer = 1;
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    echo "<tr>";
                    echo "<td>".$nomer."</td>";
                    echo "<td>".$row["nama"]."</td>";
                    echo "<td>".$row["alamat"]."</td>";
                    echo "<td>".$row["instagram"]."</td>";
                    echo "<td>".$row["umur"]."</td>";
                    
                    echo "<td><a class='btn btn-warning' href ='edit.php?id=".$id. "'>Edit</a> <a class='btn btn-danger' href='delete.php?id=" .$id . "'>Delete</a></td>";
                    $nomer +=1;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>