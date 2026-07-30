<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title belajar PHP</title>
</head>

<body>

    Pilih tanggal :
    <select name="tanggal">
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    Pilih bulan :
    <select name="bulan">
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    Pilih Tahun :
    <select name="tahun">
        <?php
        for ($i = 1990; $i <= 2025; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
</body>

</html>