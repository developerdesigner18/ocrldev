@extends('layouts.admin')

@section('title','Dashboard')

@section('content')
        <div class="content-wrapper">

          <!-- <div class="row mb-4">

            <div class="col-12 d-flex align-items-center justify-content-between">

              <h4 class="page-title">Dashboard</h4>

              <div class="d-flex align-items-center">

                <div class="wrapper mr-4 d-none d-sm-block">

                  <p class="mb-0">Summary for

                    <b class="mb-0">September 2017</b>

                  </p>

                </div>

                <div class="wrapper">

                  <a href="#" class="btn btn-link btn-sm font-weight-bold">

                    <i class="icon-share-alt"></i>Export CSV</a>

                </div>

              </div>

            </div>

          </div>

          <div class="row">

            <div class="col-12 card-statistics">

              <div class="row">

                <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card card-tile">

                  <div class="card">

                    <div class="card-body">

                      <div class="d-flex justify-content-between pb-2">

                        <h5>Todays Income</h5>

                        <i class="icon-docs"></i>

                      </div>

                      <div class="d-flex justify-content-between">

                        <p class="text-muted">Avg. Session</p>

                        <p class="text-muted">max: 40</p>

                      </div>

                      <div class="progress progress-md">

                        <div class="progress-bar bg-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                      </div>

                    </div>

                  </div>

                </div>

                <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card card-tile">

                  <div class="card">

                    <div class="card-body">

                      <div class="d-flex justify-content-between pb-2">

                        <h5>Total Revenue</h5>

                        <i class="icon-pie-chart"></i>

                      </div>

                      <div class="d-flex justify-content-between">

                        <p class="text-muted">Avg. Session</p>

                        <p class="text-muted">max: 120</p>

                      </div>

                      <div class="progress progress-md">

                        <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                      </div>

                    </div>

                  </div>

                </div>

                <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card card-tile">

                  <div class="card">

                    <div class="card-body">

                      <div class="d-flex justify-content-between pb-2">

                        <h5>Pending Product</h5>

                        <i class="icon-wallet"></i>

                      </div>

                      <div class="d-flex justify-content-between">

                        <p class="text-muted">Avg. Session</p>

                        <p class="text-muted">max: 54</p>

                      </div>

                      <div class="progress progress-md">

                        <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                      </div>

                    </div>

                  </div>

                </div>

                <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card card-tile">

                  <div class="card">

                    <div class="card-body">

                      <div class="d-flex justify-content-between pb-2">

                        <h5>Sales</h5>

                        <i class="icon-screen-desktop"></i>

                      </div>

                      <div class="d-flex justify-content-between">

                        <p class="text-muted">Avg. Session</p>

                        <p class="text-muted">max: 143</p>

                      </div>

                      <div class="progress progress-md">

                        <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="row">

            <div class="col-md-5 grid-margin stretch-card">

              <div class="card">

                <div class="card-body">

                  <h6 class="card-title">Total Revenue</h6>

                  <div class="w-75 mx-auto mt-4">

                    <div class="d-flex justify-content-between text-center mb-2">

                      <div class="wrapper">

                        <h4>6,256</h4>

                        <small class="text-muted">Total sales</small>

                      </div>

                      <div class="wrapper">

                        <h4>8569</h4>

                        <small class="text-muted">Open Campaign</small>

                      </div>

                    </div>

                  </div>

                  <div id="morris-line-example"></div>

                </div>

              </div>

            </div>

            <div class="col-md-7 grid-margin stretch-card">

              <div class="card">

                <div class="card-body">

                  <div class="d-flex align-items-center justify-content-between pb-4">

                    <h4 class="card-title mb-0">Email Campaign</h4>

                    <p class="mb-0">Last 6 day

                      <i class="mdi mdi-chevron-down"></i>

                    </p>

                  </div>

                  <div class="row">

                    <div class="col-sm-6 grid-margin stretch-card">

                      <div class="card">

                        <div class="card-body">

                          <div class="d-flex">

                            <div class="inner flex-grow">

                              <p class="mb-0">New orders</p>

                              <h4 class="font-weight-bold">16543</h4>

                            </div>

                            <div class="inner d-flex align-items-center">

                              <h1 class="text-primary font-weight-bold">13%</h1>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                    <div class="col-sm-6 grid-margin stretch-card">

                      <div class="card">

                        <div class="card-body">

                          <div class="d-flex">

                            <div class="inner flex-grow">

                              <p class="mb-0">New Users</p>

                              <h4 class="font-weight-bold">26458</h4>

                            </div>

                            <div class="inner d-flex align-items-center">

                              <h1 class="text-info font-weight-bold">64%</h1>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                    <div class="col-sm-6 grid-margin-sm-down stretch-card">

                      <div class="card">

                        <div class="card-body">

                          <div class="d-flex">

                            <div class="inner flex-grow">

                              <p class="mb-0">Bounced</p>

                              <h4 class="font-weight-bold">2398</h4>

                            </div>

                            <div class="inner d-flex align-items-center">

                              <h1 class="text-danger font-weight-bold">24%</h1>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                    <div class="col-sm-6 grid-margin-sm-down stretch-card">

                      <div class="card">

                        <div class="card-body">

                          <div class="d-flex">

                            <div class="inner flex-grow">

                              <p class="mb-0">Unique Visitors</p>

                              <h4 class="font-weight-bold">12790</h4>

                            </div>

                            <div class="inner d-flex align-items-center">

                              <h1 class="text-success font-weight-bold">30%</h1>

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

          <div class="row">

            <div class="col-md-5 grid-margin stretch-card">

              <div class="card">

                <div class="card-body">

                  <div class="d-flex justify-content-between">

                    <h4 class="card-title">Sales Status</h4>

                    <p class="text-muted d-none d-md-block">29-May-2018, 11.00 AM</p>

                  </div>

                  <div class="chart-container">

                    <canvas class="mt-4" id="sales-status" height="150"></canvas>

                    <div id="sales-status-legend" class="legend-con mt-4 mb-0"></div>

                  </div>

                </div>

              </div>

            </div>

            <div class="col-md-7 grid-margin stretch-card">

              <div class="card">

                <div class="card-body">

                  <h4 class="card-title">Total Sales By Products</h4>

                  <div class="d-flex justify-content-between pb-4">

                    <p class="card-description mb-0 d-none d-sm-block">Activity from 4 Jan 2017 to 10 Jan 2017</p>

                    <div id="product-sales-legend"></div>

                  </div>

                  <canvas id="product-sales" height="150"></canvas>

                </div>

              </div>

            </div>

          </div>

          <div class="row">

            <div class="col-md-4 grid-margin stretch-card">

              <div class="card dashboard-news-card">

                <div class="card-body d-flex flex-column">

                  <div class="d-flex justify-content-between pb-4">

                    <h4 class="card-title text-white mb-0">News</h4>

                    <i class="icon-reload text-white"></i>

                  </div>

                  <div class="text-white mt-auto">

                    <div class="wrapper">

                      <h4 class="border-bottom">The Idea Of God Is Not Henceforth Relevant</h4>

                      <p>Vivamus suscipit tortor eget felis porttitor volutpat.</p>

                      <a class="text-small text-white font-weight-bold" href="#">READ MORE</a>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="col-md-4 grid-margin stretch-card">

              <div class="card">

                <div class="card-body">

                  <div class="d-flex justify-content-between">

                    <h4 class="card-title">Activity</h4>

                  </div>

                  <p class="card-description">What're people doing right now</p>

                  <div class="list d-flex align-items-center border-bottom py-3">

                    <img class="img-sm rounded-circle" src="https://www.placehold.it/43x43" alt="">

                    <div class="wrapper w-100 ml-3">

                      <p class="mb-0">

                        <b>Dobrick </b>posted in Material</p>

                      <div class="d-flex justify-content-between align-items-center">

                        <div class="d-flex align-items-center">

                          <p class="mb-0">That's awesome!</p>

                        </div>

                        <small class="text-muted ml-auto">2 hours ago</small>

                      </div>

                    </div>

                  </div>

                  <div class="list d-flex align-items-center border-bottom py-3">

                    <img class="img-sm rounded-circle" src="https://www.placehold.it/43x43" alt="">

                    <div class="wrapper w-100 ml-3">

                      <p class="mb-0">

                        <b>Stella </b>posted in Material</p>

                      <div class="d-flex justify-content-between align-items-center">

                        <div class="d-flex align-items-center">

                          <p class="mb-0">That's awesome!</p>

                        </div>

                        <small class="text-muted ml-auto">3 hours ago</small>

                      </div>

                    </div>

                  </div>

                  <div class="list d-flex align-items-center border-bottom py-3">

                    <img class="img-sm rounded-circle" src="https://www.placehold.it/43x43" alt="">

                    <div class="wrapper w-100 ml-3">

                      <p class="mb-0">

                        <b>Peter </b>posted in Material</p>

                      <div class="d-flex justify-content-between align-items-center">

                        <div class="d-flex align-items-center">

                          <p class="mb-0">That's Great!</p>

                        </div>

                        <small class="text-muted ml-auto">1 hours ago</small>

                      </div>

                    </div>

                  </div>

                  <div class="list d-flex align-items-center pt-3">

                    <img class="img-sm rounded-circle" src="https://www.placehold.it/43x43" alt="">

                    <div class="wrapper w-100 ml-3">

                      <p class="mb-0">

                        <b>Natalia </b>posted in Material</p>

                      <div class="d-flex justify-content-between align-items-center">

                        <div class="d-flex align-items-center">

                          <p class="mb-0">That's awesome!</p>

                        </div>

                        <small class="text-muted ml-auto">1 hours ago</small>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="col-md-4 grid-margin stretch-card">

              <div class="card">

                <div class="card-body d-flex flex-column">

                  <h4 class="card-title">Sales Chart</h4>

                  <p class="card-description">Based on last month analytics.</p>

                  <div class="mt-auto" id="dashboard-sales-chart"></div>

                </div>

              </div>

            </div>

          </div> -->
</div>

        <!-- content-wrapper ends -->

        <!-- partial:partials/_footer.html -->

@endsection
