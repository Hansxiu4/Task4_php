<!DOCTYPE html>
<html>
<head>
    <title>Data Registrasi</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #222;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #222;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $gender = $_POST["gender"];
    $pendidikan = $_POST["pendidikan"];
    $hobi = implode(", ", $_POST["hobi"]);

    $data = "$nama,$umur,$gender,$pendidikan,$hobi\n";
    file_put_contents("registrasi.csv", $data, FILE_APPEND);

    echo "<h2>Data yang Tersimpan:</h2>";
    echo "<table>";
    echo "<tr><th>Nama</th><th>Umur</th><th>Gender</th><th>Pendidikan</th><th>Hobi</th></tr>";
    echo "<tr><td>$nama</td><td>$umur</td><td>$gender</td><td>$pendidikan</td><td>$hobi</td></tr>";
    echo "</table>";
}
?>

<button onclick="window.location.href='register.html'">Kembali</button>

</body>
</html>