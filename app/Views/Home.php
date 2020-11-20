<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>
<h1> <center><marquee direction="right" scrollamount="5" align="center">
    <font color="#9932CC"><b> Welcome To My Blog :)</b> </font></marquee> </center></h1>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" >
    <div class="container">
      <h1 class="display-3"><font color="#9932CC"><b>BLOG SPESIFIKASI LAPTOP</b></font></h1>
      <p>Blog ini berisi tentang seputar informasi mengenai spesifikasi Laptop</p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
       <img src="/img/laptop.png" width="250px">
       <p> saat ini jenis laptop sangat beragam, dimulai dari merk, tipe dan juga harga..
       	saat ini laptop sangat banyak digunakan oleh masyarakat, baik untuk sekolah, bermain game ataupun bekerja..
      </div>
      <div class="col-md-4">
        <img src="/img/images.png" width="250px">
        <p>nah disini saya akan memberikan informasi mengenai spesifikasi laptop berdasarkan dengan merk dan tipe laptopnya..</p>
      </div>
      </div>

    <hr>

  </div> <!-- /container -->

</main>
<?= $this->endSection(); ?>
