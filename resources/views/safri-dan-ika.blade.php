<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Safri & Ika</title>
 <!-- Open Graph Tags -->
 <meta property="og:title" content="Undangan pernikahan Safri dan Ika" />
 <meta property="og:description" content="Semoga pernikahan kami diridhoi Allah SWT dalam membangun keluarga yang sakinah, mawahdah dan warohmah. Semoga
                  hari esok adalah hari hari yang bertabur bahagia bersamanya" />
 <meta property="og:image" content="{{asset('wedding/img-safri/gallery/thumbnail/og-image.jpg')}}" />
 <meta property="og:url" content="https://undanganta.online" />
 <meta property="og:type" content="website" />
 <!-- Open Graph Tags -->
 <!-- Twitter Card Tags -->
 <meta name="twitter:card" content="summary_large_image" />
 <meta name="twitter:title" content="Undangan pernikahan Muh Safri Nurdin dan Ika Irawati Rahman" />
 <meta name="twitter:description" content="Semoga pernikahan kami diridhoi Allah SWT dalam membangun keluarga yang sakinah, mawahdah dan warohmah. Semoga
                  hari esok adalah hari hari yang bertabur bahagia bersamanya" />
 <meta name="twitter:image" content="{{asset('wedding/img-safri/gallery/thumbnail/og-image.jpg')}}" />
 <!-- Twitter Card Tags -->
 <link rel="icon" type="image/png" href="/favicon.png">
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
   <h3 style="color: #fc8600;">Kepada Bapak/Ibu/Saudara/i</h3>
   <h2 style="color: #1E201E;">{{$tamu->nama}}</h2>
   <p style="color: #fc8600;">Di -</p>
   <h4 style="color: #1E201E;">{{$tamu->alamat}}</h4>
   <p class="nama mt-3" style="color: #fc8600;">Muh. Safri Nurdin, S.M, M.M</p>
   <p class="nama" style="color: #fc8600;">&</p>
   <p class="nama mb-2" style="color: #fc8600;">Ika Irawati Rahman, S.Hum</p>
   <p style="color: #1E201E;">Akan melangsungkan resepsi pernikahan dalam:</p>
   <div class="simply-countdown"></div>
   <a href="#home" class="btn btn-lg mt-4" onClick="enableScroll()">Buka Undangan</a>
  </main>

 </section>

 <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
  <div class="container">
   <a class="navbar-brand" href="#">Safri & Ika</a>
   <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
     <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Safri & ika</h5>
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
     <h3>Diselenggarakan pada 25 Agustus 2024 di Jl. Sungai Bialo 1 (Belakang Kantor Lurah Mallilingi), Kelurahan
      Mallilingi, Kec. Bantaeng. Kab. Bantaeng,
      Sulawesi Selatan</h3>
     <p>Oleh karena itu, dengan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i, untuk hadir
      pada acara pernikahan kami. </p>
    </div>
   </div>

   <div class="row couple">
    <div class="col-lg-6">
     <div class="row">
      <div class="col-8 text-end">
       <h3>Muh. Safri Nurdin, S.M, M.M</h3>
       <p>Putra dari pasangan Bapak H. Manaking dan ibu Darring</p>
       <!-- <p>Putra pertama dari pasangan Bapak Karim
                <br> dan <br> ibu Subaida
              </p> -->
      </div>
      <div class="col-4">
       <img src="{{asset('wedding/img-safri/safri-2.jpeg')}}" alt="Safri" class="img-responsive rounded-circle">
      </div>
     </div>
    </div>

    <span class="heart"><i class="bi bi-heart-fill"></i></span>

    <div class="col-lg-6">
     <div class="row">
      <div class="col-4">
       <img src="{{asset('wedding/img-safri/ika-2.jpg')}}" alt="Ika" class="img-responsive rounded-circle">
      </div>
      <div class="col-8">
       <h3>Ika Irawati Rahman, S.Hum</h3>
       <p>Putri dari pasangan bapak Abd. Rahman dan ibu Martina</p>
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
     <p class="alamat">Alamat: Jl. Sungai Bialo 1, Kelurahan Mallilingi, Kec. Bantaeng. Kab. Bantaeng,
      Sulawesi Selatan</p>
     <iframe
      src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d992.7855557990806!2d119.9587144!3d-5.5459211!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMzInNDUuNCJTIDExOcKwNTcnMzIuNSJF!5e0!3m2!1sid!2sid!4v1724174438565!5m2!1sid!2sid"
      width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
     <a href="https://maps.app.goo.gl/HpgtLJiazhK5wHvD9" target="_blank" class="btn btn-light btn-sm my-3">Buka Maps</a>
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
         <span>09.00 - 12.00</span>
        </div>
        <div class="col-md-6">
         <i class="bi bi-calendar3 d-block"></i>
         <span>Kamis, 15 Agustus 2024</span>
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
         <span>09.00 - selesai</span>
        </div>
        <div class="col-md-6">
         <i class="bi bi-calendar3 d-block"></i>
         <span>Minggu, 25 Agustus 2024</span>
        </div>
       </div>
      </div>
      <div class="card-footer">
       Saat acara resepsi diharapkan untuk seluruh tamu undangan datang memeriahkan acara bahagia kami memberi doa'
       restu.
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
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img-safri/kenal.jpg') }}');"></div>
       <div class="timeline-panel">
        <div class="timeline-heading">
         <h3>Kenalan</h3>
         <span>MARET 2018</span>
        </div>
        <!-- <div class="timeline-body">
         <p>Pertama kenal saat kegiatan (FTMI Sulselbar) Festival Teater Sulawesi Selatan dan Barat yang dilaksanakan di
          UIN Alauddin Makassar, dia menjadi salah satu panitia pelaksana dibagian Tiketing, Saat itu saya
          sebagai peserta dari luar kampus diharuskan mengambil tiket untuk disebarkan sebelum pentas, karena
          kepentingan informasi kegiatan saya akhirnya komunikasi melalui whatsapp.
         </p>
        </div> -->
       </div>

      </li>
      <li>
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img-safri/bertemu.jpg') }}');"></div>
       <div class="timeline-panel">
        <div class="timeline-heading">
         <h3>Bertemu</h3>
         <span>JUNI 2019</span>
        </div>
        <!-- <div class="timeline-body">
         Setelah 3 bulan kegiatan itu saya tidak bertemu lagi, namun hanya chat sesekali lewat whatsapp, kemuadian saya
         bertemu kembali dibulan JULI 2018, saat saya diundang pada kegiatan bazar penggalangan dana di kampus UIN
         Alaudddin Makassar.
        </div> -->
       </div>
      </li>

      <li class="timeline-inverted">
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img-safri/pacaran.jpg') }}');">
       </div>
       <div class="timeline-panel">
        <div class="timeline-heading">
         <h3>Komitmen</h3>
         <span>DESEMBER 2023</span>
        </div>
        <!-- <div class="timeline-body">
         <p>Setelah Pertemuan Kedua dikegiatan Bazar itu, komunikasi semakin intens. pada suatu moment saat musim duren
          tiba, dia mengajak saya berkunjung kerumahnya dan saya pun tancap gas. benar saja kata pepatah duren runtuh
          harum rasanya. Pertemuan yang semakin sering terjadi akan menimbulkan rasa asmara seperti duren runtuh.
          Akhirnya Juli
          2019 saya dan dia menjalin hubungan spesial.
         </p>
        </div> -->
       </div>

      </li>

      <li>
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img-safri/serius.jpg') }}');">
       </div>
       <div class="timeline-panel">
        <div class="timeline-heading">
         <h3>Mantapkan Hati</h3>
         <span>MEI 2024</span>
        </div>
        <!-- <div class="timeline-body">
         <p>Hubungan yang saya jalani denganya kadang mendapat banyak tantangan dan rintangan, kadang tak searah, kadang
          bertolak belakang, namun semua itu mampu terlewati dengan kesunguhan rasaku padanya, akhirnya saya memantapkan
          hatiku sepenuhnya hanya untuknya.
         </p>
        </div> -->
       </div>

      </li>
      <li class="timeline-inverted">
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img-safri/tunangan.jpg') }}');">
       </div>
       <div class="timeline-panel">
        <div class="timeline-heading">
         <h3>Tunangan</h3>
         <span>21 JUNI 2024</span>
        </div>
        <!-- <div class="timeline-body">
         Bukti atas kesungguhan itu, akhirnya kami memutuskan mengikat sebuah komitmen yang penuh tanggung jawab dengan
         sebuah pertunangan.
        </div> -->
       </div>
      </li>
      <li>
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img-safri/akad.jpg') }}');"></div>
       <div class=" timeline-panel">
        <div class="timeline-heading">
         <h3>Akad</h3>
         <span>15 AGUSTUS 2024</span>
        </div>
        <!-- <div class="timeline-body">
         <p>Bulan Agustus menjadi sebuah pengingat bahwa saya telah berikrar sepenuhnya, dengan penuh tanggungjawab
          untuk
          menjaga dan menyayangi dia sepanjang hidupku.
         </p>
        </div> -->
       </div>

      </li>
      <li class="timeline-inverted">
       <div class="timeline-image" style="background-image: url('{{ asset('wedding/img-safri/berbahagia.jpg') }}');">
       </div>
       <div class=" timeline-panel">
        <div class="timeline-heading">
         <h3>Berbahagia seterusnya</h3>
         <span>15 AGUSTUS 2024 DAN SETERUSNYA</span>
        </div>
        <!-- <div class="timeline-body">
         Semoga pernikahan kami diridhoi Allah SWT dalam membangun keluarga yang sakinah, mawahdah dan warohmah. Semoga
         hari esok adalah hari hari yang bertabur bahagia bersamanya.
        </div> -->
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
     <a href="{{asset('wedding/img-safri/gallery/prawed-1.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 1"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-1.jpg')}}" alt="Safri & Ika 1"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <!-- <div class="col mt-3">
          <a href="{{asset('wedding/img-safri/gallery/prawed-2.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 2"
            data-gallery="mygallery">
            <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-2.jpg')}}" alt="Safri & Ika 2"
              class="img-fluid w-100 rounded">
          </a>
        </div> -->
    <!-- <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-3.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 3"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-3.jpg')}}" alt="Safri & Ika 3"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-4.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 4"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-4.jpg')}}" alt="Safri & Ika 4"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-5.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 5"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-5.jpg')}}" alt="Safri & Ika 5"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-6.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 6"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-6.jpg')}}" alt="Safri & Ika 6"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-7.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 7"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-7.jpg')}}" alt="Safri & Ika 7"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-8.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 8"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-8.jpg')}}" alt="Safri & Ika 8"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-9.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 9"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-9.jpg')}}" alt="Safri & Ika 9"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-10.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 10"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-10.jpg')}}" alt="Safri & Ika 10"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-11.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 11"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-11.jpg')}}" alt="Safri & Ika 11"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-12.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 12"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-12.jpg')}}" alt="Safri & Ika 12"
       class="img-fluid w-100 rounded">
     </a>
    </div> -->
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-13.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 13"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-13.jpg')}}" alt="Safri & Ika 13"
       class="img-fluid w-100 rounded">
     </a>
    </div>

    <!-- <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-14.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 14"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-14.jpg')}}" alt="Safri & Ika 14"
       class="img-fluid w-100 rounded">
     </a>
    </div>
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-15.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 15"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-15.jpg')}}" alt="Safri & Ika 15"
       class="img-fluid w-100 rounded">
     </a>
    </div> -->
    <div class="col mt-3">
     <a href="{{asset('wedding/img-safri/gallery/prawed-4.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 4"
      data-gallery="mygallery">
      <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-4.jpg')}}" alt="Safri & Ika 4"
       class="img-fluid w-100 rounded">
     </a>
    </div>
   </div>
   <div class="col mt-3">
    <a href="{{asset('wedding/img-safri/gallery/prawed-18.jpg')}}" data-toggle="lightbox" data-caption="Safri & Ika 18"
     data-gallery="mygallery">
     <img src="{{asset('wedding/img-safri/gallery/thumbnail/prawed-18.jpg')}}" alt="Safri & Ika 18"
      class="img-fluid w-100 rounded">
    </a>
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
   <div class="align-items-center justify-content-center" style="margin-top: 50px;">
    <div class="text-center">
     <h2 style="font-size: 40px;">Hormat kami yang mengundang</h2>
     <div style="margin-top: 8px;">
      <p style="font-size: 16px;">* Bapak H. Manaking & Ny. Darring *</p>
      <p style="font-size: 16px;">* H. Samanang *</p>
      <p style="font-size: 16px;">* Muhammad Naim (Kepala Desa Kayu Loe) *</p>
      <p style="font-size: 16px;">* Abd. Maris (KIM Kayu Loe) *</p>
      <p style="font-size: 16px;">* Nuraeni Apriani M Sikki, S.Tr.IP (Camat Parigi Kab. Gowa) *</p>
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
       <!-- <div class="fw-bold">Dana</div> -->
       <img src="{{asset('wedding/img/bri.png')}}" alt="Bank BRI" class="img-thumbnail" width="150">
      </li>
      <li class="list-group-item">
       <!-- <div class="fw-bold">BRI</div> -->
       4875 0100 6787 536 - SAFRI
      </li>
      <!-- <li class="list-group-item"> -->
      <!-- <div class="fw-bold">Dana</div> -->
      <!-- <img src="{{asset('wedding/img/bri.png')}}" alt="Bank BRI" class="img-thumbnail" width="150">
      </li> -->
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
     <small class="block">Create by <a href="https://wa.me/o85240199085" target="_blank">@mull-algibrhani</a></small>

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
   <source src="{{asset('wedding/audio/cinta-terakhir.mp3')}}" type="audio/mp3">
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
  month: 8, // required
  day: 25, // required
  hours: 9, // Default is 0 [0-23] integer
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