<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member Introduction</title>
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
                <img class="d-block w-100" src="picture1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="picture2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="picture3.jpg" alt="Third slide">
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
  </br>
  <body bgcolor="#EDEDED">
  <ol start="0"></br>
  <h3><span style="background-color: #B5B5B5;"><b>~~成員介紹~~</b></span> </h3>
</ol>
    <div class="container" style="margin-top:60px;margin-bottom:100px">
        <div class="card-deck">
        <div class="card bg-secondary" style="width: 18rem;">
          <div class = "card">
          <img src="1.jpg" class="card-img-center" alt="陳品妤"/>
          </div>
          <div class="card-body  bg-info">
            <ol start="0">
              <h3><span style="background-color: #B5B5B5;"><b>陳品妤</b></span> </h3>
            </ol>
            <p class="card-text">可以看到最近時事上有許多關於戰爭相關的事件，因此希望可以透過網頁程式設計所學，來設計個方便查詢國家安全的網頁~</p>
          </div>
        </div>
        <div class="card bg-secondary" style="width: 18rem;">
          <div class = "card">
          <img src="2.jpg" class="card-img-top" alt="張芷榕"/>
        </div>
        <div class="card-body  bg-info">
          <ol start="0">
            <h3><span style="background-color: #B5B5B5;"><b>張芷榕</b></span> </h3>
          </ol>
            <p class="card-text">平常喜歡關注國際時事，加上這學期有在學習程式語言，希望可以融合這些實際應用在生活上，並且做出自己的成果。</p>
          </div>
        </div>
        <div class="card bg-secondary" style="width: 18rem;">
          <div class = "card">
          <img src="3.jpg" class="card-img-top" alt="侯禹鳳"/>
        </div>
        <div class="card-body  bg-info">
          <ol start="0">
            <h3><span style="background-color: #B5B5B5;"><b>侯禹鳳</b></span> </h3>
          </ol>
            <p class="card-text">身為資訊類科學習者，希望能借助這次與外系同學合作完成專題，開闊視野。可用程式語言:Python,PHP,R </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="margin-top:100px;margin-bottom:100px">
      <div class="card-deck">
      <div class="card bg-dark" style="width: 18rem;">
      <div class = "card">
        <img src="4.jpg" class="card-img-center" alt="何怡璇"/>
      </div>
        <div class="card-body bg-danger">
          <ol start="0">
            <h3><span style="background-color: #B5B5B5;"><b>何怡璇</b></span> </h3>
          </ol>
          <p class="card-text">對網路爬蟲以及資料分析非常有興趣，希望能透過這次機會深入了解python網路爬蟲方面的相關應用，也希望能藉由組員間彼此交流、溝通收穫更多。</p>
        </div>
      </div>
      <div class="card bg-dark" style="width: 18rem;">
      <div class = "card">
        <img src="6.jpg" class="card-img-center" alt="何怡璇"/>
      </div>
        <div class="card-body bg-danger">
          <ol start="0">
            <h3><span style="background-color: #B5B5B5;"><b>李安妮</b></span> </h3>
          </ol>
          <p class="card-text">身為輔系學生，在學習python的過程，一直在探索如何將政治專業與資料科學結合。在這次的專案中，希望透過政治系本科的學習，提供指數計算方面的幫助。</p>
        </div>
      </div>
      <div class="card  bg-dark" style="width: 18rem;">
        <div class = "card">
        <img src="5.jpg" class="card-img-top" alt="林千又"/>
        </div>
        <div class="card-body bg-danger">
          <ol start="0">
            <h3><span style="background-color: #B5B5B5;"><b>林千又</b></span> </h3>
          </ol>
          <p class="card-text">自己有在關心國際上的新聞，加上近幾年來國際局勢受到很大的關注，這次結合課程的內容和時事希望能從中有所學習。</p>
        </div>
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
              TEAM
            </h6>
            <p>
              <a class="text-reset">陳品妤</a>
            </p>
            <p>
              <a class="text-reset">李安妮</a>
            </p>
            <p>
              <a class="text-reset">張芷榕</a>
            </p>
            <p>
              <a class="text-reset">侯禹鳳</a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              MEMBER
            </h6>
            <p>
              <a class="text-reset">何怡璇</a>
            </p>
            <p>
              <a class="text-reset">林千又</a>
            </p>
            <p>
              <a href="hdi.php" class="btn btn-info">view</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              LINE Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> @842bizom </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      FROM GROUP THIRTEEN 13
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</html>
