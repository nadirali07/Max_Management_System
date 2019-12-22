
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{asset('/css/style.css') }}"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<script  src="https://code.jquery.com/jquery-3.4.1.js"></script>



	<script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="250">

	<div class="container-fluid">
		<div class="row">
      <img src="Main_page_pic.jpg" alt="Lights" style="width:100%; height: 90%">
    </div>
  </div>

  <div class="container" >
   <div class="row">

    <div class="col-sm-12">

     <img src="logo.png" alt="Lights" >	
     <div  style="text-align: center;margin-top: -350px">
       <span style=" font-size: 38px;color: #ffb606; 
       font-family: Forte; "> Welcome</span> 
       <br>

       <span style="color: white;

       text-transform: none;
       font-size: 44px;
       font-weight: 800;
       font-style: normal;
       text-transform: none;">Max Restaurant</span>
       <br>
       <br>
       <p style="color: white;font-size: 20px;font-style: normal;"><b>--------</b>Every-thing is For You<b>-------</b></p>

     </div>
   </div>

 </div>

</div>


<!-- na vBar startr-->
<script type="text/javascript">


  $(window).on('scroll',function()
  {
   if($(window).scrollTop())
   {
    $('nav').addClass('black');  <!-- Add black nav -->
  }
  else{
    $('nav').removeClass('black');
  }
})

</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
   <a class="navbar-brand" href="#">
    <img src="logo.png" style="margin-left: 20px;margin-top: 5px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto" >
      <li class="nav-item active" >
       <a class=" btn nav-link btn-outline-warning" href="#">Home </a>
     </li><li class="nav-item">
      <div class="dropdown ">
       <a class="btn nav-link text btn-outline-warning" href="#RESERVATION"  
       style="color: white;border-style:none;; font-size: 15px;"><span style="margin-left:15px;"> RESERVATION</span></a>
       <div class="dropdown-content">
         <a href="#RESERVATION">Resrvation Form</a>
         <a href="#RESERVATION">Open Table Form</a>
       </div>
     </div>
   </li>

   <li class="nav-item">
    <a class="btn nav-link text btn-outline-warning" href="#MENUScroll"  
    style="color: white;border-style:none;; font-size: 15px;"><span style="margin-left:15px;">MENU</span></a>  

  </li>

  <li class="nav-item">
    <div class="dropdown ">
     <a class="btn nav-link text btn-outline-warning" href="#EVENT"  
     style="color: white;border-style:none;; font-size: 15px;"><span  style="margin-left:15px;"> EVENT</span></a>
     <div class="dropdown-content">
      <a href="#EVENT">Happening Event</a>
      <a href="#EVENT">Upcomming Event</a>
      <a href="#EVENT">Expired Event</a>
    </div>
  </div>
</li>


<li class="nav-item">
  <div class="dropdown ">
   <a class="btn nav-link text btn-outline-warning" href="#FEATURES"
   style="color: white;border-style:none; ;font-size: 15px;">
   <span  style="margin-left:15px;"> FEATURES</span></a>
   <div class="dropdown-content">
    <a href="#FEATURES">About us</a>
    <a href="#FEATURES">Gallery</a>
    <a href="#FEATURES">Social Links</a>
    <a href="#FEATURES">Admin News</a>

  </div>
</div>
</li>
<li class="nav-item">
 <div class="dropdown">
  <a class="btn nav-link btn-outline-warning"href="#BLOG" style="color: white; border-style:none;;font-size: 15px" >
   BLOG
 </a>
</div>
</li>
<li class="nav-link">
 <div class="hrh">

 </div>
</li>
<li class="nav-link">
 <a href="#"   style="color: white" >
  <span class="iconify" ho data-icon="simple-line-icons:social-facebook"
  data-inline="false" data-width="20px" data-height="20px"></span>
</a></li>


<li class="nav-link">
  <a href="#"   style="color: white">
   <span class="iconify" data-icon="simple-line-icons:social-twitter"
   data-inline="false"   data-width="20px" data-height="20px"></span>
 </a></li>

 <li class="nav-link">
   <a href="#"   style="color: white">
    <span class="iconify" data-icon="entypo-social:tripadvisor"
    data-inline="false"  data-width="20px" data-height="20px"></span>
  </a></li>      
</ul>
</div>
</nav>
</div>

<!-- na vBar Endddd-->



