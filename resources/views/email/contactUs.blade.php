@extends('admin.layout')

@section('title', 'Messages')

@section('content')
        <!-- page content -->

        <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Manage Messages</h3>
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
                      <h2>List of Messages</h2>
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

                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td class="container">
                                        <div class="content">

                                          <!-- START CENTERED WHITE CONTAINER -->
                                          <span class="preheader"></span>
                                          <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="main">

                                            <!-- START MAIN CONTENT AREA -->
                                            <tr>
                                              <td class="wrapper">
                                                <p>{{ $content['full_name'] }}</p>
                                                <p>{{ $content['email'] }}</p>
                                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                                                  <tbody>
                                                    <tr>
                                                      <td align="left">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                          <tbody>
                                                            <tr>
                                                              <td> <a href="http://htmlemail.io" target="_blank">Call To Action</a> </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                                <p>{{ $content['content'] }}</p>
                                                <p>Good luck! Hope it works.</p>
                                              </td>
                                            </tr>

                                            <!-- END MAIN CONTENT AREA -->
                                            </table>



                    {{-- <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Show</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($content as $val)
                          <tr>
                            <td>{{$val->full_name}}</td>
                            <td>{{$val->email}}</td>
                            <td><img src="./images/edit.png" alt="Edit"></td>
                            <td><img src="./images/delete.png" alt="Delete"></td>
                          </tr>

                          @endforeach

                        </tbody>
                      </table> --}}
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
