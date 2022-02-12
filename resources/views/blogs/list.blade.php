 @extends('layouts.main')
 @section('content')

 <div class="breadcrumb">
    <nav style="margin-left: 30px" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
        </ol>
      </nav>
</div>

 <!-- Blog Section Start -->

    <div class="container">
        <div class="row">
            <div style=" margin-left: 15px; font-size: 18px; text-align: left; text-decoration: underline;" class="col-lg-4 col-md-12 order-last">
                @if (count($blog->child) > 0)
                @foreach ($blog->child as $child)
                    <a style="margin-right: 15px" href="{{route('blogs.show',$child->slug)}}">{{$child->title}}</a>
                @endforeach
                @else
                    {{-- <p>{{__('Không có danh mục nào')}}</p> --}}
                @endif
            </div>
        </div>
    </div>

 <div style="padding-top: 12px; padding-bottom: 0px" class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
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
                            <h3 class="title">Bài viết nổi bật</h3>
                        </div>
                        @foreach ($popular as $val)
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
                    <div class="col-lg-12 mb-50">
                        @if (count($article) > 0)
                            @foreach ($article as $article)
                                {{-- @dd($blog) --}}
                        <div class="blog-item">
                            <div class="blog-img">
                                <a style="align-item: center" href="{{route('articles.show',$article->slug)}}"><img src="{{Voyager::image($article->thumbnail('cropped'))}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="{{route('articles.show',$article->slug)}}">{{$article->title}}</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> {{$article->updated_at->format('M d, Y')}}                                                        
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> admin  
                                            </div>
                                        </li> 
                                    </ul>
                                </div>
                                <div class="blog-desc">   
                                    <p>{{$article->desc}}</p>
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="{{route('articles.show',$article->slug)}}">Continue Reading</a>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        @else
                            <p style="text-align: center">{{__('Không có bài viết nào')}}</p>
                        @endif

                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- Blog Section End --> 
@endsection