<!-- table reservation -->
<div class="container-fluid">
  <div class="row">

   <div class="col-sm-12" >

    <p class="text-center"  id="RESERVATION" style="font-size: 38px;color: #ffb606; 
    font-family: Forte; margin-top: 110px;">Book`S </p>
    <h2 class="text-center">TABLE</h2>

    <br>
    <br>
    <p class="text-center" style="color: gray">Opening Hour <b>8:00</b> AM - <b>10:00</b> PM, every day on week.</p>
  </div>
</div>
</div>


     <form action="{{url('/tableSubmit')}}" method="post">
  @csrf
<div class="container">
  <div class="row justify-content-center py-4">
    <div class="col-md-3"> 
      <div class="form-group">
        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
          <input type="text" name="DT" class="form-control datetimepicker-input" data-target="#datetimepicker1" placeholder="Date" />
          <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(function () {
          $('#datetimepicker1').datetimepicker();
        });
      </script>

    </div>
    <div class="col-md-3"> 
      <select class="form-control colorful-select dropdown-primary" name="peoples">
        <option disabled selected>Choose your option</option>
        <option value="1">1 People</option>
        <option value="2">2 People</option>
        <option value="3">3 People</option>
        <option value="4">4 People</option>
        <option value="5">5 People</option>
        <option value="6">6 People</option>
        <option value="7">7 People</option>
        <option value="8">8 People</option>
        <option value="9">9 People</option>
        <option value="10">10 People</option>

      </select>

    </div>
    <div class="col-md-3"> 
      <button  type="submit" name="tableSubmit" class="button1" style="
      background: #ffb606;
      border-color: #ffb606;
      transition: all .2s ease-in-out 0s;
      font-weight: 700;
      width: 250px;
      height: 40px;
      border-radius: 5px;
      /*margin-left: 45px;*/ 
      color: #2a2a2a;">BOOK A TABLE</button>
      <p style="float: right; color: gray ;margin-right: 120px;font-size: 12px;">Reserve Now</p>

    </div>

  </div>
</div>
</form>




<div class="container-fluid" id="MENUScroll">
  <div class="row">

    <img src="MenuUpper.jpg" alt="Lights" style="width:100%; height: 50%; background-attachment: fixed;">
  </div>
