<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Open Graph Tags -->
 <meta property="og:title" content="Undangan pernikahan adi saputra dan rismawati" />
 <meta property="og:description" content="Pertemuan kami cukup sekali, tetapi pertemuan ini adalah jalinan takdir yang membawa dua jiwa bertemu pada satu
         titik dalam perjalanan hidup dan harapan-harapan yang mulai tumbuh" />
 <meta property="og:image" content="{{asset('wedding/img/gallery/thumbnail/prawed-4.jpeg')}}" />
 <!-- <meta property="og:url" content="https://undangan.online/dari-adi-saputra-dan-rismawati/kepada-yth-{{$tamu->sapaan}}-{{$tamu->nama}}" /> -->
 <meta property="og:type" content="website" />
 <!-- Open Graph Tags -->
 <!-- Twitter Card Tags -->
 <meta name="twitter:card" content="summary_large_image" />
 <meta name="twitter:title" content="Undangan pernikahan adi saputra dan rismawati" />
 <meta name="twitter:description" content="Pertemuan kami cukup sekali, tetapi pertemuan ini adalah jalinan takdir yang membawa dua jiwa bertemu pada satu
         titik dalam perjalanan hidup dan harapan-harapan yang mulai tumbuh" />
 <meta name="twitter:image" content="{{asset('wedding/img/gallery/thumbnail/prawed-4.jpeg')}}" />
 <!-- Twitter Card Tags -->
 <link rel="icon" type="image/png" href="/favicon.png">
 <title>Adhy & Risma</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;600;700&display=swap"
  rel="stylesheet">

 <!-- simplyCountdown -->
 <link rel="stylesheet" href="{{ asset('wedding/countdown/simplyCountdown.theme.default.css' )}}" />
 <script src="{{ asset('wedding/countdown/simplyCountdown.min.js' )}}"></script>

 <!-- Bootstrap Icons -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

 <!-- <link rel="stylesheet" href="{{ asset('wedding/style/style.css' )}}"> -->
 <link rel="stylesheet" href="{{ asset('wedding/style/style.min.css' )}}">
</head>

