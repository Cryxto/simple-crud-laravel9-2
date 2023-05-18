@extends('layouts.main')
@section('content')
<main style="overflow: hidden;">
  <section class="pt-5 bg-dark">
    <!-- hollow spacer -->
  </section>
  
  <!-- src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.6435-9/82090355_1428143857379638_1789485628743771938_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=174925&_nc_eui2=AeHAYGoajz_0XRlyNo8Q_U3YOPp_P4Bntwo4-n8_gGe3CpzzACva25CXJBgyZGuvXzmOe5r8UUQnAXQFZspf0Yq6&_nc_ohc=6qsvlzBkYhkAX_3Fdqj&_nc_ht=scontent-sin6-1.xx&oh=00_AfAx5TLjjJIgZIdHJpICO5kOStlblqkE9oPa7QtEMoc_oA&oe=64632766" -->
  <section id="profile" class="jumbotron text-center bg-dark pt-5">
    <!-- <img class="rounded-circle img-thumbnail mt-5" width="250" src="img/img-from-fb.jpg" alt="Yohanes Bagas" /> -->
    <img class="rounded-circle img-thumbnail mt-5"  width="250" src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.6435-9/82090355_1428143857379638_1789485628743771938_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=174925&_nc_eui2=AeHAYGoajz_0XRlyNo8Q_U3YOPp_P4Bntwo4-n8_gGe3CpzzACva25CXJBgyZGuvXzmOe5r8UUQnAXQFZspf0Yq6&_nc_ohc=6qsvlzBkYhkAX_3Fdqj&_nc_ht=scontent-sin6-1.xx&oh=00_AfAx5TLjjJIgZIdHJpICO5kOStlblqkE9oPa7QtEMoc_oA&oe=64632766" />
    <h1 class="fade-in display-5 pt-5 text-white name">Yohanes Bagas Ari Widatama</h1>
    <p class="fs-4 lead pt-1 pb-5 text-white"></p>
    <!-- Students | Junior Web Developer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#ffffff"
        fill-opacity="1"
        d="M0,128L80,138.7C160,149,320,171,480,154.7C640,139,800,85,960,74.7C1120,64,1280,96,1360,112L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
  </section>

  <section id="about">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col" data-aos="fade-down">
          <h1 class="display-3 fw-normal">About Me</h1>
        </div>
      </div>
      <div class="row justify-content-center fw-normal">
        <div class="col-md fs-4 text-center fs-2" data-aos="fade-up" data-aos-duration="2200">
          <p data-aos="fade-right" data-aos-delay="300" data-aos-duration="2200">Hello there 👋</p>
          <p data-aos="fade-left" data-aos-delay="400" data-aos-duration="2200">
            My name is Yohanes Bagas Ari Widatama. I am an Informatics Engineering Student at Esa Unggul University.
            I am still beginner at web development but willing to learn more about it. The field that i am
            interested is Backend Development and Microservices. But i am also eager to learn how to make a good
            website UI/UX.
          </p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#212529"
        fill-opacity="1"
        d="M0,160L80,160C160,160,320,160,480,176C640,192,800,224,960,213.3C1120,203,1280,149,1360,122.7L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
  </section>
  
  <section id="projects" class="text-white bg-dark" >
    <div class="container">
      <div class="row text-center py-5">
        <div class="col" data-aos="fade-down" data-aos-duration="2200">
          <h2 class="pb-3 display-3 fw-bold">My Projects</h2>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-xl-2 g-5 justify-content-center text-dark mb-4">
        <div class="col mb-3 project">
          <div class="card h-100 border-custom shadow">
            <img
              src="https://media.giphy.com/media/5Pq1P0neePyr4pQcSC/giphy.gif"
              class="card-img-top mxt-n3"
              alt="..." />
            <div class="card-body">
              <h5 class="card-title fw-bold">Simple Static Site</h5>
              <p class="card-text">
                This is my simple static site made by plain html, css, and javascript. It is deployed in github page
              </p>
              <p class="card-text">
                You can see it on :
                <a class="fw-bold text-dark" href="https://cryxto.github.io/simple-static-web/"
                  >cryxto.github.io/simple-static-web</a
                >
              </p>
            </div>
          </div>
        </div>
        <div class="col mb-3 project">
          <div class="card h-100 border-custom">
            <iframe
              class="card-img-top mxt-n3"
              style="height: 19rem;"
              src="https://www.youtube.com/embed/cpziRpXUgoc?start=1770"
              frameborder="0"></iframe>
            <div class="card-body">
              <h5 class="card-title fw-bold">Uniqgue</h5>
              <p class="card-text">
                This website is my and my team final assignment for web programming subject. As seen at the name, we
                inspired by Uniqlo website.
              </p>
              <p class="card-text">
                My job is to apply logic as an backend like working on the database and structuring the website. But
                also i helping my team to design the UI. This website being made only for fulfil our assignment
                criteria that should able to do CRUD, so there is no real transaction in this simple CRUD website.
                The stack that we are using are Codeigniter 4 and Tailwind CSS.
              </p>
            </div>
          </div>
        </div>
        <div class="col mb-3 project">
          <div class="card h-100 border-custom">
            <div class="ratio ratio-16x9">
              <iframe
                allowfullscreen
                src="https://drive.google.com/file/d/1f2dDYjP7eKd754MFA7CqjnUpvbuvkrRw/preview"
                class="mxt-n3"></iframe>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold">Simple Encryption App</h5>
              <p class="card-text">This is using python to encrypt text or image with asymetric method.</p>
            </div>
          </div>
        </div>
        <div class="col mb-3 project">
          <div class="card h-100 border-custom">
            <div class="ratio ratio-16x9">
              <iframe
                allowfullscreen
                src="https://drive.google.com/file/d/1lvEkPyo3Ng4UPOh9aExLJaM17mHNKmvY/preview"
                class="mxt-n3"></iframe>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold">Simple CRUD CI 4</h5>
              <p class="card-text">This is simple CRUD website using Codeigniter 4 and Bootstrap.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#ffffff"
        fill-opacity="1"
        d="M0,128L80,144C160,160,320,192,480,181.3C640,171,800,117,960,101.3C1120,85,1280,107,1360,117.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
  </section>

  <section id="daily-driver">
    <div class="container">
      <div class="row">
        <div class="col mb-5" data-aos="fade-down" data-aos-duration="2200">
          <h2 class="text-center display-3 fw-bold pt-4">Daily Driver</h2>
        </div>
      </div>

      <div class="row row-cols-2 row-cols-xl-4 g-4 mt-1 text-center justify-content-evenly">
        <div class="col h-100 pb-3">
          <div class="card border-0">
            <img
              id="vscode"
              src="https://code.visualstudio.com/assets/images/code-stable.png"
              class="custom-image card-img-top mx-auto d-block"
              alt="..." />
            <div class="card-body">
              <h5 class="card-title fw-bold">Visual Studio Code</h5>
              <p class="card-text">As a code editor and even an IDEA</p>
            </div>
          </div>
        </div>

        <div class="col h-100 pb-3">
          <div class="card border-0">
            <img
              id="wsl2"
              src="https://img.icons8.com/color/512/linux.png"
              class="custom-image card-img-top mx-auto d-block"
              alt="..." />
            <div class="card-body">
              <h5 class="card-title fw-bold">WSL 2</h5>
              <p class="card-text">
                Windows Sub-system for Linux Version 2 for using Linux Distro and Docker Desktop
              </p>
            </div>
          </div>
        </div>

        <div class="col h-100 pb-3">
          <div class="card border-0">
            <i class="fa-brands fa-windows fa-4x relative-size" style="color: #0079d7"></i>
            <div class="card-body">
              <h5 class="card-title fw-bold">Windows 10</h5>
              <p class="card-text">As main OS because i still need its office software and its environment</p>
            </div>
          </div>
        </div>

        <div class="col h-100 pb-3">
          <div class="card border-0 tex">
            <i class="fa-brands fa-docker fa-4x ms-4" style="color: #0079d7"></i>
            <div class="card-body">
              <h5 class="card-title fw-bold">Docker</h5>
              <p class="card-text">I am using Docker with its Desktop UI to learn how to make containerize apps</p>
            </div>
          </div>
        </div>

        <div class="col h-100 pb-3">
          <div class="card border-0 tex">
            <i class="fa-brands fa-ubuntu fa-4x" style="color: #dd4814"></i>
            <div class="card-body">
              <h5 class="card-title fw-bold">Ubuntu 20.04 LTS</h5>
              <p class="card-text">As main linux distro for programming purpose</p>
            </div>
          </div>
        </div>

        <div class="col h-100 pb-3">
          <div class="card border-0 tex">
            <i class="fa-solid fa-terminal fa-4x"></i>
            <div class="card-body">
              <h5 class="card-title fw-bold">Windows Terminal</h5>
              <p class="card-text">As terminal to accessing WSL 2 Distros</p>
            </div>
          </div>
        </div>

        <div class="col h-100 pb-3">
          <div class="card border-0">
            <img
              id="google"
              src="https://img.icons8.com/color/512/google-logo.png"
              class="custom-image card-img-top mx-auto d-block"
              alt="..." />
            <div class="card-body">
              <h5 class="card-title fw-bold">Google</h5>
              <p class="card-text">Who doesn't use it LMAO</p>
            </div>
          </div>
        </div>
        <div class="col h-100 pb-3">
          <div class="card border-0">
            <img
              id="chrome"
              src="https://img.icons8.com/color/256/chrome.png"
              class="custom-image card-img-top mx-auto d-block"
              alt="..." />
            <div class="card-body">
              <h5 class="card-title fw-bold">Google Chrome</h5>
              <p class="card-text">As main browser</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- Remove the container if you want to extend the Footer to full width. -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path
    fill="#212529"
    fill-opacity="1"
    d="M0,96L80,101.3C160,107,320,117,480,144C640,171,800,213,960,197.3C1120,181,1280,107,1360,69.3L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
</svg>
@endsection