</div>
<div class="container">
	
	<div class="row">

    <div class="col-sm-2">

    </div>
    <div class="col-sm-8" style="margin-top: -60px"  >


      <div class="nav nav-tabs nav-fill"  role="tablist" style=" background-color: black;opacity: 0.5">
        <a class="nav-item nav-link "  data-toggle="tab" href="#JUNKSFOOD" role="tab" >
          <img src="junksfood.png"> <span style="color: yellow">JUNKSFOOD</span>
        </a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#DRINKS" role="tab">
          <img src="drinks.png"> <span style="color: yellow">DRINKS</span>

        </a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#CHEF" role="tab">
          <img src="chef.png"> <span style="color: yellow">CHEF</span>

        </a>
        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#COCKTAIL" role="tab">
          <img src="coctail.png"> 
          <span style="color: yellow">COCKTAIL</span>
        </a>
      </div>


      <div class="tab-content">
        <div class="tab-pane fade show active" id="JUNKSFOOD" role="tabpanel" ><br>

          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                  <div class="card-content">
                    <div class="card-img">
                      <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                      <span><h4>Dinks</h4></span>
                    </div>
                    <div class="card-desc" >
                      <h3>QUAIL</h3>
                      <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                      <a href="#" class="btn btn-warning">Price:9.9$</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                  <div class="card-content">
                    <div class="card-img">
                      <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                      <span><h4>Dinks</h4></span>
                    </div>
                    <div class="card-desc" >
                      <h3>QUAIL</h3>
                      <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                      <a href="#" class="btn btn-warning">Price:9.9$</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                  <div class="card-content">
                    <div class="card-img">
                      <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                      <span><h4>Dinks</h4></span>
                    </div>
                    <div class="card-desc" >
                      <h3>QUAIL</h3>
                      <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                      <a href="#" class="btn btn-warning">Price:9.9$</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-md-3">
               <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                <div class="card-content">
                  <div class="card-img">
                    <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                    <span><h4>Dinks</h4></span>
                  </div>
                  <div class="card-desc" >
                    <h3>QUAIL</h3>
                    <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                    <a href="#" class="btn btn-warning">Price:9.9$</a>
                  </div>

                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
      <div class="tab-pane fade" id="DRINKS" role="tabpanel" ><br>



        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                <div class="card-content">
                  <div class="card-img">
                    <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                    <span><h4>Dinks</h4></span>
                  </div>
                  <div class="card-desc" >
                    <h3>QUAIL</h3>
                    <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                    <a href="#" class="btn btn-warning">Price:9.9$</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                <div class="card-content">
                  <div class="card-img">
                    <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                    <span><h4>Dinks</h4></span>
                  </div>
                  <div class="card-desc" >
                    <h3>QUAIL</h3>
                    <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                    <a href="#" class="btn btn-warning">Price:9.9$</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
                <div class="card-content">
                  <div class="card-img">
                    <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                    <span><h4>Dinks</h4></span>
                  </div>
                  <div class="card-desc" >
                    <h3>QUAIL</h3>
                    <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                    <a href="#" class="btn btn-warning">Price:9.9$</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-3">
             <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
              <div class="card-content">
                <div class="card-img">
                  <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                  <span><h4>Dinks</h4></span>
                </div>
                <div class="card-desc" >
                  <h3>QUAIL</h3>
                  <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                  <a href="#" class="btn btn-warning">Price:9.9$</a>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="CHEF" role="tabpanel" ><br>


      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
              <div class="card-content">
                <div class="card-img">
                  <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                  <span><h4>Dinks</h4></span>
                </div>
                <div class="card-desc" >
                  <h3>QUAIL</h3>
                  <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                  <a href="#" class="btn btn-warning">Price:9.9$</a>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
              <div class="card-content">
                <div class="card-img">
                  <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                  <span><h4>Dinks</h4></span>
                </div>
                <div class="card-desc" >
                  <h3>QUAIL</h3>
                  <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                  <a href="#" class="btn btn-warning">Price:9.9$</a>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
              <div class="card-content">
                <div class="card-img">
                  <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                  <span><h4>Dinks</h4></span>
                </div>
                <div class="card-desc" >
                  <h3>QUAIL</h3>
                  <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                  <a href="#" class="btn btn-warning">Price:9.9$</a>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-3">
           <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
            <div class="card-content">
              <div class="card-img">
                <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                <span><h4>Dinks</h4></span>
              </div>
              <div class="card-desc" >
                <h3>QUAIL</h3>
                <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                <a href="#" class="btn btn-warning">Price:9.9$</a>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="COCKTAIL" role="tabpanel"><br>


    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
            <div class="card-content">
              <div class="card-img">
                <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                <span><h4>Dinks</h4></span>
              </div>
              <div class="card-desc" >
                <h3>QUAIL</h3>
                <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                <a href="#" class="btn btn-warning">Price:9.9$</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
            <div class="card-content">
              <div class="card-img">
                <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                <span><h4>Dinks</h4></span>
              </div>
              <div class="card-desc" >
                <h3>QUAIL</h3>
                <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                <a href="#" class="btn btn-warning">Price:9.9$</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
            <div class="card-content">
              <div class="card-img">
                <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
                <span><h4>Dinks</h4></span>
              </div>
              <div class="card-desc" >
                <h3>QUAIL</h3>
                <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
                <a href="#" class="btn btn-warning">Price:9.9$</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-3">
         <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
          <div class="card-content">
            <div class="card-img">
              <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
              <span><h4>Dinks</h4></span>
            </div>
            <div class="card-desc" >
              <h3>QUAIL</h3>
              <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
              <a href="#" class="btn btn-warning">Price:9.9$</a>
            </div>

          </div>
        </div>
      </div>

    </div>

  </div>



</div>
</div>

</div>
</div>

</div>

<div class="container-fluid" >
 <div class="row">
  <div style="background-image: url('Dinner.jpg');   background-size: cover; height: 300px; width: 100%; background-size: cover;margin-top: 200px; background-attachment: fixed;">
    <br><br><br><br><br><br>
    <h2><span style="color: white"><center><b> DINNER</b></center></span></h2>
  </div></div>
</div>

<div class="container">
  <div class="row pt-4">
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img">
            <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
            <span><h4>Dinks</h4></span>
          </div>
          <div class="card-desc" >
            <h3>QUAIL</h3>
            <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img">
            <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
            <span><h4>Dinks</h4></span>
          </div>
          <div class="card-desc" >
            <h3>QUAIL</h3>
            <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img">
            <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
            <span><h4>Dinks</h4></span>
          </div>
          <div class="card-desc" >
            <h3>QUAIL</h3>
            <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
     <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
      <div class="card-content">
        <div class="card-img">
          <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
          <span><h4>Dinks</h4></span>
        </div>
        <div class="card-desc" >
          <h3>QUAIL</h3>
          <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
          <a href="#" class="btn btn-warning">Price:9.9$</a>
        </div>

      </div>
    </div>
  </div>

