<!DOCTYPE html>
<html lang="en">
    <head>
    @include('template.header')
    </head>
<body>
        <!-- Navbar -->
        @include('template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('template.left-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <br>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Primary Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Warning Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Success Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Danger Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Table
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:13%">Title</th>
                                        <th class="text-center" style="width:60%">Description </th>
                                        <th class="text-center">Attachment</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Attachment</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet blandit velit sed malesuada.</td>
                                        <td>-</td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                              <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                              </li>
                                              <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                              </li>
                                            </ul>
                                          </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
                <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('template.footer')

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('template.script')
</body>
</html>

