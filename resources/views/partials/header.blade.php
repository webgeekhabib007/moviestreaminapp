<div class="search-box">
    <div class="container">
      <form role="search" action="#" method="get" id="searchform">
        <select name="post_type">
          <option value="movie">Movie</option>
          <option value="tv_show">TV Show</option>
        </select>
        <input type="search" name="s" placeholder="Search here" />
        <input type="submit" value="FIND" />
      </form>
    </div>
    <!-- end container -->
  </div>
  <!-- end search-box -->
  <nav class="mobile-menu">
    <div class="inner">
      <div class="mobile-search">
        <form role="search" action="#" method="get" id="searchform2">
          <select name="post_type">
            <option value="movie">Movie</option>
            <option value="tv_show">TV Show</option>
          </select>
          <input type="search" name="s" placeholder="Search here" />
          <input type="submit" value="FIND" />
        </form>
      </div>
      <!-- end mobile-search -->
      @if(Auth::check())
      <a href="{{url('/my-account')}}" class="button-account"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" style="fill: rgb(228, 213, 213);" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg> ACCOUNT
      </a>
      @else
        <a href="{{url('/register')}}" > Register </a>
        @endif
      <!-- end button-account -->
      <div class="site-menu">
        <div class="menu-main-menu-container">
          <ul id="menu-main-menu" class="menu-horizontal">
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-51"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item active menu-item-51 nav-item">
              <a title="HOME" href="{{url('/')}}" class="nav-link" aria-current="page">HOME</a><i></i>
            </li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-52"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 nav-item">
              <a title="MOVIES" href="{{url('/movies')}}" class="nav-link">MOVIES</a><i></i>
            </li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-53"
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item">
              <a title="TV SHOWS" href="{{url('/tvseries')}}" class="nav-link">TV SHOWS</a><i></i>
            </li>
          </ul>
        </div>
      </div>
      <!-- end site-menu -->
    </div>
    <!-- end inner -->
  </nav>
  <!-- end mobile-menu -->

  <nav class="navbar">
    <div class="logo">
      <a href="{{url('/')}}"><img src="{{asset('img/icons/logo.png')}}" srcset="{{asset('img/icons/logo@2x.png')}}"
          alt="Dflex | Free Movie Streaming Website" /></a>
    </div>
    <div class="site-menu">
      <div class="menu-main-menu-container">
        <ul id="menu-main-menu-1" class="menu-horizontal">
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item active menu-item-51 nav-item">
            <a title="HOME" href="{{url('/')}}" class="nav-link" aria-current="page">HOME</a><i></i>
          </li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 nav-item">
            <a title="MOVIES" href="{{url('/movies')}}" class="nav-link">MOVIES</a><i></i>
          </li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item">
            <a title="TV SHOWS" href="{{url('/tvseries')}}" class="nav-link">TV SHOWS</a><i></i>
          </li>
        </ul>
      </div>
    </div>
    <!-- end site-menu -->

    <div class="user-menu">
      <div class="navbar-search"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" style="fill: rgb(228, 213, 213);" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></div>
      <!-- end navbar-search -->
      <div class="navbar-account">
      @if(Auth::check())
      <a href="{{url('/my-account')}}" class="button-account"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" style="fill: rgb(228, 213, 213);" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg> ACCOUNT
      </a>
      @else
        <a href="{{url('/register')}}" > Register </a>
        @endif
      </div>
      <!-- end navbar-account -->
    </div>
    <!-- end user-menu -->

    <div class="hamburger-menu">
      <button class="hamburger">
        <svg width="45" height="45" viewBox="0 0 100 100">
          <path class="line line1"
            d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
          <path class="line line2" d="M 20,50 H 80" />
          <path class="line line3"
            d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
      </button>
    </div>
    <!-- end hamburger-menu -->
  </nav>
