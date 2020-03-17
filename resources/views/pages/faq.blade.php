@extends('layouts.app')

@section('content')
<main id="content" role="main">
    <style>
    .btn-link1 {
    font-weight: 400;
    color: #4a6f1b !important;
    background-color: transparent;
    }
</style>

    <!-- FAQ Topics Section -->
    <div class="container space-2 space-md-3">
        <div class="w-lg-80 text-center mx-lg-auto">
            <div class="mb-11">
                <h1 class="display-4 font-weight-semi-bold">Frequently Ask Questions</h1>
            </div>
        </div>
      <div class="row">

        <div class="col-lg-9 offset-lg-2">
          <div id="basics" class="space-bottom-2">

            <!-- Basics Accordion -->
            <div id="basicsAccordion">
              <!-- Card -->
              <div class="card mb-3">
                <div class="card-header card-collapse" id="basicsHeadingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link1 btn-block d-flex justify-content-between card-btn p-3"
                            data-toggle="collapse"
                            data-target="#basicsCollapseOne"
                            aria-expanded="true"
                            aria-controls="basicsCollapseOne">
                      What is Trado?

                      <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseOne" class="collapse show"
                     aria-labelledby="basicsHeadingOne"
                     data-parent="#basicsAccordion">
                  <div class="card-body">
                    Trado is an agricultural technology company that encourages agricultural participation by allowing you to easily fund a farm in the financial capacity of your choosing while we engage our farmers with our input, agricultural expertise, process automation and machinery to make sure our promise to deliver profitable returns to you are safely met.
We provide food, employment and financial stability for the populace.
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="card mb-3">
                <div class="card-header card-collapse" id="basicsHeadingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link1 btn-block d-flex justify-content-between card-btn collapsed p-3"
                            data-toggle="collapse"
                            data-target="#basicsCollapseTwo"
                            aria-expanded="false"
                            aria-controls="basicsCollapseTwo">
                      How can I get started?

                      <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseTwo" class="collapse"
                     aria-labelledby="basicsHeadingTwo"
                     data-parent="#basicsAccordion">
                  <div class="card-body">
                    Having an account with Trado gives you access to fund a farm plantation, stay informed with regular farm updates, as well as earn decent returns.<br/>

Signing up is not something hard, trust me. Click on the top menu item Sign Up. This will take you to our sign up page. On this page, enter your unique details and click on the Sign Up Button.<br/>

An authentication email will be sent to your specified email address, confirm your email address by clicking the link on the authentication mail you receive and there you go, you are now a member of Trado world.
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="card mb-3">
                <div class="card-header card-collapse" id="basicsHeadingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link1 btn-block d-flex justify-content-between card-btn collapsed p-3"
                            data-toggle="collapse"
                            data-target="#basicsCollapseThree"
                            aria-expanded="false"
                            aria-controls="basicsCollapseThree">
                      What is the minimum amount to <br/> fund a farm?

                      <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseThree" class="collapse"
                     aria-labelledby="basicsHeadingThree"
                     data-parent="#basicsAccordion">
                  <div class="card-body">
                   Each farm has a subscription fee. That fee is the minimum amount you can fund a particular farm to buy a unit.<br/>

Would love to fund more farms? Increase the number of units you would love to buy and the amount would increase in equal steps to cater to your choices and the size of your pocket.<br/>

For example, an okro farm is ₦ 20,000 per unit, the minimum amount is ₦ 20,000, 2 units would cost ₦ 40,000 and you can go ahead to subscribe to more than one farm.



