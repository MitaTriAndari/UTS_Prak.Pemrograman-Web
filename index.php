<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas Olimpiade</title>
    <link rel="stylesheet" href="design1.css">
</head>

<body>
    <div class="container">
        <h2>PENDAFTARAN PESERTA OLIMPIADE PELAJAR</h2>
        <form action="input.php" method="post">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" name="nama" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <!-- <label for="jenis">jenis olimpiade</label> -->
            Jenis Olimpiade :
            <select id="jenis" name="jenis_olimpiade" required>
                <option value="matematika">matematika</option>
                <option value="ilmu pengetahuan alam">ilmu pengetahuan sosial</option>
                <option value="ilmu pengetahuan alam">ilmu pengetahuan alam</option>
                <option value="fisika">fisika</option>
            </select>
            
            
            <label for="asalsekolah">Asal Sekolah:</label>
            <input type="text" id="asalsekolah" name="asalsekolah" required>

            <label for="waktu">Waktu Olimpiade:</label>
            <input type="time" id="waktu" name="waktu" required>

            <label for="tanggalolimpiade">Tanggal Daftar Olimpiade</label>
            <input type="date" id="tanggalolimpiade" name="tanggalolimpiade" required>

         

            <input type="submit" value="Daftar" name="submit">
        </form>
    </div>
</body>

</html>