@extends('layouts.main')
@section('content')

<div style="padding-top: 12px; padding-bottom: 0px" class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
    <div class="container">
                    <div  style="display: flex" class="col-lg-12 mb-50">
                        @if (count($article) > 0)
                            @foreach ($article as $article)
                                {{-- @dd($blog) --}}
                        <div class="blog-item col-4">
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
@endsection