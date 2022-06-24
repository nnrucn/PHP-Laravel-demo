@extends("admin.default")
@section("title","首页-文章列表")
@section('content')
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">@yield('title')</h3>
        </div>
        <div class="row font-weight-bold">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                  @if ($errors ->any())
                      <div id="app1">
                          <ul>
                              @foreach ($errors ->all() as $error)
                                  <el-alert title="{{ $error }}" type="error">
                                  </el-alert>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                      {{ showFlash() }}
                  <table class="table table-condensed border">
                      <thead>
                      <tr class="text-center">
                          <th class="border">序号</th>
                          <th class="border">标题</th>
                          <th class="border">内容</th>
                          <th class="border">浏览次数</th>
                          <th class="border">发布时间</th>
                          <th class="border">操作</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        @foreach ($datas as $key=>$row)
                          <td class="text-center" scope="row">{{ $key + 1 }}</td>
                          <td class="border text-center">{{ $row->title }}</td>
                          <td class="border text-center">{!! $row->Content !!}</td>
                             <td class="border text-center">{{ $row->clicked }}</td>
                          <td class="border text-center">{{ $row->created_at }}</td>
                          <td class="border text-center">
                              <a href="{{ route("admin.news.edit",$row->id) }}" class="btn btn-xs btn-sm active btn-success" role="button">编辑</a>
                              <a href="javascript:del( {{ $row->id }} )" class="btn btn-xs btn-sm active btn-danger" role="button">删除</a>
                          </td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>

                  <!-- 分页 -->
                  <div class="md-3" style="display: flex;justify-content: center;">
                    <br>
                    {{ $datas ->links() }}
                  </div>

          </div>
        </div>
      </div>
        </div>
      </div>
      <script type="text/javascript">
          // 按钮弹窗
          function del(id) {
              let res = confirm("确定要删除?")
              if(res){
                  location.href = "/admin/news/delete/" +id;
              }
          }

      </script>
@endsection
