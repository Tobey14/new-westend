<template>

    <!-- page-wrapper start -->
    <div class="page-wrapper" style="background-color: #0f0232;color:white !important">
      <Modal />

      <!-- header-section start  -->
      <Header></Header>
      <!-- header-section end  -->

      <!-- hero start -->
      <div class="inner-hero-section style--four">
        <div class="bg-shape">
          <img src="images/elements/inner-hero-shape-2.png" alt="image" />
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <ul class="page-list">
                <li><a href="index.html">Home</a></li>
                <li class="active">How to Win</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- inner-hero-section end -->

      <!-- video section start -->
      <div class="pb-120 mt-minus-150">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div
                class="video-wrapper bg_img"
                data-background="img/promotion/shape2.png"
              >
                <a
                  class="cmn-btn text-capitalize"
                  href="https://www.youtube.com/embed/d6xn5uflUjg"
                  data-rel="lightcase:myCollection"
                  >watch video <i class="fas fa-play ml-2"></i
                ></a>
              </div>
              <!-- video-wrapper end -->
            </div>
          </div>
        </div>
      </div>
      <!-- video section end -->

      <!-- how to play section start -->
      <section class="position-relative pt-120 pb-120 overflow-hidden">
        <div
          class="play-elements wow bounceIn"
          data-wow-duration="0.5s"
          data-wow-delay="0.7s"
        >
          <img src="images/elements/play-el.png" alt="image" />
        </div>
        <div class="container">
          <div class="row">
            <div
              class="col-lg-6 text-sm-left text-center wow fadeInUp"
              data-wow-duration="0.5s"
              data-wow-delay="0.3s"
            >
              <div class="section-header">
                <span class="section-sub-title">Need to know about</span>
                <h2 class="section-title">How To Win</h2>
                <p>Follow these 3 easy steps!</p>
              </div>
            </div>
          </div>
          <div
            class="row mb-none-30 justify-content-xl-start justify-content-center"
          >
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
              <div
                class="play-card bg_img"
                data-background="images/elements/card-bg-1.jpg"
              >
                <div class="play-card__icon">
                  <img src="images/icon/play/1.png" alt="image-icon" />
                  <span class="play-card__number">01</span>
                </div>
                <div class="play-card__content">
                  <h3 class="play-card__title">Choose</h3>
                  <p>Choose your ticket amount</p>
                </div>
              </div>
              <!-- play-card end -->
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
              <div
                class="play-card bg_img"
                data-background="images/elements/card-bg-2.jpg"
              >
                <div class="play-card__icon">
                  <img src="images/icon/play/2.png" alt="image-icon" />
                  <span class="play-card__number">02</span>
                </div>
                <div class="play-card__content">
                  <h3 class="play-card__title">buy</h3>
                  <p>Enter your number & Complete your Purchase</p>
                </div>
              </div>
              <!-- play-card end -->
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
              <div
                class="play-card bg_img"
                data-background="images/elements/card-bg-3.jpg"
              >
                <div class="play-card__icon">
                  <img src="images/icon/play/3.png" alt="image-icon" />
                  <span class="play-card__number">03</span>
                </div>
                <div class="play-card__content">
                  <h3 class="play-card__title">Win</h3>
                  <p>Start Dreaming, you're almost there</p>
                </div>
              </div>
              <!-- play-card end -->
            </div>
          </div>
        </div>
      </section>
      <!-- how to play section end -->

      <!-- buy ticket section start -->
      <section class="buy-ticket-section">
        <div class="winner-obj">
          <img src="images/elements/winner-obj.png" alt="image" />
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-7 text-lg-left text-center">
              <div class="section-header">
                <span class="section-sub-title">Dream Big Play Small</span>
                <h2 class="section-title font-weight-bold">
                  Will you be the next Winner?
                </h2>
                <p>
                  Playing the lottery is something many of us do to bring a bit
                  of excitement to our day-to-day routine.
                </p>
              </div>
              <div class="buy-btn-wrapper">
                <span>Don't miss out! Next draw</span>
                <img
                  src="images/elements/arrow.png"
                  alt="image"
                  class="arrow"
                />
                <a href="play-now.html" class="cmn-btn">buy ticket now!</a>
              </div>
            </div>
          </div>
          <div class="row winner-stat-wrapper">
            <div class="col-lg-8 text-lg-left text-center">
              <h3 class="font-weight-normal winner-stat-wrapper__title">
                Let the Number Speak for Us
              </h3>
              <div class="row mb-none-30">
                <div class="col-sm-6 mb-30">
                  <div class="counter-item style--three text-center">
                    <div class="counter-item__content">
                      <span>23</span>
                      <p>Last Month Winners</p>
                    </div>
                  </div>
                  <!-- counter-item end -->
                </div>
                <div class="col-sm-6 mb-30">
                  <div class="counter-item style--three text-center">
                    <div class="counter-item__content">
                      <span>2837K</span>
                      <p>Tickets Sold</p>
                    </div>
                  </div>
                  <!-- counter-item end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- buy ticket section end -->

      <!-- footer section start  -->
      <Footer></Footer>
      <!-- footer section end -->
    </div>
    <!-- <div>

        <div class="ps-page">
            <Header />


            <h4 class="countDownDays d-none" style="font-size:40px;">

            </h4>
            <h4 class="countDownDays2 d-none" style="font-size:40px;">

            </h4>
            <div class="ps-about">
                <div class="container">
                    <ul class="ps-breadcrumb">
                        <li class="ps-breadcrumb__item">
                            <Link :href="route('home')"> Home </Link>
                        </li>
                        <li class="ps-breadcrumb__item active" aria-current="page">How to Win</li>
                    </ul>

                    <section class="ps-about--info">
                        <h2 class="ps-about__title">What are you waiting for...? Don't sleep on this one!</h2>
                        <center>
                            <div class="col-9">
                                <p class="ps-about__subtitle">There're over 45 daily prizes to be won and monthly
                                    mouth-watering grand prizes. Play now on Westend as agent, through our website or
                                    mobile app, and stand a chance to win BIG.</p>
                                <Link :href="route('playNow')" class="btn ps-btn--warning" style="font-size:20px;"> PLAY
                                NOW </Link>
                            </div>
                        </center>
                        <br><br>

                        <div class="ps-product__content" style="margin-left:10%; margin-right:10%">
                            <ul class="nav nav-tabs ps-tab-list" id="productContentTabs" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="description-tab"
                                        data-toggle="tab" href="#website" role="tab" aria-controls="website"
                                        aria-selected="true">
                                        <div class="ps-block--about">
                                            <div class="ps-block__icon">
                                                <h1><i class="fa fa-globe"></i></h1>
                                            </div>
                                            <h4 class="ps-block__title">WEBSITE</h4>
                                        </div>
                                    </a>
                                </li>


                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="reviews-tab"
                                        data-toggle="tab" href="#mobile" role="tab" aria-controls="app"
                                        aria-selected="false">
                                        <div class="ps-block--about">
                                            <div class="ps-block__icon">
                                                <h1><i class="fa fa-mobile"></i></h1>
                                            </div>
                                            <h4 class="ps-block__title">APP</h4>

                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="reviews-tab"
                                        data-toggle="tab" href="#agent" role="tab" aria-controls="agent"
                                        aria-selected="false">
                                        <div class="ps-block--about">
                                            <div class="ps-block__icon">
                                                <h1><i class="fa fa-users"></i></h1>
                                            </div>
                                            <h4 class="ps-block__title">AGENT</h4>

                                        </div>
                                    </a>
                                </li>

                            </ul>



                            <div class="tab-content" id="productContent" style="margin-bottom: 80px;">
                                <div class="tab-pane fade show active" id="website" role="tabpanel"
                                    aria-labelledby="wesbite">
                                    <div class="ps-document">

                                        <p class="ps-desc">
                                            <ol>
                                                <li>STEP 1: Click "Play Now" and ENTER your phone number.</li>
                                                <li>STEP 2: Enter your preferred amount and click on NEXT</li>
                                                <li>STEP 3: Choose your method of payment and click "Checkout..</li>
                                                <li>STEP 4: You will receive your ticket number(s) through SMS. You have
                                                    more chances to win with more tickets</li>
                                            </ol>

                                            <br>
                                            <h4>SMS NOTIFICATION SAMPLE</h4>

                                            Hey player, thank you for playing with WestEnd Games Limited. Your ticket(s)
                                            with ID: WG-10***99ZX. has been played successfully. Check the winners corner to
                                            see if you're one of our luck winners.
                                            <br><br>
                                            <center>
                                                <Link :href="route('playNow')" class="btn ps-btn--warning" id=""
                                                    style="font-size:15px;">
                                                PLAY NOW
                                                </Link>
                                            </center>
                                        </p>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile">
                                    <div class="ps-document">

                                        <p class="ps-desc">
                                            <ol>
                                                <li>STEP 1: Download the app on your device</li>
                                                <li>STEP 2: Click on “PLAY NOW”.</li>
                                                <li>STEP 3: Input your phone number and amount you would like to play
                                                    (minimum N100).</li>
                                                <li>STEP 4: Select a payment method and follow instructions until you
                                                    receive an SMS notification</li>
                                            </ol>

                                            <br>
                                            <h4>SMS NOTIFICATION SAMPLE</h4>

                                            Hey player, thank you for playing with WestEnd Games Limited. Your ticket(s)
                                            with ID: WG-10***99ZX. has been played successfully. Check the winners corner to
                                            see if you're one of our luck winners.
                                            <br><br>
                                            <center>
                                                <Link :href="route('playNow')" class="btn ps-btn--warning" id=""
                                                    style="font-size:15px;">
                                                PLAY NOW
                                                </Link>
                                            </center>
                                        </p>



                                    </div>
                                </div>


                                <div class="tab-pane fade" id="agent" role="tabpanel" aria-labelledby="agent">
                                    <div class="ps-document">

                                        <p class="ps-desc">
                                            <ol>
                                                <li>STEP 1: Visit any of our WestEnd Agents nearest to you.</li>
                                                <li>STEP 2: Provide your phone number and amount you would like to play with
                                                    (minimum of N100).</li>
                                                <li>STEP 3: Agent carries out the plays and player receives confirmation
                                                    notification via sms.</li>

                                            </ol>

                                            <br>
                                            <h4>SMS NOTIFICATION SAMPLE</h4>

                                            Hey player, thank you for playing with WestEnd Games Limited. Your ticket(s)
                                            with ID: WG-10***99ZX. has been played successfully. Check the winners corner to
                                            see if you're one of our luck winners.
                                            <br><br>
                                            <center>
                                                <Link :href="route('playNow')" class="btn ps-btn--warning" id=""
                                                    style="font-size:15px;">
                                                PLAY NOW
                                                </Link>
                                            </center>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="ps-about__content" style="margin-top:-70px;">
                    <section class="desktop ps-about__banner"
                        style="background-image: url('/assets/img/promotion/shape4a.png');">
                        <div class="container">
                            <div class="ps-banner">

                            </div>
                        </div>
                    </section>

                    <section class="mobile ps-about__banner"
                        style="background-image: url('/assets/img/promotion/shape4.png');">
                        <div class="container">
                            <div class="ps-banner">

                            </div>
                        </div>
                    </section>
                </div>

            </div>



            <br>
            <hr>


            <Footer />
        </div>

        <div class="ps-search">
            <div class="ps-search__content ps-search--mobile">
                <a class="ps-search__close" href="#" id="close-search"
                    ><i class="icon-cross"></i
                ></a>
                <h3>Ticket Checker</h3>
                <div class="ps-search-table">
                    <div class="input-group">
                        <input
                            class="form-control ps-input"
                            type="text"
                            placeholder="Ticket Status Checker"
                            v-model="ticket_id"
                        />
                        <div v-if="this.ticket_id" class="input-group-append">
                            <Link
                                :href="
                                    route('ticketStatus', {
                                        id: this.ticket_id,
                                    })
                                "
                            >
                                <i class="fa fa-search"></i>
                            </Link>
                        </div>

                        <div
                            v-else
                            class="input-group-append"
                            @click="emptyTicket()"
                        >
                            <Link>
                                <i class="fa fa-search"></i>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Header from './homeHeader.vue';
import Footer from './Footer.vue';
import Modal from "./modals.vue";


export default {
    name: "HowToWin",
    data() {
        return {
            ticket_id:'WG-',
        };
    },

    components: {
        Link,
        Head,
        Footer,
        Header,
        Modal,
    },
    computed: {},
    methods: {
        emptyTicket(){
            this.$swal('Please Enter A Valid Ticket Id');
        },
    },
    mounted() { },

    beforeMount() { },
};
</script>

<style scoped>
@media screen and (max-width: 992px) {
    .mobile {
        display: none;
    }
}


@media screen and (min-width: 600px) {
    .desktop {
        display: none;
    }
}
</style>
