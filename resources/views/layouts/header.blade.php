@php
    $menu = menu('header',"_json");
@endphp

<div class="full-width-header">
    <header id="rs-header" class="rs-header">
        <!-- Topbar Area Start -->
        <div class="topbar-area">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-2">
                        <div class="logo-part">
                            <a href="{{route('home')}}"><h5>Nguyen Quang Linh</h5></a>
                        </div>
                    </div>
                    <div class="col-lg-10 text-right">
                        <ul class="rs-contact-info">
                            <li class="contact-part">
                                <i class="flaticon-location"></i>
                                <span class="contact-info">
                                    <span>Address</span>
                                    {{setting('admin.address')}}
                                </span>
                            </li>
                            <li class="contact-part">
                                <i class="flaticon-email"></i>
                                <span class="contact-info">
                                    <span>E-mail</span>
                                    <a href="#">{{setting('admin.email')}}</a>
                                </span>
                            </li>
                            <li class="contact-part no-border">
                                <i class="flaticon-call"></i>
                                <span class="contact-info">
                                    <span>Phone</span>
                                    (+84){{setting('admin.phone')}}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar Area End -->
        
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="logo-area">
                    <a href="index.html">
                        <img class="sticky-logo" src="{{asset('assets/images/logo-dark.png')}}" alt="logo">
                    </a>
                </div>
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <div class="mobile-menu">
                            <a href="index.html" class="mobile-logo">
                                <img src="{{asset('assets/images/logo-light.png')}}" alt="logo">
                            </a>
                            <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                @foreach ($menu as $item)
                                <li class="@if(count($item->children)>0) has-children @endif"> 
                                    <a href="{{asset($item->url)}}">{{$item->title}}</a>
                                    
                                    @if(count($item->children)>0)
                                    <ul class="sub-menu">
                                        @foreach ($item->children as $children)
                                            <li><a href="{{asset($children->url)}}">{{$children->title}}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul> <!-- //.nav-menu -->
                        </nav>                                        
                    </div> <!-- //.main-menu -->                                
                </div>
                <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                                <form style="display: flex" method="POST" action="{{route('search.store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <input style="margin-top: 17px " type="text" class="form-control" placeholder="Search" name="key">
                                    </div>
                                    <button style="margin-top: 14px; margin-bottom: 14px" type="submit" class="btn btn-primary">
                                        <i class="flaticon-search"></i>
                                    </button>
                                </form>
                        
                    @if (Auth::check())              
                            <!-- Settings Dropdown -->
                            <div class="toolbar-sl-share">
                                <ul class="social">
                                    <li><a >{{ Auth::user()->name }}</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"  style="color: yellow"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                    @else
                    {{-- neu chua dang nhap==>hien cai nay --}}
                    <div class="toolbar-sl-share">
                        <ul class="social">
                            <li><a href="{{route('login')}}">Đăng nhập</a></li>
                            <li><a style="color: yellow" href="{{route('register')}}">Đăng kí</a></li>
                        </ul>
                    </div>
                    {{-- neu da dang nhap --}}
                    @endif
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
</div>