</div>

</div>

<div class="container-fluid">
  <div class="row">

    <div style="background-image: url('lunch.jpg');   background-size: cover; height: 300px;width: 100%; background-size: cover;margin-top: 200px; background-attachment: fixed;">
      <br><br><br><br><br><br>>

      <h2><span style="color: white"><center><b>LUNCH</b></center></span></h2>

    </div>
  </div>
</div>

<div class="container">
  <div class="row pt-4">
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img">
            <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
            <span><h4>Dinks</h4></span>
          </div>
          <div class="card-desc" >
            <h3>QUAIL</h3>
            <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img">
            <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
            <span><h4>Dinks</h4></span>
          </div>
          <div class="card-desc" >
            <h3>QUAIL</h3>
            <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img">
            <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
            <span><h4>Dinks</h4></span>
          </div>
          <div class="card-desc" >
            <h3>QUAIL</h3>
            <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
     <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
      <div class="card-content">
        <div class="card-img">
          <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
          <span><h4>Dinks</h4></span>
        </div>
        <div class="card-desc" >
          <h3>QUAIL</h3>
          <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
          <a href="#" class="btn btn-warning">Price:9.9$</a>
        </div>

      </div>
    </div>
  </div>

</div>

</div>
<!-- lunch section close -->

<div class="container-fluid">
 <div class="row">
  <div style="background-image: url('breakfast.jpg');   background-size: cover; height: 300px;width: 100%;background-position: 50% 195px;
  margin-top: 100px;
  background-attachment: fixed;">
  <br><br><br><br><br><br>

  <h2><span style="color: white"><center><b>BREAKFAST</b></center></span></h2>


</div>
</div>
</div>


<div class="container">
  <div class="row pt-4">
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img">
            <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
            <span><h4>Dinks</h4></span>
          </div>
          <div class="card-desc" >
            <h3>QUAIL</h3>
            <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img">
            <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
            <span><h4>Dinks</h4></span>
          </div>
          <div class="card-desc" >
            <h3>QUAIL</h3>
            <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
        <div class="card-content">
          <div class="card-img">
            <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
            <span><h4>Dinks</h4></span>
          </div>
          <div class="card-desc" >
            <h3>QUAIL</h3>
            <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
            <a href="#" class="btn btn-warning">Price:9.9$</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3">
     <div  style="border-radius: 5px;border: 1px solid gray; border: 1px solid #ddd; ">
      <div class="card-content">
        <div class="card-img">
          <img src="https://placeimg.com/380/230/animals" width="50px" alt="">
          <span><h4>Dinks</h4></span>
        </div>
        <div class="card-desc" >
          <h3>QUAIL</h3>
          <small><p> Smoked quail, crispy egg, spelt, girolles</p></small>
          <a href="#" class="btn btn-warning">Price:9.9$</a>
        </div>

      </div>
    </div>
  </div>

</div>

</div>

<div class="container-fluid">
  <div class="row">
    <div alt=""  id="EVENT" 
    style=" background-image: url('eventpic.jpg');  background-size: cover; height: 300px;width: 100%;margin-top: 100px">
  </div>
</div>
</div>


