<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('G2.ico')}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    @yield('css')

    <!-- inject:js -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/misc.js')}}"></script>
    <script src="{{asset('js/file-upload.js')}}"></script>
    <script src="{{asset('test.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @yield('script')

</head>

<body>
  <div class="container-scroller">
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">


        
        <div class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
                <li class="nav-item" >
                    <a href="/home"class="nav-link" style="padding: 1rem 0rem 0rem 0.5rem ; color: white;">
                        <span class="menu-title">
                            <h1><i class="fas fa-shopping-cart"> G2 Esports 商城</i></h1>
                        </span>
                    </a>
                </li>
              <!-- user -->
            <li class="nav-item nav-category">
              <a class="nav-link"><i class="fas fa-users"> 會員</i></a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('user.index')}}">
                      <span class="menu-title">查詢</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('user.create')}}">
                <span class="menu-title">新增會員</span>
                <i class="icon-wrench menu-icon"></i>
              </a>
            </li>

              <!-- product -->
            <li class="nav-item nav-category">
                <span class="nav-link"><i class="fas fa-edit"> 商品</i></span>
            </li>

              <li class="nav-item">
                  <a class="nav-link" href="{{route('products.index')}}">
                      <span class="menu-title">查詢</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('products.create')}}">
                <span class="menu-title">上架</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>

            <!--categories-->
            <li class="nav-item nav-category">
              <span class="nav-link"><i class="fas fa-list"> 商品分類</i></span>
            </li>

              <li class="nav-item">
                  <a class="nav-link" href="{{route('categories.index')}}">
                      <span class="menu-title">查詢</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('categories.create')}}">
                      <span class="menu-title">新增分類</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>

            <!-- order -->
            <li class="nav-item nav-category">
              <span class="nav-link"><i class="fas fa-edit"> 訂單</i></span>
            </li>

              <li class="nav-item">
                  <a class="nav-link" href="{{route('order.index')}}">
                      <span class="menu-title">查詢</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>

              <!-- coupons -->
            <li class="nav-item nav-category">
              <span class="nav-link"><i class="fas fa-table"> 優惠卷</i> </span>
            </li>

              <li class="nav-item">
                  <a class="nav-link" href="{{route('coupon.index')}}">
                      <span class="menu-title">查詢</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>


              <li class="nav-item nav-category">
                  <span class="nav-link"><i class="fas fa-table"> 訂閱</i> </span>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('subscribes.index')}}">
                      <span class="menu-title">訂閱戶查詢與傳送訊息</span>
                      <i class="icon-wrench menu-icon"></i>
                  </a>
              </li>
              <li class="nav" style="position:absolute;bottom:0px;">
                  <li class="nav-item">
                      <a class="nav-link" style="text-align:center;" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                          <h2><i class="fas fa-sign-out-alt"  style="color:white"> {{ __('Logout') }}</i> </h2>
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>
              </li>
          </ul>
        </div>


        
        
        <!-- partial -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->


      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

</body>

</html>
