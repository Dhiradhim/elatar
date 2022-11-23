<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>E-Latar || Layanan Tuna Rungu</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
      </a>

      <nav id="navbar" class="navbar">
        <ul>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- ======= Contact Section ======= -->

	
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>E-Latar</p><br>
          <h2>Layanan Tuna Rungu</h2>
        </header>

        <div class="row gy-4">
          <div class="col-lg-12">
            <form name="dynamic_form" id="dynamic_form" class="php-email-form">
              <div class="row gy-4" id="dynamic_field_append">
				<div class="row gy-4">
					<div class="col-md-11">
						<textarea class="form-control" id="result1" name="text[]" rows="6" placeholder="Pesan Anda"></textarea>
					</div>
					<div class="col-md-1">
						<button class="btn btn-success" class="butt js--triggerAnimation" id="start1" type="button" value="Bicara" onclick="dengar('1');">Rekam</button>
            <br><br>
            <button class="btn btn-primary" class="butt js--triggerAnimation" onclick="responsiveVoice.speak($('#result1').val(), 'Indonesian Male', {rate: 1}); document.getElementById('sound').play();" type="button"  value="Play">Dengar</button>
						<br><br>
					</div>
				</div>
        </div>
			  <div class="row gy-4">
                <div class="col-md-12 text-center">
				<br>
                  <button name="submit" id="submit" value="Submit" type="submit">SIMPAN </button>
				          <button name="add" id="add_field" type="add">+ Tambah Baris</button>
				          <button name="stop" id="stop" class="btn btn-danger" >STOP</button>
                </div>
			  </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <h1>E-Latar</h1>
            </a>
            <p>Aplikasi yang dirancang oleh Tim IT Pengadilan Agama Kupang untuk membantu penyandang Tuna Rungu.</p>
            <div class="social-links mt-3">
              <a target="_blank" href="https://www.facebook.com/pengadilanagama.kupang/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a target="_blank" href="https://www.instagram.com/pa_kupang/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a target="_blank" href="https://www.youtube.com/channel/UCC5924YhYN_4rCVSjKDRdxA" class="youtube"><i class="bi bi-youtube"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">

          </div>

          <div class="col-lg-2 col-6 footer-links">

          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak Kami</h4>
            <p>
              Jl. Kejora, Oebobo <br>
              Kupang, Nusa Tenggara Timur <br>
			  85111<br><br>
              <strong>Telp:</strong> (0380) 820454<br>
              <strong>Email:</strong> pa_kupang@yahoo.co.id<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>E-Latar</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Created by <a target="_blank" href="https://pa-kupang.go.id">Pengadilan Agama Kupang</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 
  <!-- ResponsiveVoice-->
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=sFdzMLRD"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
 
 
        <script>
          $(document).ready(function(){ 
               var i = 1;
                  dengar1 = "dengar('";
                  dengar2 = "');";
                  suara1 = "responsiveVoice.speak($('#result";
			            suara2 = "').val(), 'Indonesian Male', {rate: 1}); document.getElementById('sound').play();";
               $('#add_field').click(function(){  
                   i++; 
                   $('#dynamic_field_append').append('<div class="row gy-4" id="row_remove'+i+'"><div class="col-md-11"><textarea class="form-control" id="result'+i+'" name="text[]" rows="6" placeholder="Pesan Anda"></textarea></div> <div class="col-md-1"> <button class="btn btn-success" class="butt js--triggerAnimation" id="start'+i+'" type="button" value="Bicara" onclick="'+dengar1+''+i+''+dengar2+'">Rekam</button><br><br><button  type="button" class="btn btn-primary" class="butt js--triggerAnimation" onclick="'+suara1+''+i+''+suara2+'">Dengar</button><br><br><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Hapus</button></div></div>');
               });
               $(document).on('click', '.btn_remove', function() {
                   var button_id = $(this).attr("id");
                   $('#row_remove'+button_id+'').remove();
               });
               $('#submit').click(function() {
                   $.ajax({
                       url:"simpan.php",
                       method:"POST",
                       data:$('#dynamic_form').serialize(),
                       success:function(data) {  
                           alert(data);
                           $('#dynamic_form')[0].reset();
                       }
                   });
               });
        })
;
      </script>

<script> 
if (! "webkitSpeechRecognition" in window) {
    alert ("Perangkat ini tidak mendukung untuk penggunaan Aplikasi ini")
}

const SpeechRecognition = window.SpeechRecognition || webkitSpeechRecognition;
const SpeechGrammarList = window.SpeechGrammarList || webkitSpeechGrammarList;
const SpeechRecognitionEvent = window.SpeechRecognitionEvent || webkitSpeechRecognitionEvent;

function dengar($result){
var no = $result;
let recognition = new SpeechRecognition();

recognition.continuous = true;
recognition.lang = 'id';
recognition.interimResults = true;

recognition.onresult = function (event) {

  let textResult = ''
  for (let i = 0; i < event.results.length; i++) {
      textResult += event.results[i][0].transcript
  }
  console.log(textResult)
  document.querySelector('#result'+no).innerHTML = textResult
}

document.querySelector('#start'+no).onclick = () => {
  recognition.start();
}
document.querySelector('#stop').onclick = () => {
  recognition.stop();
}}

</script>

</body>

</html>