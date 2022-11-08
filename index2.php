<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'phpmvc';

try {
  $conn = new PDO ("mysql:host=$host;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // $stmt = $conn->prepare("INSERT INTO mahasiswa (nama, npm, email, jurusan)
  // VALUES (:a, :b, :c, :d)");
  // $stmt->bindParam(':a', $nama2);
  // $stmt->bindParam(':b', $npm2);
  // $stmt->bindParam(':c', $email2);
  // $stmt->bindParam(':d', $jurusan2);

  // $nama2 = 'Tono1';
  // $npm2 = 'F1C01';
  // $email2 = 't1@gamil.com';
  // $jurusan2 = 'Fisika1';
  // $stmt->execute();

  // $nama2 = 'Tono2';
  // $npm2 = 'F1C02';
  // $email2 = 't2@gamil.com';
  // $jurusan2 = 'Fisika2';
  // $stmt->execute();

  // $nama2 = 'Tono3';
  // $npm2 = 'F1C03';
  // $email2 = 't3@gamil.com';
  // $jurusan2 = 'Fisika3';
  // $stmt->execute();

  // $conn->exec("DELETE FROM mahasiswa WHERE nama = 'Tono1'");
  $stmt = $conn->prepare("SELECT * FROM mahasiswa");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $r) {
    echo $r['nama'] . '<br>'. $r['npm'] . '<br>' . $r['email'] . '<br>'. $r['jurusan'] . '<hr>';
  }


} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}



?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php foreach ($result as $r) : ?>
    <ul>
      <li><?= $r['nama']; ?></li>
      <li><?= $r['npm']; ?></li>
      <li><?= $r['email']; ?></li>
      <li><?= $r['jurusan']; ?></li>
    </ul>
  <?php endforeach ?>
  
</body>
</html> -->