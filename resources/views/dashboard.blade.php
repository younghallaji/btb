<x-app-layout>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
            
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="row">
                <!-- Referral Chart-->
                    <div class="col-sm-4 col-12 mb-4 text-center">
                        <div class="card text-center">
                        <div class="card-body text-center">
                            <div class="avatar text-center ">
                                <span class="avatar-initial bg-label-warning rounded-circle"><i class="bx bx-credit-card fs-4"></i></span>
                            </div>
                            <span class="text-muted">Account Balance</span>
                            <h2 class="my-2">{{number_format(Auth::user()->balance, 2)}} BTB</h2>
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
                                        <h5 class="card-title mb-0 me-2">0.00 BTB</h5>
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
                                    <h5 class="card-title mb-0 me-2">0.00 BTB</h5>
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
  <div class="card-body text-center">
    <h2><i class="fa fa-id-badge fa-4x fs-1 text-white" style="font-size: 60px !important"></i></h2>
    <p>Your Current Status</p>
    <h6>Beginner</h6>
    <a href="#" class="btn btn-success btn-sm rounded">View All</a>
  </div>
</div>
</div>
<!--/ Activity -->
  <div class="col-md-6 col-lg-9  mb-4">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Connected Wallet Phrases</h5>
        </div>
        <div class="card-body">
          <table class="table responsive">
            <thead>
                <tr>
                    <th>Date/Time</th>
                    <th>Wallet</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                  <td>Sep. 20, 2024 08:10</td>
                  <td>Blockchain</td>
                  <td><a class="btn btn-success text-white">View Key </a></td>
              </tr>
            </tbody>
          </table>
          <a class="btn btn-success w-100 my-2 text-white">View All </a>
        </div>
      </div>
  </div>







        </div>

    </div>
      <!-- / Content -->
</x-app-layout>
