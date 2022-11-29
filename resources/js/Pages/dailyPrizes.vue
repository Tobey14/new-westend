<template>

    <!-- page-wrapper start -->
    <div class="page-wrapper" style="background-color: #0f0232;color:white !important">
      <!-- login modal -->
      <Modal />

      <!-- header-section start  -->
      <Header />
      <!-- header-section end  -->

      <!-- inner-hero-section start -->
      <div class="inner-hero-section style--four">
        <div class="bg-shape">
          <img src="images/elements/inner-hero-shape-2.png" alt="image" />
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <ul class="page-list">
                <li><a href="index.html">Home</a></li>
                <li class="active">Daily Prizes</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- inner-hero-section end -->

      <!-- affiliate single section start -->
      <section class="mt-minus-150">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="affiliate-single-wrapper pt-120 pb-120">
                <div class="affiliate-single-wrapper__obj">
                  <img src="images/elements/affiliate-obj.png" alt="image" />
                </div>
                <div class="section-header mb-0">
                  <span class="section-sub-title">Daily prizes</span>
                  <h2 class="section-title font-weight-bold">
                    THERE'LL BE 45 CASH PRIZE WINNERS EVERYDAY!
                  </h2>
                  <Link :href="route('playNow')" class="cmn-btn text-capitalize mt-4" style="font-size: 20px">
                        PLAY NOW
                    </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- affiliate single section end -->


      <section class="pt-20 pb-20">
        <div class="container">
            <section class="ps-section--deals">
                <div class="ps-section__carousel" style="border-color:#ffb200;">
                    <div class="ps-section__carousel d-flex">
                        <Carousel
                            :itemsToShow="5"
                            :wrapAround="true"
                            :autoplay="2000"
                            :transition="300"
                            :itemsToScroll="1"
                        >
                            <slide :index="1">
                                <div class="ps-section__product">
                                    <div
                                        class="ps-product ps-product--standard"
                                    >
                                        <div
                                            class="ps-product__thumbnail"
                                        >
                                            <Link
                                                :href="
                                                    route(
                                                        'monthlyPrices'
                                                    )
                                                "
                                                class="ps-product__image"
                                            >
                                                <figure>
                                                    <img
                                                        src="assets/img/products/03.jpg"
                                                        alt="alt"
                                                    />
                                                </figure>
                                            </Link>
                                            <div
                                                class="ps-product__badge"
                                            ></div>
                                        </div>
                                        <div
                                            class="ps-product__content"
                                        >
                                            <center>
                                                <h5
                                                    class="ps-product__title"
                                                >
                                                    10k for 5 People
                                                    <br />
                                                    <Link
                                                        :href="
                                                            route(
                                                                'playNow'
                                                            )
                                                        "
                                                        class=""
                                                        id=""
                                                    >
                                                        <span
                                                            class="cmn-btn text-capitalize mt-4"
                                                            >PLAY NOW
                                                        </span>
                                                    </Link>
                                                </h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </slide>
                            <slide :index="2">
                                <div class="ps-section__product">
                                    <div
                                        class="ps-product ps-product--standard"
                                    >
                                        <div
                                            class="ps-product__thumbnail"
                                        >
                                            <Link
                                                :href="
                                                    route(
                                                        'monthlyPrices'
                                                    )
                                                "
                                                class="ps-product__image"
                                            >
                                                <figure>
                                                    <img
                                                        src="assets/img/products/03.jpg"
                                                        alt="alt"
                                                    />
                                                </figure>
                                            </Link>
                                            <div
                                                class="ps-product__badge"
                                            ></div>
                                        </div>
                                        <div
                                            class="ps-product__content"
                                        >
                                            <center>
                                                <h5
                                                    class="ps-product__title"
                                                >
                                                    5k for 10 People
                                                    <br />

                                                    <Link
                                                        :href="
                                                            route(
                                                                'playNow'
                                                            )
                                                        "
                                                        class=""
                                                        id=""
                                                    >
                                                        <span
                                                            class="cmn-btn text-capitalize mt-4"
                                                            >PLAY NOW
                                                        </span>
                                                    </Link>
                                                </h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </slide>
                            <slide :index="3">
                                <div class="ps-section__product">
                                    <div
                                        class="ps-product ps-product--standard"
                                    >
                                        <div
                                            class="ps-product__thumbnail"
                                        >
                                            <Link
                                                :href="
                                                    route(
                                                        'monthlyPrices'
                                                    )
                                                "
                                                class="ps-product__image"
                                            >
                                                <figure>
                                                    <img
                                                        src="assets/img/products/03.jpg"
                                                        alt="alt"
                                                    />
                                                </figure>
                                            </Link>
                                            <div
                                                class="ps-product__badge"
                                            ></div>
                                        </div>
                                        <div
                                            class="ps-product__content"
                                        >
                                            <center>
                                                <h5
                                                    class="ps-product__title"
                                                >
                                                    2k for 30 People

                                                    <br />

                                                    <Link
                                                        :href="
                                                            route(
                                                                'playNow'
                                                            )
                                                        "
                                                        class=""
                                                        id=""
                                                    >
                                                        <span
                                                            class="cmn-btn text-capitalize mt-4"
                                                            >PLAY NOW
                                                        </span>
                                                    </Link>
                                                </h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </slide>
                            <slide :index="4">
                                <div class="ps-section__product">
                                    <div
                                        class="ps-product ps-product--standard"
                                    >
                                        <div
                                            class="ps-product__thumbnail"
                                        >
                                            <Link
                                                :href="
                                                    route(
                                                        'monthlyPrices'
                                                    )
                                                "
                                                class="ps-product__image"
                                            >
                                                <figure>
                                                    <img
                                                        src="assets/img/products/03.jpg"
                                                        alt="alt"
                                                    />
                                                </figure>
                                            </Link>
                                            <div
                                                class="ps-product__badge"
                                            ></div>
                                        </div>
                                        <div
                                            class="ps-product__content"
                                        >
                                            <center>
                                                <h5
                                                    class="ps-product__title"
                                                >
                                                    2k for 30 People

                                                    <br />

                                                    <Link
                                                        :href="
                                                            route(
                                                                'playNow'
                                                            )
                                                        "
                                                        class=""
                                                        id=""
                                                    >
                                                        <span
                                                            class="cmn-btn text-capitalize mt-4"
                                                            >PLAY NOW
                                                        </span>
                                                    </Link>
                                                </h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </slide>
                            <slide :index="5">
                                <div class="ps-section__product">
                                    <div
                                        class="ps-product ps-product--standard"
                                    >
                                        <div
                                            class="ps-product__thumbnail"
                                        >
                                            <Link
                                                :href="
                                                    route(
                                                        'monthlyPrices'
                                                    )
                                                "
                                                class="ps-product__image"
                                            >
                                                <figure>
                                                    <img
                                                        src="assets/img/products/03.jpg"
                                                        alt="alt"
                                                    />
                                                </figure>
                                            </Link>
                                            <div
                                                class="ps-product__badge"
                                            ></div>
                                        </div>
                                        <div
                                            class="ps-product__content"
                                        >
                                            <center>
                                                <h5
                                                    class="ps-product__title"
                                                >
                                                    2k for 30 People

                                                    <br />

                                                    <Link
                                                        :href="
                                                            route(
                                                                'playNow'
                                                            )
                                                        "
                                                        class=""
                                                        id=""
                                                    >
                                                        <span
                                                            class="cmn-btn text-capitalize mt-4"
                                                            >PLAY NOW
                                                        </span>
                                                    </Link>
                                                </h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </slide>
                            <slide :index="6">
                                <div class="ps-section__product">
                                    <div
                                        class="ps-product ps-product--standard"
                                    >
                                        <div
                                            class="ps-product__thumbnail"
                                        >
                                            <Link
                                                :href="
                                                    route(
                                                        'monthlyPrices'
                                                    )
                                                "
                                                class="ps-product__image"
                                            >
                                                <figure>
                                                    <img
                                                        src="assets/img/products/03.jpg"
                                                        alt="alt"
                                                    />
                                                </figure>
                                            </Link>
                                            <div
                                                class="ps-product__badge"
                                            ></div>
                                        </div>
                                        <div
                                            class="ps-product__content"
                                        >
                                            <center>
                                                <h5
                                                    class="ps-product__title"
                                                >
                                                    2k for 30 People

                                                    <br />

                                                    <Link
                                                        :href="
                                                            route(
                                                                'playNow'
                                                            )
                                                        "
                                                        class=""
                                                        id=""
                                                    >
                                                        <span
                                                            class="cmn-btn text-capitalize mt-4"
                                                            >PLAY NOW
                                                        </span>
                                                    </Link>
                                                </h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </slide>
                        </Carousel>
                    </div>
                </div>
            </section>
        </div>
      </section>
      <!-- how it work section end  -->

      <!-- footer section start  -->
      <Footer />
      <!-- footer section end -->
    </div>
    <!-- <div>
        <div class="ps-page">
            <Header />

            <h4 class="countDownDays d-none" style="font-size: 40px"></h4>
            <h4 class="countDownDays2 d-none" style="font-size: 40px"></h4>

            <div class="ps-about">
                <div class="container">
                    <ul class="ps-breadcrumb">
                        <li class="ps-breadcrumb__item">
                            <Link :href="route('home')"> Home </Link>
                        </li>
                        <li
                            class="ps-breadcrumb__item active"
                            aria-current="page"
                        >
                            Daily Prizes
                        </li>
                    </ul>

                    <section class="ps-about--info">
                        <h2 class="ps-about__title">DAILY PRIZES</h2>
                        <center>
                            <p class="ps-about__subtitle">
                                THERE'LL BE 45 CASH PRIZE WINNERS EVERYDAY!
                            </p>
                            <Link
                                :href="route('playNow')"
                                class="btn ps-btn--warning"
                                style="font-size: 20px"
                            >
                                PLAY NOW
                            </Link>
                        </center>
                        <br /><br />
                    </section>
                </div>

                <div class="ps-about__content" style="margin-top: -70px">
                    <section class="mb-5">
                        <img
                            class="img-fluid"
                            src="/assets/img/promotion/shape2.png"
                        />
                    </section>

                    <section class="ps-section--deals">
                        <div class="ps-section__carousel">
                            <div class="ps-section__carousel d-flex">
                                <Carousel
                                    :itemsToShow="5"
                                    :wrapAround="true"
                                    :autoplay="2000"
                                    :transition="300"
                                    :itemsToScroll="1"
                                >
                                    <slide :index="1">
                                        <div class="ps-section__product">
                                            <div
                                                class="ps-product ps-product--standard"
                                            >
                                                <div
                                                    class="ps-product__thumbnail"
                                                >
                                                    <Link
                                                        :href="
                                                            route(
                                                                'monthlyPrices'
                                                            )
                                                        "
                                                        class="ps-product__image"
                                                    >
                                                        <figure>
                                                            <img
                                                                src="assets/img/products/03.jpg"
                                                                alt="alt"
                                                            />
                                                        </figure>
                                                    </Link>
                                                    <div
                                                        class="ps-product__badge"
                                                    ></div>
                                                </div>
                                                <div
                                                    class="ps-product__content"
                                                >
                                                    <center>
                                                        <h5
                                                            class="ps-product__title"
                                                        >
                                                            10k for 5 People
                                                            <br />
                                                            <Link
                                                                :href="
                                                                    route(
                                                                        'playNow'
                                                                    )
                                                                "
                                                                class=""
                                                                id=""
                                                            >
                                                                <span
                                                                    class="btn ps-btn--warning"
                                                                    >PLAY NOW
                                                                </span>
                                                            </Link>
                                                        </h5>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </slide>
                                    <slide :index="2">
                                        <div class="ps-section__product">
                                            <div
                                                class="ps-product ps-product--standard"
                                            >
                                                <div
                                                    class="ps-product__thumbnail"
                                                >
                                                    <Link
                                                        :href="
                                                            route(
                                                                'monthlyPrices'
                                                            )
                                                        "
                                                        class="ps-product__image"
                                                    >
                                                        <figure>
                                                            <img
                                                                src="assets/img/products/03.jpg"
                                                                alt="alt"
                                                            />
                                                        </figure>
                                                    </Link>
                                                    <div
                                                        class="ps-product__badge"
                                                    ></div>
                                                </div>
                                                <div
                                                    class="ps-product__content"
                                                >
                                                    <center>
                                                        <h5
                                                            class="ps-product__title"
                                                        >
                                                            5k for 10 People
                                                            <br />

                                                            <Link
                                                                :href="
                                                                    route(
                                                                        'playNow'
                                                                    )
                                                                "
                                                                class=""
                                                                id=""
                                                            >
                                                                <span
                                                                    class="btn ps-btn--warning"
                                                                    >PLAY NOW
                                                                </span>
                                                            </Link>
                                                        </h5>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </slide>
                                    <slide :index="3">
                                        <div class="ps-section__product">
                                            <div
                                                class="ps-product ps-product--standard"
                                            >
                                                <div
                                                    class="ps-product__thumbnail"
                                                >
                                                    <Link
                                                        :href="
                                                            route(
                                                                'monthlyPrices'
                                                            )
                                                        "
                                                        class="ps-product__image"
                                                    >
                                                        <figure>
                                                            <img
                                                                src="assets/img/products/03.jpg"
                                                                alt="alt"
                                                            />
                                                        </figure>
                                                    </Link>
                                                    <div
                                                        class="ps-product__badge"
                                                    ></div>
                                                </div>
                                                <div
                                                    class="ps-product__content"
                                                >
                                                    <center>
                                                        <h5
                                                            class="ps-product__title"
                                                        >
                                                            2k for 30 People

                                                            <br />

                                                            <Link
                                                                :href="
                                                                    route(
                                                                        'playNow'
                                                                    )
                                                                "
                                                                class=""
                                                                id=""
                                                            >
                                                                <span
                                                                    class="btn ps-btn--warning"
                                                                    >PLAY NOW
                                                                </span>
                                                            </Link>
                                                        </h5>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </slide>
                                    <slide :index="4">
                                        <div class="ps-section__product">
                                            <div
                                                class="ps-product ps-product--standard"
                                            >
                                                <div
                                                    class="ps-product__thumbnail"
                                                >
                                                    <Link
                                                        :href="
                                                            route(
                                                                'monthlyPrices'
                                                            )
                                                        "
                                                        class="ps-product__image"
                                                    >
                                                        <figure>
                                                            <img
                                                                src="assets/img/products/03.jpg"
                                                                alt="alt"
                                                            />
                                                        </figure>
                                                    </Link>
                                                    <div
                                                        class="ps-product__badge"
                                                    ></div>
                                                </div>
                                                <div
                                                    class="ps-product__content"
                                                >
                                                    <center>
                                                        <h5
                                                            class="ps-product__title"
                                                        >
                                                            2k for 30 People

                                                            <br />

                                                            <Link
                                                                :href="
                                                                    route(
                                                                        'playNow'
                                                                    )
                                                                "
                                                                class=""
                                                                id=""
                                                            >
                                                                <span
                                                                    class="btn ps-btn--warning"
                                                                    >PLAY NOW
                                                                </span>
                                                            </Link>
                                                        </h5>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </slide>
                                    <slide :index="5">
                                        <div class="ps-section__product">
                                            <div
                                                class="ps-product ps-product--standard"
                                            >
                                                <div
                                                    class="ps-product__thumbnail"
                                                >
                                                    <Link
                                                        :href="
                                                            route(
                                                                'monthlyPrices'
                                                            )
                                                        "
                                                        class="ps-product__image"
                                                    >
                                                        <figure>
                                                            <img
                                                                src="assets/img/products/03.jpg"
                                                                alt="alt"
                                                            />
                                                        </figure>
                                                    </Link>
                                                    <div
                                                        class="ps-product__badge"
                                                    ></div>
                                                </div>
                                                <div
                                                    class="ps-product__content"
                                                >
                                                    <center>
                                                        <h5
                                                            class="ps-product__title"
                                                        >
                                                            2k for 30 People

                                                            <br />

                                                            <Link
                                                                :href="
                                                                    route(
                                                                        'playNow'
                                                                    )
                                                                "
                                                                class=""
                                                                id=""
                                                            >
                                                                <span
                                                                    class="btn ps-btn--warning"
                                                                    >PLAY NOW
                                                                </span>
                                                            </Link>
                                                        </h5>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </slide>
                                    <slide :index="6">
                                        <div class="ps-section__product">
                                            <div
                                                class="ps-product ps-product--standard"
                                            >
                                                <div
                                                    class="ps-product__thumbnail"
                                                >
                                                    <Link
                                                        :href="
                                                            route(
                                                                'monthlyPrices'
                                                            )
                                                        "
                                                        class="ps-product__image"
                                                    >
                                                        <figure>
                                                            <img
                                                                src="assets/img/products/03.jpg"
                                                                alt="alt"
                                                            />
                                                        </figure>
                                                    </Link>
                                                    <div
                                                        class="ps-product__badge"
                                                    ></div>
                                                </div>
                                                <div
                                                    class="ps-product__content"
                                                >
                                                    <center>
                                                        <h5
                                                            class="ps-product__title"
                                                        >
                                                            2k for 30 People

                                                            <br />

                                                            <Link
                                                                :href="
                                                                    route(
                                                                        'playNow'
                                                                    )
                                                                "
                                                                class=""
                                                                id=""
                                                            >
                                                                <span
                                                                    class="btn ps-btn--warning"
                                                                    >PLAY NOW
                                                                </span>
                                                            </Link>
                                                        </h5>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </slide>
                                </Carousel>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <br />
            <hr />

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
import Header from "./homeHeader.vue";
import Footer from "./Footer.vue";
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";

export default {
    name: "HowToWin",
    data() {
        return {
            ticket_id: "WG-",
        };
    },

    components: {
        Link,
        Head,
        Footer,
        Header,
        Carousel,
        Slide,
        Pagination,
        Navigation,
    },
    computed: {},
    methods: {
        emptyTicket() {
            this.$swal("Please Enter A Valid Ticket Id");
        },
    },
    mounted() {},

    beforeMount() {},
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
