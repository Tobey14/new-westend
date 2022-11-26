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
                <li class="active">Become an Agent</li>
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
                  <span class="section-sub-title">Boost Your Earnings</span>
                  <h2 class="section-title font-weight-bold">
                    Become an Agent
                  </h2>
                  <a href="" class="cmn-btn text-capitalize mt-4">Sign Up</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- affiliate single section end -->

      <!-- how it work section start  -->
      <section class="pt-20 pb-20">
        <div class="container">
          <div class="blog-single__body">
            <h4 class="title">Becoming Westend Agent</h4>
            <p>
              Westend offers you the opportunity to become your own boss and
              make extra income by signing up as one of our agents.
            </p>
            <p>&nbsp;</p>
            <p>
              As a Westend agent, you’ll get instant ₦1,000 immediately you
              download the Westend app and make your first deposit. It doesn’t
              end there; you’ll also enjoy a 50% bonus of your first deposit and
              even more! Check out the benefits of a Westend agent below:
            </p>
            <h4 class="title">Benefits of Westend Agent</h4>
            <p>
              Are you an entrepreneur and willing to make extra income by
              helping people win with Westend? Don’t miss this opportunity.
              Promote a unique brand with premium products and enjoy amazing
              rewards.
            </p>
            <p>&nbsp;</p>
            <p>
              You have a lot to gain as a Westend agent, and we have
              professionals with years of experience to help you get started.
            </p>
            <h4 class="title">Advantages:</h4>
            <ul class="user-action-list">
              <li>First deposit bonus. You earn 50% of your first deposit.</li>
              <li>
                Commissions for daily sales. You earn 20% commission of all your
                daily sales.
              </li>
              <li>
                Zero risk or liability for any winning, rather you earn 10% of
                the winning played through you.
              </li>
              <li>
                Automatically get ₦1,000 immediately you download the Westend
                app and make your first deposit.
              </li>
            </ul>
            <h4 class="title">Requirements:</h4>
            <ul class="user-action-list">
              <li>No set-up support or hardware is required</li>
              <li>Anyone can be a Westend agent, you must be 18+ to join.</li>
            </ul>
            <p>&nbsp;</p>
            <a href="" class="cmn-btn text-capitalize mt-4">Sign Up Now</a>
            <p>&nbsp;</p>
          </div>
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
                            <Link :href="route('becomeAgent')">
                                Become an Agent
                            </Link>
                        </li>
                    </ul>

                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="col-12 col-xl-5">
                                    <div class="ps-product--gallery">
                                        <div
                                            class="ps-product__thumbnail d-block"
                                        >
                                            <div class="d-block">
                                                <img
                                                    src="./shape1a.png"
                                                    alt="alt"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7">
                                    <div class="ps-product__info">
                                        <h2 class="ps-about__title">
                                            Becoming Westend Agent
                                        </h2>
                                        <div class="tab-content">
                                            <p class="ps-desc ps-desc-new">
                                                Westend offers you the
                                                opportunity to become your own
                                                boss and make extra income by
                                                signing up as one of our agents.
                                            </p>
                                            <p class="ps-desc ps-desc-new">
                                                As a Westend agent, you’ll get
                                                instant ₦1,000 immediately you
                                                download the Westend app and
                                                make your first deposit. It
                                                doesn’t end there; you’ll also
                                                enjoy a 50% bonus of your first
                                                deposit and even more! Check out
                                                the benefits of a Westend agent
                                                below:
                                            </p>
                                            <p>&nbsp;</p>
                                            <h2 class="ps-about__title">
                                                Benefits of Westend Agent
                                            </h2>
                                            <p class="ps-desc ps-desc-new">
                                                Are you an entrepreneur and
                                                willing to make extra income by
                                                helping people win with Westend?
                                                Don’t miss this opportunity.
                                                Promote a unique brand with
                                                premium products and enjoy
                                                amazing rewards.
                                            </p>
                                            <p class="ps-desc ps-desc-new">
                                                You have a lot to gain as a
                                                Westend agent, and we have
                                                professionals with years of
                                                experience to help you get
                                                started.
                                            </p>
                                        </div>
                                        <p>&nbsp;</p>
                                        <div class="ps-product__type">
                                            <h2>
                                                <span class="ps-list__title"
                                                    >Advantages:
                                                </span>
                                            </h2>
                                            <div class="ps-bought__content">
                                                <ul class="ps-bought__list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                id="product0"
                                                                checked="checked"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="product0"
                                                                ><span
                                                                    class="ps-bought__name"
                                                                    >First
                                                                    deposit
                                                                    bonus. You
                                                                    earn 50% of
                                                                    your first
                                                                    deposit.
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                id="product1"
                                                                checked="checked"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="product1"
                                                                ><span
                                                                    class="ps-bought__name"
                                                                >
                                                                    Commissions
                                                                    for daily
                                                                    sales. You
                                                                    earn 20%
                                                                    commission
                                                                    of all your
                                                                    daily sales.
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                id="product2"
                                                                checked="checked"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="product2"
                                                                ><span
                                                                    class="ps-bought__name"
                                                                >
                                                                    Zero risk or
                                                                    liability
                                                                    for any
                                                                    winning,
                                                                    rather you
                                                                    earn 10% of
                                                                    the winning
                                                                    played
                                                                    through you.
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                id="product3"
                                                                checked="checked"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="product3"
                                                                ><span
                                                                    class="ps-bought__name"
                                                                >
                                                                    Automatically
                                                                    get ₦1,000
                                                                    immediately
                                                                    you download
                                                                    the Westend
                                                                    app and make
                                                                    your first
                                                                    deposit.
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>&nbsp;</p>
                                            <h2>
                                                <span class="ps-list__title"
                                                    >Requirements:
                                                </span>
                                            </h2>
                                            <div class="ps-bought__content">
                                                <ul class="ps-bought__list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                id="product0"
                                                                checked="checked"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="product0"
                                                                ><span
                                                                    class="ps-bought__name"
                                                                    >No set-up
                                                                    support or
                                                                    hardware is
                                                                    required
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                id="product1"
                                                                checked="checked"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="product1"
                                                                ><span
                                                                    class="ps-bought__name"
                                                                >
                                                                    Anyone can
                                                                    be a Westend
                                                                    agent, you
                                                                    must be 18+
                                                                    to join.
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>&nbsp;</p>
                                            <h2>
                                                <span class="ps-list__title"
                                                    >Support:
                                                </span>
                                            </h2>
                                            <div class="ps-bought__content">
                                                <ul class="ps-bought__list">
                                                    <li>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                id="product0"
                                                                checked="checked"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="product0"
                                                                ><span
                                                                    class="ps-bought__name"
                                                                    >Contact us
                                                                    on
                                                                    <a
                                                                        href="mailto:info@westendnig.com"
                                                                        >info@westendnig.com</a
                                                                    >
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>&nbsp;</p>
                                                <div class="ps-bought__submit">
                                                    <Link
                                                        :href="
                                                            route('register')
                                                        "
                                                        class="ps-btn ps-btn--warning"
                                                    >
                                                        SIGNUP NOW
                                                    </Link>
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
import Modal from "./modals.vue";

export default {
    name: "becomeAgent",
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
        Modal,
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

<style scoped></style>