<div class="container">
  <div class="row">
   <!-- about Event Sections Tabs -->

   <div class="col-sm-6">


    <ul class="nav nav-pills" style="margin-top: 100px;">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#Happenning" style="width: 200px;opacity: 0.7">Happenning</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#Upcomming"  style="width: 200px;opacity: 0.7">Upcomming</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#Expired"  style="width: 200px;opacity: 0.7">
        Expired</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" style="margin-top: 70px">

      <div class="tab-pane container active" id="Happenning"><span style="color: gray"><h4 class="text">Wine Testig</h4><br>
        <img src="chef.png" style="width: 110px;height: 120px">
        <br>

        <div  style="border-radius: 5px;border: 1px solid gray;width:240px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
          <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>

          <p style="color: #666666;margin-top: 20px">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste commodi reiciendis fugit qui quia ut, non omnis dignissimos
         </p>

         <p style="color: #666666;">
           <span style="color: yellow;margin-left: 50px; font-size: 19px;opacity: 0.6"><b>31 </b></span> : &nbsp&nbsp&nbsp02:00 - 20:30
           <br> 
           <span style="color: yellow;margin-left: 50px; font-size: 14px;opacity: 0.6"><b>  AUG</b></span>
           &nbsp&nbsp&nbspPARIS
         </p>
       </div>


     </div>

     <div class="tab-pane container fade" id="Upcomming"><br>
       <span style="color: gray"><h4 class="text">Wine Testig</h4><br>
        <img src="gg.jpg" style="width: 210px;height: 170px">
        <div  style="border-radius: 5px;border: 1px solid gray;width:240px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
          <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>

          <p style="color: #666666;margin-top: 20px">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste commodi reiciendis fugit qui quia ut, non omnis dignissimos
         </p>

         <p style="color: #666666;">
           <span style="color: yellow;margin-left: 50px; font-size: 19px;opacity: 0.6"><b>31 </b></span> : &nbsp&nbsp&nbsp02:00 - 20:30
           <br> 
           <span style="color: yellow;margin-left: 50px; font-size: 14px;opacity: 0.6"><b>  AUG</b></span>
           &nbsp&nbsp&nbspPARIS
         </p>
       </div>


     </div>


     <div class="tab-pane container fade" id="Expired"><br>
       <span style="color: gray"><h4 class="text">Wine Testig</h4><br>
        <img src="ice.jpg" style="width: 210px;height: 170px">
        <div  style="border-radius: 5px;border: 1px solid gray;width:240px;margin-top:30px;margin-left: 0px; border: 1px solid #ddd;">
          <span style="text-transform: uppercase;color: color: #333;"><b>QUAIL</b></span>

          <p style="color: #666666;margin-top: 20px">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste commodi reiciendis fugit qui quia ut, non omnis dignissimos
         </p>

         <p style="color: #666666;">
           <span style="color: yellow;margin-left: 50px; font-size: 19px;opacity: 0.6"><b>31 </b></span> : &nbsp&nbsp&nbsp02:00 - 20:30
           <br> 
           <span style="color: yellow;margin-left: 50px; font-size: 14px;opacity: 0.6"><b>  AUG</b></span>
           &nbsp&nbsp&nbspPARIS
         </p>
       </div>
     </div>
   </div>   <!-- tabs portio closeee baby -->

 </div>
 <!-- about Event Sections Tabs closeeeeeee -->
 <!-- about bloggg-->

 <div  class="col-sm-6" style="margin-top: 100px">

  <div style="border:1px solid #ddd;width: 260px;">

    <h3 style="margin-top: 5px;" ><center>ABOUT BLOG</center></h3>
    <img src="blog.jpg" style="width: 100%;height: 80%s">
    <div style="margin-left: 20px;margin-top: 20px">
      <p style="color: gray">
        Pizza Hut was founded in 1958<br> by brothers Dan and Frank<br> Carney in their hometown of<br> Wichita, Kansas.<br> When a friend suggested opening a pizza<br> parlor—then a rarity—they<br> agreed that the idea could prove successful, <br>and they borrowed $600 from their mother <br>to start a business with partner John Benden.

      </p>

    </div>
  </div>

</div>   <!-- tab blog row closeee-->
</div>
</div>  


<div class="container">
  <div class="row">
   <div class="col-md-2">


    <div class="row">

      <!-- Recent POST open-->
      <div class="col-sm-12">

        <hr><span class="text">RECENT POSTS</span><hr>
        <br>
        <span class="text" style="font-size: 12px;">
        White Wine Cheesecake</span>
        <br>
        <span style="color: gray"><i> July 7, 2015</i></span>
        <br>
        <span class="text" style="font-size: 12px">
        Mac and Cheese Waffles</span>
        <br>
        <span style="color: gray"><i> July 7, 2015</i></span>
        <br>
        <span class="text" style="font-size: 12px">
        Easy Sparkling Sangria</span>
        <br>
        <span style="color: gray"><i> July 7, 2015</i></span>

        <br>
        <span class="text" style="font-size: 12px;" > 
          E6 Mixers You Should Absolutely Never Use
        </span>
        <br>
        <span style="color: gray"><i>May 5, 2015</i></span>

        <br>
        <span class="text" style="font-size: 12px;">
          The 5 Biggest Myths About Vodka
        </span>
        <br>
        <span style="color: gray"><i>May15, 2016</i></span>


        <br>
        <span class="text" style="font-size: 12px;">
        Easy Sparkling Sangria</span>
        <span style="color: gray"><i> July 18, 2015</i></span>
      </div>
    </div>
  </div>
  <!-- Recent POST closeeee-->

  <!-- Newss Latterrr -->
  <div class="col-md-4">
    <div class="row">

      <div class="col-sm-12">

        <div  style="margin-top: 33px;margin-left: 20px">
         GET OUR<sup style="color: gray;margin-left: 10px">Put Email</sup>
         <hr style="width: 140px;margin-left: -40px">
         NEWSLETTER
         <br>
         <button style="background-color: black;color: white;border-radius: 5px;font-size: 12px">
         SIGN IN</b>
       </button>
     </div>

     <!-- Newss Latterrr  closee -->
   </div> 
 </div>
