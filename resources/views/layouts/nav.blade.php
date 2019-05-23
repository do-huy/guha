<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="col-md-1"> 
      
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      {{-- <a class="navbar-brand" href="#">WebSiteName</a> --}}
      <img style="width: 120px;height: 50px;padding-top: 9px" id="footerimg" src="{{asset('img/express.png')}}" alt="">
    </div>
    </div>
     <div class="col-md-11"> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Trang chủ</a></li>
     {{--    <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li> --}}
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Dịch vụ</a></li>
        <li><a href="#">Liên hệ</a></li>
        <li><a href="#">Bảng giá</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="far fa-registered"></i>{{-- <span class="glyphicon glyphicon-user"></span> --}} Đăng ký</a></li>
        <li><a href="#"><i class="fas fa-user-check"></i>{{-- <span class="glyphicon glyphicon-log-in"></span> --}} Đăng nhập</a></li>
      </ul>
    </div>
  </div>
  </div>
</nav>