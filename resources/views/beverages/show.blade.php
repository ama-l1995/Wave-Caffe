@extends('admin.layout')

@section('title', 'Add Beverage')

@section('content')
        <!-- page content -->

        <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Add Beverage</h3>
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
                      <h2>Add Beverage</h2>
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

                                <form method="post" action="{{route('beverStore')}}" class="w-50  m-auto">
                                    @csrf

                                   <label for="Title">Title :</label>
                                    <input type="text" class="form-control " name="Title">
                                   <br><br>
                                   <label for="Contents">Contents :</label>
                                    <textarea name="Contents" id="" class="form-control"></textarea>
                                   <br><br>
                                    <label for="Published">Published :</label>
                                    <input type="checkbox" name="Published">
                                    <br><br>
                                    <label for="Special">Special :</label>
                                    <input type="checkbox"  name="Special">
                                    <br><br>
                                    <label for="image">image :</label>
                                    <input type="file" class="form-control" name="image">
                                   <br><br>
                                   <label for="category">category :</label>
                                   <select type="file" class="form-control" name="category">
                                    <option value=" ">Select Category</option>
                                    <option value=" ">Category1</option>
                                    <option value=" ">Category2</option>

                                   </select>
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
