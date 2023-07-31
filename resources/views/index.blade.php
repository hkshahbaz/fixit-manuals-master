<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('user/images/logo-02.png') }}" type="image/gif" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <title>Home</title>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white pl-md-5 pr-md-5 pt-0 pb-0">
    <a class="navbar-brand img-full" href="#"><img src="{{ asset('user/images/logo-02.png') }}" width="60"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown ml-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('user/images/share.png') }}">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown ml-2 mr-5">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white font-weight-bold" href="#main">
                    <button class="btn btn-download">Download</button>
                </a>
            </li>
        </ul>

    </div>
</nav>
<!-- Mian section with background image -->
<section class="main-section">
    <div class="container-fluid bg-dark">
        <form method="POST" action="{{ route('search.manual.exact') }}">
            <input name="_token" value="{{ csrf_token() }}" hidden>
            <div class="row  justify-content-center">
            <div class="col-md-3 mt-2 mb-2">
                <select class="form-control" name="brand_id">
                    <option value="">Select Manufacturer</option>
                    @foreach($brands as $bd)
                        <option value="{{ $bd->id }}">{{ $bd->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3  mt-2 mb-2">
                <select class="form-control" name="car_model_id">
                    <option value="">Select Model</option>
                    @foreach($modellist as $mod)
                        <option value="{{ $mod->id }}">{{ $mod->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3  mt-2 mb-2">
                <select class="form-control" name="year_id">
                    <option value="">Select Year</option>
                    @foreach($years as $year)
                        <option value="{{ $year->id }}">{{ $year->year }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-1  mt-2 mb-2">
                <div class="resp-position">
                    <button type="submit" class="bg-main pl-2 pr-2 pt-1 pb-1" style="border: none;"> <img style="border-radius: 4px;"
                                      src="{{ asset('user/images/search.png') }}"></button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="conatainer ">
        <div class="text-center pt-5">
            <h1 class="text-uppercase font-weight-bold color-a">FIXIT MANual</h1>
            <h1 class="text-capitalize font-weight-normal">Download your manual now</h1>

        </div>
    </div>

</section>
<section>
    <div class="container-fluid" style="margin-top: -6rem;">
        <!-- Main menu -->
        <div class="container  bg-white" style=" border-radius: 4px;">
            <div class="row justify-content-center" style="border-bottom: 1px solid #2e3d97;">

                <div class="col-md-2  active point " id="home" onclick="hideElementZero()">
                    <h6 class="pt-3 pb-2 text-center">Home</h6>
                </div>
                <div class="col-md-2 point" id="search" onclick="hideElement()">
                    <h6 class="pt-3 pb-2 text-center">Search Manuals</h6>
                </div>
                <div class="col-md-2 point" id="browse" onclick="hideElementOne()">
                    <h6 class="pt-3 pb-2 text-center"> Browse Brands</h6>
                </div>
                <div class="col-md-2 point" id="about" onclick=" hideElementTwo()">
                    <h6 class="pt-3 pb-2 text-center"> About Us</h6>
                </div>
                <div class="col-md-2 point" id="donate" onclick=" hideElementThree()">
                    <h6 class="pt-3 pb-2 text-center"> Donate</h6>
                </div>
                <div class="col-md-2 point " id="contact" onclick=" hideElementFour()">
                    <h6 class="pt-3 pb-2 text-center"> Contact us</h6>
                </div>

            </div>
            <!------------------- For home Who we are -->
            <div id="who">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-6">
                        <h3 class="text-capitalize m-2">Who we are?</h3>
                        <div class="inner">&nbsp;</div>

                        <p class=" m-2 pt-4 pb-3">
                            We are car enthusiasts who source repair manuals and provide them on a platform
                            that is very cheap so that everyone can afford them.
                            We believe that with the right manuals DIY's and Mechanics can apply the best fixes and save money.</p>
                        </p>
                        <a class="text-decoration-none color-a ml-2" href="#">View more <span><img class="ml-1" src="{{ asset('user/images/view more.png') }}"></span></a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center pt-4">
                            <img class="img-fluid" src="{{ asset('user/images/about.png') }}" width="400">
                        </div>
                    </div>
                </div>
            </div>
            <!--------------------------------------For search tab-------------------------------------------->
            <div id="searching" style="display: none;">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <h4 class="text-center pt-5">Enter keywords below to search our website and find the car
                            manuals
                            you are looking for</h4>
                        <form class="form-inline mt-5" action="{{ route('search.manual') }}" method="POST">
                            <input class="form-control w-75 mr-sm-2 ml-sm-5" type="search" placeholder="Search"
                                   aria-label="Search" name="manual"  value="@if(isset($word)) {{ $word }} @endif">
                            <input name="_token" value="{{ csrf_token() }}" hidden>
                            <button class="btn btn-search my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                @php $x=1; @endphp
                @if(isset($manual) && $manual->count()>0)
                    <script>
                        $(document).ready(function () {
                            $('#search').click()
                        })
                    </script>
                    @foreach($manual as $man)
                        <div class="row justify-content-center mt-3">
                            <div class="col-md-12 bg-brads">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="text-manual pt-3 pb-2 ">Manual {{$x}} : {{ $man->model->title }}</h6>
                                    </div>
                                    <div class="col-2">
                                        <h6 class="text-manual pt-3 pb-2 ">{{ $man->year->year }}</h6>
                                    </div>
                                    <div class="col-2">
                                        <h6 class="text-manual pt-3 pb-2">$10</h6>
                                    </div>
                                    <div class="col-2">
                                        <p class="d-none id">{{ $man->id }}</p>
                                        <p class="d-none link">{{asset('filess/'.$man->manual) }}</p>
                                        <p class="d-none filename">{{ $man->manual }}</p>
                                        <a id="download" href="#" data-toggle="modal" data-target="#exampleModalCenter"> <img
                                                src="user/images/download black.png" class="img-fluid pt-3 " width="20"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $x++; @endphp
                    @endforeach
                @elseif( isset($manual) && $manual->count() == 0)
                    <script>
                        $(document).ready(function () {
                            $('#search').click()
                        })
                    </script>
                    <div class="row text-muted justify-content-center p-3">
                        <br/>
                        <br/>
                        <h1>No Manula Found!</h1>
                    </div>
                    <br/>
                @else
                    <div class="row text-muted justify-content-center p-3">
                        <br/>
                        <br/>
                        <h1>Search For Manuals Here!</h1>
                    </div>
                    <br/>
                @endif
                <br/>

            </div>
            <!-- ------------------------------------Browse Brand menu------------------------------------- -->
            <div id="Brandsearch" style="display: none;">
                <div class="row justify-content-end">
                    <div class="col-md-8">
                        <form class="form-inline mt-5" action="{{ route('search.manual') }}" method="POST">
                            <input name="_token" hidden value="{{ csrf_token() }}">
                            <input class="form-control w-75 mr-sm-2 ml-sm-5" type="search" placeholder="Search"
                                   aria-label="Search" name="manual">
                            <button class="btn btn-search my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="text-center">
                            <h3 class="text-capitalize mt-5">Find your manual here</h3>
                            <div class="inner2">&nbsp;</div>
                            <p class="text-muted mt-4">Find manual for your favourite brand by just clicking the download button.
                                Donate $10 for the website maintenance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($brands as $brandj)
                        <div class="col-md-3 p-5">
                        <a class="point" data-target="#" onclick="hideElementFive({{ $brandj->id }})">
                            <div class="row justify-content-center bg-brads">
                                <div class="col-9">
                                    <div class="text-center pt-3 pb-3">
                                        <img src="{{ $brandj->carpic }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="row bg-main">
                                <div class="col-12">
                                    <h6 class="text-center text-white  pt-3 pb-2">{{ $brandj->title }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- --------------------------------------About us ----------------------------------------------->
            <div id="aboutus" style="display: none;">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-6">
                        <h3 class="text-capitalize m-2">Fixit Manuals</h3>
                        <div class="inner">&nbsp;</div>

                        <p class=" m-2 pt-4 text-muted">
                            Welcome to Fixit Manuals, here you will find a wide range of information for many vehicles including
                            standard specifications, repair guides, diagnostic procedures, wiring diagrams and maintenance information for many automotive manufacturers and models.
                            Information is provided via downloadable workshop manuals and factory service manuals in pdf format.
                            Our aim is to continually expand and improve our information base as to provide a comprehensive collection of information available for members of the website.
                            We will be adding new workshop manuals and articles for download on a constant basis, we also plan to include modifications guides and details of each vehicles history in the future.
                            We believe that with the right manuals DIY's and Mechanics can apply the best fixes and save money.</p>

                    </div>
                    <div class="col-md-6">
                        <div class="text-center pt-5">
                            <img class="img-fluid" src="user/images/Layer 3.png" width="300">
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-4 padding-custom">
                        <div class="text-center bg-main">
                            <img src="user/images/manuals.png" class="img-fluid p-5">
                        </div>
                        <h6 class="text-center mt-3 text-capitalize">All kind of car manuals</h6>
                    </div>
                    <div class="col-md-4 padding-custom ">
                        <div class="text-center bg-main">
                            <img src="user/images/share 2.png" class="img-fluid p-5" width="190">
                        </div>
                        <h6 class="text-center mt-3 text-capitalize">Download Manuals</h6>
                    </div>
                    <div class="col-md-4 padding-custom ">
                        <div class="text-center bg-main">
                            <img src="user/images/download.png" class="img-fluid p-5">
                        </div>
                        <h6 class="text-center mt-3 text-capitalize">Share Manuals</h6>
                    </div>
                </div>
            </div>
            <!----------------------- ----------------Donate------------------------------------------------ -->
            <div id="donateus" style="display: none;">
                <div class="row justify-content-center mt-5 " style="margin-bottom: 20rem;">
                    <div class="col-md-6">
                        <h3 class="text-capitalize m-2">Donate $10 on every Download</h3>
                        <div class="inner">&nbsp;</div>

                        <p class=" m-2 pt-4 text-muted">
                            All Car Manuals takes up a lot of time for maintenance and a considerable amount of money for hosting, due to the large sized files available for download.
                            Donations are very much appreciated to help keep the site regularly updated and online for the future.</p>
                        <button class="btn btn-download mt-3 m-2"  data-toggle="modal" data-target="#exampleModalCenter1" >Donate</button>

                    </div>
                    <div class="col-md-6">
                        <div class="text-center pt-4">
                            <img class="img-fluid" src="user/images/donate.png" width="280">
                        </div>
                    </div>
                </div>
            </div>
            <!-- -------------------------------------Contact us-------------------------------------------- -->
            <div id="form" style="display: none;">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="text-center">
                            <h3 class="text-capitalize mt-5">Contact Us</h3>
                            <div class="inner2">&nbsp;</div>
                            <p class="text-muted mt-4">Feel free to contact us for your queries and suggestions. We
                                would love to offer you our helping hand to your bright future.</p>
                        </div>
                    </div>
                </div>

                <form class="form-section" action="{{route('contact.store')}}" method="POST" >
                    @csrf
                    <div class="row justify-content-center mt-5 ">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="Text" class="form-control" id="exampleInputName1"
                                       aria-describedby="emailHelp" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" name="email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="Text" class="form-control" id="exampleInput1"
                                       aria-describedby="emailHelp" name="inquiry" placeholder="Type of inquiry">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-4 ">
                        <div class="col-md-8">
                            <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                              placeholder="Your Message " name="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-8">
                            <div class="text-center">
                                <button class="btn btn-download">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-md-8">
                        <div class="text-center">
                            <a href="#"><img src="user/images/Vector Smart Object.png" class="img-fluid" width="50"></a>
                            <a href="#"><img src="user/images/messager.png" class="img-fluid ml-3" width="50"></a>
                            <a href="#"><img src="user/images/twitter.png" class="img-fluid ml-3" width="50"></a>
                            <a href="#"> <img src="user/images/whatsapp.png" class="img-fluid ml-3" width="50"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -------------------------------------Dwonload manual page------------------------------------ -->
            <div id="downManual" style="display: none;">
{{--                menual here--}}
            </div>
        </div>
        <!------------------------------- ---------For home page bottom----------------------------------------->
        <div id="main">
            <div class="container">
                <!-- latest manual -->
                <div class="row  mt-5 justify-content-center">
                    <div class="col-md-12 ">
                        <h3 class="text-capitalize m-2">Latest Manuals</h3>
                        <div class="inner">&nbsp;</div>

                    </div>
                </div>
            </div>
            <div class="row mt-4" style="border-bottom: 1px solid white;">
                <div class="col-md-3 p-0">
                    <img src="{{ asset('user/images/1.png') }}" class="img-fluid" style="width: 100%;">
                </div>
                <div class="col-md-3 p-0">
                    <img src="user/images/2.png" class="img-fluid" style="width: 100%;">
                </div>
                <div class="col-md-3 p-0">
                    <img src="user/images/3.png" class="img-fluid" style="width: 100%;">
                </div>
                <div class="col-md-3 p-0">
                    <img src="user/images/4.png" class="img-fluid" style="width: 100%;">
                </div>
            </div>
            <div class="row bg-main2">
                <div class="col-md-12 ">
                    <div class="text-center pt-2 pb-2">
                        <a class="text-decoration-none text-white " href="#">View more <span><img class="ml-2" src="user/images/view more white.png"></span></a>
                    </div>
                </div>
            </div>
            <!-- Brands -->
            <div class="container mt-4 ">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h3 class="text-capitalize m-3">Brands</h3>
                        <div class="inner">&nbsp;</div>

                    </div>
                </div>
                <div class="row">
                    @foreach($brands->take(8) as $brandi )
                        <div class="col-md-3 p-5">
                        <a data-target="#" onclick="hideElementFive({{ $brandi->id }})">
                            <div class="row justify-content-center bg-brads">
                                <div class="col-9">
                                    <div class="text-center pt-3 pb-3">
                                        <img src="{{ $brandi->carpic }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="row bg-main">
                                <div class="col-12">
                                    <h6 class="text-center text-white  pt-3 pb-2">{{ $brandi->title }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main">
                <h5 class="modal-title ml-auto text-white" id="exampleModalCenterTitle">Download
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-brads">
                <div id="1stmodal">
                    <div class="text-center mb-5 mt-3">
                        <h6 class="text-muted">Name of Manual</h6>
                        <h6 class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing.
                        </h6>
                        <button class="btn btn-modal mt-3">$10</button>
                        <h4 class="mt-4">Choose Payment Method</h4>

                        <a href="#" onclick="hideElementModal()"><img src="user/images/visa large.png" class="img-fluid mt-4"></a>
                        <a href="#" onclick="hideElementModal()"><img src="user/images/master card small.png " class="img-fluid ml-4 mt-4"></a>

                        <div id="paypal-button" class="mt-3"></div>
                    </div>
                </div>
                <!-- 2nd modal -->
                <div id="2ndmodal" style="display: none;">
                    <div class="text-center mb-5 mt-3">
                        <img src="user/images/master card small.png" class="img-fluid">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlText1" class="font-weight-bold">CARD HOLDER
                            NAME</label>
                        <input type="Text" class="form-control" id="exampleFormControlText1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="font-weight-bold text-uppercase">CARD
                            Number</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="font-weight-bold text-uppercase">CVV</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="text-center mt-2">
                        <button class="btn btn-download" onclick="hideElementModalOne()">Submit</button>
                    </div>
                </div>
                <div id="3rdmodal" style="display: none;">
                    <div class="text-center mb-5 mt-5">
                        <img src="user/images/thanks.png" class="img-fluid" width="100">
                        <h5 class="mt-3">Thank you!</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal 2 -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-main">
                <h5 class="modal-title ml-auto text-white" id="exampleModalCenterTitle1">Downloadxx
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-brads">
                <div id="4thmodal">
                    <div class="text-center mb-5 mt-3">
                        <h6 class="text-muted">Name of Manual</h6>
                        <h6 class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing.
                        </h6>
                        <button class="btn btn-modal mt-3">$10</button>
                        <h4 class="mt-4">Choose Payment Method</h4>
                        <a href="#" onclick="hideElementModalTwo()"><img src="user/images/visa large.png"
                                                                         class="img-fluid mt-4"></a>
                        <a href="#" onclick="hideElementModalTwo()"><img src="user/images/master card small.png "
                                                                         class="img-fluid ml-4 mt-4"></a>
                        
                        <div id="paypal-button-1" class="mt-3"></div>
                    </div>
                </div>
                <!-- 2nd modal -->
                <div id="5thmodal" style="display: none;">
                    <div class="text-center mb-5 mt-3">
                        <img src="user/images/master card small.png" class="img-fluid">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlText1" class="font-weight-bold">CARD HOLDER
                            NAME</label>
                        <input type="Text" class="form-control" id="exampleFormControlText1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="font-weight-bold text-uppercase">CARD
                            Number</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="font-weight-bold text-uppercase">CVV</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="text-center mt-2">
                        <button class="btn btn-download" onclick="hideElementModalThree()">Submit</button>
                    </div>
                </div>
                <div id="6thmodal" style="display: none;">
                    <div class="text-center mb-5 mt-5">
                        <img src="user/images/thanks.png" class="img-fluid" width="100">
                        <h5 class="mt-3">Thank you!</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!---------------------------Footer--------------------------->
<footer class="pt-5 pb-4 footer-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3  mb-4">
                <img src="user/images/logo-02.png">
                <p class="mt-3 text-white">We believe that with the right manuals DIY's and Mechanics can apply
                    the best fixes and save money.
                </p>
            </div>
            <div class=" col-md-3 mt-3 mb-4">
                <h5 class="mb-5 font-weight-bold text-white mr-5">Useful Links</h5>
                <div class="row mt-5">
                    <div class="col-12">
                        <a href="#" class="text-decoration-none text-white"> About Us</a>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <a href="#" class="text-decoration-none text-white"> Search Manuals</a>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <a href="#" class="text-decoration-none text-white"> Brands</a>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <a href="#" class="text-decoration-none text-white"> Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-3 mb-4">
                <h5 class="mb-4 font-weight-bold text-white">Payment Methhod</h5>
                <img src="user/images/master card small.png" class="img-fluid mt-3">
                <br>
                <img src="user/images/visa large.png" class="img-fluid mt-3">
                <br>
                <img src="user/images/paypal_PNG22.png" class="img-fluid mt-3" width="55">
            </div>
            <div class=" col-md-3 mt-3 mb-4">
                <h5 class="mb-4 font-weight-bold text-white">Contact Detail</h5>
                <div class="row pt-2">
                    <div class="col-2 m-auto">
                        <img src="user/images/loc.png">
                    </div>
                    <div class="col-10 m-auto">
                        <span class="text-white"> Metrotech Center, Brooklyn, NY 11201, USA</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2 m-auto">
                        <img src="user/images/call.png">
                    </div>
                    <div class="col-10 m-auto">
                        <span class="text-white">917-785-7462, 516-457-5131</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2 m-auto">
                        <img src="user/images/message.png">
                    </div>
                    <div class="col-10 m-auto">
                        <span class="text-white"> support@birthxapp.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="copyright" style="border-top: 1px solid white;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-1">
                <div class="text-res-left text-white">
                    Copyright &copy; By Fixit Manual 2020. All Rights Reserved.
                </div>
            </div>
            <div class="col-md-6 mt-1">
                <div class="text-res-right">
                    <a href="#" class="ml-3 text-decoration-none text-white">Home</a>
                    <a href="#" class="ml-3 text-decoration-none text-white">About us</a>
                    <a href="#" class="ml-3 text-decoration-none text-white">Manuals</a>
                    <a href="#" class="ml-3 text-decoration-none text-white">Contact us</a>
                </div>

            </div>
        </div>
    </div>
</section>




<script>
    function hideElementZero() {
        document.getElementById('who').style.display = 'block';
        document.getElementById('main').style.display = 'block';
        document.getElementById('searching').style.display = 'none';
        document.getElementById('Brandsearch').style.display = 'none';
        document.getElementById('aboutus').style.display = 'none';
        document.getElementById('donateus').style.display = 'none';
        document.getElementById('form').style.display = 'none';
        document.getElementById('downManual').style.display = 'none';
    }
    function hideElement() {
        document.getElementById('who').style.display = 'none';
        document.getElementById('main').style.display = 'none';
        document.getElementById('searching').style.display = 'block';
        document.getElementById('Brandsearch').style.display = 'none';
        document.getElementById('aboutus').style.display = 'none';
        document.getElementById('donateus').style.display = 'none';
        document.getElementById('form').style.display = 'none';
        document.getElementById('downManual').style.display = 'none';
    }
    function hideElementOne() {
        document.getElementById('Brandsearch').style.display = 'block';
        document.getElementById('who').style.display = 'none';
        document.getElementById('main').style.display = 'none';
        document.getElementById('searching').style.display = 'none';
        document.getElementById('aboutus').style.display = 'none';
        document.getElementById('donateus').style.display = 'none';
        document.getElementById('form').style.display = 'none';
        document.getElementById('downManual').style.display = 'none';
    }
    function hideElementTwo() {
        document.getElementById('Brandsearch').style.display = 'none';
        document.getElementById('who').style.display = 'none';
        document.getElementById('main').style.display = 'none';
        document.getElementById('searching').style.display = 'none';
        document.getElementById('aboutus').style.display = 'block';
        document.getElementById('donateus').style.display = 'none';
        document.getElementById('form').style.display = 'none';
        document.getElementById('downManual').style.display = 'none';
    }
    function hideElementThree() {
        document.getElementById('Brandsearch').style.display = 'none';
        document.getElementById('who').style.display = 'none';
        document.getElementById('main').style.display = 'none';
        document.getElementById('searching').style.display = 'none';
        document.getElementById('aboutus').style.display = 'none';
        document.getElementById('donateus').style.display = 'block';
        document.getElementById('form').style.display = 'none';
        document.getElementById('downManual').style.display = 'none';
    }
    function hideElementFour() {
        document.getElementById('Brandsearch').style.display = 'none';
        document.getElementById('who').style.display = 'none';
        document.getElementById('main').style.display = 'none';
        document.getElementById('searching').style.display = 'none';
        document.getElementById('aboutus').style.display = 'none';
        document.getElementById('donateus').style.display = 'none';
        document.getElementById('form').style.display = 'block';
        document.getElementById('downManual').style.display = 'none';
    }
    function hideElementFive(id) {
        let x = '';
        $.ajax({
            url:'/manuals/ajax/'+id,
            method:"GET",
            success:function(data){
                let i=1
                x += `<div class="row justify-content-center mt-5">
                                <div class="col-md-10">
                                    <div class="text-center">
                                        <img src="`+data.brand_up.carpic+`" class="img-fluid" width="200">
                                    </div>
                                </div>
                            </div>`
                data.models.forEach(obj=>{
                    x += `<div class="row justify-content-center mt-5">
                                    <div class="col-md-12 bg-main">
                                        <h6 class="text-manual pt-3 pb-2 text-white">`+obj.title+`: Following Manuals Are Available
                                        </h6>
                                    </div>
                                </div>`
                    if(obj.carmodel.length >0){
                        obj.carmodel.forEach(ok=>{
                            x += `<div class="row justify-content-center mt-3">
                    <div class="col-md-12 bg-brads">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="text-manual pt-3 pb-2 ">Manual `+i+`</h6>
                            </div>
                            <div class="col-2">
                                <h6 class="text-manual pt-3 pb-2 ">`+ok.year.year+`</h6>
                            </div>
                            <div class="col-2">
                                <h6 class="text-manual pt-3 pb-2">$15</h6>
                            </div>
                            <div class="col-2">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter"> <img
                                        src="user/images/download black.png" class="img-fluid pt-3 " width="20"></a>
                            </div>
                        </div>
                    </div>
                </div>`
                            i++;
                        })
                    }else{
                        x += `<div class="row justify-content-center mt-3">
                                <div class="col-md-12 bg-brads">
                                    <h1 class="text-muted text-center">No Manula Found</h1>
                                </div>
                            </div>`
                    }

                })
                x += `<br/>`
                document.getElementById('downManual').innerHTML = x;
            }
        })
        document.getElementById('Brandsearch').style.display = 'none';
        document.getElementById('who').style.display = 'none';
        document.getElementById('main').style.display = 'none';
        document.getElementById('searching').style.display = 'none';
        document.getElementById('aboutus').style.display = 'none';
        document.getElementById('donateus').style.display = 'none';
        document.getElementById('form').style.display = 'none';
        document.getElementById('downManual').style.display = 'block';
    }
    function hideElementModal() {
        document.getElementById('1stmodal').style.display = 'none';
        document.getElementById('2ndmodal').style.display = 'block';
        document.getElementById('3rdmodal').style.display = 'none';

    }
    function hideElementModalOne() {
        document.getElementById('1stmodal').style.display = 'none';
        document.getElementById('2ndmodal').style.display = 'none';
        document.getElementById('3rdmodal').style.display = 'block';
    }
    function hideElementModalTwo() {
        document.getElementById('4thmodal').style.display = 'none';
        document.getElementById('5thmodal').style.display = 'block';
        document.getElementById('6thmodal').style.display = 'none';

    }
    function hideElementModalThree() {
        document.getElementById('4thmodal').style.display = 'none';
        document.getElementById('5thmodal').style.display = 'none';
        document.getElementById('6thmodal').style.display = 'block';
    }
</script>


<script>
    $('#home').click(function () {
        $('#home').addClass('active')
        $('#search').removeClass('active')
        $('#browse').removeClass('active')
        $('#about').removeClass('active')
        $('#donate').removeClass('active')
        $('#contact').removeClass('active')
    })
    $('#search').click(function () {
        $('#search').addClass('active')
        $('#home').removeClass('active')
        $('#browse').removeClass('active')
        $('#about').removeClass('active')
        $('#donate').removeClass('active')
        $('#contact').removeClass('active')
    })
    $('#browse').click(function () {
        $('#browse').addClass('active')
        $('#home').removeClass('active')
        $('#search').removeClass('active')
        $('#about').removeClass('active')
        $('#donate').removeClass('active')
        $('#contact').removeClass('active')

    })
    $('#about').click(function () {
        $('#about').addClass('active')
        $('#home').removeClass('active')
        $('#browse').removeClass('active')
        $('#search').removeClass('active')
        $('#donate').removeClass('active')
        $('#contact').removeClass('active')

    })
    $('#donate').click(function () {
        $('#donate').addClass('active')
        $('#home').removeClass('active')
        $('#browse').removeClass('active')
        $('#about').removeClass('active')
        $('#search').removeClass('active')
        $('#contact').removeClass('active')

    })
    $('#contact').click(function () {
        $('#contact').addClass('active')
        $('#home').removeClass('active')
        $('#browse').removeClass('active')
        $('#about').removeClass('active')
        $('#search').removeClass('active')
        $('#donate').removeClass('active')

    })

</script>


<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>


    var manualId = '';
    var manualLink = '';
    var manualFileName = '';
    $('#download').click(function(){
        manualId = $(this).siblings('.id').text();
        manualLink = $(this).siblings('.link').text();
        manualFileName = $(this).siblings('.filename').text();
    })

  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AeXfrq1-Dwjw2StNpV6aemlM6n7_N1odvoW5UPnxGWCQnqTZKWzyR3ERrTLVT9LHQU24uriUUyF3u7gl',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '10.00',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        

        
        var element = document.createElement('a');
        element.setAttribute('href', manualLink);
        element.setAttribute('download', manualFileName);

        element.style.display = 'none';
        document.body.appendChild(element);

        element.click();

        // document.body.removeChild(element);

        return console.log(element);

      });
    }
  }, '#paypal-button');


  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AeXfrq1-Dwjw2StNpV6aemlM6n7_N1odvoW5UPnxGWCQnqTZKWzyR3ERrTLVT9LHQU24uriUUyF3u7gl',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '10.00',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.

        return alert('Thank you for your donation!');

      });
    }
  }, '#paypal-button-1');

</script>

</body>

</html>
