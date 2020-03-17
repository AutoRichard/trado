@extends('layouts.app')

@section('content')
<!-- ========== MAIN ========== -->
<main id="content" role="main">
    @include('pages.inc.menu')

    <!-- Content Section -->
    <div class="bg-light">
        <div class="container space-2">
            
            <div class="card-deck d-block d-lg-flex card-lg-gutters-3 mb-6">
            @if(count($investment) == 0 || count($investment_check) == 0)
                <!-- Card -->
                <div class="card mb-3 mb-lg-1">
                    <div class="card-body p-3">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="h6 text-warning font-weight-normal mb-0">Hello {{Auth::user()->name}}, You have no active investment, please <a href="/farmshop" style="color: #4a6f1b !important;" >click to Invest <span class="fas fa-link mr-1 text-trado1"></span></a></p>
                            </div>
                        </div>
                    </div>
                
                </div>
                @endif
                @if(count($investment) > 0 && count($shirt) == 0)
                <!-- Card -->
                <div class="card mb-3 mb-lg-1">
                    <div class="card-body p-3">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="h4 font-weight-normal mb-0"><a class="text-trado1" value="Pay Now!" href="#requestPaymentModals"
                    data-modal-target="#requestPaymentModals" style="color: #4a6f1b !important;" >
                          <i class="fa fa-plus-circle fa-lg"></i> Get Trado Shirt
                    </a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
                @endif
                
                </div>
            
            <!-- Stats -->
            <div class="card-deck d-block d-lg-flex card-lg-gutters-3 mb-6">
                <!-- Card -->
                <div class="card mb-3 mb-lg-1">
                    <div class="card-body p-5">
                        <div class="media align-items-center">
                            <span class="btn btn-lg btn-icon btn-soft-primary rounded-circle mr-4">
                                <span class="btn-icon__inner">&#8358</span>
                            </span>
                            <div class="media-body">
                                <span class="d-block font-size-3">&#8358 {{$balance->balance}}</span>
                                <h2 class="h6 text-secondary font-weight-normal mb-0">Available balance</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-1">
                    <div class="card-body p-5">
                        <div class="media align-items-center">
                            <span class="btn btn-lg btn-icon btn-soft-success rounded-circle mr-4">
                                <span class="fas fa-coins btn-icon__inner"></span>
                            </span>
                            <div class="media-body">
                                <span class="d-block font-size-3">&#8358 {{$amount}}</span>
                                <h3 class="h6 text-secondary font-weight-normal mb-0">Investment</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Stats -->
            <div class="card">
                <div class="card-body p-4">
                    <!-- Nav -->
                    <div class="row justify-content-between align-items-center mb-4">

                        <div class="col-md-7 order-md-1">
                            <!-- Nav Classic -->
                            <ul class="nav nav-classic nav-borderless px-0" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-trado" id="pills-one-tab" data-toggle="pill"
                                        href="#pills-one" role="tab" aria-controls="pills-one"
                                        aria-selected="true">Activities</a>
                                </li>
                            </ul>
                            <!-- End Nav Classic -->
                        </div>
                    </div>
                    <!-- End Nav -->

                    <!-- Datatable -->
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Content One -->
                        <div class="tab-pane fade show active" id="pills-one" role="tabpanel"
                            aria-labelledby="pills-one-tab">
                            <!-- Transaction Table -->
                            <div class="table-responsive-md u-datatable">
                                <table
                                    class="js-datatable table table-borderless u-datatable__striped u-datatable__content"
                                    data-dt-info="#datatableInfo" data-dt-search="#datatableSearch"
                                    data-dt-entries="#datatableEntries" data-dt-page-length="12"
                                    data-dt-is-responsive="false" data-dt-is-show-paging="true"
                                    data-dt-pagination="datatablePagination"
                                    data-dt-pagination-classes="pagination mb-0"
                                    data-dt-pagination-items-classes="page-item"
                                    data-dt-pagination-links-classes="page-link"
                                    data-dt-pagination-next-classes="page-item"
                                    data-dt-pagination-next-link-classes="page-link"
                                    data-dt-pagination-next-link-markup='<span aria-hidden="true">&raquo;</span>'
                                    data-dt-pagination-prev-classes="page-item"
                                    data-dt-pagination-prev-link-classes="page-link"
                                    data-dt-pagination-prev-link-markup='<span aria-hidden="true">&laquo;</span>'>
                                    <thead>
                                        <tr class="text-uppercase font-size-1">
                                            <th scope="col" class="font-weight-medium">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Project
                                                    <div class="ml-2">
                                                        <span
                                                            class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                        <span
                                                            class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="col" class="font-weight-medium">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Amount
                                                    <div class="ml-2">
                                                        <span
                                                            class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                        <span
                                                            class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="col" class="font-weight-medium">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Return
                                                    <div class="ml-2">
                                                        <span
                                                            class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                        <span
                                                            class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="col" class="font-weight-medium">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Start
                                                    <div class="ml-2">
                                                        <span
                                                            class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                        <span
                                                            class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="col" class="font-weight-medium">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Stop
                                                    <div class="ml-2">
                                                        <span
                                                            class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                        <span
                                                            class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="col" class="font-weight-medium">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    Status
                                                    <div class="ml-2">
                                                        <span
                                                            class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                        <span
                                                            class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="font-size-1">
                                        @if(count($investment) > 0)
                                        @foreach ($investment as $invest)
                                        <tr>
                                            <td class="align-middle font-weight-normal">{{$invest->plantation}}</td>
                                            <td class="align-middle">&#8358 {{$invest->amount/100}}</td>
                                            <td class="align-middle">
                                                <span class="fas fa-arrow-up mr-1 text-trado1"></span>
                                                &#8358 {{$invest->return/100}}
                                            </td>
                                            <td class="align-middle">{{$invest->created_at->format('M / Y')}}</td>
                                            <td class="align-middle">{{$invest->created_at->addMonths($invest->duration)->format('M / Y')}}</td>
                                            <td class="align-middle">
                                                <span class="fas fa-circle text-primary small mr-1"></span>
                                                {{$invest->status}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td class="align-middle font-weight-normal">Empty</td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle text-trado1">
                                                <span class="fas fa-arrow-up mr-1"></span>
                                                
                                            </td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle">
                                            </td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Transaction Table -->
                        </div>
                        <!-- End Content One -->

                        <!-- Content Two -->
                        <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                            <div class="text-center py-4">
                                <div class="w-md-80 w-lg-50 text-center mx-md-auto">
                                    <figure id="SVGevents" class="svg-preloader mb-7 ie-events">
                                        <img class="js-svg-injector w-50"
                                            src="./assets/svg/illustrations/events.svg" alt="Image Description"
                                            data-parent="#SVGevents">
                                    </figure>
                                    <h4 class="h5 font-weight-normal">All due dates to tasks &amp; other notes in
                                        this project will appear here.</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Content Two -->

                        <!-- Content Three -->
                        <div class="tab-pane fade" id="pills-three" role="tabpanel"
                            aria-labelledby="pills-three-tab">
                            <div class="text-center py-4">
                                <div class="w-md-80 w-lg-50 text-center mx-md-auto">
                                    <figure id="SVGdataReport" class="svg-preloader mb-7 ie-data-report">
                                        <img class="js-svg-injector w-50"
                                            src="./assets/svg/illustrations/data-report.svg" alt="Image Description"
                                            data-parent="#SVGdataReport">
                                    </figure>
                                    <h4 class="h5 font-weight-normal">All progress, data analysis to tasks in this
                                        project will appear here.</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Content Three -->

                        <!-- Content Four -->
                        <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
                            <div class="text-center py-4">
                                <div class="w-md-80 w-lg-50 text-center mx-md-auto">
                                    <figure id="SVGimageUpload" class="svg-preloader mb-7 ie-image-upload">
                                        <img class="js-svg-injector w-50"
                                            src="./assets/svg/illustrations/image-upload.svg"
                                            alt="Image Description" data-parent="#SVGimageUpload">
                                    </figure>
                                    <h4 class="h5 font-weight-normal">All attachments to tasks &amp; conversations
                                        in this project will appear here.</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Content Four -->
                    </div>
                    <!-- End Datatable -->
                </div>
            </div>
            <div class="w-md-110 w-lg-100 text-center mx-auto mb-9">
                <div class="d-flex justify-content-between align-items-center">
                    <nav aria-label="Page navigation">
                      <ul class="pagination mb-0">
                        @if($investment->currentPage() > 1) 
                        <li class="page-item ml-0">
                          <a class="page-link" href="{{$investment->previousPageUrl()}}" aria-label="Previous">
                            Previous
                          </a>
                        </li>
                        @endif
                        
                        @if($investment->currentPage() > 1 && $investment->currentPage() != $investment->lastPage() && $investment->lastPage() != 0) 
                        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                        @endif
                        
                        @if($investment->currentPage() != $investment->lastPage() && $investment->lastPage() != 0)
                        <li class="page-item">
                          <a class="page-link" href="{{$investment->nextPageUrl()}}" aria-label="Next">
                            Next
                          </a>
                        </li>
                        @endif
                      </ul>
                    </nav>
                  </div>
            </div>
        </div>

        <div class="space-2">

        </div>
    </div>
    <!-- End Content Section -->


</main>
<!-- ========== END MAIN ========== -->


<!-- ========== SECONDARY CONTENTS ========== -->

    <!-- Request Payment Modal Window -->
    <div id="requestPaymentModals" class="js-modal-window u-modal-window" style="width: 600px;">
        <div class="card mb-9">
            <!-- Header -->
            <header class="card-header bg-light py-3 px-5"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="h6 mb-0">Request a Trado shirt</h3>

                    <button type="button" class="close" aria-label="Close" onclick="Custombox.modal.close();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </header>
            <!-- End Header -->

            <div class="card-body bg-white">
                <!-- Request Payment Form -->
                <form action="/trado_shirt" method="post" class="js-validate js-step-form" data-progress-id="#progressStepForm"
                    data-steps-id="#contentStepForm" novalidate="novalidate">
                    
                    {{ csrf_field() }}
                    <!-- Progress Step Form -->
                    <nav id="progressStepForm" class="js-step-progress nav nav-icon nav-justified text-center p-5">
                        <a class="nav-item text-trado1" href="javascript:;">
                            <span class="nav-icon-action">
                                <span class="fas fa-user-circle nav-icon-action-inner"></span>
                            </span>
                            <span class="d-none d-sm-block">Select Shirt Type</span>
                        </a>
                        <!--<a class="nav-item text-trado1" href="javascript:;">
                            <span class="nav-icon-action">
                                <span class="fas fa-eye nav-icon-action-inner"></span>
                            </span>
                            <span class="d-none d-sm-block">View Shirt</span>
                        </a>-->
                    </nav>
                    <!-- End Progress Step Form -->

                    <hr class="my-0">

                    <!-- Content Step Form -->
                    <div id="contentStepForm" class="p-5">
                        <div id="selectPlayerStep" class="active">
                            <!-- Recent Payers List -->
                            <div id="recentPayersList" data-target-group="idAddNewPayer">
                                <div class="row">
                                <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label class="form-label">Color</label>
                                            <div class="js-form-message">
                                                <div class="input-group">
                                                    <select id="colorLabel" class="form-control custom-select custom-select-sm" required
                                                        data-msg="Please select color." data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                        <option value="">Select color</option>
                                                        <option value="1">white</option>
                                                        <option value="2">Black</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->
                                        <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label class="form-label">Size</label>
                                            <div class="js-form-message">
                                                <div class="input-group">
                                                    <select class="form-control custom-select custom-select-sm" required
                                                       id="sizeLabel" data-msg="Please select size." data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                        <option value="">Select size</option>
                                                        <option value="s">Small</option>
                                                        <option value="m">Medium</option>
                                                        <option value="l">Large</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->
                                        </div>
                            </div>
                            <!-- End Recent Payers List -->

                            <!-- Buttons -->
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm btn-trado1 transition-3d-hover mr-1">Submit</button>
                                <!--<button id="submit" type="button" class="btn btn-sm btn-trado1 transition-3d-hover mr-1"
                                    data-next-step="#paymentDetailsStep">Next</button>-->
                                <button type="button" class="btn btn-sm btn-soft-secondary transition-3d-hover"
                                    onclick="Custombox.modal.close();">Cancel</button>
                            </div>
                            <!-- End Buttons -->
                        </div>

                        <!--<div id="paymentDetailsStep" style="display: none;">
                            <div class="row">
                            <img id="trado" src="" />
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-trado1 transition-3d-hover mr-1">Submit</button>
                                <a class="btn btn-sm btn-soft-secondary transition-3d-hover mr-1" href="javascript:;"
                                    data-previous-step="#selectPlayerStep">Back</a>
                            </div>-->
                        </div>
                    </div>
                    <!-- End Content Step Form -->
                </form>
                <!-- End Request Payment Form -->
            </div>
        </div>
    </div>
    <script>
    $(function(){
        
        $('#sizeLabel').attr('name', 'size'); 
        $('#colorLabel').attr('name', 'color');
        
    });
    </script>
    <!-- End Request Payment Modal Window -->
    <!-- ========== END SECONDARY CONTENTS ========== -->
@endsection