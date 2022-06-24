@extends("home.default")
@section("title","网站-推荐页面")
@section("first","")
@section("second","active")
@section("third","")
@section("arrow-class01","")
@section("arrow-class02","fa fa-angle-down")
@section("arrow-class03","")
@section("content")
    <section class="breadcrumb-area slider-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="breadcrumb-content">
                        <h1>欢迎来到<br>推荐页面</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-page-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                @foreach($data1 as $row)
                <div class="col-lg-8">
                    <div class="sing-blog-details-item">
                        <div class="blog-details-img">
                            <img src="{{ $row->ImagePath }}" alt="">
                        </div>
                        <div class="single-blog-details-text">
                            <ul>
                                <li><span class="style-para"><i class="fas fa-user-alt"></i>{{ $row->title }}</span></li>
                                <li><span class="style-para"><i class="fas fa-calendar-alt"></i>{{ $row->updated_at }}</span></li>
                            </ul>
                            <h2>{{ $row->description }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-posts">
                        <div class="section-heading">
                            <h3>古诗栏</h3>
                            <img src="{{ config('static.Home') }}/assets/images/shape-blue.png" alt="">
                        </div>
                        @foreach($data2 as $row)
                        <div class="single-blog-post-item">
                            <div class="single-blog-post-img">
                                <img src="{{ $row->ImagePath }}" alt="">
                                <span>{{ $row->id }}</span>
                            </div>
                            <div class="single-blog-post-content">
                                <h4>{!!$row->Content!!}</h4>
                                <p class="style-para"><i class="fas fa-user-alt"></i>{{ $row->title }}</p>
                            </div>
                        </div>
                            <br>
                        @endforeach
                        <br>
                        <div style="display: flex;justify-content: center;">
                            {{ $data2->links() }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
