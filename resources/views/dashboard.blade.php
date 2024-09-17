<x-app-layout>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
            
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="row">
                <!-- Referral Chart-->
                    <div class="col-sm-4 col-12 mb-4">
                        <div class="card">
                        <div class="card-body text-center">
                            <div class="avatar text-center ">
                                <span class="avatar-initial bg-label-warning rounded-circle"><i class="bx bx-credit-card fs-4"></i></span>
                            </div>
                            <span class="text-muted">Account Balance</span>
                            <h2 class="mb-1">{{Auth::user()->balance}} BTB</h2>
                            <a class="btn btn-warning" href="{{route('deposits.option')}}">Fund Wallet</a>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-12">
                        <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar">
                                        <span class="avatar-initial bg-label-primary rounded-circle"><i class="bx bx-dollar-circle fs-4"></i></span>
                                        </div>
                                        <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">$3,566</h5>
                                        <small class="text-muted">Total Spent</small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                    <span class="avatar-initial bg-label-warning rounded-circle"><i class="bx bx-signal-5 fs-4"></i></span>
                                    </div>
                                    <div class="card-info">
                                    <h5 class="card-title mb-0 me-2">3</h5>
                                    <small class="text-muted">Total Hacked</small>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-12">
                        <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="avatar">
                                        <span class="avatar-initial bg-label-primary rounded-circle"><i class="bx bx-mail-send fs-4"></i></span>
                                        </div>
                                        <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">38</h5>
                                        <small class="text-muted">Sent E-mails</small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                    <span class="avatar-initial bg-label-warning rounded-circle"><i class="bx bx-dollar fs-4"></i></span>
                                    </div>
                                    <div class="card-info">
                                    <h5 class="card-title mb-0 me-2">5,659</h5>
                                    <small class="text-muted">Total Deposit</small>
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


<!-- Activity -->
<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0">Activity</h5>
  </div>
  <div class="card-body">
    <ul class="p-0 m-0">
      <li class="d-flex mb-4 pb-2">
        <div class="avatar avatar-sm flex-shrink-0 me-3">
          <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-cube'></i></span>
        </div>
        <div class="d-flex flex-column w-100">
          <div class="d-flex justify-content-between mb-1">
            <span>Total Sales</span>
            <span class="text-muted">$2,459</span>
          </div>
          <div class="progress" style="height:6px;">
            <div class="progress-bar bg-primary" style="width: 40%" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </li>
      <li class="d-flex mb-4 pb-2">
        <div class="avatar avatar-sm flex-shrink-0 me-3">
          <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-dollar'></i></span>
        </div>
        <div class="d-flex flex-column w-100">
          <div class="d-flex justify-content-between mb-1">
            <span>Income</span>
            <span class="text-muted">$8,478</span>
          </div>
          <div class="progress" style="height:6px;">
            <div class="progress-bar bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </li>
      <li class="d-flex mb-4 pb-2">
        <div class="avatar avatar-sm flex-shrink-0 me-3">
          <span class="avatar-initial rounded-circle bg-label-warning"><i class='bx bx-trending-up'></i></span>
        </div>
        <div class="d-flex flex-column w-100">
          <div class="d-flex justify-content-between mb-1">
            <span>Budget</span>
            <span class="text-muted">$12,490</span>
          </div>
          <div class="progress" style="height:6px;">
            <div class="progress-bar bg-warning" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </li>
      <li class="d-flex mb-2">
        <div class="avatar avatar-sm flex-shrink-0 me-3">
          <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-check'></i></span>
        </div>
        <div class="d-flex flex-column w-100">
          <div class="d-flex justify-content-between mb-1">
            <span>Tasks</span>
            <span class="text-muted">$184</span>
          </div>
          <div class="progress" style="height:6px;">
            <div class="progress-bar bg-danger" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>
<!--/ Activity -->

<!-- Profit Report & Registration -->
<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3">
    <div class="row">
  <div class="col-12 col-sm-6 col-md-12 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <h5 class="card-title mb-0">Profit Report</h5>
      </div>
      <div class="card-body d-flex align-items-end justify-content-between">
        <div class="d-flex justify-content-between align-items-center gap-3 w-100">
          <div class="d-flex align-content-center">
            <div class="chart-report" data-color="danger" data-series="25"></div>
            <div class="chart-info">
              <h5 class="mb-0">$12k</h5>
              <small class="text-muted">2020</small>
            </div>
          </div>
          <div class="d-flex align-content-center">
            <div class="chart-report" data-color="info" data-series="50"></div>
            <div class="chart-info">
              <h5 class="mb-0">$64k</h5>
              <small class="text-muted">2021</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-12 mb-4">
    <div class="card">
      <div class="card-header pb-2">
        <h5 class="card-title mb-0">Registration</h5>
      </div>
      <div class="card-body pb-2">
        <div class="d-flex justify-content-between align-items-end gap-3">
          <div class="mb-3">
            <div class="d-flex align-content-center">
              <h5 class="mb-1">58.4k</h5>
              <i class="bx bx-chevron-up text-success"></i>
            </div>
            <small class="text-success">12.8%</small>
          </div>
          <div id="registrationsBarChart"></div>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>
<!--/ Profit Report & Registration -->

<!-- Sales -->
<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
<div class="card">
  <div class="card-header d-flex align-items-start justify-content-between">
    <div class="card-title mb-0">
      <h5 class="m-0 me-2">Sales</h5>
      <small class="card-subtitle text-muted">Calculated in last 7 days</small>
    </div>
    <div class="dropdown">
      <button class="btn p-0" type="button" id="salesReport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bx bx-dots-vertical-rounded"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesReport">
        <a class="dropdown-item" href="javascript:void(0);">Select All</a>
        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
        <a class="dropdown-item" href="javascript:void(0);">Share</a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div id="salesChart"></div>
    <ul class="p-0 m-0">
      <li class="d-flex mb-3">
        <span class="text-primary me-2"><i class='bx bx-up-arrow-alt bx-sm'></i></span>
        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
          <div class="me-2">
            <h6 class="mb-0 lh-1">Best Selling</h6>
            <small class="text-muted">Saturday</small>
          </div>
          <div class="item-progress">28.6k</div>
        </div>
      </li>
      <li class="d-flex">
        <span class="text-secondary me-2"><i class='bx bx-down-arrow-alt bx-sm'></i></span>
        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
          <div class="me-2">
            <h6 class="mb-0 lh-1">Lowest Selling</h6>
            <small class="text-muted">Thursday</small>
          </div>
          <div class="item-progress">7.9k</div>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>
<!--/ Sales -->

<!-- Growth Chart-->
<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
<div class="card">
  <div class="card-body text-center">
    <div class="dropdown mb-4">
      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        2020
      </button>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonSec">
        <a class="dropdown-item" href="javascript:void(0);">2022</a>
        <a class="dropdown-item" href="javascript:void(0);">2021</a>
        <a class="dropdown-item" href="javascript:void(0);">2020</a>
      </div>
    </div>
    <div id="growthRadialChart"></div>
    <h6 class="mb-0 mt-5"> 62% Growth in 2022</h6>
  </div>
</div>
</div>
<!-- Growth Chart-->



        </div>

    </div>
      <!-- / Content -->
</x-app-layout>
