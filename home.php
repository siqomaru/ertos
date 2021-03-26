<!DOCTYPE html>
<html lang="en">
<?php
   include('config/database.php');
   $conn = new database();
   
?>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

        <title>ERTOS KONSULTASI DOKTER</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,700&display=swap" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
        <p style="text-align:center;color:black;"><font size ="5%"> 10 Menit Curhatin Langsung Masalah Kulitmu Dengan Dokter Melalui Video Call</font></p>
        <P style="text-align:center;font-family: 'Lora', serif;"><font size="6%"> <b>Janjian Dulu Yuk!!! </b></font></P>
        <p style="text-align:center;">Pilih sendiri waktu konsultasimu dibawah ya</p>
        <style>
        .btn {
                background-color:#F79022 ;
        }

        </style>

</head>

<body>


<section id="gallery" class="gallery">
    <div class="container" style="text-align:right;">
       <hr>
            <button type="button" style="font-size:10px;" class="btn btn-disable"></button> Terisi
            &emsp;<button type="button" style="font-size:10px; background-color:#F79022; position:right;" class="btn btn-disable"></button> Tersedia
            
          <div class="container">
              <div class="row">
                <div class="col-md-2 col-xs-2">
                </div>
                    <div class="col-md-8 col-xs-8" style="text-align:center;">
                        <br>
                              <?php
                                $tgl = date('d-m-Y');
                                for ($i=1; $i <=5 ; $i++) {
                                    // echo "<br>";
                                    echo "<h4>";
                                    echo GetDayIndonesia(manipulasiTanggal($tgl,'1','day')). ", ";
                                    $link  = manipulasiTanggal($tgl);
                                    echo $link ."<br>";
                                    // echo "<br>";
                                    $datebook = formatTanggal($link);
                                    $tgl = manipulasiTanggal($tgl,'1','days');
                                    
                                    for ($x= 10; $x <= 17; $x++){ 
                                            $param = "$datebook$x"
                                            ?>
                                            
                                            <a href="?page=<?php echo $param ?>">
                                            <button type="button" style="width:100px;margin-top:3%;border-radius: 15px; border:0;" class="btn btn-primary" <?php if ($conn->cekdate($param)==false){
                    
                                                    echo "disabled";
                                            } ?>><?php echo "$x:00 WIB";?></button>
                                            </a>
                    
                                            <?php
                               }
                                echo "<br>";
                                echo "<hr>";
                              } ?>
                    </div>
                </div>
          </div>
    </div>
</section>

<?php

  function getDayIndonesia($date)
  {
          if ($date !='0000-00-00') {
                  $date = hari(date('D', strtotime($date)));
          }else {
                  $date = '-';
          }
          return $date;
  
  }
  function manipulasiTanggal($tgl,$jml=1,$format='days')
  {
          $currentDate = $tgl;
          return date('d F Y', strtotime($jml.''.$format, strtotime($currentDate)));
  }

  function formatTanggal($date){
    // ubah string menjadi format tanggal
    return date('dmY', strtotime($date));
   }
  
  function hari($day)
  {
          $hari = $day;
  
          switch ($hari) {
                  case 'Sun':
                          $hari = "Ahad";
                          break;
                  case 'Mon':
                          $hari = "Senin";
                          break;
                  case 'Tue':
                          $hari = "Selasa";
                          break;
                  case 'Wed':
                          $hari = "Rabu";
                          break;
                  case 'Thu':
                          $hari = "Kamis";
                          break;
                  case 'Fri':
                          $hari = "Jum'at";
                          break;
                  case 'Sat':
                          $hari = "Sabtu";
                          break;
          }
          return $hari;
  };

        function bulanindo($bulanind)
        {
        $bulan = array (1 => 'Januari',
         'Februari',
          'Maret', 
          'April', 
          'Mei', 
          'Juni', 
          'Juli', 
          'Agustus', 
          'September', 
          'Oktober', 
          'November', 
          'Desember'
        );
        return $bulan[$bulanind]
        $split = explode('-', $bulan);
        return $split[2]. ' ' . $bulan[(int)$split[1]] . ' ' .$split[0];

        };
        // echo bulan
?>
       <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/venobox/venobox.min.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

  </body>
</html>