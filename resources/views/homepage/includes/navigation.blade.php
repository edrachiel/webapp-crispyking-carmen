 <!-- Navigation--> 
 <div class="news-container">
        <div class="title">
            Announcement
        </div>
        <ul>
             @foreach($sliders as $SliderItem)
                        <li>
                        {{$SliderItem->description}}
                        </li>
                 @endforeach
        </ul>
    </div>
<br>
<br>

    <nav class="navbar navbar-expand-sm navbar-dark bg-light fixed-top" id="mainNav">
                <div class="container">  
        <!-- <a class="navbar-brand" href="#page-top"></a> -->
        <img src="assets/img/team/logo.jpg" width="150"/>
                <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive"> -->
                    <button class="navbar-toggler text-uppercase font-weight-bold bg-transparent text-black rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                            <li class="nav-item mx-0 mx-lg-"><a class="nav-link text-black py-3 px-0 px-lg-3 rounded" href="#page-top">Home</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link text-black py-3 px-0 px-lg-3 rounded" href="#portfolio">Products</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link text-black py-3 px-0 px-lg-3 rounded" href="#branches">Branches</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link text-black py-3 px-0 px-lg-3 rounded" href="#about">About Us</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link text-black py-3 px-0 px-lg-3 rounded" href="#location">Location</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link text-black py-3 px-0 px-lg-3 rounded" href="{{url('/login')}}">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        