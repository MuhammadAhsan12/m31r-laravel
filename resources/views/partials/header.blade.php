<header class="header header-1 header-transparent" id="navbar-spy">
    <nav class="navbar navbar-expand-lg  navbar-bordered navbar-sticky" id="primary-menu">
      <div class="container"><a class="navbar-brand" href="{{route('home')}}">
        <img style="width:180px ;" class="logo logo-light" src="{{asset('assets/m31/images/M31LogoWhite.png')}}" alt="M31 Research White Logo"/>
        <img style="width: 180px;" class="logo logo-dark" src="{{asset('assets/m31/images/logo/M31Logo.png')}}" alt="M31 Research Logo"/></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <!--  Collect the nav links, forms, and other content for toggling  -->
        <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item has-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>What we Do</span></a>
                            <ul class="dropdown-menu">
                              <li class="nav-item"><a href="{{route('datacollection')}}"><span>Data Collection</span></a></li>
                              <li class="nav-item"><a href="{{route('research')}}"><span>Research</span></a></li>
                              <li class="nav-item"><a href="{{route('insight')}}"><span>Insight</span></a></li>
                            </ul>
                          </li>
                           <li class="nav-item"><a href="{{route('work')}}"><span>Our Work</span></a>
                                         
                          </li>

                          <li class="nav-item has-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>company</span></a>
                            <ul class="dropdown-menu">
                              <li class="nav-item"><a href="{{route('about')}}"><span>About Us</span></a></li>
                              <li class="nav-item"><a href="{{route('team')}}"><span>Leadership Team</span></a></li>
                              <li class="nav-item"><a href="{{route('careers')}}"><span>Careers</span></a></li>
                            </ul>
                          </li>

                          
                          <li class="nav-item"><a href="{{route('partner')}}"><span>Partner with Us</span></a></li>
                        </ul>
        </div>
        <!--  End .navbar-collapse  -->
      </div>
      <!-- End .container-->
    </nav>
  </header>