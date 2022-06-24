@extends("home.default")
@section("title","网站-首页")
@section("first","active")
@section("second","")
@section("third","")
@section("arrow-class01","fa fa-angle-down")
@section("arrow-class02","")
@section("arrow-class03","")
@section("content")
    <section class="slider-area">
        <div class="slider-carousel-active">
            <div class="single-slider-item slider-bg-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="slider-content">
                                <h1>
                                        @csrf
                                    {{ css1() }}
                                        <div name="Class" id="Class">{{ $config?$config->Class:"" }}</div>
                                        <div name="StudentName" id="StudentName">{{ $config?$config->StudentName:"" }}</div>
                                        <div name="StudentID" id="StudentID">{{ $config?$config->StudentID:"" }}</div>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item slider-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="slider-content">
                                <h1>
                                    @csrf
                                    {{ css1() }}
                                        <div name="Class" id="Class">{{ $config?$config->Class:"" }}</div>
                                        <div name="StudentName" id="StudentName">{{ $config?$config->StudentName:"" }}</div>
                                        <div name="StudentID" id="StudentID">{{ $config?$config->StudentID:"" }}</div>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item slider-bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="slider-content">
                                <h1>
                                @csrf
                                    {{ css1() }}
                                        <div name="Class" id="Class">{{ $config?$config->Class:"" }}</div>
                                        <div name="StudentName" id="StudentName">{{ $config?$config->StudentName:"" }}</div>
                                        <div name="StudentID" id="StudentID">{{ $config?$config->StudentID:"" }}</div>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-area pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center mb-70">
                    <div class="section-title">
                        <br>
                        <h1>
                            古诗词欣赏
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($news as $row)
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="single-blog-content">
                        <div class="single-blog-img">
                            <a href="{{ route("home.indexDetail",$row->id) }}">
                            <img src="{{ $row->ImagePath }}" alt="">
                            </a>
                        </div>
                        <div class="single-blog-details">
                            <a href="{{ route("home.indexDetail",$row->id) }}">
                            <p class="section-title">
                                阅读量:{{ $row->clicked }}
                            </p>
                            <img src="{{ config('static.Home') }}/assets/images/shape-blue.png" alt="">
                            </a>
                            <a href="{{ route("home.indexDetail",$row->id) }}">
                            <h3>
                                {!!$row->Content!!}
                            </h3>
                            </a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <br>
            <div style="display: flex;justify-content: center;">
                {{ $news->links() }}
            </div>
        </div>
    </section>
    <script src="{{ config('static.Home') }}/assets/js/timejs/jquery-1.8.3.js"></script>
@endsection
