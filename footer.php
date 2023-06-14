<head>
  <link rel="stylesheet" href="style.css">
</head>

<div id="templatemo_bottom"><span class="bf bft"></span><span class="bf bfb"></span>
  <div class="col col_3 sosmed">
    <h4>Social</h4>
    <div class="sosmed-container">
    <?php include "koneksi.php";
      $query = mysqli_query($koneksi,"SELECT * FROM tb_social");
      while($data = mysqli_fetch_array($query)):
    ?>
     <img src="admin/social/gambar/<?= $data['icon']; ?>" alt="" width="30" class="img-sosmed">
     <p><?= $data['nama_sosmed']; ?></p>
    <?php endwhile ?>
    </div>
  </div>
  <div class="col col_3">
    <h4>Twitter</h4>
    <?php include "koneksi.php";
      $query = mysqli_query($koneksi,"SELECT * FROM tb_twitter");
      while($data = mysqli_fetch_array($query)):
    ?>
      <h4><?= $data['judul']; ?></h4>
      <p><?= $data['isi']; ?></p>
    <?php endwhile ?>
  </div>
  <div class="col col_3">
    <h4>About</h4>
    <?php include "koneksi.php";
      $query = mysqli_query($koneksi,"SELECT * FROM tb_about");
      while($data = mysqli_fetch_array($query)):
    ?>
      <h4><?= $data['judul']; ?></h4>
      <p><?= $data['isi']; ?></p>
    <?php endwhile ?>
  </div>

  <div class="clear"></div>
</div>