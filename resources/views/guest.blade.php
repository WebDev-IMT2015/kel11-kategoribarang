<!DOCTYPE html>
<html>
<head>
  <title>Stok Barang UC</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
      <div class="header clearfix">
        <nav>
        <br>
          <ul class="nav pull-right">
            {{-- <a href="login" class="btn btn-primary">Login as Admin</a> --}}
            <br>
            <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Halaman Utama</a>
          </ul>
        </nav>
        <h3 class="text-muted">Stok Barang UC</h3>
      </div>
      
      <div>
      <form method="post">
        <nav>
          <ul class="nav nav-pills pull-left">
            <li>
            <input type="text" name="search" placeholder="Search...">
            <button class="btn btn-primary" type="submit"><img src="../search-icon.png" width="15px" height="15px"></button>
            </li>
          </ul>
        </nav>
      </form>
      </div>
      <br>
      <br>
      <div>
        <table class="table">
          <tr>
            <th>Nama Barang</th>
            <th>Tipe</th>
            <th>Dimensi</th>
            <th>Berat</th>
            <th>Foto</th>
          </tr>
            <?php $count=1;?>
      @if(@isset($barang))
          @foreach($barang as $bar)
      <tr>

        <td><?php echo $count++;?></td>
          <td>{{ $bar->namabarang }}</td>
          <td>{{ $bar->tipe }}</td>
          <td>{{ $bar->deskripsi }}</td>
          <td>{{ $bar->dimensi }}</td>
          <td>{{ $bar->berat }}</td>
          <td>{{ $bar->foto }}</td>
          
      </tr>
      @endforeach
      @endif
        </table>
      </div>
      <footer class="footer">
        <p>UAS WebDev © 2017</p>
      </footer>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>