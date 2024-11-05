<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa - Apandie International School</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Penerimaan Siswa Baru</h2>
        <h3>Apandie International School</h3>
        <form action="process.php" method="POST" onsubmit="return validateKKM()">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nisn">NISN:</label>
                <input type="text" id="nisn" name="nisn" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="Science">Science</option>
                    <option value="Social Studies">Social Studies</option>
                    <option value="Mathematics">Mathematics</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nilai_mtk">Nilai Matematika:</label>
                <input type="number" id="nilai_mtk" name="nilai_mtk" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="nilai_bindo">Nilai Bahasa Indonesia:</label>
                <input type="number" id="nilai_bindo" name="nilai_bindo" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="nilai_bing">Nilai Bahasa Inggris:</label>
                <input type="number" id="nilai_bing" name="nilai_bing" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="nilai_ipa">Nilai IPA:</label>
                <input type="number" id="nilai_ipa" name="nilai_ipa" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="telepon">Nomor Telepon:</label>
                <input type="tel" id="telepon" name="telepon" required>
            </div>
            <input type="submit" value="Daftar">
        </form>
        <div id="error-message" style="display: none; color: red;">
            Nilai rata-rata minimal untuk lulus adalah 75.
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
