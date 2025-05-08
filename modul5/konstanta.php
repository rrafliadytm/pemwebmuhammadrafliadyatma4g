<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konstanta PHP Muhammad Rafli Adyatma</title>
</head>
<body>
    <?php 
        // Mendefinisikan konstanta
        define("NAMA", "Muhammad Rafli Adyatma");
        define("NIM", "23083000157");
        define("JURUSAN", "Sistem Informasi");
        define("UNIVERSITAS", "Universitas Merdeka Malang");
        define("EMAIL", "rafliadyatma17@gmail.com");
    ?>
    <!-- Memanggil Konstanta -->
    <p><?php echo NAMA ?></p>
    <p><?php echo NIM ?></p>
    <p><?php echo JURUSAN ?></p>
    <p><?php echo UNIVERSITAS ?></p>
    <p><?php echo EMAIL ?></p>
    <br><br><br>
    <p>Nama Saya adalah <?php echo NAMA ?></p>
    <p>NIM Saya adalah <?php echo NIM ?></p>
    <p>Jurusan Saya adalah <?php echo JURUSAN ?></p>
    <p>Universitas Saya adalah <?php echo UNIVERSITAS ?></p>
    <p>Email Saya adalah <?php echo EMAIL ?></p>
</body>
</html>