</div>
<div class="col-md-6">
  <div class="row">
    <div class="col-sm-12"> 

      <button class="btn btn-light" href="#demo" data-toggle="collapse"  style="float: right;
      margin-right: 310px;
      margin-top: 40px;
      position: relative;
      "> Catagories</button> 
      <div id="demo" class="collapse" >

        <div id="accordion"  style="width: 250px;margin-top: 100px">
          <div class="card">
            <div class="card-header">
              <a class="card-link text" data-toggle="collapse" href="#collapseOne">
                DESIGN
              </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link text" data-toggle="collapse" href="#collapseTwo">
              EVENT</a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link text" data-toggle="collapse" href="#collapseThree">

              GALLERY</a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <a  class="collapsed card-link text" data-toggle="collapse" href="#collapseFour">

              RECIPIES</a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
              <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!-- catagoriessss -->
<div class="container-fluid">

  <div class="row">

    <div id="FEATURES" style="background-image: url('fotterup.jpg');   background-size: cover; height: 300px;width: 100%;margin-top: 150px;background-attachment: fixed;">
    </div>
  </div>
</div>





<div class="container">
  <div class="row">  
    <div class="col-sm-12">


      <div  style="text-align: center;">
       <span style=" font-size: 48px;color: #ffb606; 
       font-family: Forte;"> our</span> 
       <br>
       <span style="color: #2a2a2a;

       text-transform: none;
       font-size: 54px;
       font-weight: 800;
       font-style: normal;
       text-transform: none;">Standard</span>
       <br>

       <br>
       <br>
       <img src="curly.png" >
       <br><br><br><br>
     </div>

     <span style="color: gray"><center>Every so often you might have an outburst in the gallery.
     </center> </span>
     <br>
     <br>
     <br>
     <br>
   </div>
 </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="row">
        <div class="col-sm-5">

          <div   style=";color: yellow"><h5>1. Choose music carefully. </h5>
          </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>

          <div   style=";color: yellow"><h5>4. Make deliberate choices with lighting.</h5>
          </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable </div>

        </div>
        <div class="col-sm-2"></div>

        <div class="col-sm-5">

          <div   style=";color: yellow"><h5>1. Choose music carefully. </h5>
          </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>

          <div   style=";color: yellow"><h5>2. Never serve food that has expired.</h5>
          </div><div class="desc-list">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable </div>


        </div>

        <div class="col-sm-1"></div>

      </div>
    </div>
  </div>
</div>


<!-- our standar close -->

<!-- our gallery  open -->


<div class="container-fluid">

  <div class="row">

    <div id="FEATURES" style="background-image: url('gallery.jpg');   background-size: cover; height: 300px;width: 100%;margin-top: 150px;background-attachment: fixed;">
    </div>
  </div>
</div>
<div class="container">

  <div class="row">  
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <div class="row">  
        <div class="col-sm-12">


          <div style="text-align: center;" >
            <span style=" font-size: 48px;color: #ffb606; 
            font-family: Forte;"> our</span> 
            <br>
            <span style="color: #2a2a2a;

            text-transform: none;
            font-size: 54px;
            font-weight: 800;
            font-style: normal;
            text-transform: none;">Gallery</span>
            <br>
            <br>


          </div>

          <span style="color: gray;"><center>Every so often you might have an outburst in the gallery
          </center> </span>
          <br>
          <br>
        </div>
      </div>
    </div>  
  </div>
</div>
<!--  gallery row  closeee  -->



<!--  whats newwww  opeeennnnn-->

<!--  Sliderrrrrrrrrr -->




