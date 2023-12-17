<main role="main">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <!-- <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> -->
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset( 'assets/frontend' )}}/images/banner1.jpg" class="d-block w-100 img-fluid" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p><a class="btn btn-lg btn-dark" href="#">View more</a></p>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset( 'assets/frontend' )}}/images/banner2.jpg" class="d-block w-100 img-fluid" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p><a class="btn btn-lg btn-dark" href="#">View more</a></p>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </main>
