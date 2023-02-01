@extends('homepage.layouts.app')

@section('title','Homepage')

@section('content')


        @include('homepage.includes.navigation')
        <!-- Masthead-->
        <section class="hero-section" id="page-top">
            <div class="section-overlay"></div>
            <div class="video-wrap">
            <video class="w-100" autoplay loop muted>
            <source src="assets/img/team/WELCOME.mp4" type="video/mp4">
            </video>
            </div> 
        </section>

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
        <!-- Portfolio Section Heading-->
        <p class="lead mb-0  text-center text-danger">NEXT LEVEL CRISPY</p>   
        <h1 class="page-section-heading text-center text-uppercase text-danger text--weight-bold font-family: Roboto space mb-5">Crispy King Favorites</h1>     
        <!-- Portfolio Grid Items-->
        <div class="container-fluid">
        <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption bg-danger d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-cutlery fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/team/crispy.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption bg-danger d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-cutlery fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/team/lumpiang shanghai.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption bg-danger d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-cutlery fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/team/ngohiong.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption bg-danger d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-cutlery fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/team/siomai.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption bg-danger d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-cutlery fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/team/bola-bola.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption bg-danger d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-cutlery fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/team/sulit.png" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Branches Section-->
        <section class="page-section bg-light mb-0" id="branches"> 
                <!-- Branches Section Heading-->
                <h1 class="page-section-heading text-center text-uppercase text-danger font-family: Roboto text-weight-bold mb-5">Branches</h1>
               <!-- Branches Grid Items-->
        <div class="row justify-content-center">
                    <!-- Branches Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <img class="img-fluid rounded-circle" src="assets/img/team/11.jpeg" alt="..." />
                        </div>
                    </div>
                    <!-- Branches Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <img class="img-fluid rounded-circle" src="assets/img/team/111.jpeg" alt="..." />
                        </div>
                    </div>
                     <!-- Branches Item 3-->
                     <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <img class="img-fluid rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        </div>
                    </div>
                <!-- Branches Section Content-->            
            <div class="ms-auto"><h2 class="text-center fs-3">Now With Over</h2></div>
            <div class="ms-auto"><h3 class="text-center fs-1 font-weight-bold text-warning">300 BRANCHES NATIONWIDE</h3></div>
            <div class="ms-auto"><h4 class="text-center fs-3 font-weight-normal text-dark mb-5">Be a part of our fast-growing family with over 300 branches nationwide!</h4></div>
        </div>
        <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded-circle    " src="assets/img/team/CRISPY+KING.pNg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 container-fluid pb-5">
                    <h1 class="mb-5 text-danger bg-warning">Why Choose CRISPY KING?</h1>
                    <h1 class="mb-0 text-danger">QUICK ROI</h1>
                    <p class="mb-5 text-black">(RETURN OF INVESTMENT)</p>
                    <h1 class="mb-0 text-danger">PATOK NG MASA</h1>
                    <p class="mb-5 text-black">AFFORDABLE AT JUICY</p>
                    <h1 class="mb-0 text-danger">NO FRANCHISE FEE</h1>
                    <p class="mb-5 text-black">WITH END-TO-END MANAGEMENT SUPPORT</p>
                        </div>
                    </div>
                </div>
            </div>
       </section> 

        <!-- About Section-->
        <section class="page-section bg-danger text-white mb-0" id="about">
            <div class="container-fluid">
                <!-- About Section Heading-->
                <h1 class="page-section-heading text-center text-uppercase text-white mb-5">About Us</h1>
                <h2 class="page-section-heading text-center text-uppercase text-warning mb-5">Our Story</h2>
                <p class="page-section-heading text-center text-warning lead">Every success has a story to tell.
</p>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-5 ms-auto"><p class="lead mb-5">In most ways, it does not happen overnight. Our story started with a positive attitude. Struggles and failure come with a little sacrifice to form a small burst of inspiration. Our aspiration is to uplift its people to help build better communities. 
Started in the year 2001, the company also had its humble beginnings as a bakery business in Cebu City which later on captured the hearts of Ormocanons. Since then, with Dayka Bakeshop as the principal business of the company - it has continued to venture into the grilled-chicken business of Estong Manok and Liempo, the fast-food chicken business of Crispy King.
The company's first Crispy King store opened in Lopez Jaena st., Ormoc City with just 20sqm.We aim to provide and deliver the best quality crispy fried chicken to the masses at a very affordable price with the comforts of a dining inn. </p></div>
                    <div class="col-lg-5 me-auto"><p class="lead mb-5">An alternative choice that is budget conscious and worth your every purchase. 
Furthermore, the company sees opportunities for business growth and aims to create more job opportunities and build better lives and goodwill in the community. This along with the dynamism of its leadership and team, we continue to innovate our marketing plan and provide you with the best quality products at an affordable price.
Our journey and success in 2019 has reached 50 stores and continue to exponentially 
grow and currently has over 100 operating stores this year 2021.</p></div>
<p class="page-section-heading text-center text-warning mb-5">"Live with your idea and make it your passion and you are now one step closer to your success"
</p>
      </div>
</section>
      <!-- About Grid Items-->
      <section div class="container-fluid bg-dark mb-5">
      <div class="row justify-content-center">
      <h2 class="page-section-heading text-center text-uppercase text-black mb-5 bg-light">Featured Videos</h2>
                    <!-- About Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="ratio ratio-16x9 embed-resembed-responsiveponsive-16by9">
                   <iframe width="560" height="315" src="https://www.youtube.com/embed/ZCtfBR5sMnc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
                        </div>
                    </div>
                    <!-- About Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="ratio ratio-16x9 embed-resembed-responsiveponsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/bHnbEp_TmHU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
                        </div>
                    </div>
                    <!-- About Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="ratio ratio-16x9 embed-resembed-responsiveponsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mbc-up_4U8g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
                        </div>
                    </div>
            </section>
        
        <!-- Location Section-->
      <section div class="mb-5 bg-light" id="location">
      <div class="row justify-content-center">
      <h2 class="page-section-heading text-center text-uppercase text-danger mb-5">Location</h2>
                    <!-- Google Map-->
        <div class="col-lg-6 my-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.30140237383898!2d125.28818609773235!3d8.98848094467326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301cb7f021c1539%3A0xe43efb3cd0b96e3f!2sCrispy%20King!5e0!3m2!1sen!2sph!4v1675216007204!5m2!1sen!2sph"  class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <h1 class="page-section-heading text-center text-warning mb-5">
            </h1>
            </section>

            @include('homepage.includes.footer1')

        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-danger text-uppercase mb-5">Crispy Fried Chicken</h2>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/team/crispy.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <h2 class="portfolio-modal-title danger text-uppercase mb-5">₱40.00/pc</h2>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-danger text-uppercase mb-5">Lumpiang Shanghai</h2>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/team/lumpiang shanghai.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-5">₱8.00/pc</h2>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-danger text-uppercase mb-5">Ngohiong</h2>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/team/ngohiong.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-5">₱10.00/pc</h2>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-danger text-uppercase mb-5">Siomai</h2>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/team/siomai.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-5">₱30.00/pc</h2>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-danger text-uppercase mb-5">Bola-bola</h2>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/team/bola-bola.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-5">₱10.00/pc</h2>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-danger text-uppercase mb-5">Sulit Meal</h2>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/team/sulit.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-5">₱50.00/pc</h2>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

@endsection
