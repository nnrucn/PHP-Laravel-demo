<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ config('static.Admin') }}/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ config('static.Admin') }}/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="{{ config('static.Admin') }}/css/style.css">
  <link rel="shortcut icon" href="{{ config('static.Admin') }}/images/favicon.png">
{{ BootstrapCDN() }}
<script src="https://unpkg.com/vue@next"></script>
<script src="https://unpkg.com/element-plus/dist/index.full.js"></script>
<link rel="stylesheet" href="https://unpkg.com/element-plus/dist/index.css">
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('admin.index') }}"><img src="{{ config('static.Admin') }}/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('admin.index')}}"><img src="{{ config('static.Admin') }}/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="{{ config('static.Admin') }}/images/faces/face1.jpg" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
{{--                  {{ Auth::user()->name }}  获取登录名--}}
                <p class="mb-1 text-black"><b>{{ Auth()->user()->name }}</b>
                <br>
                <?php
                $dt = new DateTime();
                echo $dt->format('Y-m-d H:i:s');
                ?>
                </p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/admin/logout">
                <i class="mdi mdi-logout mr-2 text-primary"></i>退出登录</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="{{ config('static.Admin') }}/images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">{{ Auth()->user()->name }}</span>
              </div>
            </a>
          </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                    <span class="menu-title">网站</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
                <div class="collapse" id="general-pages">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('home.index') }}">前端网站</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.index') }}">后台首页</a></li>
                    </ul>
                </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">系统配置</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-settings menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.config.siteconfig') }}">网站配置</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.config.Information') }}">基本信息</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#article" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">文章管理</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-settings-box menu-icon"></i>
            </a>
            <div class="collapse" id="article">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.news.index') }}">首页-文章列表</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.news.create') }}">首页-文章添加</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.essay.index') }}">推荐页-文章列表</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.essay.create') }}">推荐页-文章添加</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
      <div class="content-wrapper">
        @yield('content')
      </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 All rights reserved.</span>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="{{ config('static.Admin') }}/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{ config('static.Admin') }}/vendors/js/vendor.bundle.addons.js"></script>
  <script src="{{ config('static.Admin') }}/js/off-canvas.js"></script>
  <script src="{{ config('static.Admin') }}/js/misc.js"></script>
  <script src="{{ config('static.Admin') }}/js/dashboard.js"></script>
  <script src="{{ config('static.Admin') }}/js/file-upload.js"></script>
  <script src="{{ config('static.Admin') }}/vendors/js/vendor.bundle.base.js"></script>
</body>
</html>