<body>

 <section id="hero"
  class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
  <main>
   <h3>Kepada Bapak/Ibu/Saudara/i</h3>
   <h2 style="color: #fc8600;">{{$tamu->nama}}</h2>
   <p>Di -</p>
   <h4 style="color: #fc8600;">{{$tamu->alamat}}</h4>
   <h1>Adi Saputra & Rismawati </h1>
   <p>Akan melangsungkan resepsi pernikahan dalam:</p>
   <div class="simply-countdown"></div>
   <a href="#home" class="btn btn-lg mt-4" onClick="enableScroll()">Lihat Undangan</a>
  </main>

 </section>

 <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
  <div class="container">
   <a class="navbar-brand" href="#">Adhy&Risma</a>
   <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
     <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Adhy&Risma</h5>
     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
     <div class="navbar-nav ms-auto">
      <a class="nav-link" href="#home">Home</a>
      <a class="nav-link" href="#info">Info</a>
      <a class="nav-link" href="#story">Story</a>
      <a class="nav-link" href="#gallery">Gallery</a>
      <a class="nav-link" href="#rsvp">RSVP</a>
      <a class="nav-link" href="#gifts">Gifts</a>
     </div>
    </div>
   </div>
  </div>
 </nav>

 <section id="home" class="home">
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-8 text-center">
     <h2>Acara Pernikahan</h2>
     <h3>Diselenggarakan pada 1 Juli 2024 di Desa Parangloe, Kec. Biringbulu . Kab. Gowa, Sulawesi Selatan</h3>
     <p>Oleh karena itu, d engan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i, untuk hadir
      pada acara pernikahan kami. </p>
    </div>
   </div>

   <div class="row couple">
    <div class="col-lg-6">
     <div class="row">
      <div class="col-8 text-end">
       <h3>Adi Saputra</h3>
       <p>Putra pertama dari pasangan Bapak Karim dan ibu Subaida</p>
       <!-- <p>Putra pertama dari pasangan Bapak Karim
                <br> dan <br> ibu Subaida
              </p> -->
      </div>
      <div class="col-4">
       <img src="{{asset('wedding/img/adi-saputra.png')}}" alt="Adi Saputra" class="img-responsive rounded-circle">
      </div>
     </div>
    </div>

    <span class="heart"><i class="bi bi-heart-fill"></i></span>

    <div class="col-lg-6">
     <div class="row">
      <div class="col-4">
       <img src="{{asset('wedding/img/rismawati.jpeg')}}" alt="Rismawati" class="img-responsive rounded-circle">
      </div>
      <div class="col-8">
       <h3>Rismawati</h3>
       <p>Putri kedua dari pasangan bapak Rustan dan ibu Sabaria</p>
       <!-- <p>Putra dari Bpk. Ipsum <br> dan <br> Ibu Lorem</p> -->
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>


 <section id="info" class="info">
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-8 col-10 text-center">
     <h2>Informasi Acara</h2>
     <p class="alamat">Alamat: Desa Parangloe, Kec. Biringbulu . Kab. Gowa, Sulawesi Selatan</p>
     <iframe
      src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3971.0852291190295!2d119.73339727386744!3d-5.554383555183759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMzMnMTUuOCJTIDExOcKwNDQnMDkuNSJF!5e0!3m2!1sid!2sid!4v1719651113394!5m2!1sid!2sid"
      width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
     <a href="https://maps.app.goo.gl/nJxQeNxiUPLJYAM19" target="_blank" class="btn btn-light btn-sm my-3">Klik untuk
      membuka peta</a>
     <p class="description">Diharapkan untuk tidak salah alamat dan tanggal. Manakala tiba di tujuan namun tidak
      ada tanda-tanda sedang dilangsungkan pernikahan, boleh jadi Anda salah jadwal, atau salah tempat.</p>
    </div>
   </div>

   <div class="row justify-content-center mt-4">
    <div class="col-md-5 col-10">
     <div class="card text-center text-bg-light mb-5">
      <div class="card-header">Akad Nikah</div>
      <div class="card-body">
       <div class="row justify-content-center">
        <div class="col-md-6">
         <i class="bi bi-clock d-block"></i>
         <span>02.00 - 03.00</span>
        </div>
        <div class="col-md-6">
         <i class="bi bi-calendar3 d-block"></i>
         <span>Sabtu, 29 Juni 2024</span>
        </div>
       </div>
      </div>
      <div class="card-footer">
       Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
      </div>
     </div>
    </div>
    <div class="col-md-5 col-10">
     <div class="card text-center text-bg-light">
      <div class="card-header">Resepsi</div>
      <div class="card-body">
       <div class="row justify-content-center">
        <div class="col-md-6">
         <i class="bi bi-clock d-block"></i>
         <span>08.00 - selesai</span>
        </div>
        <div class="col-md-6">
         <i class="bi bi-calendar3 d-block"></i>
         <span>Senin, 1 Juli 2024</span>
        </div>
       </div>
      </div>
      <div class="card-footer">
       Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

 <section id="story" class="story">
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-8 col-10 text-center">
     <h2>Cerita Kami</h2>
     <span>Bagaimana Cinta Kami Bersemi</span>
    </div>
   </div>

   <div class="row">
    <div class="col">
     <ul class="timeline">
      <li class="timeline-inverted">
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img/kenal-1.jpg') }}');"></div>
       <div class="timeline-panel">
        <div class="timeline-heading">
         <h3>Kenalan</h3>
         <span>1 April 2024</span>
        </div>
        <div class="timeline-body">
         <p>Kenal saat merantau bekerja sebagai TKI di negara di Malaysia, saat itu hanya sebatas kenal tanpa menduga
          benih cinta akan tumbuh
         </p>
        </div>
       </div>

      </li>
      <li>
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img/adi-1.jpeg') }}');"></div>
       <div class="timeline-panel">
        <div class="timeline-heading">
         <h3>Bertemu</h3>
         <span>11 Mei 2024</span>
        </div>
        <div class="timeline-body">
         Pertemuan kami cukup sekali, tetapi pertemuan ini adalah jalinan takdir yang membawa dua jiwa bertemu pada satu
         titik dalam perjalanan hidup dan harapan-harapan yang mulai tumbuh
        </div>
       </div>
      </li>
      <li class="timeline-inverted">
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img/adi-2.jpeg') }}');">
       </div>
       <div class="timeline-panel">
        <div class="timeline-heading">
         <h3>Mulai Serius</h3>
         <span>27 Mei 2024</span>
        </div>
        <div class="timeline-body">
         <p>Dari pertemuan yang begitu singkat denganya, merasa ada kecocokan diantara kita berdua untuk menjalin
          hubungan yang lebih serius.
         </p>
        </div>
       </div>

      </li>
      <li>
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img/bg-prawed-front.jpeg') }}');">
       </div>
       <div class="timeline-panel">
        <div class="timeline-heading">
         <h3>Tunangan</h3>
         <span>26 Juni 2024</span>
        </div>
        <div class="timeline-body">
         Akhirnya kami memutuskan mengikat sebuah komitmen yang penuh tanggung jawab dengan sebuah pertunangan.
        </div>
       </div>
      </li>
      <li class="timeline-inverted">
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img/prawed-4.jpeg') }}');"></div>
       <div class=" timeline-panel">
        <div class="timeline-heading">
         <h3>Akad</h3>
         <span>29 Juni 2024</span>
        </div>
        <div class="timeline-body">
         <p>Akhir bulan Juni menjadi sebuah pengingat bahwa saya telah berikrar menjatuhkan hatiku padanya dan hatinya
          padaku dalam ikatan pernikahan, .
         </p>
        </div>
       </div>

      </li>
      <li>
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img/adi-dan-risma.jpeg') }}');">
       </div>
       <div class=" timeline-panel">
        <div class="timeline-heading">
         <h3>Pacaran</h3>
         <span>1 Juli 2024 dan seterusnya</span>
        </div>
        <div class="timeline-body">
         Pertemuan dan perkenalan yang begitu singkat dengannya membuat kita tak punya banyak waktu saling bertemu dan
         mengenal
         lebih jauh, kedepan hari hariku mungkin akan dipenuhi kecangungan, kejutan dan hati berbunga-bunga, seperti
         orang yang baru jadian , pacar pacaran dengan pacar yang diridhohi Allah
         SWT., semoga hari hari kami bertabur bahagia.
        </div>
       </div>
      </li>
     </ul>
    </div>
   </div>
  </div>
 </section>

 <section id="gallery" class="gallery">
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-8 col-10 text-center">
     <h2>Galeri Foto</h2>
     <span>Memori Kisah Kami</span>
    </div>
   </div>

   <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
    <div class="col mt-3">
     <a href="{{asset('wedding/img/gallery/prawed-4.jpeg')}}" data-toggle="lightbox" data-caption="Sandhika & Nofa 1"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img/gallery/thumbnail/prawed-4.jpeg')}}" alt="Sandhika & Nofa 1"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img/gallery/prawed-1.jpeg')}}" data-toggle="lightbox" data-caption="Sandhika & Nofa 2"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img/gallery/thumbnail/prawed-1.jpeg')}}" alt="Sandhika & Nofa 2"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img/gallery/prawed-3.jpeg')}}" data-toggle="lightbox" data-caption="Sandhika & Nofa 3"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img/gallery/thumbnail/prawed-3.jpeg')}}" alt="Sandhika & Nofa 3"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img/gallery/prawed-2.jpeg')}}" data-toggle="lightbox" data-caption="Sandhika & Nofa 4"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img/gallery/thumbnail/prawed-2.jpeg')}}" alt="Sandhika & Nofa 4"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img/gallery/prawed-5.jpeg')}}" data-toggle="lightbox" data-caption="Sandhika & Nofa 5"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img/gallery/thumbnail/prawed-5.jpeg')}}" alt="Sandhika & Nofa 5"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img/gallery/prawed-6.jpeg')}}" data-toggle="lightbox" data-caption="Sandhika & Nofa 6"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img/gallery/thumbnail/prawed-6.jpeg')}}" alt="Sandhika & Nofa 6"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img/gallery/prawed-7.jpeg')}}" data-toggle="lightbox" data-caption="Sandhika & Nofa 6"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img/gallery/thumbnail/prawed-7.jpeg')}}" alt="Sandhika & Nofa 6"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img/gallery/prawed-8.jpeg')}}" data-toggle="lightbox" data-caption="Sandhika & Nofa 6"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img/gallery/thumbnail/prawed-8.jpeg')}}" alt="Sandhika & Nofa 6"
       class="img-fluid w-100 rounded">
     </a>
    </div>
   </div>
  </div>
 </section>

 <section id="rsvp" class="rsvp">
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-8 col-10 text-center">
     <h2>Konfirmasi Kehadiran</h2>
     <p>Isi form di bawah ini untuk melakukan konfirmasi kehadiran.</p>
    </div>
   </div>
   <form id="my-form" action="{{ route('submit-rsvp') }}" method="POST"
    class="row row-cols-md-auto g-3 align-items-center justify-content-center">
    @csrf
    <div class="col-12">
     <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="{{$tamu->nama}}">
      <input type="hidden" class="form-control" id="nama" name="id" value="{{$tamu->id}}">
      <input type="hidden" class="form-control" id="alamat" name="alamat" value="{{$tamu->alamat}}">
      @error('nama')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>
    </div>
    <div class="col-12">
     <div class="mb-3">
      <label for="jumlah" class="form-label">Jumlah</label>
      <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="5" length="1" value="1">
      @error('jumlah')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>
    </div>
    <div class="col-12">
     <div class="mb-3">
      <label for="status" class="form-label">Konfirmasi</label>
      <select name="status" id="status" class="form-select">
       <option selected value="Hadir">Hadir</option>
       <option value="Tidak Hadir">Tidak Hadir</option>
      </select>
      @error('status')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>
    </div>
    <div class="col-12" style="margin-top: 35px;">
     <button class="btn btn-primary">Kirim</button>
    </div>
   </form>
   <div class="align-items-center justify-content-center" style="margin-top: 23px;">
    <div class="text-center">
     <h2 style="font-size: 40px;">Hormat kami yang mengundang</h2>
     <div style="margin-top: 8px;">
      <p style="font-size: 16px;">* Bapak Karim & Ny Subaida *</p>
      <p style="font-size: 16px;">* Lambe Dg Sese & Ny *</p>
      <p style="font-size: 16px;">* Firmansyah, S.Ag, SE, Dg Ngerang & Ny *</p>
      <p style="font-size: 16px;">* M. Sadir Dg Sengka (Pegawai PUPR) & Ny *</p>
      <p style="font-size: 16px;">* Mansur *</p>
      <p style="font-size: 16px;">* Kedua mempelai *</p>
     </div>
    </div>
   </div>
  </div>
 </section>

 <section id="gifts" class="gifts">
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-8 col-10 text-center">
     <h2>Kirim Hadiah</h2>
     <span>ungkapan tanda kasih</span>
    </div>
   </div>

   <div class="row justify-content-center text-center">
    <div class="col-md-6">
     <ul class="list-group">
      <li class="list-group-item">
       <div class="fw-bold">BNI</div>
       1332401645 - ADI SAPUTRA
      </li>
      <li class="list-group-item">
       <div class="fw-bold">Dana</div>
       <img src="{{asset('wedding/img/dana.jpeg')}}" alt="Dana QR" class="img-thumbnail" width="150">
      </li>
     </ul>
    </div>
   </div>
  </div>
 </section>

 <section class="rsvp">
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-8 col-10 text-center">
     <h2>Doa dan ucapan</h2>
     <p>Kirimi kami doa dan ucapan dihari bahagia kami.</p>
    </div>
   </div>

   <div class="row justify-content-center mt-5">
    <div class="col-md-6">
     <div id="disqus_thread"></div>
     <script>
     /**
      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
     /*
     var disqus_config = function () {
     this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
     this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
     };
     */
     var disqus_config = function() {
      this.page.url = 'https://undanganta.online'; // Replace PAGE_URL with your page's canonical URL variable
      this.page.identifier =
       'https://undanganta.online'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
     };
     (function() { // DON'T EDIT BELOW THIS LINE
      var d = document,
       s = d.createElement('script');
      s.src = 'https://undanganta-online.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
     })();
     </script>
     <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
       Disqus.</a></noscript>
    </div>
   </div>
  </div>
 </section>

 <footer>
  <div class="container">
   <div class="row">
    <div class="col text-center">
     <small class="block">&copy; 2024 undanganta.online - All Rights Reserved.</small>
     <small class="block">Crate by <a href="https://wa.me/o85240199085" target="_blank">@mull-algibrhani</a></small>

     <ul class="mt-3">
      <li><a href="https://wa.me/o85240199085" target="_blank"><i class="bi bi-whatsapp"></i></a></li>
      <li><a href="https://www.instagram.com/mull_algibrhani/" target="_blank"><i class="bi bi-instagram"></i></a></li>
      <li><a href="https://www.facebook.com/diazmizkot" target="_blank"><i class="bi bi-facebook"></i></a></li>
     </ul>
    </div>
   </div>
  </div>
 </footer>

 <div id="audio-container">
  <audio id="song" autoplay loop>
   <source src="{{asset('wedding/audio/kita-bikin-romantis.mp3')}}" type="audio/mp3">
  </audio>

  <div class="audio-icon-wrapper" style="display: none;">
   <i class="bi bi-disc"></i>
  </div>
 </div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

 <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

 <script>
 simplyCountdown('.simply-countdown', {
  year: 2024, // required
  month: 7, // required
  day: 1, // required
  hours: 8, // Default is 0 [0-23] integer
  words: { //words displayed into the countdown
   days: {
    singular: 'hari',
    plural: 'hari'
   },
   hours: {
    singular: 'jam',
    plural: 'jam'
   },
   minutes: {
    singular: 'menit',
    plural: 'menit'
   },
   seconds: {
    singular: 'detik',
    plural: 'detik'
   }
  },
 });
 </script>

 <script>
 const stickyTop = document.querySelector('.sticky-top');
 const offcanvas = document.querySelector('.offcanvas');

 offcanvas.addEventListener('show.bs.offcanvas', function() {
  stickyTop.style.overflow = 'visible';
 });

 offcanvas.addEventListener('hidden.bs.offcanvas', function() {
  stickyTop.style.overflow = 'hidden';
 });
 </script>

 <script>
 const rootElement = document.querySelector(":root");
 const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
 const audioIcon = document.querySelector('.audio-icon-wrapper i');
 const song = document.querySelector('#song');
 let isPlaying = false;

 function disableScroll() {
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

  window.onscroll = function() {
   window.scrollTo(scrollTop, scrollLeft);
  }

  rootElement.style.scrollBehavior = 'auto';
 }

 function enableScroll() {
  window.onscroll = function() {}
  rootElement.style.scrollBehavior = 'smooth';
  // localStorage.setItem('opened', 'true');
  playAudio();
 }

 function playAudio() {
  song.volume = 0.2;
  audioIconWrapper.style.display = 'flex';
  song.play();
  isPlaying = true;
 }

 audioIconWrapper.onclick = function() {
  if (isPlaying) {
   song.pause();
   audioIcon.classList.remove('bi-disc');
   audioIcon.classList.add('bi-pause-circle');
  } else {
   song.play();
   audioIcon.classList.add('bi-disc');
   audioIcon.classList.remove('bi-pause-circle');
  }

  isPlaying = !isPlaying;
 }

 // if (!localStorage.getItem('opened')) {
 //   disableScroll();
 // }
 disableScroll();
 </script>
 <script>
 window.addEventListener("load", function() {
  const form = document.getElementById('my-form');
  form.addEventListener("submit", function(e) {
   e.preventDefault();
   const data = new FormData(form);
   const action = e.target.action;
   fetch(action, {
     method: 'POST',
     headers: {
      'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
     },
     body: data,
    })
    .then(response => response.json())
    .then(data => {
     alert(data.success);
    })
    .catch(error => {
     alert(data.error);
     console.error('Error:', error);
    });
  });
 });
 </script>
</body>

</html>