@extends('admin.layout')

@section('title', 'Update User')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Update  <small>User</small></h3>
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
                      <h2>List of Users</h2>
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
                                <form method="post" action="{{ route('updateUser',[$user->id] ) }}">
                                    @csrf
                                    <label for="name">User Name :</label>
                                    <input type="text" name="name" value={{"$user->name"}}><br><br>
                                    <label for="email">User Email :</label>
                                    <input type="email" name="email" value={{"$user->email"}}><br><br>
                                    <label for="email">Password :</label>
                                    <input type="password" name="password" value={{"$user->password"}}><br><br>
                                    <div class="form-group">
                                        <label for="checkbox" >Admin :</label>
                                        <input type="checkbox" name="admin"  value={{"$user->admin"}}  @checked($user->admin)>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Update">
                                </form>


                      {{-- <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $val)
                          <tr>
                            <td>{{$val->name}}</td>
                            <td>{{$val->email}}</td>
                            <td><img src="./images/edit.png" alt="Edit"></td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table> --}}

        <!-- /page content -->
@endsection
