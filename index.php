<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOT WAR SCORE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
      function validateForm() {
        var x = document.forms["search"]["country"].value;
        if (x == "") {
             alert("不能為空值!");
             return false;
        }
      }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-info">
        <div class="container">
            <a href="index.php" class="navbar-brand">Hot War Score</a>
            <form class="form-inline" name = "search" onsubmit = "return validateForm()" method = "post" action = "search.php">
                <input class="form-control mr-sm-2" name = "country" type="text" placeholder="Country" aria-label="Search">
                 <button class="btn btn-outline-light my-2 my-sm-0" type="submit">search</button>
            </form>
        </div>
    </nav>

    <div class="container"style="margin-top:10px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="/static/3.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/static/4.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/static/5.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class='tableauPlaceholder'
id='viz1654017009663'
style='position: relative'>
<noscript><a href='#'>
<img alt='危險程度 '
src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;fi&#47;final_16539920915380&#47;Sheet1&#47;1_rss.png'
style='border: none' /></a>
</noscript>
<object class='tableauViz'
style='display:none;'>
<param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
<param name='embed_code_version' value='3' />
<param name='site_root' value='' />
<param name='name' value='final_16539920915380&#47;Sheet1' />
<param name='tabs' value='no' />
<param name='toolbar' value='no' />
<param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;fi&#47;final_16539920915380&#47;Sheet1&#47;1.png' />
<param name='animate_transition' value='yes' />
<param name='display_static_image' value='yes' />
<param name='display_spinner' value='yes' />
<param name='display_overlay' value='yes' />
<param name='display_count' value='yes' />
<param name='language' value='zh-TW' />
</object>
</div>
<script type='text/javascript'>
var divElement = document.getElementById('viz1654017009663');
var vizElement = divElement.getElementsByTagName('object')[0];
vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';
var scriptElement = document.createElement('script');
scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
vizElement.parentNode.insertBefore(scriptElement, vizElement);
</script>

    <div class="container" style="margin-top:20px;margin-bottom:70px">
        <div class="card-deck">
            <div class="card-body border border-info shadow-0 mb-3">
                <h5 class="card-title">Oil</h5>
                <p class="card-text">石油</p>
                <p class="card-text"><small class="text-muted">1992年 - 2018年<br>石油產量</small></p>
                <a href="oil.php" class="btn btn-info">click me</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">Casualty</h5>
                <p class="card-text">內戰</p>
                <p class="card-text"><small class="text-muted">各國戰爭類型與<br>死亡人數</small></p>
                <a href="casualty.php" class="btn btn-info">click me</a>
            </div>
            <div class="card-body border border-info shadow-0 mb-3">
                <h5 class="card-title">Freedom</h5>
                <p class="card-text">民主程度</p>
                <p class="card-text"><small class="text-muted">各國與特區自由<br>程度與分數</small></p>
                <a href="freedom.php" class="btn btn-info">click me</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">Hdi</h5>
                <p class="card-text">經濟</p>
                <p class="card-text"><small class="text-muted">從經濟角度評量<br>人類發展指標</small></p>
                <a href="hdi.php" class="btn btn-info">click me</a>
            </div>
            <div class="card-body border border-info shadow-0 mb-3">
                <h5 class="card-title">Military </h5>
                <p class="card-text">軍力</p>
                <p class="card-text"><small class="text-muted">各國軍事排名與<br>分數</small></p>
                <a href="military.php" class="btn btn-info">click me</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">Nuclear Weapon</h5>
                <p class="card-text">核武</p>
                <p class="card-text"><small class="text-muted">國家核武器數量<br>與統計日期及排名</small></p>
                <a href="nuclear.php" class="btn btn-info">click me</a>
            </div>
        </div>
    </div>
  </body>
  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Hot War Score Introduction :</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>PEACE AND NO WAR
            </h6>
            <p>
              希望能運用課堂所學去剖晰各國戰情與地方危險程度，幫助大家了解世界戰情，並提高警覺!
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</html>