<div class="container" >
 <div class="row">
  <div class="col-md-4">

    <div class="row">
      <div class="col-sm-12">
        <div  style="border: 1px solid #ddd;border:1px solid #ddd;width: 300px ;height: 340px;color: #666;font-size: 12px" >


          <button class="w3-button w3-black w3-display-left btn btn-light" onclick="plusDivs(-1)" style="margin-left:10px;">&#10094;</button>

          <button class="w3-button w3-black w3-display-right btn btn-light" onclick="plusDivs(1)" style="float: right;  margin-right: 10px">&#10095;</button>

          <img class="mySlides" src="gg.jpg" style="width:84%;height:40%; margin-left: 25px">
          <img class="mySlides" src="Main_page.jpg" style="width:84%;height:40%;">
          <img  class="mySlides"   src="chef.jpg" style="width:84%;height:40%;">
          <img class="mySlides" src="lunch.jpg" style="width:84%;height:40%;">

          <img class="mySlides" src="ice.jpg" style="width:84%;height:40% ">
          <img class="mySlides" src="chef.png" style="width:84%;height:40%;">
          <br>

          <h4><span class="text" style="margin-left: 15px ;margin-top: 15px" ><b>Resturant</b></span></h4>
          Smoked quail, crispy egg, spelt, girolles, parsley
          <br>
          <br>

          <I> posted by<span style="color: #ddd"> Admin</span></I></p>
        </div>

        <script>
          var slideIndex = 1;
          showDivs(slideIndex);

          function plusDivs(n) {
            showDivs(slideIndex += n);
          }

          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
              if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";  
                }
                x[slideIndex-1].style.display = "block";  
              }
            </script>     
            <!------ slider script ---------->

          </div>
        </div>
      </div>


      <div class="col-md-4">

        <div class="row">
          <div class="col-sm-12"> 

            <div style="border:1px solid #ddd;width: 300px;height: 340px ">

              <h4 class="text"  style="margin-top: 15px; color:gray;margin-left: 75px" ><b>TWITTER</b></h4>
              <div style="margin-left: 20px;color: #666;font-size: 12px">
                Make sure you are following<span style="cursor: pointer;">@EnvatoMarket</span>
                for all your ThemeForest needs
                <br>
                <span style="color: #999999 ;font-size: 12px">Sep, 15 2014</span>
                <br>
                Eight marketplaces, one Envato Market. Join us:
                <a href=" http://t.co/cLo2w7rWOx" class="text" style="cursor: pointer;">http://t.co/cLo2w7rWOx</a>
                <br>
                Eight marketplaces, one Envato Market. Join us:
                <a href=" http://t.co/cLo2w7rWOx" class="text" style="cursor: pointer;">http://t.co/cLo2w7rWOx</a>
                <br>
                <span style="color: #999999 ;font-size: 12px">Aug, 13 2014</span>
                <br>
                <span style="color: yellow" >  @realseojoe</span> why thank you sir! We'd love to show
                <br><br>
                you around 🙂 ^Dan
                <br>
                <span style="color: #999999 ;font-size: 12px">Aug, 13 2014</span>

              </div>

            </div>

          </div>
        </div>
      </div>
      <div class="col-md-4">
       <div class="row">
         <div class="col-sm-12">
           <div class="p-3 text-center" style="border:1px solid #ddd;
           width: 300px;color: #666;font-size: 12px;height: 340px">
           <a > 
            <img  class="m-2"src="gg.jpg" style="width:100px;height: 60px;cursor: pointer; ">
          </a>
          <a>
            <img class="m-2" src="ice.jpg" style="width:100px;height: 60px;cursor: pointer;">

          </a>
          <br>
          <a > 
            <img class="m-2"src="lunch.jpg" style="width:100px;height: 60px;cursor: pointer;">
          </a>
          <a>
            <img  class="m-2"src="lunch.jpg" style="width:100px;height: 60px;cursor: pointer;">

          </a>
          <br>
          <a > 
            <img class="m-2" src="gg.jpg" style="width:100px;height: 60px;cursor: pointer;">
          </a>
          <a>
            <img class="m-2" src="gg.jpg" style="width:100px;height: 60px;cursor: pointer;">

          </a>

          <button type="button" style="height: 34px;width: 100px;margin-top: 25px ;font-size: 12px" class="btn btn-dark">
          Load More...</button>
          <button type="button" class="btn btn-primary" style="margin-left: 20px;margin-top: 25px ;font-size: 12px">Follow on Instagram</button> 

        </div>

        <!--  whats newwww closeeeeee -->


      </div>
    </div>
  </div>

</div>
</div>

<div class="container" style="margin-top: 40px">
  <hr style="background-color:#2a2a2a;">

</div>
<div class="container" style="margin-top: 20px">
	
  <div class="row">


    <br>
    <span class="mx-auto" style="color: #2a2a2a;
    font-size:44px;
    font-weight: 800;

    ">Our Blogs</span>
    <br>

    


  </div>
</div>




