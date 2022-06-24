@extends("admin.default")
@section("title","网站配置")
@section('content')
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">@yield('title')</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.config.siteconfig') }}">@yield('title')</a>
              </li>
              <li aria-current="page" class="breadcrumb-item active">
                <a  class="text-dark"  href="{{ route('admin.config.Information') }}">基本信息配置</a>
              </li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
              @if ($errors ->any())
              <div class="bg-gradient-info alert">
              <ul>
                  @foreach ($errors ->all() as $error)
                  <li class="font-weight-bold" style="list-style:decimal;">{{ $error }}
                  </li>
                  @endforeach
              </ul>
              </div>
              @endif
                  {{ showFlash() }}
                <form class="forms-sample" method="post" action="{{route('admin.config.store')}}">
                  @csrf
                  <input type="hidden" name="name" id="name" value="siteconfig">
                  <input type="hidden" name="title" id="title" value="网站配置">
                  <div class="form-group">

                    <label for="title">网站标题</label>
                    <input type="text" class="form-control" name="Webtitle" id="Webtitle" placeholder="请输入网站标题" value="{{ $config?$config->Webtitle:"" }}">
                  </div>
                  <div class="form-group">
                    <label for="keywords">网站关键字</label>
                    <input type="text" class="form-control" name="keywords" id="keywords" placeholder="请输入网站关键字" value="{{ $config?$config->keywords:"" }}">
                  </div>
                  <div class="form-group">
                    <label for="Describe">网站描述</label>
                    <textarea class="form-control" name="Describe" id="Describe" rows="4" placeholder="请输入网站描述">{{ $config?$config->Describe:"" }}</textarea>
                  </div>
                  <button type="submit" class="btn btn-success mr-2">提交</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
