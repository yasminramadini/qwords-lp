<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qwords Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
  </head>
  <body>
    @include("widgets.navbar")
    
    <header class="mt-5 py-5">
      <div class="container">
        <div class="row align-items-center">
        <div class="col-md-6">
          <h1 class="mb-4">
          Cloud Hosting Indonesia dengan <span class="text-orange">Pelayanan Terbaik</span></h1>
          <p>Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman, dan Dukungan 24 jam untuk memenuhi kebutuhan hosting Anda. Tersertifikasi ISO 27001 dengan Data Center Tier 3.</p>
          <button class="btn btn-warning d-block mt-3">Pesan Sekarang</button>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('img/hosting.png') }}" width="100%">
      </div>
      </div>
      </div>
    </header>
    
    <section class="py-5">
      <div class="container">
        <div class="row mt-4">
        <div class="col-md-6">
          <h3 class="mb-3">Cari Nama Domainmu</h3>
          <p>Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. Pilih nama yang paling mencerminkan bisnis, produk, atau layanan Anda.</p>
        </div>
        <div class="col-md-6">
          <div class="row g-3">
            <div class="col-lg-6">
              <input placeholder="Cari nama domain anda" class="form-control">
            </div>
            <div class="col-lg-3">
              <select class="form-control">
                <option>.id</option>
                <option>.com</option>
                <option>.co.id</option>
              </select>
            </div>
            <div class="col-lg-3">
              <div class="d-flex">
                <button class="btn btn-dark d-block">Cari</button>
              </div>
            </div>
            <div class="col-12 mt-4">
              <div class="row">
                <div class="col-4">
                  <p class="text-orange fw-bold mb-1">.com</p>
                  Rp 165.000
                </div>
                <div class="col-4">
                  <p class="text-orange fw-bold mb-1">.id</p>
                  Rp 225.000
                </div>
                <div class="col-4">
                  <p class="text-orange fw-bold mb-1">.info</p>
                  Rp 77.000
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    
    <section class="py-5">
      <div class="container">
        <h3 class="text-center">Cloud Hosting <span class="text-orange">Diskon Hingga 50%</span></h3>
        <p class="text-center">Layanan unggulan dengan teknologi terbaik untuk website anda</p>
        <div class="row mt-4 g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-lg p-4">
              <p class="mb-0 mt-3">Value Cloud Hosting</p>
              <p class="fw-bold mt-0 mb-3">VCH1</p>
              <p class="text-small text-decoration-line-through mb-0 text-muted">Rp 24.500</p>
              <p class="text-orange fs-4 fw-bold mt-0">Rp 14.500</p>
              <ul class="mt-3 ps-0">
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-hdd text-orange fs-4"></i>
                  <div>
                    <span>Disk</span>
                    <p class="text-orange fw-bold">3GB</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-tachometer-alt text-orange fs-4"></i>
                  <div>
                    <span>Bandwidth</span>
                    <p class="text-orange fw-bold">Unlimited</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-microchip text-orange fs-4"></i>
                  <div>
                    <span>Core CPU</span>
                    <p class="text-orange fw-bold">0.5 Core</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-search text-orange fs-4"></i>
                  <div>
                    <span>Addon / Parked Domain</span>
                    <p class="text-orange fw-bold">No</p>
                  </div>
                </li>
              </ul>
              <a href="#" class="btn btn-warning">Pesan Sekarang</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-lg p-4">
              <p class="mb-0 mt-3">Unlimited Hosting</p>
              <p class="fw-bold mt-0 mb-3">Signature</p>
              <p class="text-small text-decoration-line-through mb-0 text-muted">Rp 109.000</p>
              <p class="text-orange fs-4 fw-bold mt-0">Rp 89.900</p>
              <ul class="mt-3 ps-0">
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-hdd text-orange fs-4"></i>
                  <div>
                    <span>Disk</span>
                    <p class="text-orange fw-bold">Unlimited</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-tachometer-alt text-orange fs-4"></i>
                  <div>
                    <span>Bandwidth</span>
                    <p class="text-orange fw-bold">Unlimited</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-microchip text-orange fs-4"></i>
                  <div>
                    <span>Core CPU</span>
                    <p class="text-orange fw-bold">1 Core</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-search text-orange fs-4"></i>
                  <div>
                    <span>Addon / Parked Domain</span>
                    <p class="text-orange fw-bold">5 / 5</p>
                  </div>
                </li>
              </ul>
              <a href="#" class="btn btn-warning">Pesan Sekarang</a>
            </div>
            
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-lg p-4">
              <p class="mb-0 mt-3">High Performance</p>
              <p class="fw-bold mt-0 mb-3">HPCH Bisnis 1</p>
              <p class="text-small text-decoration-line-through mb-0 text-muted">Rp 90.000</p>
              <p class="text-orange fs-4 fw-bold mt-0">Rp 79.900</p>
              <ul class="mt-3 ps-0">
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-hdd text-orange fs-4"></i>
                  <div>
                    <span>Disk</span>
                    <p class="text-orange fw-bold">3GB</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-tachometer-alt text-orange fs-4"></i>
                  <div>
                    <span>Bandwidth</span>
                    <p class="text-orange fw-bold">Unlimited</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-microchip text-orange fs-4"></i>
                  <div>
                    <span>Core CPU</span>
                    <p class="text-orange fw-bold">1 Core</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-search text-orange fs-4"></i>
                  <div>
                    <span>Addon / Parked Domain</span>
                    <p class="text-orange fw-bold">-</p>
                  </div>
                </li>
              </ul>
              <a href="#" class="btn btn-warning">Pesan Sekarang</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-lg p-4">
              <p class="mb-0 mt-3">Cloud VPS KVM SSD</p>
              <p class="fw-bold mt-0 mb-3">VPS SC1</p>
              <p class="text-small text-decoration-line-through mb-0 text-muted">Rp 135.000</p>
              <p class="text-orange fs-4 fw-bold mt-0">Rp 75.000</p>
              <ul class="mt-3 ps-0">
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-hdd text-orange fs-4"></i>
                  <div>
                    <span>Disk</span>
                    <p class="text-orange fw-bold">25GB</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-tachometer-alt text-orange fs-4"></i>
                  <div>
                    <span>Bandwidth</span>
                    <p class="text-orange fw-bold">Unlimited</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-microchip text-orange fs-4"></i>
                  <div>
                    <span>Core CPU</span>
                    <p class="text-orange fw-bold">1 Core</p>
                  </div>
                </li>
                <li class="d-flex" style="gap: 10px;">
                  <i class="fas fa-search text-orange fs-4"></i>
                  <div>
                    <span>Addon / Parked Domain</span>
                    <p class="text-orange fw-bold">Unlimited</p>
                  </div>
                </li>
              </ul>
              <a href="#" class="btn btn-warning">Pesan Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="py-5 bg-light">
      <div class="container">
        <h3 class="text-center">Lihat Juga Layanan Kami Yang Lain</h3>
        <p class="text-center">Layanan unggulan dengan teknologi terbaik untuk website anda</p>
        <div class="row mt-4 g-3">
          <div class="col-md-4">
            <div class="card p-4 shadow">
              <p class="d-flex fs-4" style="gap: 10px; align-items: center;"><i class="fas fa-shield-alt text-orange"></i> SSL</p>
              <p class="my-3">Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.</p>
              <span>Mulai dari</span>
              <p><span class="text-orange fw-bold fs-4">Rp. 112.000</span> / tahun</p>
              <a href="#" class="btn btn-warning">Pesan Sekarang</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-4 shadow">
              <p class="d-flex fs-4" style="gap: 10px; align-items: center;"><i class="fas fa-server text-orange"></i> Dedicated Server</p>
              <p class="my-3">Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas.</p>
              <span>Mulai dari</span>
              <p><span class="text-orange fw-bold fs-4">Rp. 499.000</span> / bulan</p>
              <a href="#" class="btn btn-warning">Pesan Sekarang</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-4 shadow">
              <p class="d-flex fs-4" style="gap: 10px; align-items: center;"><i class="fas fa-server text-orange"></i> Colocation Server</p>
              <p class="my-3">Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher.</p>
              <span>Mulai dari</span>
              <p><span class="text-orange fw-bold fs-4">Rp. 500.000</span> / bulan</p>
              <a href="#" class="btn btn-warning">Pesan Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="py-5">
      <div class="container">
        <h3 class="text-center">Lihat Juga Layanan Kami Yang Lain</h3>
        <p class="text-center">Layanan unggulan dengan teknologi terbaik untuk website anda</p>
        <div class="row mt-4 g-3">
          <div class="col-md-4">
            <div class="card p-4 shadow">
              <p class="d-flex fs-4" style="gap: 10px; align-items: center;"><i class="fas fa-shield-alt text-orange"></i> SSL</p>
              <p class="my-3">Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.</p>
              <span>Mulai dari</span>
              <p><span class="text-orange fw-bold fs-4">Rp. 112.000</span> / tahun</p>
              <a href="#" class="btn btn-warning">Pesan Sekarang</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-4 shadow">
              <p class="d-flex fs-4" style="gap: 10px; align-items: center;"><i class="fas fa-server text-orange"></i> Dedicated Server</p>
              <p class="my-3">Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas.</p>
              <span>Mulai dari</span>
              <p><span class="text-orange fw-bold fs-4">Rp. 499.000</span> / bulan</p>
              <a href="#" class="btn btn-warning">Pesan Sekarang</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-4 shadow">
              <p class="d-flex fs-4" style="gap: 10px; align-items: center;"><i class="fas fa-server text-orange"></i> Colocation Server</p>
              <p class="my-3">Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher.</p>
              <span>Mulai dari</span>
              <p><span class="text-orange fw-bold fs-4">Rp. 500.000</span> / bulan</p>
              <a href="#" class="btn btn-warning">Pesan Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="py-5">
      <div class="container">
        <h3 class="text-center">Solusi Terbaik dari Kami</h3>
        <p class="text-center">Kami menawarkan solusi terbaik untuk segala kebutuhan website dan sistem anda. Mulai dari blog hingga website bisnis dan perusahaan.</p>
        <div class="row g-3 mt-4">
          <div class="col-md-4 position-relative">
            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" width="100%" style="filter: brightness(70%)" class="rounded">
            <div class="position-absolute text-white p-3" style="top: 50%; transform: translateY(-50%);">
              <p class="fs-4 fw-bold">Perusahaan</p>
              <p>Wujudkan perusahaan profesional dan berkelas dengan dukungan website terbaik dan fitur keamanan ekstra.</p>
            </div>
          </div>
          <div class="col-md-4 position-relative">
            <img src="https://images.unsplash.com/photo-1522204523234-8729aa6e3d5f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" width="100%" style="filter: brightness(70%)" class="rounded">
            <div class="position-absolute text-white p-3" style="top: 50%; transform: translateY(-50%);">
              <p class="fs-4 fw-bold">UMKM Dan Toko Online</p>
              <p>Mendukung kebutuhan website dan fokus dalam pemasaran barang / jasa secara online.</p>
            </div>
          </div>
          <div class="col-md-4 position-relative">
            <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" width="100%" style="filter: brightness(70%)" class="rounded">
            <div class="position-absolute text-white p-3" style="top: 50%; transform: translateY(-50%);">
              <p class="fs-4 fw-bold">Organisasi Dan Komunitas</p>
              <p>Website sebagai wadah perkumpulan komunitas atau organisasi di internet.</p>
            </div>
          </div>
          <div class="col-md-4 position-relative">
            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=932&q=80" width="100%" style="filter: brightness(70%)" class="rounded">
            <div class="position-absolute text-white p-3" style="top: 50%; transform: translateY(-50%);">
              <p class="fs-4 fw-bold">Sekolah</p>
              <p>Infrastruktur terbaik untuk menunjang kegiatan e-learning. Didukung platform MOODLE khusus pembelajaran daring.</p>
            </div>
          </div>
          <div class="col-md-4 position-relative">
            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" width="100%" style="filter: brightness(70%)" class="rounded">
            <div class="position-absolute text-white p-3" style="top: 50%; transform: translateY(-50%);">
              <p class="fs-4 fw-bold">Developer</p>
              <p>Tersedia paket hosting dengan spesifikasi khusus yang dev-friendly. Ekstra Node JS dan Git Version Control.</p>
            </div>
          </div>
          <div class="col-md-4 position-relative">
            <img src="https://images.unsplash.com/photo-1586281380923-93c9b0a7296e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" width="100%" style="filter: brightness(70%)" class="rounded">
            <div class="position-absolute text-white p-3" style="top: 50%; transform: translateY(-50%);">
              <p class="fs-4 fw-bold">Blogger Dan Personal</p>
              <p>Memfasilitasi blogger dengan infrastruktur website terbaik serta template website premium untuk tampil lebih profesional.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="py-5">
      <div class="container">
      <h3 class="text-center">Komitmen Qwords</h3>
      <p class="text-center">Berbagai Alasan Mengapa Pelanggan memilih Qwords</p>
      <div class="row mt-4 g-3">
        <div class="col-md-3">
          <i class="fas fa-phone fs-3 bg-orange p-3 rounded"></i>
          <p class="fw-bold fs-4 mb-0 mt-3 text-orange">Layanan 24 / 7</p>
          <p>Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.</p>
        </div>
        <div class="col-md-3">
          <i class="fas fa-book fs-3 bg-orange p-3 rounded"></i>
          <p class="fw-bold fs-4 mb-0 mt-3 text-orange">Panduan Manual Lengkap</p>
          <p>Qwords dilengkapi dengan halaman knowledge base yang berisi tutorial dan tips seputar pengelolaan website. Dapat diakses dengan mudah dan solutif.</p>
        </div>
        <div class="col-md-3">
          <i class="fas fa-tachometer-alt fs-3 bg-orange p-3 rounded"></i>
          <p class="fw-bold fs-4 mb-0 mt-3 text-orange">Up Time 99.99%</p>
          <p>Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering.</p>
        </div>
        <div class="col-md-3">
          <i class="fas fa-shield-alt fs-3 bg-orange p-3 rounded"></i>
          <p class="fw-bold fs-4 mb-0 mt-3 text-orange">Jaminan Keamanan</p>
          <p>Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami.</p>
        </div>
        <div class="col-md-3">
          <i class="fas fa-code-branch fs-3 bg-orange p-3 rounded"></i>
          <p class="fw-bold fs-4 mb-0 mt-3 text-orange">Clustered DNS</p>
          <p>DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server.</p>
        </div>
        <div class="col-md-3">
          <i class="fas fa-gem fs-3 bg-orange p-3 rounded"></i>
          <p class="fw-bold fs-4 mb-0 mt-3 text-orange">High Enterprise Server</p>
          <p>Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka.</p>
        </div>
        <div class="col-md-3">
          <i class="fas fa-project-diagram fs-3 bg-orange p-3 rounded"></i>
          <p class="fw-bold fs-4 mb-0 mt-3 text-orange">Tier 1 Network</p>
          <p>Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.</p>
        </div>
        <div class="col-md-3">
          <i class="fas fa-globe fs-3 bg-orange p-3 rounded"></i>
          <p class="fw-bold fs-4 mb-0 mt-3 text-orange">Peering Network</p>
          <p>Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil.</p>
        </div>
      </div>
      </div>
    </section>
    
    <section class="p-5 bg-primary container rounded text-white">
      <h3 class="text-md-center">Bikin website impian dengan mudah disini</h3>
      <p class="text-md-center mb-4">Jasa pembuatan website profesional untuk Perusahaan, Bisnis & UKM. Bikin Website Impian dengan mudah disini, desain website elegan dan mudah dikelola.</p>
      <p class="text-md-center fs-4">Hanya 1 jutaan</p>
      <div class="d-grid justify-content-md-center mb-4">
        <a href="#" class="btn btn-outline-white">Lihat Selengkapnya</a>
      </div>
    </section>
    
    <section class="p-5">
      <div class="container">
        <h3 class="text-center mb-3">Telah Dipercaya oleh 45.000+ Pelanggan Aktif</h3>
        <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partner-mobile.2.jpg" width="100%">
        <p class="text-center">Dan Masih Banyak Lainnya...</p>
      </div>
    </section>
    
    <section class="py-5">
      <div class="container">
      <h3 class="text-center mb-3">Partner Kami</h3>
      <div class="row justify-content-center g-3">
        <div class="col-md-3">
          <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/googlecloud.png" width="200px" class="d-block mx-auto">
        </div>
        <div class="col-md-3">
          <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_cpanel.png" width="200px" class="d-block mx-auto">
        </div>
        <div class="col-md-3">
          <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_idea.png" width="200px" class="d-block mx-auto">
        </div>
        <div class="col-md-3">
          <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_achi.png" width="200px" class="d-block mx-auto">
        </div>
        <div class="col-md-3">
          <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_pandi.png" width="200px" class="d-block mx-auto">
        </div>
        <div class="col-md-3">
          <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/AREDO-transparent.png" width="200px" class="d-block mx-auto">
        </div>
        <div class="col-md-3">
          <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_icann.png" width="100px" class="d-block mx-auto">
        </div>
      </div>
      </div>
    </section>
    
    <section class="py-5 bg-light">
      <div class="container">
        <h3 class="text-center">Apa Kata Mereka?</h3>
        <p class="text-center">Apa kata mereka yang sudah menggunakan layanan Qwords? Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.</p>
        <div class="mt-4 row g-4">
          <div class="col-md-4">
            <img src="https://www.qwords.com/wp-content/uploads/2020/09/sukses-story-id-cert.png" width="100%">
          </div>
          <div class="col-md-4">
            <img src="https://www.qwords.com/wp-content/uploads/2020/09/sukses-story-infobdg.png" width="100%">
          </div>
          <div class="col-md-4">
            <img src="https://www.qwords.com/wp-content/uploads/2020/09/sukses-story-kopi-temanggung.png" width="100%">
          </div>
        </div>
      </div>
    </section>
    
    <section class="py-5">
      <h3 class="text-center mb-3">Diliput Oleh</h3>
      <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/liput-mobile.1.jpg" width="100%">
      <div class="row mt-4 justify-content-center">
        <div class="col-6">
          <a href="#" class="btn btn-outline-warning">Lihat liputan lainnya</a>
        </div>
      </div>
    </section>
    
    <section class="py-5 bg-light">
      <div class="container">
      <h3 class="text-center mb-3">Pilih metode e-payment otomatis. Layanan Domain, Hosting, VPS langsung aktif tanpa perlu konfirmasi bayar.</h3>
      <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/all-payment-mobile.jpg" width="100%">
      <div class="row mt-4 justify-content-center">
        <div class="col-6">
          <a href="#" class="btn btn-outline-warning">Lihat panduan pembayaran</a>
        </div>
      </div>
      </div>
    </section>
    
    <section class="py-5 bg-primary text-white">
      <div class="container">
        <h3 class="text-center">Perlu Bantuan?</h3>
        <p class="text-center">Kami siap membantu anda</p>
        <div class="mt-4 row g-3">
          <div class="col-md-4 text-center">
            <i class="fas fa-phone"> +628041808888</i>
          </div>
          <div class="col-md-4 text-center">
            <i class="fab fa-whatsapp">  +6281 7437 111</i>
          </div>
          <div class="col-md-4 text-center">
            <i class="fas fa-envelope"> info@qwords.com</i>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="py-5 bg-light">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-3">
            <p class="fw-bold">Mengenai Kami</p>
            <ul class="ps-0">
              <li>
                <a href="#">Corporate Website</a>
              </li>
              <li>
                <a href="#">Qwords History</a>
              </li>
              <li>
                <a href="#">Qwords Differences</a>
              </li>
              <li>
                <a href="#">Media Publication</a>
              </li>
              <li>
                <a href="#">Network And Infrastructure</a>
              </li>
              <li>
                <a href="#">Partner</a>
              </li>
              <li>
                <a href="#">Media Kit</a>
              </li>
              <li>
                <a href="#">Career And Employment</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <p class="fw-bold">MSA/SLA/AUP</p>
            <ul class="ps-0">
              <li>
                <a href="#">Master Service Agreement</a>
              </li>
              <li>
                <a href="#">Refund Policy</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
              <li>
                <a href="#">Product Life Cycle Policy</a>
              </li>
              <li>
                <a href="#">Penggunaan Merek Dan Logo</a>
              </li>
              <li>
                <a href="#">Faktur Pajak</a>
              </li>
              <li>
                <a href="#">Migrasi Ke Qwords</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <p class="fw-bold">Layanan Reseller</p>
            <ul class="ps-0">
              <li>
                <a href="#">Afiliasi</a>
              </li>
              <li>
                <a href="#">Qwords Partner</a>
              </li>
              <li>
                <a href="#">Private Label cPanel Reseller</a></a>
              </li>
              <li>
                <a href="#">Private Label Domain Reseller</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <p class="fw-bold">Layanan Lainnya</p>
            <ul class="ps-0">
              <li>
                <a href="#">Standard Support</a>
              </li>
              <li>
                <a href="#">Flexi Main Domain</a>
              </li>
              <li>
                <a href="#">FTP Backup</a>
              </li>
              <li>
                <a href="#">Hosting Insurance</a>
              </li>
            </ul>
          </div>
          <div class="col-12 text-center">
            <p class="fs-4 text-orange">PT Qwords Company International</p>
            <p>Cloud Web Hosting Indonesia. Domain & hosting terbaik dengan akses cepat yang didukung layanan support 24/7.</p>
          </div>
        </div>
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>