<!-- details card section starts from here -->
<section class="details-card" id="BLOG">



  <div class="container">
    <div class="row justify-content-center">

     <div class="col-md-4">
      <div  class="row">
        <div class="col-sm-12">
          <div  style="border-radius: 5px;border: 1px solid gray;margin-left: 0px; border: 1px solid #ddd; margin-top: 30px">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/animals" alt="">
                        <span><h4>Dinks</h4></span>
                    </div>
                    <div class="card-desc" >
                        <h3>QUAIL</h3>
                        <p> Smoked quail, crispy egg, spelt, girolles</p>
                            <a href="#" class="btn-card " >Price: <b>9.9$</b></a> 
                 
                    </div>
                 
                </div>
                </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div  class="row">
        <div class="col-sm-12">
 <div  style="border-radius: 5px;border: 1px solid gray;margin-left: 0px; border: 1px solid #ddd; margin-top: 30px">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/animals" alt="">
                        <span><h4>Dinks</h4></span>
                    </div>
                    <div class="card-desc" >
                        <h3>QUAIL</h3>
                        <p> Smoked quail, crispy egg, spelt, girolles</p>
                            <a href="#" class="btn-card " >Price: <b>9.9$</b></a> 
                 
                    </div>
                 
                </div>
                </div>
          
        </div></div>
      </div>
      <div class="col-md-4">
        <div  class="row">
          <div class="col-sm-12">
 <div  style="border-radius: 5px;border: 1px solid gray;margin-left: 0px; border: 1px solid #ddd; margin-top: 30px">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/animals" alt="">
                        <span><h4>Dinks</h4></span>
                    </div>
                    <div class="card-desc" >
                        <h3>QUAIL</h3>
                        <p> Smoked quail, crispy egg, spelt, girolles</p>
                            <a href="#" class="btn-card " >Price: <b>9.9$</b></a> 
                 
                    </div>
                 
                </div>
                </div>
           

          </div></div>
        </div>
      </div>
    </div>  



    <!-- Card -->

  </section>
  <!-- details card section starts from here -->

  <!------ slider script ---------->

  <!-- this Blog section closeeee-->
  <!-- Complain Button -->
  <div style="display: block; position: fixed; z-index: 1;right: 20px; bottom: 20px;">
   <a class="btn btn-warning rounded waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter">Complains</a>
 </div>
 <!-- comapin blose-->
 <!-- modal for feedback -->

 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     <div class="modal-header bg-warning">
      <h5 class="modal-title text-dark" id="exampleModalCenterTitle">Max Restaurant Complains</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>



   <form action="{{url('/submitC')}}" method="post">
     @csrf
     <div class="modal-body">
      <div class="form-group">
       <label for="feedback" class="text-dark">Your Complains:</label>
       <textarea class="form-control text-dark text-center" rows="5"
       name="complains" id="complains" style="background-color: #D2D5D7;"></textarea>

     </div>

   </div>
   <div class="modal-footer mx-auto">

    <button type="submit"  class="btn btn-outline-danger rounded waves-effect waves-light">Submit</button>






  </div>
</form>


<div class="modal-body text-center">
 <i class="far fa-smile fa-3x text-danger " ></i>
 <span class="h5 text-danger">Thanks!!!</span><br>


</div>

</div>
</div>
</div>

<!-- modal for feedback -->


<!-- footterrrrrr opeeennn -->
<div class="container-fluid">

  <div class="row" style="background-color: #181818;height: 420px;margin-top: 50px">

    <div  class="col-sm-12" style="margin-top: 100px">
      <center><img src="logo.png">
      </center>

      <br>
      <br>

      <p class="text-center" style="font-family: 'Roboto', sans-serif;      font-size: 16px; font-family: aileron;color: white" >
        329 Queensberry Street, North Melbourne VIC 3051, Australia.
      </p>


      <p class="text-center" style="font-family: 'Roboto', sans-serif;      font-size: 16px; font-family: aileron;color: white" >
        Call. <span class="text"> 0123 456 78910</span>
      </p>


      <p class="text-center" style="  font-family: 'Roboto', sans-serif;      ;font-size: 16px; font-family: aileron;color: white" >
        Email. <span class="text"> hello@yourmail.com</span>
      </p>


      <br>
      <br>
      <br>

      <hr style="
      margin-left: 300px;
      margin-right: 300px;
      border-style: inset;
      border-width: 3px;
      margin-top: -25px">

    </div>

  </div>

</div>

<!-- footterrrrrr clooosssseeeeee -->






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> 
<script src="https://Kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />

</body>
</html>