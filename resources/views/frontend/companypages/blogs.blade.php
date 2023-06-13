@extends('frontend.layouts.main')
@section('tittle')
<title>Blogs</title>
@endsection
@section('content')
<!-- Slider Start -->
<section class="banner-blogs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
            </div>
            <div class="col-lg-6 col-md-12 headline_text">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <h1 class="mb-4 mt-3 "><span class="main_title blue_text">Blog Posts</span></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section how_it_works">
    <div class="container">
        <div class="title_h1 text-center"></div>
        <h1 class="mb-5 mt-3 text-center"><span class="second_title">
            <span class="blue_text">Blog </span>
            <span class="green_text">Posts</span>
        </span></h1>
        @foreach($data as $key=>$r)
        @php
            $number = $key+1;
            if($number % 2 == 0){
                $rowline = 'even';
            }
            else{
                $rowline = 'odd';
            }
        @endphp

        @if($rowline == 'odd')
        <div class="row">
            <div class="col-lg-6 col-md-12 pr-5">
                <div class="block pt-5  text-center">
                    <img src="{{ url('public/images') }}/{{ $r->image }}" class="img-fluid blog_image"><br>
                    <div class="blog_date">{{ Cmf::date_format($r->created_at) }}</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row how_works pt-5">
                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="title_h1">
                            <span class="blue_text">{{ $r->title }}</span>
                        </div>
                        @php
                         $blog_text = strip_tags($r->content);
                        @endphp
                        <p class="mb-4 text-justify">
                            <span>{{ \Illuminate\Support\Str::limit($blog_text, 500, $end='') }}</span>
                            <span class="green_text">Continue Reading ... </span>
                        </p>
 
                    </div>
                    <div class="clearfix"></div>
                    <a href="{{ url('blog') }}/{{ $r->url}}" class="blog_button">See Full Article</a>
                </div>
            </div>
        </div>
        @else
        <div class="row mt-5 pt-5 container-fluid">
            <div class="col-lg-6 col-md-12 pr-5 d-lg-none">
                <div class="block pt-5  text-center">
                    <img src="{{ url('public/images') }}/{{ $r->image }}" class="img-fluid blog_image"><br>
                    <div class="blog_date">{{ Cmf::date_format($r->created_at) }}</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row how_works pt-5">
                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="title_h1">
                            <span class="blue_text">{{ $r->title }}</span>
                        </div>
                        @php
                         $blog_text = strip_tags($r->content);
                        @endphp
                        <p class="mb-4 text-justify">
                            <span>{{ \Illuminate\Support\Str::limit($blog_text, 500, $end='') }}</span>
                            <span class="green_text">Continue Reading ... </span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <a href="{{ url('blog') }}/{{ $r->url}}" class="blog_button">See Full Article</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 pr-5 d-none d-lg-block">
                <div class="block pt-5  text-center">
                    <img src="{{ url('public/images') }}/{{ $r->image }}" class="img-fluid blog_image"><br>
                    <div class="blog_date">{{ Cmf::date_format($r->created_at) }}</div>
                </div>
            </div>
        </div>
        @endif

        @endforeach
        <div class="row mt-5 pt-5 container">
            {!! $data->links('frontend.pagination') !!}
        </div>
    </div>
</section>
@endsection