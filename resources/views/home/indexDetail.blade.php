@extends("home.default")
@section("title","网站-首页详情页")
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
        </div>
    </section>
    <section class="blog-page-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                    <div class="col-lg-8">
                        <div class="sing-blog-details-item">
                            <div class="blog-details-img">
                                <img src="{{ $datas->ImagePath }}" alt="">
                            </div>
                            <div class="single-blog-details-text">
                                <ul>
                                    <li><span class="style-para"><i class="fas fa-user-alt"></i>{{ $datas->title }}</span></li>
                                    <li><span class="style-para"><i class="fas fa-calendar-alt"></i>{{ $datas ->updated_at }}</span></li>
                                </ul>
                                <h2>{!! $datas->Content !!} </h2>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
