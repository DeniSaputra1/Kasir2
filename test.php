<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Penjualan Pempek</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1, h2, h3 {
            color: #004085; /* Biru tua */
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.2s;
        }
        form:hover {
            transform: scale(1.02);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold; /* Bold untuk label */
        }
        input[type="number"] {
            width: 100px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #007bff; /* Border biru */
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        input[type="number"]:focus {
            border-color: #0056b3; /* Border lebih gelap saat fokus */
            outline: none;
        }
        input[type="submit"] {
            background-color: #007bff; /* Biru */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold; /* Bold untuk tombol */
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* Biru lebih gelap saat hover */
        }
        .results {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            border-left: 5px solid #007bff;
        }
        .payment-info {
            margin-top: 30px;
            padding: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .gif-container {
            text-align: center;
            margin-top: 20px;
        }
        .item-section {
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            background-color: #f8f9fa;
        }
    </style>
    <script>
        function hitungTotal() {
            // Harga per item
            const hargaPempeMentahKecil = 5000;
            const hargaPempeMentahBesar = 17000;
            const hargaPempeKecilGoreng = 5500;
            const hargaPempeBesarGoreng = 18000;

            // Mengambil input jumlah dari form
            const lenjerKecil = parseInt(document.getElementById('lenjer_kecil').value) || 0;
            const adaan = parseInt(document.getElementById('adaan').value) || 0;
            const kulit = parseInt(document.getElementById('kulit').value) || 0;
            const keriting = parseInt(document.getElementById('keriting').value) || 0;
            const telur = parseInt(document.getElementById('telur').value) || 0;

            const kapalSelam = parseInt(document.getElementById('kapal_selam').value) || 0;
            const lenjerBesar = parseInt(document.getElementById('lenjer_besar').value) || 0;

            const lenjerKecilGoreng = parseInt(document.getElementById('lenjer_kecil_goreng').value) || 0;
            const adaanGoreng = parseInt(document.getElementById('adaan_goreng').value) || 0;
            const kulitGoreng = parseInt(document.getElementById('kulit_goreng').value) || 0;
            const keritingGoreng = parseInt(document.getElementById('keriting_goreng').value) || 0;
            const telurGoreng = parseInt(document.getElementById('telur_goreng').value) || 0;

            const kapalSelamGoreng = parseInt(document.getElementById('kapal_selam_goreng').value) || 0;
            const lenjerBesarGoreng = parseInt(document.getElementById('lenjer_besar_goreng').value) || 0;

            // Perhitungan subtotal
            const subtotalMentahKecil = (lenjerKecil + adaan + kulit + keriting + telur) * hargaPempeMentahKecil;
            const subtotalMentahBesar = (kapalSelam + lenjerBesar) * hargaPempeMentahBesar;
            const subtotalKecilGoreng = (lenjerKecilGoreng + adaanGoreng + kulitGoreng + keritingGoreng + telurGoreng) * hargaPempeKecilGoreng;
            const subtotalBesarGoreng = (kapalSelamGoreng + lenjerBesarGoreng) * hargaPempeBesarGoreng;

            // Total keseluruhan
            const totalPenjualan = subtotalMentahKecil + subtotalMentahBesar + subtotalKecilGoreng + subtotalBesarGoreng;

            // Tampilkan hasil
            document.getElementById('hasil_penjualan').innerHTML = `
                <h2>Hasil Penjualan</h2>
                Total Pempe Mentah Kecil: Rp. ${subtotalMentahKecil.toLocaleString()}<br>
                Total Pempe Mentah Besar: Rp. ${subtotalMentahBesar.toLocaleString()}<br>
                Total Pempe Kecil Goreng: Rp. ${subtotalKecilGoreng.toLocaleString()}<br>
                Total Pempe Besar Goreng: Rp. ${subtotalBesarGoreng.toLocaleString()}<br>
                <h3>Total Penjualan: Rp. ${totalPenjualan.toLocaleString()}</h3>
            `;
        }
    </script>
</head>
<body>

<h1>Pempek Bulin Serengseng</h1>

<form onsubmit="event.preventDefault(); hitungTotal();">
    <div class="item-section">
        <h2>Pempe Mentah Kecil (Rp 5.000/pcs)</h2>
        Lenjer Kecil: <input type="number" id="lenjer_kecil" value="0" min="0"><br>
        Adaan: <input type="number" id="adaan" value="0" min="0"><br>
        Kulit: <input type="number" id="kulit" value="0" min="0"><br>
        Keriting: <input type="number" id="keriting" value="0" min="0"><br>
        Telur: <input type="number" id="telur" value="0" min="0"><br>
    </div>

    <div class="item-section">
        <h2>Pempe Mentah Besar (Rp 17.000/pcs)</h2>
        Kapal Selam: <input type="number" id="kapal_selam" value="0" min="0"><br>
        Lenjer Besar: <input type="number" id="lenjer_besar" value="0" min="0"><br>
    </div>

    <div class="item-section">
        <h2>Pempe Kecil Goreng (Rp 5.500/pcs)</h2>
        Lenjer Kecil: <input type="number" id="lenjer_kecil_goreng" value="0" min="0"><br>
        Adaan: <input type="number" id="adaan_goreng" value="0" min="0"><br>
        Kulit: <input type="number" id="kulit_goreng" value="0" min="0"><br>
        Keriting: <input type="number" id="keriting_goreng" value="0" min="0"><br>
        Telur: <input type="number" id="telur_goreng" value="0" min="0"><br>
    </div>

    <div class="item-section">
        <h2>Pempe Besar Goreng (Rp 18.000/pcs)</h2>
        Kapal Selam: <input type="number" id="kapal_selam_goreng" value="0" min="0"><br>
        Lenjer Besar: <input type="number" id="lenjer_besar_goreng" value="0" min="0"><br>
    </div>

    <input type="submit" value="Hitung Total Penjualan">
</form>

<div class="results" id="hasil_penjualan"></div>

<div class="payment-info">
    <h3>Informasi Pembayaran</h3>
    <p>Silakan lakukan pembayaran ke rekening BNI:</p>
    <p><strong>Nomor Rekening: 0983980433</strong></p>
    <p>An/DENI SAPUTRA</p>
    <p>Harap konfirmasi setelah melakukan pembayaran.</p>

    <!-- Tambahkan QRIS di sini -->
    <h3>Pembayaran via QRIS</h3>
    <p>Scan QRIS di bawah ini untuk pembayaran:</p>
    <img src="Qris.jpeg" alt="Silahkan Scan Qr Code" style="max-width: 300px; height: auto;">
</div>

</body>
</html>
