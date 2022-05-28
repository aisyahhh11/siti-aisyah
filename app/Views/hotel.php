<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>
<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>SELAMAT DATANG!</h1>
      <form action="/cek" method="post" >
        <div>
        <input type="text" class="form" placeholder="Masukan Email Tamu" name="keyword" id="keyword">
        <button class="btn-about" type="submit" id="submit">Cek Reservasi</button>
        </div>
        <!-- <?php
        // if(isset($hasil_cari)){

        // }
        ?> -->
      </form>
    </div>
  </section>
<?= $this->endSection() ?>