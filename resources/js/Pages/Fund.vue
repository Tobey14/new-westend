<template>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <Sidebar />
        <h4 class="countDownDays d-none" style="font-size: 40px"></h4>
        <h4 class="countDownDays2 d-none" style="font-size: 40px"></h4>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="mb-3 mt-1">
                        <div style="font-family: 'Poppins'" class="text-center">
                            <h2 class="mt-3">Fund Your Wallet</h2>
                        </div>
                    </div>

                    <div class="row mb-3 cardDiv">
                        <form id="paymentForm" class="col-md-6">
                            <div class="form-group col-4">
                                <label for="email">Email Address</label>
                                <input
                                    type="email"
                                    class="inputRef"
                                    id="email-address"
                                    required
                                    v-model="agent.email"
                                />
                            </div>

                            <div class="form-group col-4">
                                <label for="amount">Enter Amount</label>
                                <input
                                    type="tel"
                                    class="inputRef"
                                    id="amount"
                                    required
                                    placeholder="Enter Amount"
                                    v-model="this.amount"
                                />
                            </div>

                            <div class="form-group col-4">
                                <label for="first-name">Name</label>
                                <input
                                    type="text"
                                    class="inputRef"
                                    id="first-name"
                                    v-model="agent.name"
                                />
                            </div>
                        </form>

                        <div class="ps-checkout__order col-md-6">
                            <h3 class="ps-checkout__heading">
                                Funding Summary
                            </h3>
                            <div class="ps-checkout__row">
                                <div class="ps-title"><b> Phone Number</b></div>
                                <div class="ps-title">
                                    <label class="ps-checkout__label">{{
                                        agent.phone
                                    }}</label>
                                </div>
                            </div>

                            <div class="ps-checkout__row">
                                <div class="ps-title"><b> Amount</b></div>
                                <div class="ps-title">
                                    <label class="ps-checkout__label"
                                        >₦{{ amount }}</label
                                    >
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
                                                checked
                                                name="inlineRadioOptions"
                                                id="inlineRadio7"
                                                v-model="paymentMethod"
                                                value="paystack"
                                            />
                                            <label
                                                class="form-check-label"
                                                for="inlineRadio7"
                                                ><img
                                                    class="img-fluid"
                                                    src="assets/img/paystack.png"
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
                                                    style="
                                                        height: 25px;
                                                        width: 100px;
                                                    "
                                                    src="assets/img/flutterwave.png"
                                            /></label>
                                        </div>
                                    </h3>
                                </div>

                                <div
                                    v-if="$page.props.flash.message"
                                    class="alert"
                                >
                                    {{ $page.props.flash.message }}
                                </div>

                                <button
                                    v-if="this.paymentMethod != 'flutterwave'"
                                    class="ps-btn ps-btn--warning"
                                    @click="payWithPaystack()"
                                >
                                    Fund Account
                                </button>

                                <button
                                    v-if="this.flutterSet"
                                    class="ps-btn ps-btn--warning"
                                    @click="payWithRave()"
                                >
                                    Fund Account
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <Footer></Footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import Footer from "./agent/agentFooter.vue";
import Sidebar from "./agent/sidebar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import PaystackPop from "@paystack/inline-js";

export default {
    name: "Dashboard",
    data() {
        return {
            amount: 500,
            paymentMethod: "",
            response: "",
            error: "",
            flutterSet: false,
        };
    },
    components: {
        Sidebar,
        Link,
        Footer,
    },
    computed: {
        ...mapGetters(["agentWallet", "agentData", "agent"]),
    },

    methods: {
        ...mapActions(["getAgent", "paystackFundWallet", "raveFundWallet"]),
        async payWithPaystack() {
            var ref =
                "" +
                Math.floor(Math.random() * 1000000000 + 1) +
                "" +
                this.agentWallet.id +
                "" +
                Math.floor(Date.now() / 1000);

            const paystack = new PaystackPop();
            paystack.newTransaction({
                key: "pk_live_0380b509184fd16de575eb82b333ad89b510c8b4",
                email: this.agent.email,
                amount: this.amount * 100,
                ref: ref,
                onSuccess: (transaction) => {
                    if (transaction.status == "success") {
                        this.paystackFundWallet({
                            agent: this.agent.id,
                            wallet: this.agentWallet.id,
                            amount: this.amount,
                            platform: "paystack",
                            ref: transaction.reference,
                            status: "successful",
                        });

                        this.getAgent(this.$page.props.user.id);

                        this.$swal("Funding Successful");
                    }

                    console.log(transaction);
                },
                onCancel: () => {
                    console.log("Payment Cancelled");
                },
            });
        },

        payWithRave() {
            var ref =
                "" +
                Math.floor(Math.random() * 1000000000 + 1) +
                "" +
                this.agentWallet.id +
                "" +
                Math.floor(Date.now() / 1000);

            this.raveFundWallet({
                agent: this.agent.id,
                wallet: this.agentWallet.id,
                amount: this.amount,
                platform: "flutterwave",
                ref: ref,
                status: "processing",
            });
            FlutterwaveCheckout({
                public_key: "FLWPUBK_TEST-0d925f9ff6a4f0252310ba75c859f8a7-X",
                tx_ref: ref,
                amount: this.amount,
                currency: "NGN",
                redirect_url: "http://localhost:8000/api/agent/funded",
                payment_options: "card, mobilemoneyghana, ussd",
                callback: function (payment) {},
                onclose: function (incomplete) {
                    this.$swal("Funding Failed");
                },
                meta: {
                    consumer_id: this.agent.id,
                    consumer_mac: "92a3-912ba-1192a",
                },
                customer: {
                    email: this.agent.email,
                    phone_number: this.agent.phone,
                    name: this.agent.name,
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
        if (document.querySelector(".errorBags").value != "") {
            this.$swal(document.querySelector(".errorBags").value);
        }
    },

    beforeMount() {},
};
</script>
<style scoped>
h4,
p,
table {
    font-size: 20px !important;
}
.inputRef {
    width: 250px;
    height: 40px;
    font-size: 13px;
    border: 1px solid grey;
    font-size: 17px;
}
.ps-title {
    font-size: 18px;
}

.cardDiv {
    background: #e6ebe7;
    border: 1px solid black;
    border-radius: 10px;
    padding-top: 20px;
    padding-bottom: 20px;
    width: 80%;
    margin: auto;
}
@media screen and (max-width: 850px) {
    .cardDiv {
        width: 100%;
    }
}

@media screen and (max-width: 330px) {
    .inputRef {
        width: 200px;
    }
}

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
</style>
