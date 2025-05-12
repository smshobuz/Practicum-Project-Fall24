<div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          <a href="#"><img src="frontend/images/y17logo.png" alt="Image" image-small></a>
        </div>
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar absolute transparent" role="banner">
      <div class="py-3">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-3">
              <a href="#" class="text-secondary px-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-instagram"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-twitter"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-linkedin"></span></a>
            </div>
            <div class="col-6 col-md-9 text-right">
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">youth17@gmail.com</span></a></div>
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+88 017 6220 2869</span></a></div>
            </div>
          </div>
        </div>
      </div>
      <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
        <div class="container position-relative">
        <div class="site-logo">
        <a href="index.html">
          <img src="frontend/images/y17logo.png" alt="Logo" class="img-fluid" style="height: 85px;width: 85px;">
        </a>
      </div>
          <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="">
              <a href="{{route('frontend.home')}}">Home</a>
            </li>
            <li><a href="{{route('sports.view')}}">Game</a></li>
            <li class="has-children">
              <a href="">Schedule</a>
              <ul class="dropdown arrow-top">
                <li><a href="{{route('training.view')}}">Training Schedule</a></li>
                <li><a href="{{route('playing.view')}}">Playing Schedule</a></li>
              </ul>
            </li>
            <li >
              <a href="">Results</a>
            </li>
            <li><a href="{{route('player.events.index')}}">Events</a></li>
            <li><a href="{{route('team.view')}}">Team</a></li>
            <li><a href="{{route('ground.view')}}">Ground Details</a></li>
            <li><a href="">Gallery</a></li>
            @guest('playerGuard')
            <li><a href="#"data-toggle="modal" data-target="#exampleModal">Login</a></li>
            @endguest
            @auth('playerGuard')
           <li><a href="">
              <i class="fa fa-user"></i>
              <span>
                {{auth('playerGuard')->user()->name}}
              </span>
            </a></li> 
             <li><a href="{{route('player.logout')}}">Logout</a></li>

            @endauth
          </ul>
        </div>
      </nav>
    </header>

    <!-- modal for player login -->

  

<!-- Modal -->
<div style="z-index: 99999;" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('player.login')}}" method="post" enctype="multipart/form-data">
          @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
        <span>Haven't account ? <a href="{{route('player.registration')}}">Please register here</a></span>
      </form>

      </div>
      
    </div>
  </div>
</div>
