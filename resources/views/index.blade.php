<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0510089784.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/app.css">
    <title>Comics</title>
</head>
<body>
    <header>
        <div class="container-fluid bg-blue">
            <div class="container ">
                <ul class="c-white d-flex justify-content-end">
                    <li class="px-2">DC POWER VISA</li>
                    <li>ADDITIONAL DC SITES <i class="fas fa-caret-down "></i></li>
                </ul>
            </div>
          <div class="container-fluid bg-white">
            <div class="container">
              <div class="row justify-content-betweeen py-3">
                <div class="col-1">
                  <img src="../images/dc-logo.png" alt="dc-logo.png" />
                </div>
                <div class="col-9 d-flex align-items-center justify-content-end">
                  <ul class="header-list">
                    <li>CHARACTERS</li>
                    <li>COMICS </li>
                    <li>MOVIES</li>
                    <li>TV</li>
                    <li>GAMES</li>
                    <li>COLLECTIBLES</li>
                    <li>VIDEOS</li>
                    <li>FANS</li>
                    <li>NEWS</li>
                    <li>SHOP <i class="fas fa-caret-down "></i></li>
                 </ul>
              </div>
                <div class="col-1 d-flex">
                  {{-- search --}}
                </div>
              </div>
            </div>
          </div>
        </div>
    </header>
    <main> 
        <div class="container-fluid jt-image"></div> 
        <div class="container-fluid bg-black">
          <div class="container p-0 position-relative">
            <p class="lp-btn bg-blue c-white position-absolute">CURRENT SERIES</p>
            <div class="row justify-content-between g-1 py-5">
             @foreach ($comicsArray as $comic)
              <div class="col d-flex flex-wrap">
                <div>
                  <img src="{{ $comic['thumb'] }}" alt="{{ $comic['thumb'] }}" />
                </div>
                <div class="d-flex flex-wrap">
                  <p class="m-0 c-white w-100">{{ $comic['series'] }}</p>
                  <div class="d-flex flex-column align-self-end">
                    <a class="c-grey" href="">{{ $comic['type'] }}</a>
                    <a class="c-red" href="">{{  $comic['price'] }}</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="text-center py-3">
              <a class="c-white lp-btn bg-blue" href="">Load More</a>
            </div>
          </div>
        </div>   
        <div class="container-fluid bg-blue py-3">
          <div class="container py-3">
            <div>
              <ul class="d-flex justify-content-between align-items-center">
              @foreach ($comicsData as $data)
              <li class="c-white">
                <img class="sizeImg" src="../images/{{$data['icon']}}" alt="{{$data['icon']}}" />
                {{ $data['name'] }}
              </li>   
                @endforeach
               
              </ul>
            </div>
          </div>
        </div>
    </main>
<footer>
  <div class="jumbo_footer">
    <div class="container">
      <div class="row container_logo_dc">
        <div class="col-sm-7 container_footer_list d-flex flex-row">
          <div class="d-flex flex-column pt-5 pe-5">
            <h3>DC COMICS</h3>
            <ul>
              <li><a href="#">Characters</a></li>
              <li><a href="#">Comics</a></li>
              <li><a href="#">Movies</a></li>
              <li><a href="#">TV</a></li>
              <li><a href="#">Games</a></li>
              <li><a href="#">Videos</a></li>
              <li><a href="#">News</a></li>
            </ul>
            <h3 class="pt-4">SHOP</h3>
            <ul>
              <li><a href="#">Shop DC</a></li>
              <li><a href="#">Shop DC Collectibles</a></li>
            </ul>
          </div>
          <div class="d-flex flex-column pt-5 pe-5">
            <h3>DC</h3>
            <ul >
              <li><a href="#">Terms Of Use</a></li>
              <li><a href="#">Privacy policy (New)</a></li>
              <li><a href="#">Ad Choices</a></li>
              <li><a href="#">Advertising</a></li>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Subscriptions</a></li>
              <li><a href="#">Talent WorkShops</a></li>
              <li><a href="#">CPSC Certificates</a></li>
              <li><a href="#">Ratings</a></li>
              <li><a href="#">Shop Help</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="d-flex flex-column pt-5">
            <h3>SITES</h3>
            <ul>
              <li><a href="#">DC</a></li>
              <li><a href="#">MAD Magazine</a></li>
              <li><a href="#">DC Kids</a></li>
              <li><a href="#">DC Universe</a></li>
              <li><a href="#">DC Power Visa</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-5 logo_dc_bg"></div>
      </div>
    </div>
  </div>

  <div class="footer_socials">
    <div class="container">
      <div class="row py-5 align-items-center justify-content-between">
        <div class="col-auto">
          <a class="sign_up_footer" href="#">SIGN-UP NOW</a>
        </div>
        <div class="col-auto">
          <div class="row align-items-center">
            <div class="col-auto follow_footer">FOLLOW US</div>
            <div class="col-auto">
              <img src="/images/footer-facebook.png" alt="facebook" />
            </div>
            <div class="col-auto">
              <img src="/images/footer-twitter.png" alt="twitter" />
            </div>
            <div class="col-auto">
              <img src="/images/footer-youtube.png" alt="youtube" />
            </div>
            <div class="col-auto">
              <img src="/images/footer-pinterest.png" alt="pinterest" />
            </div>
            <div class="col-auto">
              <img src="/images/footer-periscope.png" alt="periscope" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
    
</body>
</html>