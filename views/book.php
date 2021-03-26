
<p style="text-align:center;color:#F79022;"><font size ="6"> Isi Form Dibawah ya untuk Janjian </font></p>
<P style="text-align:center;"><font size="5"> <b>Biar Dokter Tau siapa namamu </b></font></P>

<section id="book-a-table" class="book-a-table">
      <div class="container">
        <div class="section-title">
          <h2><span></span></h2>
          <p></p>
        </div>

        <span><a href="index.php">Kembali</a></span>
     
        <form action="views/act.php?action=tambah" method="post" accept-charset="utf-8">
            <div class="form-row">
              <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Masukkan Nama Lengkap" data-rule="minlen:4" data-msg="Please enter at least 2 chars">
                <div class="validate"></div>
              </div>
              <input class="text-align" type="hidden" name="page" value="<?php echo $page; ?>"/>
              <div class="col-lg-4 col-md-6 form-group">
                <input type="text" class="form-control" name="telp" id="phone" placeholder="Format Telepon awalan 62" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="pesan" rows="5" placeholder="Tulis Masalah Kulitmu disini!"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            </div>
              <div class="text-center"><button class="btn" style="background-color:#F79022;" type="submit">Send Message</button></div>
        </form>

      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </section>
