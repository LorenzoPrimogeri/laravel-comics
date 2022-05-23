<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0510089784.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/app.css">
    <title>Comics</title>
</head>

<body>
    @include('partials.header')
    <main>
        <div class="container-fluid bg-blue py-5 position-relative">
            <div class="container ">
                <div class="position-absolute img">
                    <img class="position-relative" src='{{$card["thumb"]}}' alt="" />
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
                        <h1 class="c-darkblue">{{$card["title"]}}</h1>
                        <div class="row bg-lightgreen py-2 px-3">
                            <div class="col-9">
                                <div class="row justify-content-around">
                                    <div class="col-8">
                                        <span><span class="c-grey">U.S. Price: </span> <span
                                                class="c-white">{{$card["price"]}}</span></span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">
                                        <span class="c-grey">AVAILABLE</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 c-white d-flex justify-content-end ">
                                <span class="align-self-end"> Check Availability <i
                                        class="fas fa-caret-down "></i></span>
                            </div>
                        </div>
                        <div class="py-2">
                            <p>{{$card['description']}}</p>
                        </div>
                    </div>
                    <div class="col-4 position-relative">
                        <div class="position-absolute h1">
                            <h3 class="c-darkblue"> ADVERTISMENT</h3>
                        </div>
                        <div>
                            <img class="w-100 mt-4" src="/images/add.jpg" alt="adc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-lightgrey">
            <div class="container">
                <div class="row flex">
                    <div class="col-5">
                        <div>
                            <h1 class="py-3"> Talent</h1>
                        </div>
                        <div class=" border-t border-b ">
                            <div class="row">
                                <div class="col-4">
                                    <span class="c-darkblue"> Act By</span>
                                </div>
                                <div class="col-8">
                                    @foreach ($card["artists"] as $item)

                                    <a href="">{{$item}}</a>
                                    @if (!$loop->last),

                                    @endif

                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="border-b ">
                            <div class="row">
                                <div class="col-4">
                                    <span class="c-darkblue"> Written By</span>
                                </div>
                                <div class="col-8">
                                    @foreach ($card["writers"] as $item)
                                    <a href="">{{$item}},</a>
                                    @if (!$loop->last),

                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-1 col-6 pb-5">
                        <div>
                            <h1 class="c-darkblue py-3">SPECS</h1>
                        </div>
                        <div class=" border-t border-b py-2">
                            <div class="row">
                                <div class="col-4 c-darkblue">Series:</div>
                                <div class="col-8 c-blue">{{$card['series']}}</div>
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="row">
                                <div class="col-4 c-darkblue">U.S. Price:</div>
                                <div class="col-8">{{$card['price']}}</div>
                            </div>
                        </div>
                        <div class=" border-t border-b py-2">
                            <div class="row">
                                <div class="col-4 c-darkblue">On Sale Date:</div>
                                <div class="col-8">{{$card['sale_date']}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-5">
                    <div class="row">
                        @foreach ($comicsdataSpecial as $data)
                        <div class="col-3 d-flex justify-content-between py-2">
                            <div>
                                <p class="c-grey">{{$data['name']}}</p>
                            </div>
                            <div>
                                <img src="/images/{{$data['icon']}}" alt="ImageData">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('partials.icon',["comicsData" => $comicsData])
    @include('partials.footer')
</body>

</html>