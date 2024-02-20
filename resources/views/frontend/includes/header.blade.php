
@php
    $url = request()->segment(count(request()->segments()));
    $settings = DB::table('site_settings')->where('smallname' , 'visitorinsure')->first();
@endphp
<header>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container mobile-menu-custom">
             <a class="navbar-brand" href="{{ url('') }}">
                <img src="{{ url('public/images') }}/{{ $settings->header_logo }}" alt="{{ $settings->site_name }}" class="img-fluid">
              </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu_icon_btn">
            <div></div>
            <div></div>
            <div></div>
            </span>
          </button>  
          <div class="collapse navbar-collapse" id="navbarmain">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item @if($url) @else active @endif">
                <a class="nav-link" href="{{ url('') }}">Home</a>
              </li>
               

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Travel Insurance<i class="icofont-thin-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
                        <li><a class="dropdown-item" href="{{ url('super-visa-insurance') }}">Super Visa Insurance</a></li>
                        <li><a class="dropdown-item" href="{{ url('visitor-insurance') }}">Visitor Insurance</a></li>
                        <li><a class="dropdown-item" href="{{ url('student-insurance') }}">Student Insurance</a></li>
                        <li><a class="dropdown-item" href="{{ url('travel-insurance') }}">Travel Insurance</a></li>
                    </ul>
                </li>
                <li class="nav-item @if($url == 'product') active @endif"><a class="nav-link" href="{{ url('product') }}">Products</a></li>
               <li class="nav-item @if($url == 'contactus') active @endif"><a class="nav-link" href="{{ url('contactus') }}">Contact Us</a></li>
                @if(Auth::check()) 
                    @if(Auth::user()->user_type == 'admin')
                        <li class="nav-item"><a class="nav-link" href="{{ url('admin/dashboard')}}">Admin dashboard </a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ url('profile')}}">My Account </a></li>
                    @endif
                @else
                <li class="nav-item"><a class="nav-link" href="{{ url('login')}}">Login </a></li>
                @endif
            </ul>
          </div>
          </div>
    </nav>
</header>