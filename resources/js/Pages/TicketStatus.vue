<template>
    <div>
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
                            Ticket Status
                        </li>
                    </ul>

                    <div class="ps-page__content">
                        <div class="ps-product--detail">
                            <section class="ps-section--latest">
                                <div class="">
                                    <h2 class="ps-section__title">
                                        Ticket Status
                                    </h2>
                                </div>
                                <div class="ticket-status">
                                    <div class="ps-product__feature">
                                        <div
                                            class="ps-product__meta text-center"
                                            v-if="ticket"
                                        >
                                            <span
                                                class="ps-product__price sale"
                                                v-if="ticket.status == 'won'"
                                                >Congratulations!!!</span
                                            >
                                            <span
                                                class="ps-product__price sale"
                                                v-else
                                                >Bump!!!</span
                                            >
                                        </div>

                                        <div
                                            class="ps-product__meta text-center"
                                            v-else
                                        >
                                            <span class="ps-product__price sale"
                                                >We are Sorry</span
                                            >
                                        </div>
                                        <div class="ps-product__variable">
                                            <div
                                                class="ps-product__attribute text-center mb-5"
                                                v-if="ticket"
                                            >
                                                <h6
                                                    v-if="
                                                        ticket.status == 'won'
                                                    "
                                                >
                                                    Your ticket
                                                    {{ searchItem }} won daily
                                                    draw. Our representative
                                                    will contact you through
                                                    your phone number
                                                </h6>

                                                <h6 v-else>
                                                    Your ticket
                                                    {{ searchItem }} is still
                                                    active for the monthly draw,
                                                    but did not win for today's
                                                    draw.
                                                    <br />
                                                    <br />
                                                    <span class="status-small">
                                                        Play for tomorrow's draw
                                                    </span>
                                                </h6>
                                            </div>

                                            <div
                                                class="ps-product__attribute text-center mb-5"
                                                v-else
                                            >
                                                <h6>
                                                    Ticket {{ searchItem }} not
                                                    Found. Confirm the ticket ID
                                                    and try again.
                                                </h6>
                                            </div>
                                        </div>
                                        <Link
                                            :href="route('playNow')"
                                            class="ps-btn ps-btn--warning"
                                        >
                                            Play More
                                        </Link>
                                    </div>
                                </div>
                            </section>
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
    </div>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Header from "./homeHeader.vue";
import Footer from "./Footer.vue";

export default {
    name: "TicketStatus",
    data() {
        return {
            ticket: this.$page.props.ticket,
            searchItem: this.$inertia.page.url.substring(
                15,
                this.$inertia.page.url.length
            ),
            ticket_id: "WG-",
        };
    },

    components: {
        Link,
        Head,
        Footer,
        Header,
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
@media screen and (min-width: 600px) {
    .ticket-status {
        width: 35%;
        margin: 0 auto;
    }
}

@media screen and (max-width: 992px) {
    .ticket-status {
        width: 100%;
        margin: 0 auto;
    }
}

.status-small {
    font-style: italic !important;
    font-size: 16 !important;
    font-weight: 900 !important;
}
</style>
