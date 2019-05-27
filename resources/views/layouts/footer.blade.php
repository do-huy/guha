 <footer>
    <div class="container">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4 id="gioithieuvdt">Liên HỆ</h4>
        <p id="por">Hãy liên hệ ngay với chúng tôi , chúng tôi sẽ giúp bạn hoàn thành nhanh nhất</p>
       {{--  <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i> 05 Đàm Thận Huy , Phú Thọ Hòa , Quận Tân Phú </li>
            <li><i class="fa fa-phone fa"></i> + 09.066.765.77</li>
            <li><i class="fa fa-envelope fa"></i> Vanducthanh62@gmail.com</li>
          </ul>
        </div> --}}
        <p id="por"><i class="fa fa-home fa"></i> 5 Đàm Thận Huy , Phú Thọ Hòa , Q.Tân Phú</p>
        <p id="por"><i class="fa fa-phone fa"></i> + 0906676577</p>
        <p id="por"><i class="fa fa-envelope fa"></i> Vanducthanh62@gmail.com</p>

        <div style="text-align: center;font-size: 28px;" >
        <a href="https://www.facebook.com/giaohangLonganSaiGon/?__tn__=%2Cd%2CP-R&eid=ARAI46EVhvlZeWQ0xwQQWnEHXJbQTOSKfo62H0imyobFSCbrQlvX6zQjWYcd5v6aO6fgUbkO0wmRQJSv" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.facebook.com/VDTexpress" target="_blank"><i class="fab fa-facebook-square"></i></a>
        </div>

      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="text-center">
          <h4 id="gioithieuvdt">Hình ảnh triển lãm</h4>
          <ul class="sidebar-gallery">
            <li><a href="#"><img src="img/h7.png" alt="" /></a></li>
            <li><a href="#"><img src="img/h8.png" alt="" /></a></li>
            <li><a href="#"><img src="img/h9.png" alt="" /></a></li>
            <li><a href="#"><img src="img/h10.png" alt="" /></a></li>
            <li><a href="#"><img src="img/h11.png" alt="" /></a></li>
            <li><a href="#"><img src="img/h14.png" alt="" /></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <div class="">
          <h4 id="gioithieuvdt">Gửi phản ánh về dịch vụ</h4>
          <p id="por">Mọi thắc mắc và ý kiến về dịch vụ của chúng tôi , xin vui lòng gửi thông tin về email</p>
          <div class="btn-gamp">
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Nhập Email">
          </div>
          <button style="margin-top: 5px" type=""> Gửi</button>
         {{--  <div class="btn-gamp">
            <a type="submit" class="btn btn-default">Subscribe</a>
          </div> --}}

        </div>
      </div>

    </div>
  </footer>

  <div class="sub-footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li id="pog"><a href="{{URL::Route('introduce')}}" class="fb tool-tip" title="Facebook"><i class="fas fa-archway"></i> Giới thiệu</a></li>
            <li id="pog"><a href="{{URL::Route('contact')}}" class="twitter tool-tip" title="Twitter"><i class="fas fa-phone-volume"></i> Liên hệ</a></li>
            <li id="pog"><a href="{{URL::Route('price')}}" class="gplus tool-tip" title="Google Plus"><i class="fas fa-dollar-sign"></i> Bảng giá</a></li>
           {{--  <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li> --}}
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
        <div style="color: white" class="copyright">
          &copy; 2019
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Day
            -->
            <a href="https://bootstrapmade.com/">Developed</a> by <a href="https://bootstrapmade.com/">IT-VDTexpress</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  {{Html::script('js/jquery.js')}}
  {{Html::script('js/bootstrap.min.js')}}
  {{Html::script('js/wow.min.js')}}
  <script>
    wow = new WOW({}).init();
  </script>
</body>

</html>