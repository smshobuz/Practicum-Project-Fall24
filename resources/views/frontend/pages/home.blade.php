
@extends ('frontend.master')
@section('content_body')
<div class="site-wrap">
    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(frontend/images/hero_bg_2);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-left text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="">Welcome to Youth17 Sporting Club</h1>
              <p><a href="{{route('frontend.read_more')}}" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(frontend/images/hero_bg_4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="">Welcome to Youth17 Sporting Club</h1>
              <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(frontend/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="">Welcome to Youth17 Sporting Club</h1>
              <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  
    </div>
    <br>
    <br>

    <div class="site-section pt-0 feature-blocks-1" data-aos="fade" data-aos-delay="100">
      <div class="container">
        <div class="row">
        <div class="container mt-5">
        <h1 class="text-center mb-4" ,Style="color:blue">Sports Information</h1>
        <!-- Sports Card Section -->
        <div class="row row-cols-1 row-cols-md-3 g-2">
            @foreach ( $sports as $data)
            
           
            <!-- Example Sport Card -->
            <div class="col">
                <div class="card h-100">
                    <img src="{{url('/backend/uploads/',$data->image)}}" alt="Football"width="100px">
                    <div class="card-body">
                        
                        <h5 class="card-title">Sport Name: <span class="text-primary">{{$data->name}}</span></h5>
                        
                        <p class="card-text"><strong>Description:</strong>{{$data->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
           
          
        </div>
        <a href="{{route('sports.view')}}" class="btn btn-primary btn-sm rounded-0 py-3 px-5">View More</a></p>
    </div>
        
         
        </div>
      </div>
    </div>

    <div class="site-blocks-vs site-section bg-light">
      <div class="container">

        <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">
          
          <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0">
            Next match 
            <div id="date-countdown"></div>
          </div>

          <div class="ml-auto pr-4 order-md-2">
            <div class="h5 text-black text-uppercase text-center text-lg-left">
              <div class="d-block d-md-inline-block mb-3 mb-lg-0">
                <img src="frontend/images/img_1_sq.jpg" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">Sea Hawlks </span>
              </div>
              <span class="text-muted mx-3 text-normal mb-3 mb-lg-0 d-block d-md-inline ">vs</span> 
              <div class="d-block d-md-inline-block">
                <img src="frontend/images/img_3_sq.jpg" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">Patriots</span>
              </div>
            </div>
          </div>
          
          
        </div>

        <div class="bg-image overlay-success rounded mb-5" style="background-image: url('frontend/images/hero_bg_1.jpg');" data-stellar-background-ratio="0.5">
          
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

              <div class="text-center text-lg-left">
                <div class="d-block d-lg-flex align-items-center">
                  <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                    <img src="frontend/images/img_1_sq.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="text">
                    <h3 class="h5 mb-0 text-black">Sea Hawks</h3>
                    <span class="text-uppercase small country text-black">Brazil</span>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
              <div class="d-inline-block">
                <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">Premier League &mdash; Round 10</small></p>
                <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h3">3:2</span></div>
                <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">10 September / 7:30 AM</small></p>
              </div>
            </div>

            <div class="col-md-12 col-lg-4 text-center text-lg-right">
              <div class="">
                <div class="d-block d-lg-flex align-items-center">
                  <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                    <img src="frontend/images/img_4_sq.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="text order-1">
                    <h3 class="h5 mb-0 text-black">Steelers</h3>
                    <span class="text-uppercase small country text-black">London</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col-md-12">

            <h2 class="h6 text-uppercase text-black font-weight-bold mb-3">Latest Matches</h2>
            <div class="site-block-tab">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Match 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Match 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Match 3</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                  <div class="row align-items-center">
                    <div class="col-md-12">


                      <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                        <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                          <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                <img src="frontend/images/img_1_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text">
                                <h3 class="h5 mb-0 text-black">Packers</h3>
                                <span class="text-uppercase small country">Brazil</span>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                          <div class="d-inline-block">
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                          </div>
                        </div>

                        <div class="col-md-4 col-lg-4 text-center text-lg-right">
                          <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="frontend/images/img_4_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text order-1 w-100">
                                <h3 class="h5 mb-0 text-black">Steelers</h3>
                                <span class="text-uppercase small country">London</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END row -->

                      <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                        <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                          <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                <img src="frontend/images/img_1_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text">
                                <h3 class="h5 mb-0 text-black">Patriots</h3>
                                <span class="text-uppercase small country">Brazil</span>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                          <div class="d-inline-block">
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                          </div>
                        </div>

                        <div class="col-md-4 col-lg-4 text-center text-lg-right">
                          <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="frontend/images/img_4_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text order-1 w-100">
                                <h3 class="h5 mb-0 text-black">Cowboys</h3>
                                <span class="text-uppercase small country">London</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END row -->

                      <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                        <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                          <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                <img src="frontend/images/img_1_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text">
                                <h3 class="h5 mb-0 text-black">Raiders</h3>
                                <span class="text-uppercase small country">Brazil</span>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                          <div class="d-inline-block">
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                          </div>
                        </div>

                        <div class="col-md-4 col-lg-4 text-center text-lg-right">
                          <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="frontend/images/img_4_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text order-1 w-100">
                                <h3 class="h5 mb-0 text-black">Chiefs</h3>
                                <span class="text-uppercase small country">London</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END row -->

                    </div>

                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="row align-items-center">
                    <div class="col-md-12">


                      <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                        <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                          <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                <img src="frontend/images/img_1_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text">
                                <h3 class="h5 mb-0 text-black">Packers</h3>
                                <span class="text-uppercase small country">Brazil</span>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                          <div class="d-inline-block">
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                          </div>
                        </div>

                        <div class="col-md-4 col-lg-4 text-center text-lg-right">
                          <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="frontend/images/img_4_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text order-1 w-100">
                                <h3 class="h5 mb-0 text-black">Steelers</h3>
                                <span class="text-uppercase small country">London</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END row -->

                      <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                        <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                          <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                <img src="frontend/images/img_1_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text">
                                <h3 class="h5 mb-0 text-black">Patriots</h3>
                                <span class="text-uppercase small country">Brazil</span>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                          <div class="d-inline-block">
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                          </div>
                        </div>

                        <div class="col-md-4 col-lg-4 text-center text-lg-right">
                          <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="frontend/images/img_4_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text order-1 w-100">
                                <h3 class="h5 mb-0 text-black">Cowboys</h3>
                                <span class="text-uppercase small country">London</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END row -->

                      <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                        <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                          <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                <img src="frontend/images/img_1_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text">
                                <h3 class="h5 mb-0 text-black">Raiders</h3>
                                <span class="text-uppercase small country">Brazil</span>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                          <div class="d-inline-block">
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                          </div>
                        </div>

                        <div class="col-md-4 col-lg-4 text-center text-lg-right">
                          <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="frontend/images/img_4_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text order-1 w-100">
                                <h3 class="h5 mb-0 text-black">Chiefs</h3>
                                <span class="text-uppercase small country">London</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END row -->

                    </div>

                  </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="row align-items-center">
                    <div class="col-md-12">


                      <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                        <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                          <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                <img src="frontend/images/img_1_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text">
                                <h3 class="h5 mb-0 text-black">Packers</h3>
                                <span class="text-uppercase small country">Brazil</span>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                          <div class="d-inline-block">
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                          </div>
                        </div>

                        <div class="col-md-4 col-lg-4 text-center text-lg-right">
                          <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="frontend/images/img_4_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text order-1 w-100">
                                <h3 class="h5 mb-0 text-black">Steelers</h3>
                                <span class="text-uppercase small country">London</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END row -->

                      <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                        <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                          <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                <img src="frontend/images/img_1_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text">
                                <h3 class="h5 mb-0 text-black">Patriots</h3>
                                <span class="text-uppercase small country">Brazil</span>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                          <div class="d-inline-block">
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                          </div>
                        </div>

                        <div class="col-md-4 col-lg-4 text-center text-lg-right">
                          <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="frontend/images/img_4_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text order-1 w-100">
                                <h3 class="h5 mb-0 text-black">Cowboys</h3>
                                <span class="text-uppercase small country">London</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END row -->

                      <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                        <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                          <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                <img src="frontend/images/img_1_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text">
                                <h3 class="h5 mb-0 text-black">Raiders</h3>
                                <span class="text-uppercase small country">Brazil</span>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                          <div class="d-inline-block">
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                          </div>
                        </div>

                        <div class="col-md-4 col-lg-4 text-center text-lg-right">
                          <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="frontend/images/img_4_sq.jpg" alt="Image" class="img-fluid">
                              </div>
                              <div class="text order-1 w-100">
                                <h3 class="h5 mb-0 text-black">Chiefs</h3>
                                <span class="text-uppercase small country">London</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END row -->

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section block-13 bg-primary fixed overlay-primary bg-image" style="background-image: url('frontend/images/hero_bg_3.jpg');"  data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="text-white">More Game Highlights</h2>
          </div>
        </div>

        <div class="row">
          <div class="nonloop-block-13 owl-carousel">
        <div class="item">
          <!-- uses .block-12 -->
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_4.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- uses .block-12 -->
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_4.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- uses .block-12 -->
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_4.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- uses .block-12 -->
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="frontend/images/img_4.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
        </div>
      </div>
      
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="text-black">Latest News</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="post-entry">
              <div class="image">
                <img src="frontend/images/img_1.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="#">RealMad vs Striker Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="post-entry">
              <div class="image">
                <img src="frontend/images/img_2.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="#">RealMad vs Striker Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="post-entry">
              <div class="image">
                <img src="frontend/images/img_3.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="#">RealMad vs Striker Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    
  
  </div>
  @endsection