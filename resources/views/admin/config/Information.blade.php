@extends("admin.default")
@section("title","基本信息配置")
@section('content')
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">@yield('title')</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.config.Information') }}">@yield('title')</a>
              </li>
                <li aria-current="page" class="breadcrumb-item active">
                  <a  class="text-dark" href="{{ route('admin.config.siteconfig') }}">网站配置</a>
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
                  <input type="hidden" name="name" id="name" value="Information">
                  <input type="hidden" name="title" id="title" value="基本配置">
                  <div class="form-group">
                    <label for="title">班级</label>
                    <input type="text" class="form-control" name="Class" id="Class" placeholder="班级名称" value="{{ $config?$config->Class:"" }}">
                  </div>
                  <div class="form-group">
                    <label for="keywords">姓名</label>
                    <input type="text" class="form-control" name="StudentName" id="StudentName" placeholder="姓名" value="{{ $config?$config->StudentName:"" }}">
                  </div>
                  <div class="form-group">
                    <label for="Describe">学号:</label>
                      <input type="text" class="form-control" name="StudentID" id="StudentID" placeholder="学号:" value="{{ $config?$config->StudentID:"" }}">
                  </div>
                  <button type="submit" class="btn btn-success mr-2">提交</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
