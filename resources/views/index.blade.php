@extends('layouts.main')
@section('content')

<!-- Services Section Start -->
<div style="padding-top: 50px;" id="rs-services" class="rs-services style7 pt-110 md-pt-80">
    <div class="container">
        <div class="sec-title6 mb-50 text-center">
            <h2 class="title new-title">Bài viết mới nhất</h2>
        </div>
        <div class="row">
            @foreach ($latest as $item)
                <div class="col-lg-4 col-md-6 md-mb-30">
                    <div class="services-item">
                        <div class="services-img">
                            <a href="{{route('articles.show',$item->slug)}}"><img src="{{Voyager::image($item->thumbnail('cat'))}}" alt=""></a>
                        </div>
                        <div class="services-content">
                            <div class="services-title">
                                <span>{{$item->created_at->format('H:i')}}</span>                            
                                <h3 class="title"><a href="{{route('articles.show',$item->slug)}}">{{$item->title}}</a></h3>
                            </div>
                            <p class="services-txt">{!! \Illuminate\Support\Str::limit($item->desc, 120,'...') !!}</p>
                            <div class="services-btn3">
                                <a href="{{route('articles.show',$item->slug)}}">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Services Section End -->    
<!-- Blog Section Start -->
<div id="rs-blog" class="rs-blog pt-108 pb-120 md-pt-70 md-pb-70">
    <div class="container">  
        <div class="sec-title2 text-center mb-45">
                <h2 class="title testi-title">
                    Bài viết nổi bật
                </h2>
            <div class="heading-line">
            </div>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
            @foreach ($popular as $val)
            <div class="blog-item">
                <div class="image-wrap">
                    <a href="{{route('articles.show',$val->slug)}}"><img src="{{Voyager::image($val->thumbnail('crop'))}}" alt=""></a>
                </div>
                <div class="blog-content">
                   <ul class="blog-meta">
                       <li class="date"><i class="fa fa-calendar-check-o"></i> {{$val->updated_at->format('M d, Y')}}</li>
                       <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                   </ul>
                   <h3 class="blog-title"><a href="{{route('articles.show',$val->slug)}}">{{$val->title}}</a></h3>
                   <p class="desc">{!! \Illuminate\Support\Str::limit($val->desc, 120,'...') !!}</p>
                   <div class="blog-button"><a href="{{route('articles.show',$val->slug)}}">Learn More</a></div>
                </div>
            </div>
            @endforeach
         </div>
    </div>
</div>
<!-- Blog Section End -->
<!-- Team Section Start -->
<div class="rs-team pt-120 pb-120 md-pt-80 md-pb-80 xs-pb-54"> 
    <div class="sec-title2 text-center mb-30">
        <span class="sub-text style-bg white-color">Team</span>
        <h2 class="title white-color">
            Chuyên gia tư vấn CNTT
        </h2>
    </div>               
    <div class="container">
        <div class="container"> 
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="single-team.html"><img src="assets/images/team/style1/1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Makhaia Antitni</a></h4>
                        <span class="designation">President & CEO</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="single-team.html"><img src="assets/images/team/style1/2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Corey Anderson</a></h4>
                        <span class="designation">CEO & Founder</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="single-team.html"><img src="assets/images/team/style1/3.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Masud Rana</a></h4>
                        <span class="designation">Web Developer</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="single-team.html"><img src="assets/images/team/style1/4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Najmul Huda</a></h4>
                        <span class="designation">Digital Marketer</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="single-team.html"><img src="assets/images/team/style1/5.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Rushali Rumi</a></h4>
                        <span class="designation">Design Lead</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="single-team.html"><img src="assets/images/team/style1/6.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Abu Sayed</a></h4>
                        <span class="designation">App Developer</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-item-wrap">
                    <div class="team-wrap">
                        <div class="image-inner">
                            <a href="single-team.html"><img src="assets/images/team/style1/7.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4 class="person-name"><a href="single-team.html">Sonia Akhter</a></h4>
                        <span class="designation">Graphic Artist</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- Team Section End -->
<!-- About Section Start -->
<div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-30">
                <div class="rs-animation-shape">
                    <div class="images">
                       <img src="assets/images/about/about-3.png" alt=""> 
                    </div>
                    <div class="middle-image2">
                       <img class="dance" src="assets/images/about/effect-1.png" alt=""> 
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="contact-wrap">
                    <div class="sec-title mb-30">
                        <div class="sub-text style-bg">About Us</div>
                        <h2 class="title pb-38">
                            We Are Increasing Business Success With Technology
                        </h2>
                        <div class="desc pb-35">
                           Over 25 years working in IT services developing software applications and mobile apps for clients all over the world.
                        </div>
                        <p class="margin-0 pb-15">
                          We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying.
                        </p>
                    </div>
                    <div class="btn-part">
                        <a class="readon learn-more" href="contact.html">Learn-More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-image">
            <img class="top dance" src="assets/images/about/dotted-3.png" alt="">
            <img class="bottom dance" src="assets/images/about/shape3.png" alt="">
        </div>
    </div>
</div>
<!-- About Section End -->
<!-- Testimonial Section Start -->
<div class="rs-testimonial style3 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title2 text-center mb-45">
            <span class="sub-text style-bg">Testimonial</span>
            <h2 class="title title2">
               What Saying Our Customers
            </h2>
        </div>
        <div class="rs-carousel owl-carousel" 
            data-loop="true" 
            data-items="3" 
            data-margin="30" 
            data-autoplay="true" 
            data-hoverpause="true" 
            data-autoplay-timeout="5000" 
            data-smart-speed="800" 
            data-dots="true" 
            data-nav="false" 
            data-nav-speed="false" 

            data-md-device="3" 
            data-md-device-nav="false" 
            data-md-device-dots="true" 
            data-center-mode="false"

            data-ipad-device2="1" 
            data-ipad-device-nav2="false" 
            data-ipad-device-dots2="true"

            data-ipad-device="2" 
            data-ipad-device-nav="false" 
            data-ipad-device-dots="true" 

            data-mobile-device="1" 
            data-mobile-device-nav="false" 
            data-mobile-device-dots="false">
            <div class="testi-item">
                <div class="author-desc">                                
                    <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/quote-white.png" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                </div>
                <div class="testi-content">
                    <div class="images-wrap">
                        <img src="assets/images/testimonial/main-home/1.jpg" alt="">
                    </div>
                    <a class="name" href="#">Mariya Khan</a>
                    <span class="designation">CEO, Brick Consulting</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">                                
                    <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/quote-white.png" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                </div>
                <div class="testi-content">
                    <div class="images-wrap">
                        <img src="assets/images/testimonial/main-home/2.jpg" alt="">
                    </div>
                    <a class="name" href="#">Felando</a>
                    <span class="designation">CEO & founder</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">                                
                    <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/quote-white.png" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                </div>
                <div class="testi-content">
                    <div class="images-wrap">
                        <img src="assets/images/testimonial/main-home/3.jpg" alt="">
                    </div>
                    <a class="name" href="#">Abdul Haque</a>
                    <span class="designation">Area Manager</span>
                </div>
            </div>
            <div class="testi-item">
                <div class="author-desc">                                
                    <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/quote-white.png" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                </div>
                <div class="testi-content">
                    <div class="images-wrap">
                        <img src="assets/images/testimonial/main-home/4.jpg" alt="">
                    </div>
                    <a class="name" href="#">Sadek Tal</a>
                    <span class="designation">Project Manager</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->

            
@endsection