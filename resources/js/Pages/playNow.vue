<template>

<div class="page-wrapper" style="background-color: #0f0232;color:white !important">
      <!-- login modal -->
      <Modal/>

      <!-- header-section start  -->
      <Header />
      <!-- header-section end  -->

      <!-- inner-hero-section start -->
      <div class="inner-hero-section">
        <div class="bg-shape">
          <img src="images/elements/inner-hero-shape.png" alt="image" />
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <ul class="page-list">
                <li><a href="index.html">Home</a></li>
                <li class="active">Play Now</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- inner-hero-section end -->

      <!-- checkout section start -->
      <section class="pb-120 mt-minus-300">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="checkout-area">
                <div class="row">
                  <div class="col-lg-7">
                    <div class="checkout-form-area">
                      <!-- personal-details end -->
                      <div class="payment-details">
                        <h3 class="title">Play Now</h3>
                        <form class="payment-form">
                          <div class="form-row">
                            <div class="form-group col-lg-12">
                              <label>Phone Number *</label>
                              <input type="tel" v-model="phone" placeholder="Enter Phone Number" />
                            </div>


                            <div class="form-group col-lg-12">
                              <label>Select an Amount to PLAY</label>
                              <p class="mb-0">
                                <div
                                    class="form-check form-check-inline"
                                >
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="priceRadio"
                                        id="inlineRadio1"
                                        value="100"
                                        v-model="amount"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="inlineRadio1"
                                        >₦100</label
                                    >
                                </div>
                                <div
                                    class="form-check form-check-inline"
                                >
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="priceRadio"
                                        id="inlineRadio2"
                                        value="200"
                                        v-model="amount"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="inlineRadio2"
                                        >₦200</label
                                    >
                                </div>
                                <div
                                    class="form-check form-check-inline"
                                >
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="priceRadio"
                                        id="inlineRadio3"
                                        value="500"
                                        v-model="amount"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="inlineRadio3"
                                        >₦500</label
                                    >
                                </div>

                              </p>
                            </div>

                            <div class="form-group col-lg-6">
                              <label>Play Amount *</label>
                              <input type="text" placeholder="₦5,000" v-model="playAmount" />
                            </div>
                            <div class="form-group col-lg-6">
                              <label>Referral Code (Optional)</label>
                              <input type="text" placeholder="Enter Referral Code" v-model="refCode"/>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- checkout-form-area end -->
                  </div>
                  <div class="col-lg-5 mt-lg-0 mt-4">
                    <div class="checkout-wrapper">
                        <div class="checkout-wrapper__header">
                          <h3>Order Summary</h3>
                        </div>
                        <div class="checkout-wrapper__body">
                          <ul class="price">
                            <li>
                              <div class="left">
                                <h5 class="caption">Phone Number</h5>
                              </div>
                              <div class="right">
                                <span class="price">{{this.phone}}</span>
                              </div>
                            </li>
                            <li>
                              <div class="left">
                                <h5 class="caption">Ticket Amount</h5>
                              </div>
                              <div class="right">
                                <span class="price">{{this.amount}}</span>
                              </div>
                            </li>
                            <li>
                              <div class="left">
                                <h5 class="caption">Play Amount</h5>
                              </div>
                              <div class="right">
                                <span class="price">{{this.playAmount}}</span>
                              </div>
                            </li>
                            <li>
                              <div class="left">
                                <h4 class="caption">No. of Ticket(s)</h4>
                              </div>
                              <div class="right">
                                <span class="price">{{Math.floor(this.playAmount /this.amount)}}</span>
                              </div>
                            </li>
                          </ul>

                            <div class="ps-checkout__payment">
                                <div class="paypal-method">
                                    <h3>
                                        <div
                                            class="form-check form-check-inline"
                                        >
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="inlineRadioOptions"
                                                id="inlineRadio7"
                                                v-model="paymentMethod"
                                                value="paystack"
                                                checked
                                            />
                                            <label
                                                class="form-check-label"
                                                for="inlineRadio7"
                                                ><img
                                                    class="img-fluid"
                                                    src="/assets/img/paystack.png"
                                            /></label>
                                        </div>
                                        <div
                                            class="form-check form-check-inline"
                                            v-if="this.flutterSet"
                                        >
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="inlineRadioOptions"
                                                id="inlineRadio8"
                                                v-model="paymentMethod"
                                                value="flutterwave"
                                            />
                                            <label
                                                class="form-check-label"
                                                for="inlineRadio8"
                                                ><img
                                                    class="img-fluid"
                                                    src="/assets/img/flutterwave.png"
                                            /></label>
                                        </div>
                                    </h3>
                                </div>
                                <div class="check-faq">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="agree-faq"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="agree-faq"
                                        >
                                            I have read and agree to the
                                            website terms and conditions
                                            *</label
                                        >
                                    </div>
                                </div>

                                <div class="checkout-wrapper__btn mt-minus-20">
                                    <button
                                        v-if="
                                            this.paymentMethod !=
                                            'flutterwave'
                                        "
                                        class="cmn-btn"
                                        @click="payWithPaystack()"
                                    >
                                        Place order
                                    </button>

                                    <button
                                        v-if="this.flutterSet"
                                        class="cmn-btn"
                                        @click="payWithRave()"
                                    >
                                        Place order
                                    </button>
                                </div>

                            </div>
                        </div>
                      </div><!-- checkout-wrapper end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- checkout section end -->

      <!-- footer section start  -->
      <Footer />
      <!-- footer section end -->
    </div>
    <!-- <div>
        <div class="ps-page">
            <Header />

            <h4 class="countDownDays d-none" style="font-size: 40px"></h4>
            <h4 class="countDownDays2 d-none" style="font-size: 40px"></h4>

            <div class="ps-checkout">
                <div class="container">
                    <ul class="ps-breadcrumb">
                        <li class="ps-breadcrumb__item">
                            <Link :href="route('home')"> Home </Link>
                        </li>
                        <li
                            class="ps-breadcrumb__item active"
                            aria-current="page"
                        >
                            Play Now
                        </li>
                    </ul>

                    <div class="ps-checkout__content">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="ps-checkout__form">
                                    <div class="container">
                                        <h3 class="ps-checkout__heading">
                                            Play Now
                                        </h3>
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="ps-checkout__group mb-5"
                                                >
                                                    <label
                                                        class="ps-checkout__label"
                                                        >Phone Number *</label
                                                    >
                                                    <input
                                                        class="ps-input"
                                                        type="tel"
                                                        placeholder="08001234567"
                                                        v-model="phone"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label
                                                    class="ps-checkout__label"
                                                    >Select an Amount to
                                                    PLAY</label
                                                >
                                                <h3 class="mb-5">
                                                    <div
                                                        class="form-check form-check-inline"
                                                    >
                                                        <input
                                                            class="form-check-input"
                                                            type="radio"
                                                            name="priceRadio"
                                                            id="inlineRadio1"
                                                            value="100"
                                                            v-model="amount"
                                                        />
                                                        <label
                                                            class="form-check-label"
                                                            for="inlineRadio1"
                                                            >₦100</label
                                                        >
                                                    </div>
                                                    <div
                                                        class="form-check form-check-inline"
                                                    >
                                                        <input
                                                            class="form-check-input"
                                                            type="radio"
                                                            name="priceRadio"
                                                            id="inlineRadio2"
                                                            value="200"
                                                            v-model="amount"
                                                        />
                                                        <label
                                                            class="form-check-label"
                                                            for="inlineRadio2"
                                                            >₦200</label
                                                        >
                                                    </div>
                                                    <div
                                                        class="form-check form-check-inline"
                                                    >
                                                        <input
                                                            class="form-check-input"
                                                            type="radio"
                                                            name="priceRadio"
                                                            id="inlineRadio3"
                                                            value="500"
                                                            v-model="amount"
                                                        />
                                                        <label
                                                            class="form-check-label"
                                                            for="inlineRadio3"
                                                            >₦500</label
                                                        >
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div
                                                    class="ps-checkout__group mb-5"
                                                >
                                                    <label
                                                        class="ps-checkout__label"
                                                        >Play Amount *</label
                                                    >
                                                    <input
                                                        class="ps-input"
                                                        type="number"
                                                        placeholder="₦5,000"
                                                        v-model="playAmount"
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div
                                                    class="ps-checkout__group mb-5"
                                                >
                                                    <label
                                                        class="ps-checkout__label"
                                                        >Referral Code
                                                        (Optional)</label
                                                    >
                                                    <input
                                                        class="ps-input mb-3"
                                                        type="text"
                                                        placeholder="Enter Referral Code"
                                                        v-model="refCode"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="ps-checkout__order">
                                    <h3 class="ps-checkout__heading">
                                        Order Summary
                                    </h3>
                                    <div class="ps-checkout__row">
                                        <div class="ps-title">Phone Number</div>
                                        <div class="ps-title">
                                            <label class="ps-checkout__label">{{
                                                this.phone
                                            }}</label>
                                        </div>
                                    </div>
                                    <div class="ps-checkout__row">
                                        <div class="ps-title">
                                            Ticket Amount
                                        </div>
                                        <div class="ps-title">
                                            <label class="ps-checkout__label">{{
                                                this.amount
                                            }}</label>
                                        </div>
                                    </div>
                                    <div class="ps-checkout__row">
                                        <div class="ps-title">Play Amount</div>
                                        <div class="ps-title">
                                            <label class="ps-checkout__label">{{
                                                this.playAmount
                                            }}</label>
                                        </div>
                                    </div>
                                    <div class="ps-checkout__row">
                                        <div class="ps-title">
                                            No. of Ticket(s)
                                        </div>
                                        <div class="ps-title">
                                            <label class="ps-checkout__label">{{
                                                Math.floor(
                                                    this.playAmount /
                                                        this.amount
                                                )
                                            }}</label>
                                        </div>
                                    </div>
                                    <div class="ps-checkout__payment">
                                        <div class="paypal-method">
                                            <h3>
                                                <div
                                                    class="form-check form-check-inline"
                                                >
                                                    <input
                                                        class="form-check-input"
                                                        type="radio"
                                                        name="inlineRadioOptions"
                                                        id="inlineRadio7"
                                                        v-model="paymentMethod"
                                                        value="paystack"
                                                        checked
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="inlineRadio7"
                                                        ><img
                                                            class="img-fluid"
                                                            src="/assets/img/paystack.png"
                                                    /></label>
                                                </div>
                                                <div
                                                    class="form-check form-check-inline"
                                                    v-if="this.flutterSet"
                                                >
                                                    <input
                                                        class="form-check-input"
                                                        type="radio"
                                                        name="inlineRadioOptions"
                                                        id="inlineRadio8"
                                                        v-model="paymentMethod"
                                                        value="flutterwave"
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="inlineRadio8"
                                                        ><img
                                                            class="img-fluid"
                                                            src="/assets/img/flutterwave.png"
                                                    /></label>
                                                </div>
                                            </h3>
                                        </div>
                                        <div class="check-faq">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="agree-faq"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="agree-faq"
                                                >
                                                    I have read and agree to the
                                                    website terms and conditions
                                                    *</label
                                                >
                                            </div>
                                        </div>

                                        <div id="payment-failed">
                                            Uh-oh. Please try again, or contact
                                            support if you're encountering
                                            difficulties making payment.
                                        </div>
                                        <div id="payment-success">
                                            Thank you! Enjoy your awesome
                                            cruise.🚢
                                        </div>
                                        <div id="payment-pending">
                                            Verifying...Setting up your cruise🚢
                                        </div>

                                        <button
                                            v-if="
                                                this.paymentMethod !=
                                                'flutterwave'
                                            "
                                            class="ps-btn ps-btn--warning"
                                            @click="payWithPaystack()"
                                        >
                                            Place order
                                        </button>

                                        <button
                                            v-if="this.flutterSet"
                                            class="ps-btn ps-btn--warning"
                                            @click="payWithRave()"
                                        >
                                            Place order
                                        </button>
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
                        />
                        <div class="input-group-append">
                            <a href="#"><i class="fa fa-search"></i></a>
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
import { mapGetters, mapActions } from "vuex";
import PaystackPop from "@paystack/inline-js";

