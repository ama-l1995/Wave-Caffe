@extends('admin.layout')

@section('title', 'Update Beverage')

@section('content')
        <!-- page content -->

        <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Update Beverage</h3>
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
                                <form method="post" action="{{route('updateBever',[$bever->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label for="Title">Title :</label>
                                        <input type="text" name="Title" class="form-control" value={{"$bever->Title"}}>
                                        @error('Title')
                                        <div class="alert alert-warning">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Price">Price :</label>
                                        <input type="text" name="Price" class="form-control" value={{"$bever->Price"}}>
                                        @error('Price')
                                        <div class="alert alert-warning">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">image :</label>
                                        <input type="file" class="form-control" name="image" id="image" value="{{ old('image') }}">
                                        <img src="{{asset('asset/img/'.$bever->image)}}" alt="cars" style="width:150px;">
                                        @error('image')
                                        <div class="alert alert-warning">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="category">category :</label>
                                        <select type="file" class="form-control" name="category_id">
                                        <option value=" ">Select Category</option>
                                        @foreach($categories as $val)
                                            <option value="{{ $val->id }}" @selected( $val->id == $bever->category_id)>{{ $val->category_name }}</option>
                                        @endforeach
                                    </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="checkbox" >Published :</label>
                                        <input type="checkbox" name="Published"  value={{"$bever->Published"}}  @checked($bever->Published)>
                                    </div>
                                    <div class="form-group">
                                        <label for="Special">Special :</label>
                                        <input type="checkbox"  name="Special" value={{"$bever->Special"}}  @checked($bever->Special)>
                                    </div>
                                        <input type="submit" class="btn btn-primary " value="Update">
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
