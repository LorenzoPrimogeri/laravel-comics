<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0510089784.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/app.css">
    <title>Comics</title>
</head>
<body>
@include('partials.header')
<main>
    <div class="container-fluid bg-blue py-5 position-relative">    
        <div class="container " >
        <div class="position-absolute img">
            <img class="position-relative" src="{{ $card["thumb"] }}" alt="{{ $card["thumb"] }}" />
            <div class="position-absolute type bg-lightblue">
                <span class="p-1 c-white">{{$card["type"]}}</span>
            </div>
            <div class="position-absolute gallery">
                <div class="w-100 bg-lightblue">
                    <span class="p-1 c-white text-center w-100">VIEW GALLERY</span>
                </div>
            </div>
        </div>
          
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1>{{$card["title"]}}</h1>
                    <div class="row bg-lightgreen py-2 px-3">
                        <div class="col-9">
                            <div class="row justify-content-around">
                                <div class="col-8">
                                    <span><span class="c-grey">U.S. Price: </span> <span class="c-white">{{$card["price"]}}</span></span>
                                </div>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="c-grey">AVAILABLE</span>
                                </div>
                            </div>
                        </div>
                            <div class="col-3 c-white d-flex justify-content-end ">
                               <span class="align-self-end"> Check Availability <i class="fas fa-caret-down "></i></span> 
                            </div>
                    </div>
                    <div class="py-2">
                        <p>{{$card['description']}}</p>
                    </div>
                </div>
                <div class="col-4">
                    {{-- ads --}}
                </div>
            </div>
            <div class="row flex-column">
                <div class="col-6">
                    <h1> Talent</h1>
                    <div class="row">
                        <div class="col-4">
                            <span> Act By</span>
                        </div>
                        <div class="col-8">
                            @foreach ($card["artists"] as $item)
                                <a href="">{{$item}},</a>
                            @endforeach
                        </div>
                        <div class="col-4">
                            <span> written By</span>
                        </div>
                        <div class="col-8">
                            @foreach ($card["writers"] as $item)
                                <a href="">{{$item}},</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>
</main>
@include('partials.icon',["comicsData" => $comicsData])
@include('partials.footer')
</body>
</html>