<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <!-- penanganan form dengan method POST -->
    <form method="post" action="tampil.php">
        <label>Masukkan Nama</label><br />
        <input type="text" name="nama"><br />
        <label>Asal sekolah</label><br />
        <input type="text" name="askol"><br />

        <label for="Kelamin">Kelamin</label>
        <select name="kelamin" id="none">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">perempuan</option>
        </select>
<br>
        <label>Nomor telephone</label><br />
        <input type="text" name="tele"><br />
        <input type="submit" value="oke">
    </form>

</body>

</html>