export default {
    name: "PlayNow",
    data() {
        return {
            amount: 500,
            paymentMethod: "",
            phone: "",
            refCode: "",
            playAmount: 2000,
            response: "",
            error: "",
            flutterSet: false,
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
        ...mapActions([
            "getAgent",
            "paystackCreatePurchase",
            "raveCreatePurchase",
        ]),
        async payWithPaystack(e) {
            console.log("yes");

            if (this.phone == "") {
                this.$swal("Phone number is required for this operation.");
                return;
            }

            if (Math.floor(this.playAmount / this.amount) < 1) {
                this.$swal("Play amount is less than single ticket amount");
                return;
            }

            var ref =
                "" +
                Math.floor(Math.random() * 1000000000 + 1) +
                "" +
                this.phone +
                "" +
                Math.floor(Date.now() / 1000);

            const paystack = new PaystackPop();
            paystack.newTransaction({
                key: "pk_live_0380b509184fd16de575eb82b333ad89b510c8b4",
                email: "westendnig@gmail.com",
                amount: this.playAmount * 100,
                ref: ref,
                onSuccess: (transaction) => {
                    console.log(transaction.status);
                    if (transaction.status == "success") {
                        this.paystackCreatePurchase({
                            phone: this.phone,
                            referral: this.referral,
                            amount: this.amount,
                            playAmount: this.playAmount,
                            platform: "paystack",
                            ref: transaction.reference,
                            status: 1,
                        });

                        this.phone = "";
                        this.refCode = "";
                        this.playAmount = "";

                        this.$swal("Ticket(s) Played Successfully");
                    }

                    console.log(transaction);
                },
                onCancel: () => {
                    console.log("Payment Cancelled");
                },
            });
        },

        payWithRave() {
            if (this.phone == "") {
                this.$swal("Phone number is required for this operation.");
                return;
            }

            if (Math.floor(this.playAmount / this.amount) < 1) {
                this.$swal("Play amount is less than single ticket amount");
                return;
            }

            var ref =
                "" +
                Math.floor(Math.random() * 1000000000 + 1) +
                "" +
                this.phone +
                "" +
                Math.floor(Date.now() / 1000);

            this.raveCreatePurchase({
                phone: this.phone,
                referral: this.referral,
                amount: this.amount,
                playAmount: this.playAmount,
                platform: "flutterwave",
                ref: ref,
                status: 0,
            });
            FlutterwaveCheckout({
                public_key: "FLWPUBK_TEST-0d925f9ff6a4f0252310ba75c859f8a7-X",
                tx_ref: ref,
                amount: this.playAmount,
                currency: "NGN",
                redirect_url: "http://localhost:8000/api/rave/playTicket",
                payment_options: "card, mobilemoneyghana, ussd",
                callback: function (payment) {
                    console.log(payment);
                },
                onclose: function (incomplete) {
                    if (incomplete || window.verified === false) {
                        document.querySelector(
                            "#payment-failed"
                        ).style.display = "block";
                    } else {
                        document.querySelector("form").style.display = "none";
                        if (window.verified == true) {
                            document.querySelector(
                                "#payment-success"
                            ).style.display = "block";
                        } else {
                            document.querySelector(
                                "#payment-pending"
                            ).style.display = "block";
                        }
                    }
                },
                meta: {
                    consumer_id: this.phone,
                    consumer_mac: "92a3-912ba-1192a",
                },
                customer: {
                    email: "tobechukwuonuigbo@gmail.com",
                    phone_number: this.phone,
                    name: "WestEnd Play Ticket",
                },
                customizations: {
                    title: "WestEnd Gaming Limited",
                    description: "Payment for Wallet Fund By Agent",
                    logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
                },
            });
        },
    },
    mounted() {
        if (document.querySelector(".ticketBags").value != "") {
            this.$swal(document.querySelector(".ticketBags").value);
        }
    },

    beforeMount() {},
};
</script>

<style scoped>
.start-payment-button {
    cursor: pointer;
    position: relative;
    background-color: blueviolet;
    color: #fff;
    max-width: 30%;
    padding: 10px;
    font-weight: 600;
    font-size: 14px;
    border-radius: 10px;
    border: none;
    transition: all 0.1s ease-in;
}

#payment-success {
    display: none;
}

#payment-pending {
    display: none;
}

#payment-failed {
    display: none;
}

.caption{
    color:white !important;
}
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
