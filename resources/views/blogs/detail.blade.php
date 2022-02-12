@extends('layouts.main')
@section('content')

<div class="breadcrumb">
    <nav style="margin-left: 20px" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
          <li class="breadcrumb-item"><a href="{{route('blogs.show', $blog->slug)}}">{{$blog->title}}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$article->title}}</li>
        </ol>
      </nav>
</div>
<!-- Blog Section Start -->
<div style="padding-top: 0px; padding-bottom: 20px" class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-last">
                <div class="widget-area">
                    <div class="search-widget mb-50">
                        <div class="search-wrap">
                            <form action="{{route('search.store')}}" method="POST">
                                @csrf
                                <input type="search" placeholder="Searching..." name="key" class="search-input" value="">
                                <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                            </form>
                            
                        </div>
                    </div>
                    <div class="recent-posts mb-50">
                        <div class="widget-title">
                            <h3 class="title">Bài viết liên quan</h3>
                        </div>
                        @foreach ($relative as $val)
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="{{route('articles.show',$val->slug)}}"><img src="{{Voyager::image($val->image)}}" alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="{{route('articles.show',$val->slug)}}">{{$val->title}}</a>
                                <span class="date">
                                    <i class="fa fa-calendar"></i>
                                    {{$val->updated_at->format('M d, Y')}}
                                </span>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pr-35 md-pr-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-details">
                            <div class="bs-img mb-35">
                                <a href="#"><img src="{{Voyager::image($article->thumbnail('cropped'))}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title">{{$article->title}}</h3>
                                <p>{{$article->desc}}</p>
                                <p >{!!$article->content!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <hr>
        <h3 class="comment-title">Comment</h3>
        @if (count($comment)>0)
            @foreach ($comment as $item)
            <div class="comment-body">
                <div class="comment-meta">
                    <span>
                        <a style="color: #0a0a0a; font-weight: 700; line-height: 22px;" href="#">{{$item->name}}</a>
                    </span>
                    <a style="font-size: 14px; color: #909090">{{$item->updated_at->format('h:m M d, Y')}}</a>
                    <p class="mb-15">
                        {{$item->content}}
                    </p>
                </div>
            </div>
            @endforeach
        @else
            <p>{{__('Không có comment nào')}}
        @endif

        <div class="comment-note">
            <form id="contact-form" method="post" action="{{route('articles.store')}}">
                @csrf

                <input type="hidden" name="article_id" value="{{$article->id}}">
                    <div class="row">
                        <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                            <input style="width: 100%; padding: 15px 20px; background-color: #F6F7F9; border: none; border-radius: 5px;" class="from-control" type="text" id="name" name="name" placeholder="Name*" required="">
                        </div> 
                        <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                            <input style="width: 100%; padding: 15px 20px; background-color: #F6F7F9; border: none; border-radius: 5px;" class="from-control" type="text" id="email" name="email" placeholder="E-Mail*" required="">
                        </div>
                        <div class="col-lg-12 mb-30">
                            <textarea style="width: 100%; padding: 15px 20px; background-color: #F6F7F9; border: none; border-radius: 5px;" class="from-control" id="message" name="content" placeholder="Your message Here" required=""></textarea>
                        </div>
                    </div>
                    <div class="btn-part">
                        <button class="readon learn-more post" type="submit">Submit</button>
                    </div> 
            </form>
        </div>
    </div>
</div>

<!-- Blog Section End -->   
@endsection

