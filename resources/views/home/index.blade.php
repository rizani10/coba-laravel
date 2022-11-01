@extends('home.layout.app')
@section('content')

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ 'img/h1.jpg'  }}" alt=""width="100px" height="200px">

          <div class="container">
            <div class="carousel-caption">
              <h1>SMP Negeri 2 Padang Batung</h1>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ 'img/h2.jpg'  }}" alt=""width="100px" height="200px">

          <div class="container">
            <div class="carousel-caption">
              <h1>SMP Negeri 2 Padang Batung</h1>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  <div class="container marketing">


    <!-- Three columns of text below the carousel -->
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <img src="https://img.icons8.com/dusk/64/000000/students.png" alt="https://img.icons8.com/dusk/64/000000/students.png" class="bd-placeholder-img rounded-circle" width="140" height="140"/>
        <h2>Siswa</h2>
        <h2>{{ $siswa }}</h2>
      </div>

      <div class="col-lg-4">
        <img src="https://img.icons8.com/dusk/64/000000/school-director-male-skin-type-6.png" alt="https://img.icons8.com/dusk/64/000000/school-director-male-skin-type-6.png" class="bd-placeholder-img rounded-circle" width="140" height="140"/>
        <h2>Guru</h2>
        <h2>{{ $guru }}</h2>
      </div>
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

  </div><!-- /.container -->

        
@endsection