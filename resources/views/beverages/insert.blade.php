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

                                <form method="post" action="{{route('beverStore')}}" class="w-50  m-auto" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Title">Title :</label>
                                        <input type="text" class="form-control @error('Title') is-invalid @enderror" name="Title" value="{{ old('Title') }}">
                                        @error('Title')
                                        <div class="alert alert-warning">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="Price">Price :</label>
                                        <input type="number" class="form-control  @error('Price') is-invalid @enderror" name="Price" value="{{ old('price') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="Content">Content :</label>
                                         <textarea name="Content" id="" class="form-control"></textarea>
                                    </div>

                                   <br><br>
                                   <div class="form-group">
                                        <label for="Published">Published :</label>
                                        <input type="checkbox" name="Published" >
                                   </div>
                                   <div class="form-group">
                                        <label for="Special">Special :</label>
                                        <input type="checkbox"  name="Special">
                                    </div>
                               <div class="form-group">
                                    <label for="image">image :</label>
                                    <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" id="image">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category">category :</label>
                                    <select type="file" class="form-control" name="category_id">
                                    <option value=" ">Select Category</option>
                                    @foreach($categories as $val)
                                        <option value="{{ $val->id }}">{{ $val->category_name }}</option>
                                    @endforeach
                                </select>
                                </div>
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
