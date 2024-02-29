@extends('admin.layout')

@section('title', 'Add Catgory')

@section('content')
        <!-- page content -->

        <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Add Category</h3>
                </div>

                <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Add Category</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Settings 1</a>
                              <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                              <div class="card-box table-responsive">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                        @php
                                            Session::forget('success')
                                            // $request->session()->forget('success');
                                        @endphp
                                        </div>
                                @endif
                                <form method="post" action="{{route('catStore')}}">
                                    @csrf
                                    <label for="name">Category Name :</label>
                                    <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name">
                                    @error('category_name')
                                        <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    <br><br>
                                    <input type="submit" class="btn btn-primary " value="Add"><br><br>
                                </form>
                    </div>
                    </div>
                </div>
              </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /page content -->
@endsection
