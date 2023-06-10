@extends('layouts.main')
@section('title')
    Stages
@endsection
@section('content')
    <!-- main-panel -->
    <div class="main-panel" style="width: 100% !important;">
        <div class="content-wrapper">

            <div class="row">

                <div class="col-sm-12">
                    <div class="home-tab">

                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                                <div class="row">
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>

                                                <p>New Projects</p>
                                            </div>
                                            <div class="icon">
                                                <i class="mdi mdi-new-box"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3>53</h3>

                                                <p>New Update</p>
                                            </div>
                                            <div class="icon">
                                                <i class="mdi mdi-chart-bar"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-4 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3>44</h3>

                                                <p>Revamping</p>
                                            </div>
                                            <div class="icon">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <!--                      <div class="col-lg-3 col-6">-->
                                    <!--                        &lt;!&ndash; small box &ndash;&gt;-->
                                    <!--                        <div class="small-box bg-danger">-->
                                    <!--                          <div class="inner">-->
                                    <!--                            <h3>65</h3>-->

                                    <!--                            <p></p>-->
                                    <!--                          </div>-->
                                    <!--                          <div class="icon">-->
                                    <!--                            <i class="mdi mdi-chart-pie"></i>-->
                                    <!--                          </div>-->
                                    <!--                          <a href="#" class="small-box-footer">More info <i-->
                                    <!--                                  class="fas fa-arrow-circle-right"></i></a>-->
                                    <!--                        </div>-->
                                    <!--                      </div>-->
                                    <!-- ./col -->
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex flex-column">


                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h4 class="card-title card-title-dash">Projects</h4>
                                                            </div>

                                                        </div>
                                                        <div class="table-responsive  mt-1">
                                                            <table class="table select-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Project Name</th>
                                                                        <th>Analysis</th>
                                                                        <th>Documentation</th>
                                                                        <th>Development</th>
                                                                        <th>Enhancement</th>
                                                                        <th>Testing</th>
                                                                        <th>UAT</th>
                                                                        <th>Completed</th>
                                                                        <th>Published</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <td>
                                                                            <div class="d-flex ">
                                                                                <div>
                                                                                    <h6>Brandon Washington</h6>
                                                                                    <p>New Project</p>

                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <i class="mdi mdi-check"
                                                                                style="color: green ;font-size: 20px;"></i>
                                                                        </td>
                                                                        <td>
                                                                            <i class="mdi mdi-close"
                                                                                style="color: red;font-size: 20px;"></i>
                                                                        </td>

                                                                        <td>
                                                                            <i class="mdi mdi-close"
                                                                                style="color: red;font-size: 20px;"></i>
                                                                        </td>

                                                                        <td>
                                                                            <i class="mdi mdi-close"
                                                                                style="color: red;font-size: 20px;"></i>
                                                                        </td>

                                                                        <td>
                                                                            <i class="mdi mdi-close"
                                                                                style="color: red;font-size: 20px;"></i>
                                                                        </td>

                                                                        <td>
                                                                            <i class="mdi mdi-close"
                                                                                style="color: red;font-size: 20px;"></i>
                                                                        </td>

                                                                        <td>
                                                                            <i class="mdi mdi-close"
                                                                                style="color: red;font-size: 20px;"></i>
                                                                        </td>

                                                                        <td>
                                                                            <i class="mdi mdi-close"
                                                                                style="color: red;font-size: 20px;"></i>
                                                                        </td>


                                                                    </tr>

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
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!--        <footer class="footer">-->
        <!--          <div class="d-sm-flex justify-content-center justify-content-sm-between">-->
        <!--            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>-->
        <!--            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>-->
        <!--          </div>-->
        <!--        </footer>-->
        <!-- partial -->
    </div>

    <!-- js -->
@endsection
@section('scripts')
    <script></script>
@endsection