Payment secured by Paystack, you will be required to complete the transaction with your ATM Card or you may chose the bank transfer option which would require you to use your bank token to complete the transaction.
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="card mb-3">
                <div class="card-header card-collapse" id="basicsHeadingFour">
                  <h5 class="mb-0">
                    <button class="btn btn-link1 btn-block d-flex justify-content-between card-btn collapsed p-3"
                            data-toggle="collapse"
                            data-target="#basicsCollapseFour"
                            aria-expanded="false"
                            aria-controls="basicsCollapseFour">
                      What method of payment available<br/> for each Farm Investment?

                      <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseFour" class="collapse"
                     aria-labelledby="basicsHeadingFour"
                     data-parent="#basicsAccordion">
                  <div class="card-body">
                    Payment secured by Paystack, you will be required to complete the transaction with your ATM Card or you may chose the bank transfer option which would require you to use your bank token to complete the transaction.
                  </div>
                </div>
              </div>
              <!-- End Card -->
              
              
              <!-- Card -->
              <div class="card mb-3">
                <div class="card-header card-collapse" id="basicsHeadingFive">
                  <h5 class="mb-0">
                    <button class="btn btn-link1 btn-block d-flex justify-content-between card-btn collapsed p-3"
                            data-toggle="collapse"
                            data-target="#basicsCollapseFive"
                            aria-expanded="false"
                            aria-controls="basicsCollapseFive">
                      When is the next investment <br/> cycle? 

                      <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseFive" class="collapse"
                     aria-labelledby="basicsHeadingFive"
                     data-parent="#basicsAccordion">
                  <div class="card-body">
                    We do not have fixed dates for the future cycles. Once a cycle is closed, it usually takes about 2 or 3 months before the next cycle opens.
                  </div>
                </div>
              </div>
              <!-- End Card -->
              
              
              
              <!-- Card -->
              <div class="card mb-3">
                <div class="card-header card-collapse" id="basicsHeadingSix">
                  <h5 class="mb-0">
                    <button class="btn btn-link1 btn-block d-flex justify-content-between card-btn collapsed p-3"
                            data-toggle="collapse"
                            data-target="#basicsCollapseSix"
                            aria-expanded="false"
                            aria-controls="basicsCollapseSix">
                      Can I visit the Farm?

                      <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseSix" class="collapse"
                     aria-labelledby="basicsCollapseSix"
                     data-parent="#basicsAccordion">
                  <div class="card-body">
                   Of course you can visit! We are readily available to tour you round the farm to allow investors to measure growth and get an experience of the farm activities and operations.
                  </div>
                </div>
              </div>
              <!-- End Card -->
              
              
              
              
              
              
              <!-- Card -->
              <div class="card mb-3">
                <div class="card-header card-collapse" id="basicsHeadingSeven">
                  <h5 class="mb-0">
                    <button class="btn btn-link1 btn-block d-flex justify-content-between card-btn collapsed p-3"
                            data-toggle="collapse"
                            data-target="#basicsCollapseSeven"
                            aria-expanded="false"
                            aria-controls="basicsCollapseSeven">
                      How do I follow up on my <br/> Investment?

                      <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseSeven" class="collapse"
                     aria-labelledby="basicsHeadingSeven"
                     data-parent="#basicsAccordion">
                  <div class="card-body">
                   Trado is structured to give Farm Investors updates; we send monthly updates for farm cycles at intervals. Farm updates are written progress reports which includes pictures and videos of the farm cycle.
                  </div>
                </div>
              </div>
              <!-- End Card -->
              
              
              
              <!-- Card -->
              <div class="card mb-3">
                <div class="card-header card-collapse" id="basicsHeadingEight">
                  <h5 class="mb-0">
                    <button class="btn btn-link1 btn-block d-flex justify-content-between card-btn collapsed p-3"
                            data-toggle="collapse"
                            data-target="#basicsCollapseEight"
                            aria-expanded="false"
                            aria-controls="basicsCollapseEight">
                      What is my return after harvest <br/> on Trado?

                      <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseEight" class="collapse"
                     aria-labelledby="basicsHeadingEight"
                     data-parent="#basicsAccordion">
                  <div class="card-body">
                   With our profit calculator you can always know your (ROI) return on investment. You can increase or decrease the number of units you buy and it will automatically calculate your net profit along with your initial capital.
                  </div>
                </div>
              </div>
              <!-- End Card -->
              
              
              
              <!-- Card -->
              <div class="card mb-3">
                <div class="card-header card-collapse" id="basicsHeadingNine">
                  <h5 class="mb-0">
                    <button class="btn btn-link1 btn-block d-flex justify-content-between card-btn collapsed p-3"
                            data-toggle="collapse"
                            data-target="#basicsCollapseNine"
                            aria-expanded="false"
                            aria-controls="basicsCollapseNine">
                      Is there an Insurance cover for my <br/> investment?

                      <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseNine" class="collapse"
                     aria-labelledby="basicsHeadingNine"
                     data-parent="#basicsAccordion">
                  <div class="card-body">
                   Yes, Trado is insured. We partnered with Nigeira Agriculture Insurance Corporation  to insure all existing farm projects, so that in the event of an accident, the invested capital can be refunded. The insurance covers only the initial investment capital, it does not cover the return after harvest.l.
                  </div>
                </div>
              </div>
              <!-- End Card -->
              
              
              
              
            </div>
            <!-- End Basics Accordion -->
          </div>
        </div>
      </div>
    </div>
    <!-- End FAQ Topics Section -->

    <!-- Sticky Block End Point -->
    <div id="stickyBlockEndPoint"></div>
  </main>
  <!-- ========== END MAIN ========== -->
@endsection

