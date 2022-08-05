@extends('layouts.main')

@section('container')
{{-- <body class="about-body">
    <div class="about-main">
        <div class="img-about"></div>
            <h1 class="h1-about">Mirza El Fandi</h1>
            <div class="text-about">Web Developer From <strong>Indoneseia</strong></div>
            <p class="p-about">Selamat datang di website saya, di website ini kalian bisa melihat banyak berita-berita menarik!.
                Saya bersekolah di Bina Mandiri Multimedia 3, Kelas 12 jurusan Rekayasa Perangkat Lunak.</p>
            <ul class="ul-about">
                <li class="li-about"><a href="#"><img src="img/fb.png" width="25px" height="25px"></a></li>
                <li class="li-about"><a href="#"><img src="img/wa.png" width="25px" height="25px"></a></li>
                <li class="li-about"><a href="#"><img src="img/tw.png" width="25px" height="25px"></a></li>
                <li class="li-about"><a href="#"><img src="img/ig.png" width="25px" height="25px"></a></li>
            </ul>
    </div>
</body> --}}

{{-- Home --}}
<section id="home">
    <h1 style="text-align: center;">Selamat Datang Di <strong>OxNews</strong></h1>
    <p style="text-align: center; font-size: 20px">Di Website ini kita menyajikan Berita-Berita Yang Menarik, Register Sekarang!!</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L30,144C60,160,120,192,180,213.3C240,235,300,245,360,229.3C420,213,480,171,540,170.7C600,171,660,213,720,240C780,267,840,277,900,250.7C960,224,1020,160,1080,160C1140,160,1200,224,1260,218.7C1320,213,1380,139,1410,101.3L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
</section>
{{-- End Home --}}


{{-- Profile --}}
<section class="jumbotron text-center">
    <h2>Pofile</h2>
    <img src="img/download.jpg" alt="Mirza ElFandi" width="200" class="rounded-circle img-thumbnail">
    <h1 class="display-4">Mirza ElFandi</h1>
    <p class="lead">Web Developer | Game Developer</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,192L26.7,192C53.3,192,107,192,160,186.7C213.3,181,267,171,320,144C373.3,117,427,75,480,69.3C533.3,64,587,96,640,101.3C693.3,107,747,85,800,69.3C853.3,53,907,43,960,74.7C1013.3,107,1067,181,1120,192C1173.3,203,1227,149,1280,106.7C1333.3,64,1387,32,1413,16L1440,0L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>

</section>

{{-- End Profile --}}

{{-- About --}}
<section id="about">
    <div class="container">
        <div class="row text-center mb-2">
            <div class="col">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos error omnis laborum ad, enim id ex at praesentium iure corrupti.</p>

            </div>
            <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero est dolorum, doloribus nam expedita necessitatibus quaerat tempora nesciunt asperiores sed enim ullam, ad voluptates rem dolorem! Explicabo pariatur tempore neque!</p>

        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L30,192C60,160,120,96,180,106.7C240,117,300,203,360,218.7C420,235,480,181,540,170.7C600,160,660,192,720,224C780,256,840,288,900,293.3C960,299,1020,277,1080,240C1140,203,1200,149,1260,149.3C1320,149,1380,203,1410,229.3L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
</section>

{{-- End About --}}

{{-- Project --}}
<section id="projects">
    <div class="container">
        <div class="row text-center mb-2">
            <div class="col">
                <h2>My Projects</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="img/projects/1.jpg" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="img/projects/1.jpg" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="img/projects/1.jpg" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="img/projects/1.jpg" class="card-img-top" alt="Project 4">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img src="img/projects/1.jpg" class="card-img-top" alt="Project 5">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,160L26.7,138.7C53.3,117,107,75,160,85.3C213.3,96,267,160,320,176C373.3,192,427,160,480,128C533.3,96,587,64,640,69.3C693.3,75,747,117,800,117.3C853.3,117,907,75,960,64C1013.3,53,1067,75,1120,96C1173.3,117,1227,139,1280,165.3C1333.3,192,1387,224,1413,240L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>

</section>

{{-- End Project --}}

{{-- Partner ship --}}
<section id="pathner">x
    <div class="container">
        <div class="row text-center mb-2">
            <div class="col">
                <h2>Pathner Ship</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card border-primary">
                    <div class="card-header">
                        <h4>User</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Gratis<small class="text-muted fw-light">/Selamanya</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Melihat Postingan</li>
                            <li>Akses Dashboard</li>
                            <li>-</li>
                            <li>-</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-primary">
                    <div class="card-header">
                        <h4>Admin</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp.1.000.000<small class="text-muted fw-light">/Bulan</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Melihat Postingan</li>
                            <li>Akses Dashboard</li>
                            <li>Membuat Postingan</li>
                            <li>-</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-primary">
                    <div class="card-header">
                        <h4>Investor</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp.2.000.000<small class="text-muted fw-light">/Bulan</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Melihat Postingan</li>
                            <li>Akses Dashboard</li>
                            <li>Membuat Postingan</li>
                            <li>Mendapatkan 2% Penghasilan Perusahaan</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L30,117.3C60,107,120,85,180,85.3C240,85,300,107,360,122.7C420,139,480,149,540,160C600,171,660,181,720,176C780,171,840,149,900,122.7C960,96,1020,64,1080,69.3C1140,75,1200,117,1260,128C1320,139,1380,117,1410,106.7L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>

</section>
{{-- End Partner ship --}}

{{-- Contact Me --}}
<section id="contact">
    <div class="container">
        <div class="row text-center mb-2">
            <div class="col">
                <h2>Contact Me</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,160L26.7,160C53.3,160,107,160,160,138.7C213.3,117,267,75,320,74.7C373.3,75,427,117,480,117.3C533.3,117,587,75,640,74.7C693.3,75,747,117,800,149.3C853.3,181,907,203,960,192C1013.3,181,1067,139,1120,144C1173.3,149,1227,203,1280,192C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>

</section>

{{-- End Contact Me --}}


{{-- Footer --}}
<footer class="bg-primary text-white text-center pb-3">
    <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="link-sosmed-coy" class="text-white fw-bold">Mirza ElFandi</a></p>

</footer>

{{-- End Footer --}}

@endsection
