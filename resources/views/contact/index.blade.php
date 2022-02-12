@extends('layouts.main')
@section('content')

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img3">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Liên hệ</h1>
        <ul>
            <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                <a class="active" href="index.html">Trang chủ</a>
            </li>
            <li>Liên hệ</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- Contact Section Start -->
<div class="rs-contact pt-120 md-pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 md-mb-60">
               <div class="contact-box">
                    <div class="sec-title mb-45">
                        <h2 class="title white-color">Let's Talk With Me</h2>
                    </div>
                   <div class="address-box mb-25">
                       <div class="address-icon">
                           <i class="fa fa-home"></i>
                       </div>
                       <div class="address-text">
                            <span class="label">Email:</span>
                            <a href="tel:123222-8888">{{setting('admin.email')}}</a>
                       </div>
                   </div>
                   <div class="address-box mb-25">
                       <div class="address-icon">
                           <i class="fa fa-phone"></i>
                       </div>
                       <div class="address-text">
                           <span class="label">Phone:</span>
                           <a href="#">{{setting('admin.phone')}}</a>
                       </div>
                   </div>
                   <div class="address-box">
                       <div class="address-icon">
                           <i class="fa fa-map-marker"></i>
                       </div>
                       <div class="address-text">
                           <span class="label">Address:</span>
                           <div class="desc">{{setting('admin.address')}}</div>
                       </div>
                   </div>
               </div>
            </div> 
            <div class="col-lg-8 pl-70 md-pl-15">
                <div class="contact-widget">
                   <div class="sec-title2 mb-40">
                       <h2 class="title testi-title">Liên hệ</h2>

                   </div>
                    <form id="contact-form" method="post" action="{{route('contact.store')}}">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                </div> 
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                </div>   
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                </div>   
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="website" name="website" placeholder="Your Website" required="">
                                </div>
                          
                                <div class="col-lg-12 mb-30">
                                    <textarea class="from-control" id="message" name="content" placeholder="Your message Here" required=""></textarea>
                                </div>
                            </div>
                            <div class="btn-part">                                            
                                <div class="form-group mb-0">
                                    <button class="readon learn-more submit" type="submit">Submit</button>
                                </div>
                            </div> 
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <div class="map-canvas pt-120 md-pt-80">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14840.090520585269!2d105.797626376152!3d21.585039731133083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31352738b1bf08a3%3A0x515f4860ede9e108!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAmIFRydXnhu4FuIHRow7RuZyBUaMOhaSBOZ3V5w6pu!5e0!3m2!1svi!2s!4v1642237887791!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>">
    </div> 
</div>
<!-- Contact Section Start -->
@endsection