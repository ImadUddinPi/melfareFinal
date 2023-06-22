@extends('layout')
@section('title') Melfare About Us @endsection
@section('keywords')   @endsection
@section('description') @endsection
@section('content')
 
<div align="center" style="background:#1CD5E8;padding:20px;">
<h3  class="black-text" style="font-weight:bold;margin-top:15px;">
THE MELFARE STORY</h3>
<p class="white-text" style="font-weight:bold;">    JOURNEY OF MELFARE FROM IDEATION TO STARTUP</p>
  

</div>

<div class="container-fluid" style="background:white;font-family: 'Balsamiq Sans', cursive;">
    <div class="row px-5"> 
        <div   class="col-md-12 ">
            <div align="center">
               <p class="col-md-4">
                    <img src="{{url('assets/img/Logo-Square.webp')}}" class="img-fluid">
                </p>
            </div>
              <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Welcome to Melfare, your trusted online welfare pharmacy store. We understand the importance of your well-being and strive to provide convenient access to high-quality healthcare products 
              and services from the comfort of your home.
              At Melfare, we believe that everyone deserves to lead a healthy and fulfilling life.
               Our mission is to bridge the gap between healthcare and accessibility by offering a wide range of essential welfare products at affordable prices.
                   </p>  
<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; With our user-friendly online platform, you can easily browse through our extensive collection of pharmaceuticals, medical supplies, personal care items, and wellness products. Whether you require prescription medications, over-the-counter remedies, or daily essentials, we have you covered.

We prioritize your safety and well-being above all else. That's why we partner with licensed pharmacies and reputable manufacturers to ensure that all the products we offer meet stringent quality standards. Your health is our utmost concern, and we take every measure to ensure the authenticity and reliability of our offerings.</p>

<h1 class="black-text" style="font-weight:bold; text-align:center">  Dedicated team of pharmacists and Professionals</h1>

    <div align="center">
               <p class="col-md-4">
                    <img src="{{url('Img/About/1.jpg')}}" class="img-fluid">
                </p>
    </div>
 

<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</p> 
 
        </div>
        <div align="center" class="col-md-12">
        <div class="col-md-8  ">
            
<h1 align="center" class="black-text" style="font-weight:bold;">GALLERY</h1>

                                    <!--Carousel Wrapper-->
                        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                          <!--Indicators-->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                          </ol>
                          <!--/.Indicators-->
                          <!--Slides-->
                              <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                  <div class="view">
                                    <img class="d-block w-100" src="{{url('Img/Gallary/1.jpg')}}"
                                      alt="First slide">
                                    <div class="mask rgba-black-light"></div>
                                  </div>
                                  <div class="carousel-caption">
                                    <h3 class="h3-responsive"></h3>
                                    <p></p>
                                  </div>
                                </div>
                              
                                
                                  <div class="carousel-item">
                                  <!--Mask color-->
                                  <div class="view">
                                    <img class="d-block w-100" src="{{url('Img/Gallary/2.jpg')}}"
                                      alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                  </div>
                                  <div class="carousel-caption">
                                    <h3 class="h3-responsive"> </h3>
                                    <p> </p>
                                  </div>
                                </div>
                              </div>

                          <!--/.Slides -->
                          <!--Controls-->
                          <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                          <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->
        </div>
        </div>
        <div align="center" class="col-md-3"> </div>
         <div align="left"  class="col-md-6 mx-3">
              <br>    <br>
                <span class="black-text" style="font-weight:bold;font-size:25px;">Mission:</span> Our mission is to enhance the well-being of individuals and communities by providing accessible and affordable healthcare solutions. We strive to empower individuals to take control of their health by offering a comprehensive range of pharmaceuticals, medical supplies, and wellness products. Through our user-friendly online platform and personalized support, we aim to bridge the gap between healthcare and accessibility, ensuring that everyone has the opportunity to lead a healthy and fulfilling life.<br>
        
            <span class="black-text" style="font-weight:bold;font-size:25px;">Vision:</span> Our vision at Melfare is to revolutionize the way individuals access and experience healthcare. We envision a future where every person has equal and convenient access to high-quality welfare products and services, regardless of their location or circumstances. Through innovative technology, seamless online experiences, and a dedicated team of healthcare professionals, we aim to empower individuals to prioritize their health and well-being. We strive to be at the forefront of advancements in the welfare industry, constantly adapting and evolving to meet the changing needs of our customers. Our ultimate vision is to create a healthier world where everyone can thrive and live their best lives.
             
        </div>
    </div>
 <br><br>
   
</div>


@endsection