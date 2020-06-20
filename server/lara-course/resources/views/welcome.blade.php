<!doctype html>
<html lang="en">
  <head>
    <!-- start -- Required meta tags -->
      @foreach($courses as $course)
            <meta name=description content="{{$course->tags}}">	
     @endforeach
    <!-- end -- start -- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}" >
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/PcGSCyQ/Ulearn.png" />
    
    <title>Ulearn</title>
    <link rel="manifest" href="/manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "927dc3a7-ced1-4550-bbfa-cc127860a2e1",
    });
  });
</script>

<!-- Start of Async ProveSource Code -->
	<script>
		!function(o,i){window.provesrc&&window.console&&console.error&&console.error("ProveSource is included twice in this page."),provesrc=window.provesrc={dq:[],display:function(o,i){this.dq.push({n:o,g:i})}},o._provesrcAsyncInit=function(){provesrc.init({apiKey:"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhY2NvdW50SWQiOiI1Y2E0MWY0MWU4MDZhYTU5NGUwNWU2OTgiLCJpYXQiOjE1NTQyNTk3Nzd9.7w44V8Fyc9z_dYF0napNhfJFAgp0o9Hr9IGaMbPdFhU",v:"0.0.3"})};var r=i.createElement("script");r.type="text/javascript",r.async=!0,r.charset="UTF-8",r.src="https://cdn.provesrc.com/provesrc.js";var e=i.getElementsByTagName("script")[0];e.parentNode.insertBefore(r,e)}(window,document);
	</script>
<!-- End of Async ProveSource Code -->
 
 </head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand mb-3" style="font-size: 25px; color: grey;" href="/">
			<b> Ulearn </b>
        </a>
		
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"   aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
     </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto container-fluid">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-list-ul"></i> Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					@foreach($categories as $category)
                          <a class="dropdown-item" href="">{{ $category->name }}</a>
          @endforeach
              </div>
            </li>
		</ul>

        <a data-toggle="modal" data-target="#loginModal"class="nav-link btn btn-outline-dark" href="/login">Login</a>
		<a data-toggle="modal" data-target="#registerModal" class="nav-link btn btn-danger mx-2" href="/register">Signup</a> 
    </div>
</nav>


<div class="fresh-content text-light py-3" >
           <div class="container">
               <div class="row">
                   <div class="col-md-4">
                       <div class="media">
                            <i class="far fa-play-circle mr-3 display-4" ></i>
                            <div class="media-body">
                              <h5 class="mt-0">Fresh Courses</h5>
                              Choose from 100s of videos with new additions published every month
                            </div>
                          </div>
                   </div>

                   <div class="col-md-4">
                        <div class="media">
                             <i class="fas fa-ribbon mr-3 display-4" ></i>
                             <div class="media-body">
                               <h5 class="mt-0">Trusted Instructors</h5>
                               Take courses taught by industry experts around the world
                             </div>
                           </div>
                    </div>
                   
                   <div class="col-md-4">
                        <div class="media">
                             <i class="fas fa-spinner mr-3 display-4" ></i>
                             <div class="media-body">
                               <h5 class="mt-0">Flexible Learning</h5>
                               Learn on your terms with lifetime course access and the Udemy mobile app
                             </div>
                           </div>
                    </div>
               </div>
           </div>
</div>
<div class="container mt-5 text-center" >
           <h3>
                <small class="text-muted">Top Courses</small>
            </h3>
            <div class="card-columns row" >
                  @foreach($courses as $course)
                    <div class="card col-md-4" style="height:px;">
                        <!-- <span class="badge  badge-warning w-50 mt-2"
                          style="position: absolute; z-index: 3"
                        >BEST SELLER</span> -->
                    <a href="{{ url('/register') }}" class="card-img-top h-50"  >  
                        <img class="w-100" src="{{ $course->photo}}" alt="{{ $course->title }}"> 
                    </a> 
                    <br/>
                      <div class="card-body px-2">
                        <h6>{{ $course->title }}</h6>
                        <p class="card-text" style="font-size: 11px;">{{ $course->user['name'] }} | {{ $course->sub_title }}</p>
                        <p class="card-text"><small class="text-muted">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half text-warning"></i>
                        </small>
                          <span class="d-block"></span>

                          <small style="color:brown;" class="h5">
                              Dt ({{number_format($course->actual_price - $course->discount_price ) }})
                          </small>
                          @if($course->discount_price != 0)
                                <small style="color:brown; text-decoration: line-through;">
                                Dt ({{number_format($course->actual_price) }})
                                </small>
                          @endif
						                </small>
                           <div style="float:right;" >
                          <a href="{{ url('/register') }}" class="btn btn-lg btn-danger" >Enroll Now</a>
                           </div>
                         </p>
                      </div>
                    </div>
                    @endforeach
            </div>     
</div>
        
     <!-- </div> -->
     
<div class="col mt-5 bg-light">
		<footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2020 
                <img src="https://www.n-3rd.com/wp-content/uploads/2019/09/cropped-n-3rd-logo-110-32x32.png" width="15" height="15" alt="icon_copyright">.
                <!-- <img src="{{ url('/Icon Place/logo/n-3rd/cropped-n-3rd-logo-110-32x32.png') }}" width="15" height="15" alt="icon_copyright">. -->
                <a href="https://www.n-3rd.com">N3RD</a>
            </strong> Tous les droits sont réservés.
        </footer>
</div>
<!-- </div> -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="loginModalLabel">Login</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		 </button>
      </div>
      <div class="modal-body">
        @include('auth.login-element') 
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="registerModalLabel">Signup</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		 </button>
      </div>
      <div class="modal-body">
        @include('auth.register-element') 
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  
  <script>
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
  
  </script>

  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c9dd6a71de11b6e3b05cd12/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>