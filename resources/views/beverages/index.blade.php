@extends('admin.layout')

@section('title', 'Beverages List')

@section('content')
        <!-- page content -->

        <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Manage Beverages</h3>
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
                      <h2>List of Beverages</h2>
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
                      <table id="datatable" class="text-center table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Price</th>
                            {{-- <th>Content</th> --}}
                            <th>image</th>
                            <th>Published</th>
                            <th>Special</th>
                            <th>category_id</th>
                            {{-- <th>Users Berverage</th> --}}
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($beverages as $val)
                          <tr>
                            <td>{{$val->Title}}</td>
                            <td>{{$val->Price}}</td>
                            {{-- <td>{{$val->Content}}</td> --}}
                            <td>{{$val->image}}</td>
                            <td>
                                @if($val->Published)
                                    Yes
                                @else
                                    No
                                @endif
                            </td>
                            <td>
                                @if($val->Special)
                                    Yes
                                @else
                                    No
                                @endif
                            </td>
                            <td>{{$val->category_id}}</td>
                            {{-- <td><a href="/user_beverages/{{$val->id}}">Show User</td> --}}
                            <td><a href="/editBever/{{$val->id}}"><img src="./images/edit.png" alt="Edit"></a></td>
                            <td><a href="/deleteBever/{{$val->id}}">Delete</a></td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
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