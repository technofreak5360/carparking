<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Parclick | Auto Parking</title>
  </head>
  <body>
    <!--navbar -->
<header>
  <nav class="navbar sticky-top navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="logotipo-parclick.svg" class="img-fluid pull-xs-left" alt="..."></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fas fa-bars"></i>
  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
           <!-- <a class="nav-link" href="#">About</a> -->
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
              <li class="nav-item">
                <a class="nav-link" href="service.html">Services</a>
                <li class="nav-item">
              <!--   <a class="nav-link" href="#">Log in</a> -->
                </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!--navbar End -->
<!-- heading -->
<section>
  <div class="container-fluid">
    <div class="container">
     <div class="row">
       <div class="col-12 text-center font-weight-bold mt-5 " style="font-size: 48px !important">
 Contact Us
       </div>
       <div class="col-12 text-center  "  style="font-size: 28px; color: #6f9a8d !important">
More than 500,000 drivers have now booked with Parclick
       </div>

     </div>

    </div>

  </div>
</section>
<!--heading end -->

<!--image -->
<section>
  <div class="container-fluid">
<img src="background.png" class="img-fluid"alt="">
  </div>
</section>
<!-- image end -->
<div class="container-fluid">
  <div class="container text-center mt-5" id="under_img_text">
    Choose a car park, book and start saving!
  </div>
  <!--address start -->
<section>
  <div class="container-fluid">
<div class="row ">
  <div class="col-6">
<span style="font-size:30px; color:#6f9a8d">Address:</span><br>
<span style="font-size:30px; color:#6f9a8d">98 West 21th Street, Suite 721 New York NY 10016</span><br><br><br>
<span style="font-size:30px; color:#6f9a8d">PHONE:</span><br>
<span style="font-size:30px; color:#6f9a8d">(+91) 1111 222222</span><br><br><br>
<span style="font-size:30px; color:#6f9a8d">Email</span><br>
<span style="font-size:30px; color:#6f9a8d">info@Parclick.com</span>
  </div>
  <div class="col-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109741.02912921079!2d76.6934885768626!3d30.735062644281005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1552825922763" width="1440" height="490" frameborder="0" style="border:0;float:left;" allowfullscreen></iframe>
  </div>
</div>
  </div>
</section><br><br><br>
<!-- address end -->
<!--commentbox -->
<section>
  <div class="container" id="comment">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" autocomplete="off" style="width:40%"/>
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5" autocomplete="off" style="width:40%"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" style="width:30%"  />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
</section>
<!--comment box end -->
<section>
  <div class="container-fluid">
<div class="row">
  <div class="col-6 text-center mx-auto my-auto" id="app-txt">
    Book when you want<br><span id="downld">Download our app</span>
  </div>
  <div class="col-6 mt-5">
<img src="app.png" class="img-fluid mt-5" id="app-img">
  </div>
</div>
  </div>
</section>
<footer id="footer">
<div class="container pt-4">
Copy Right@Parclick 2019. All Rights Reserved
</div>
</footer>

    <!--<script src="validation.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 -->
  </body>


</html>
<script>
$(document).ready(function(){

 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });

});
</script>
