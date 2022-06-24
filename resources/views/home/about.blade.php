@extends("home.default")
@section("title","网站-关于我们")
@section("first","")
@section("second","")
@section("third","active")
@section("arrow-class01","")
@section("arrow-class02","")
@section("arrow-class03","fa fa-angle-down")
@section("content")
    <section class="breadcrumb-area slider-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="breadcrumb-content">
                        <h1>关于我们</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us-content about-page">
                        <form class="forms-sample" method="post" action="{{route('admin.config.store')}}">
                            @csrf
                            <input type="hidden" name="name" id="name" value="siteconfig">
                            <input type="hidden" name="title" id="title" value="网站配置">
                        <div class="section-title">
                            <p class="section-title" name="Webtitle" id="Webtitle">{{ $config2?$config2->Webtitle:"" }}</p>
                            <img src="{{ config('static.Home') }}/assets/images/shape-blue.png" alt="">
                          <h3  name="keywords" id="keywords">{{ $config2?$config2->keywords:"" }}<br></h3>
                            <br>
                            <p name="Describe" id="Describe">{!! $config2?$config2->Describe:"" !!}</p>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="catagorie-icon" style="width: auto;height: auto;">
                        <img src="{{ config('static.Home') }}/assets/images/service-one-shape-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
