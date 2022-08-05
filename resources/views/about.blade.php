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

<section class="jumbotron text-center">
    <img src="img/download.jpg" alt="Mirza ElFandi" width="200" class="rounded-circle img-thumbnail">
    <h1 class="display-4">Mirza ElFandi</h1>
    <p class="lead">Web Developer | Game Developer</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,192L26.7,192C53.3,192,107,192,160,186.7C213.3,181,267,171,320,144C373.3,117,427,75,480,69.3C533.3,64,587,96,640,101.3C693.3,107,747,85,800,69.3C853.3,53,907,43,960,74.7C1013.3,107,1067,181,1120,192C1173.3,203,1227,149,1280,106.7C1333.3,64,1387,32,1413,16L1440,0L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>

</section>

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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,96L26.7,122.7C53.3,149,107,203,160,224C213.3,245,267,235,320,213.3C373.3,192,427,160,480,149.3C533.3,139,587,149,640,165.3C693.3,181,747,203,800,186.7C853.3,171,907,117,960,117.3C1013.3,117,1067,171,1120,176C1173.3,181,1227,139,1280,112C1333.3,85,1387,75,1413,69.3L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>

</section>

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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L26.7,138.7C53.3,117,107,75,160,85.3C213.3,96,267,160,320,176C373.3,192,427,160,480,128C533.3,96,587,64,640,69.3C693.3,75,747,117,800,117.3C853.3,117,907,75,960,64C1013.3,53,1067,75,1120,96C1173.3,117,1227,139,1280,165.3C1333.3,192,1387,224,1413,240L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>

</section>

<section id="contact">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Contact Me</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8"></div>
        </div>
    </div>
</section>

@endsection
