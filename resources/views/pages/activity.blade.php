@extends('layouts.app')

@section('content')
<!-- ========== MAIN ========== -->
<main id="content" role="main">
    @include('pages.inc.menu')

    <!-- Content Section -->
    <div class="bg-light">
        <div class="container space-2">
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
                                        aria-selected="true">Activity</a>
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
                            <!-- activityion Table -->
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
                                                    ID
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
                                                    Client
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
                                                    Date
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
                                        @if(count($activity) > 0)
                                        @foreach($activity as $activity_)
                                        <tr>                                         
                                            <td class="align-middle font-weight-normal">{{$activity_->paystack_transaction_id}}</td>
                                            <td class="align-middle">&#8358 {{$activity_->amount / 100}}</td>
                                            <td class="align-middle">{{$activity_->type}}</td>
                                            <td class="align-middle">{{$activity_->created_at->diffforhumans()}}</td>
                                            <td class="align-middle">
                                                <span class="fas fa-circle text-primary small mr-1"></span>
                                                {{$activity_->status}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td class="align-middle font-weight-normal">No activity</td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle"></td>
                                            <td class="align-middle">
                                                <span class="fas fa-circle text-success small mr-1"></span>
                                            </td>
                                        </tr>
                                        @endif                                        
                                    </tbody>
                                </table>
                                
                            </div>
                            <!-- End activityion Table -->
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
            <br/>
            <div class="w-md-110 w-lg-70 text-center mx-auto mb-9">
                <div class="d-flex justify-content-between align-items-center">
                    <nav aria-label="Page navigation">
                      <ul class="pagination mb-0">
                        @if($activity->currentPage() > 1) 
                        <li class="page-item ml-0">
                          <a class="page-link" href="{{$activity->previousPageUrl()}}" aria-label="Previous">
                            Previous
                          </a>
                        </li>
                        @endif
                        @if($activity->currentPage() > 1 && $activity->currentPage() != $activity->lastPage() && $activity->lastPage() != 0) 
                        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                        @endif
                        
                        @if($activity->currentPage() != $activity->lastPage() && $activity->lastPage() != 0)
                        <li class="page-item">
                          <a class="page-link" href="{{$activity->nextPageUrl()}}" aria-label="Next">
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
    <div id="requestPaymentModal" class="js-modal-window u-modal-window" style="width: 600px;">
        <div class="card mb-9">
            <!-- Header -->
            <header class="card-header bg-light py-3 px-5"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="h6 mb-0">Request a payment</h3>

                    <button type="button" class="close" aria-label="Close" onclick="Custombox.modal.close();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </header>
            <!-- End Header -->

            <div class="card-body bg-white">
                <!-- Request Payment Form -->
                <form class="js-validate js-step-form" data-progress-id="#progressStepForm"
                    data-steps-id="#contentStepForm" novalidate="novalidate">
                    <!-- Progress Step Form -->
                    <nav id="progressStepForm" class="js-step-progress nav nav-icon nav-justified text-center p-5">
                        <a class="nav-item text-trado1" href="javascript:;">
                            <span class="nav-icon-action">
                                <span class="fas fa-user-circle nav-icon-action-inner"></span>
                            </span>
                            <span class="d-none d-sm-block">Select payer</span>
                        </a>
                        <a class="nav-item text-trado1" href="javascript:;">
                            <span class="nav-icon-action">
                                <span class="fas fa-file-invoice-dollar nav-icon-action-inner"></span>
                            </span>
                            <span class="d-none d-sm-block">Payment details</span>
                        </a>
                        <a class="nav-item text-trado1" href="javascript:;">
                            <span class="nav-icon-action">
                                <span class="fas fa-paperclip nav-icon-action-inner"></span>
                            </span>
                            <span class="d-none d-sm-block">Attachment</span>
                        </a>
                    </nav>
                    <!-- End Progress Step Form -->

                    <hr class="my-0">

                    <!-- Content Step Form -->
                    <div id="contentStepForm" class="p-5">
                        <div id="selectPlayerStep" class="active">
                            <!-- Recent Payers List -->
                            <div id="recentPayersList" data-target-group="idAddNewPayer">
                                <!-- Add Members -->
                                <div class="mb-4">
                                    <input class="form-control" type="email" placeholder="Enter email, name, or company"
                                        aria-label="Enter Bank Name">
                                </div>
                                <!-- End Add Members -->

                                <!-- Most Recent Payers List -->
                                <div class="mb-4">

                                    <!-- Payers List -->
                                    <a class="card card-frame mb-2" href="javascript:;"
                                        data-next-step="#paymentDetailsStep">
                                        <div class="card-body align-items-sm-center p-2">
                                            <div class="media align-items-center">
                                                <span class="btn btn-icon btn-soft-success rounded-circle mr-3">
                                                    <span class="btn-icon__inner">GT</span>
                                                </span>
                                                <div class="media-body">
                                                    <h4 class="h6 mb-0">GTBank</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- End Payers List -->
                                </div>
                                <!-- End Most Recent Payers List -->
                            </div>
                            <!-- End Recent Payers List -->

                            <!-- Add New Payer -->
                            <div id="addNewPayer" data-target-group="idAddNewPayer" style="display: none;">
                                <!-- Button Group -->
                                <div class="btn-group btn-group-toggle d-flex mb-5">
                                    <a class="js-animation-link btn btn-sm btn-soft-secondary flex-fill active"
                                        href="javascript:;" data-target="#companyType" data-link-group="idPayerType">
                                        Company
                                    </a>
                                    <a class="js-animation-link btn btn-sm btn-soft-secondary flex-fill"
                                        href="javascript:;" data-target="#individualType" data-link-group="idPayerType">
                                        Individual
                                    </a>
                                </div>
                                <!-- End Button Group -->

                                <!-- Company Type Payer -->
                                <div id="companyType" data-target-group="idPayerType">
                                    <div class="row">
                                        <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label id="companyNameLabel" class="h6 small d-block text-uppercase">Company
                                                name</label>
                                            <div class="js-form-message">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" name="companyName"
                                                        placeholder="Pixeel" aria-label="Pixeel" required
                                                        data-msg="Please enter a valid name."
                                                        data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->

                                        <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label id="websiteURLLabel" class="h6 small d-block text-uppercase">Website
                                                URL</label>
                                            <div class="js-form-message">
                                                <div class="input-group input-group-sm">
                                                    <input type="URL" class="form-control" name="websiteURL"
                                                        placeholder="example.com" aria-label="example.com" required
                                                        data-msg="Please enter a valid website URL."
                                                        data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->

                                        <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label id="contactFirstNameLabel"
                                                class="h6 small d-block text-uppercase">Contact first name</label>
                                            <div class="js-form-message">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control"
                                                        name="contactFirstNameCompany" placeholder="Brian"
                                                        aria-label="Brian" required
                                                        data-msg="Please enter a valid name."
                                                        data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->

                                        <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label id="contactLastNameLabel"
                                                class="h6 small d-block text-uppercase">Contact last name</label>
                                            <div class="js-form-message">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control"
                                                        name="contactLastNameCompany" placeholder="Williams"
                                                        aria-label="Williams" required
                                                        data-msg="Please enter a valid name."
                                                        data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->

                                        <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label id="emailLabel" class="h6 small d-block text-uppercase">Email</label>
                                            <div class="js-form-message">
                                                <div class="input-group input-group-sm">
                                                    <input type="email" class="form-control" name="emailCompany"
                                                        required placeholder="example@gmail.com"
                                                        aria-label="example@gmail.com"
                                                        data-msg="Please enter a valid email address."
                                                        data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->

                                        <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label class="form-label">Country</label>
                                            <div class="js-form-message">
                                                <div class="input-group">
                                                    <select class="form-control custom-select custom-select-sm" required
                                                        data-msg="Please select country." data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                        <option value="">Select country</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia, Plurinational State of</option>
                                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="BN">Brunei Darussalam</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo</option>
                                                        <option value="CD">Congo, the Democratic Republic of the
                                                        </option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">Côte d'Ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Curaçao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="VA">Holy See (Vatican City State)</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran, Islamic Republic of</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KP">Korea, Democratic People's Republic of
                                                        </option>
                                                        <option value="KR">Korea, Republic of</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Lao People's Democratic Republic</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
                                                        <option value="MK">Macedonia, the former Yugoslav Republic of
                                                        </option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia, Federated States of</option>
                                                        <option value="MD">Moldova, Republic of</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PS">Palestinian Territory, Occupied</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Réunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russian Federation</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha
                                                        </option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">Sao Tome and Principe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia and the South Sandwich Islands
                                                        </option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syrian Arab Republic</option>
                                                        <option value="TW">Taiwan, Province of China</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania, United Republic of</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US">United States</option>
                                                        <option value="UM">United States Minor Outlying Islands</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                        <option value="VN">Viet Nam</option>
                                                        <option value="VG">Virgin Islands, British</option>
                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->
                                    </div>
                                </div>
                                <!-- End Company Type Payer -->

                                <!-- Individual Type Payer -->
                                <div id="individualType" data-target-group="idPayerType" style="display: none;">
                                    <div class="row">
                                        <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label id="IndivContactFirstNameLabel"
                                                class="h6 small d-block text-uppercase">Contact first name</label>
                                            <div class="js-form-message">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control"
                                                        name="contactFirstNameIndividual" placeholder="Brian"
                                                        aria-label="Brian" required
                                                        data-msg="Please enter a valid name."
                                                        data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->

                                        <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label id="indivContactLastNameLabel"
                                                class="h6 small d-block text-uppercase">Contact last name</label>
                                            <div class="js-form-message">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control"
                                                        name="contactLasttNameIndividual" placeholder="Williams"
                                                        aria-label="Williams" required
                                                        data-msg="Please enter a valid name."
                                                        data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->

                                        <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label id="IndivemailLabel"
                                                class="h6 small d-block text-uppercase">Email</label>
                                            <div class="js-form-message">
                                                <div class="input-group input-group-sm">
                                                    <input type="email" class="form-control" name="emailIndividual"
                                                        placeholder="example@gmail.com" aria-label="example@gmail.com"
                                                        required data-msg="Please enter a valid email address."
                                                        data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->

                                        <!-- Input Group -->
                                        <div class="col-sm-6 mb-4">
                                            <label class="form-label">Country</label>
                                            <div class="js-form-message">
                                                <div class="input-group">
                                                    <select class="form-control custom-select custom-select-sm" required
                                                        data-msg="Please select country." data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                        <option value="">Select country</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia, Plurinational State of</option>
                                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="BN">Brunei Darussalam</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo</option>
                                                        <option value="CD">Congo, the Democratic Republic of the
                                                        </option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">Côte d'Ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Curaçao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="VA">Holy See (Vatican City State)</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran, Islamic Republic of</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KP">Korea, Democratic People's Republic of
                                                        </option>
                                                        <option value="KR">Korea, Republic of</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Lao People's Democratic Republic</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
                                                        <option value="MK">Macedonia, the former Yugoslav Republic of
                                                        </option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia, Federated States of</option>
                                                        <option value="MD">Moldova, Republic of</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PS">Palestinian Territory, Occupied</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Réunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russian Federation</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha
                                                        </option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">Sao Tome and Principe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia and the South Sandwich Islands
                                                        </option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syrian Arab Republic</option>
                                                        <option value="TW">Taiwan, Province of China</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania, United Republic of</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US">United States</option>
                                                        <option value="UM">United States Minor Outlying Islands</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                        <option value="VN">Viet Nam</option>
                                                        <option value="VG">Virgin Islands, British</option>
                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input Group -->
                                    </div>
                                </div>
                                <!-- End Individual Type Payer -->
                            </div>
                            <!-- End Add New Payer -->

                            <!-- Buttons -->
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-trado1 transition-3d-hover mr-1"
                                    data-next-step="#paymentDetailsStep">Next</button>
                                <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover"
                                    onclick="Custombox.modal.close();">Cancel</button>
                            </div>
                            <!-- End Buttons -->
                        </div>

                        <div id="paymentDetailsStep" style="display: none;">
                            <div class="row">
                                <!-- Input Group -->
                                <div class="col-sm-6 mb-4">
                                    <label id="amountLabel" class="h6 small d-block text-uppercase">Amount</label>
                                    <div class="js-form-message">
                                        <div class="input-group input-group-sm">
                                            <input type="number" class="form-control" name="amount" placeholder="Pixeel"
                                                aria-label="Pixeel" aria-describedby="amountLabel" required
                                                data-msg="Please enter a valid name." data-error-class="u-has-error"
                                                data-success-class="u-has-success">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Group -->

                                <!-- Select -->
                                <div class="col-sm-6 mb-4">
                                    <label class="form-label">Currency</label>

                                    <div class="input-group">
                                        <select class="custom-select custom-select-sm">
                                            <option value="usd">USD</option>
                                            <option value="euro">Euro</option>
                                            <option value="gbp">GBP</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- End Select -->
                            </div>

                            <!-- Input -->
                            <div class="mb-4">
                                <label id="descriptionLabel" class="h6 small d-block text-uppercase">Description</label>
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <textarea class="form-control" rows="2" name="description"
                                            placeholder="Your payer will see this description on the payment request"
                                            aria-label="Your payer will see this description on the payment request"
                                            aria-describedby="descriptionLabel" required
                                            data-msg="Please enter a valid reason." data-error-class="u-has-error"
                                            data-success-class="u-has-success"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Datepicker -->
                            <div class="mb-4">
                                <label id="paymentDueByLabel" class="form-label">Payment due by</label>
                                <div id="datepickerWrapper"
                                    class="u-datepicker u-datepicker--top input-group input-group-sm">
                                    <input class="js-range-datepicker form-control bg-transparent" type="text"
                                        placeholder="Due date" aria-label="Due date"
                                        aria-describedby="paymentDueByLabel" required
                                        data-rp-wrapper="#datepickerWrapper" data-rp-date-format="d/m/Y">
                                    <div class="input-group-append">
                                        <span class="input-group-text rounded-right">
                                            <span class="far fa-calendar-alt"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Datepicker -->

                            <!-- Buttons -->
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-trado1 transition-3d-hover mr-1"
                                    data-next-step="#attachDocumentsStep">Next</button>
                                <a class="btn btn-sm btn-soft-secondary transition-3d-hover mr-1" href="javascript:;"
                                    data-previous-step="#selectPlayerStep">Back</a>
                            </div>
                            <!-- End Buttons -->
                        </div>

                        <div id="attachDocumentsStep" style="display: none;">
                            <div class="mb-4">
                                <p>Attach up to 3 documents (like your invoice or work contact) to your payment request.
                                </p>
                                <p>Do not have an invoice? <a href="#">Create a professional invoice for free and upload
                                        below.</a></p>
                            </div>

                            <!-- File Attachment Input -->
                            <label class="file-attachment-input mb-4" for="fileAttachmentInput">
                                Browse your device and upload documents
                                <small class="d-block text-muted">Maximum file size 10MB</small>
                                <input id="fileAttachmentInput" name="file-attachment" type="file"
                                    class="file-attachment-input__label">
                            </label>
                            <!-- End File Attachment Input -->

                            <!-- Buttons -->
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm btn-trado transition-3d-hover mr-1">Request
                                    Payment</button>
                                <a class="btn btn-sm btn-soft-secondary transition-3d-hover mr-1" href="javascript:;"
                                    data-previous-step="#paymentDetailsStep">Back</a>
                            </div>
                            <!-- End Buttons -->
                        </div>
                    </div>
                    <!-- End Content Step Form -->
                </form>
                <!-- End Request Payment Form -->
            </div>
        </div>
    </div>
    <!-- End Request Payment Modal Window -->
    <!-- ========== END SECONDARY CONTENTS ========== -->
@endsection