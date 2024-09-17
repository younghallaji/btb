<x-app-layout>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Dashboard/</span> Deposit Options</h4>
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="p-5 bg-secondary border rounded text-center">
                    <h5>Black Toolbox Account Funding</h5>
                    <p>Select From the options below to fund your account.</p>
            
                    <div class="row justify-content-center my-3">
                        <div class="col-sm-6 col-12 d-flex justify-content-center">
                            <a href="{{route('deposits.create')}}">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial bg-label-warning rounded-circle"><i class="bx bx-dollar-circle fs-4"></i></span>
                                                </div>
                                                <div class="card-info">
                                                    <h5 class="card-title mb-0 me-2">Fund With Crypto</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
            
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-12 d-flex justify-content-center">
                            <a href="{{route('deposits.create')}}">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial bg-label-primary rounded-circle"><i class="bx bx-message-rounded-dots fs-4"></i></span>
                                                </div>
                                                <div class="card-info">
                                                    <h5 class="card-title mb-0 me-2">Fund Via Chat</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            






        </div>

    </div>
      <!-- / Content -->
</x-app-layout>
