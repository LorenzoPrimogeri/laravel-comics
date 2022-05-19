<main> 
    <div class="container-fluid bg-black">
      <div class="container p-0 position-relative">
        <p class="lp-btn bg-blue c-white position-absolute">CURRENT SERIES</p>
        <div class="row justify-content-between g-1 py-5">
         @foreach ($comicsArray as $index=> $comic)
          <div class="col d-flex flex-wrap">
            <a href="cardinfo/{{$index}}">
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
        </a>
          @endforeach
        </div>
        <div class="text-center py-3">
          <a class="c-white lp-btn bg-blue" href="">Load More</a>
        </div>
      </div>
  </div>   
</main>