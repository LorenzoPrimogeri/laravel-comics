<section>
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
  </section>