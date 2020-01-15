@extends('anony_layout.master')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <title> Contact_us</title>
    <link rel="stylesheet" text="html/css" href="css/contact_us.css"/>
    <meta name="viewport" content="width=device-width,initial-scal=1"/>
    <script src="js/jquery-3.4.1.js"></script>  <script src="js/jquery-3.4.1.min.js"></script> 
    <script src = 'js/plugin.js'></script>
 
  </head>
  <body>
      <body class="body">
          <div class = "main-div" >
         
       <div class = "main-section">  
          <div class="space"></div>
          <div class = "map">
              <h1> google map  .... </h1>
              <div class="space"></div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d864.1381154704355!2d31.257187076211064!3d29.963549054131622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145847410c0d9877%3A0xc44d9ce287c60be!2sElking%20store!5e0!3m2!1sar!2seg!4v1570348455977!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            
            </div> 
            <div class="contact">
                <div class ="info_div" >

                    <h1> Contact Us...</h1>
                    <ul class="ul">
                      <li class="li"><P> <lable>1st Mob :  </lable> 01201611733</p></li>
                      <li class="li"><P><lable> 2nd Mob : </lable>  01551223187</p></li>
                       <li class="li"><p><lable>Email : <lable>hanan@ehm-eg.com</p></li>
                    </ul>
                     
                   </div> 

            </div>

          
     <div id="contactMe">
            <h1>Contact</h1>
            <div class="form">
                <input class="i1" type="text" placeholder="Enter your name"/>
                <input class="i2" type="text" placeholder="Enter your email"/>
                <input class="i3" type="tel" placeholder="Your phone Number"/>
                <input class="i4"type="textarea"placeholder="Message.... "/> 
                <button id="send"> Send Message</button>

            </div>
        </div> 
        <div class=footer>
            <div class="social">
                <ul class="ul2">
                    <li class="li2"><img src="images/FB.PNG"/></li>
                    <li class="li2"><img src="images/Google.PNG"/></li>
                    <li class="li2"><img src="images/in.PNG"/></li>
                    <li class="li2"><img src="images/V.PNG"/></li>
                    <li class="li2"><img src="images/TW.PNG"/></li>
                    <li class="li2"><img src="images/social.PNG"/></li>

                </ul>
            </div>
            <div class="space"></div>
            <p id="copyright">&copy 2019 Exclusive . All right reserved | Design By<span> Hanan Mohammed </span></p>
        </div>
     
       </div>
 
        </div>
  </body>
</html>
 
@endsection