<!DOCTYPE html>
<html>
<head>
  <title>Pembayaran Toko Bunga</title>
  <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
  <div class="container">
    <h2>Transaksi Pembayaran Toko Bunga</h2>
    <form action="print.php" method="post">
      <div class="row">
        <div class="col-25">
          <label for="nama_pembeli">Nama Pembeli</label>
        </div>
        <div class="col-75">
          <input type="text" name="nama" placeholder="Masukan Nama" required="">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="nama_bunga">Nama Produk</label>
        </div>
        <div class="col-75">
          <input type="text" name="bunga" value="Pot Semen" readonly="">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="harga">Harga</label>
        </div>
        <div class="col-75">
          <input type="number" name="harga" id="harga" value="10000" readonly="">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="jumlah beli">Jumlah Beli</label>
        </div>
        <div class="col-75">
          <input type="number" name="jml" id="jumlah" onkeyup="bunga_kali();" placeholder="Masukan Jumah Beli" required="">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="total bayar">Total Bayar</label>
        </div>
        <div class="col-75">
          <input type="number" id="nominal" name="total" readonly="">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="bayar">Bayar</label>
        </div>
        <div class="col-75">
          <input type="number" name="bayar" id="bayar" onkeyup="bunga_kurang();" placeholder="Masukan Uang Anda" required="">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="kembalian">Kembalian</label>
        </div>
        <div class="col-75">
         <input type="number" name="kembalian" id="kembalian" readonly="">
        </div>
      </div>

      <div class="row">
        <button type="submit">Print</button> <input type="reset" value="Reset">
      </div>
    </form>
    <br><br><br><br><br><br>
  </div>


<script type="text/javascript">
    function bunga_kali() {
      var jumlah_bunga = document.getElementById('jumlah').value;
      var harga = document.getElementById('harga').value; 
      var total_kali = parseInt(jumlah_bunga) * parseInt(harga);

      if (!isNaN(total_kali)) {
        document.getElementById('nominal').value = total_kali;
      }
    }

    function bunga_kurang() {
      var uang_anda = document.getElementById('bayar').value;
      var nominal = document.getElementById('nominal').value; 
      var total_kurang = parseInt(uang_anda) - parseInt(nominal);

      if (!isNaN(total_kurang)) {
        document.getElementById('kembalian').value = total_kurang;
      }
    }
  </script>
</body>
</html>