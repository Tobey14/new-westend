<template>

    <!-- header-section start  -->
    <header class="header">
        <div class="header__top">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-6">
                <div class="left d-flex align-items-center">
                  <a href="tel:65655655" style="color:white;"
                    ><i class="las la-phone-volume"></i> Customer Support</a
                  >
                  <div class="language">
                    <i class="las la-globe-europe"></i>
                    <select>
                      <option>En</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="right">
                  <div class="product__cart">
                    <span class="total__amount">Need help? 08027274500</span>
                  </div>
                  <Link :href="route('login')"
                    class="user__btn"
                     v-if="$page.props.user"
                    ><i class="las la-user"></i
                  ></Link>

                  <a
                    href="#0"
                    class="user__btn"
                    data-toggle="modal"
                    data-target="#loginModal" v-else
                    ><i class="las la-user"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- header__top end -->
        <div class="header__bottom">
          <div class="container">
            <nav class="navbar navbar-expand-xl p-0 align-items-center">
                <Link :href="route('home')" class="site-logo site-title">
                    <img src="img/logo-sm.png" alt="site-logo" /><span
                    class="logo-icon"
                    ><i class="flaticon-fire"></i></span
              ></Link>
              <button
                class="navbar-toggler ml-auto"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="menu-toggle"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav main-menu ml-auto">
                  <li><Link :href="route('home')">Home</Link></li>
                  <li><Link :href="route('howtowin')">How to Win</Link></li>
                  <li class="menu_has_children">
                    <a href="#0">Prizes</a>
                    <ul class="sub-menu">
                      <li><Link :href="route('dailyPrices')">Daily Prizes</Link></li>
                      <li>
                        <Link :href="route('monthlyPrices')">Monthly Prizes</Link>
                      </li>
                    </ul>
                  </li>
                  <li><Link :href="route('becomeAgent')">Become an Agent</Link></li>
                </ul>
                <div class="nav-right">
                    <Link :href="route('playNow')" class="cmn-btn style--three btn--sm"
                    ><img
                      src="images/icon/btn/tag.png"
                      alt="icon"
                      class="mr-2"
                    />
                    Buy Tickets</Link
                  >
                </div>
              </div>
            </nav>
          </div>
        </div>
        <!-- header__bottom end -->
      </header>
      <!-- header-section end  -->
    <!-- <header class="ps-header ps-header--1">
        <div class="ps-noti">
            <div class="container">
                <p class="m-0">
                    THE MORE YOU <strong>PLAY</strong>. THE MORE YOUR CHANCES OF
                    <strong>WINNING !!</strong>
                </p>
            </div>
            <a class="ps-noti__close"><i class="icon-cross"></i></a>
        </div>

        <div class="ps-header__middle">
            <div class="container">
                <div class="ps-logo">
                    <Link :href="route('home')">
                        <img src="../../../public/assets/img/logo.png" alt />

                        <img
                            class="sticky-logo"
                            src="../../../public/assets/img/logo.png"
                            alt
                    /></Link>
                </div>
                <a class="ps-menu--sticky"><i class="fa fa-bars"></i></a>
                <div class="ps-header__right">
                    <ul class="ps-header__icons">
                        <li>
                            <a class="ps-header__item open-search" href="#"
                                ><i class="icon-magnifier"></i
                            ></a>
                        </li>
                        <Link
                            :href="route('login')"
                            class="text-sm text-gray-700 ps-header__item"
                            id="login-modal"
                        >
                            <i class="icon-user"></i>
                        </Link>

                        <Link
                            v-if="canRegister"
                            :href="route('register')"
                            class="text-sm text-gray-700 ps-header__item"
                            id="login-modal"
                        >
                            <i class="icon-home"></i>
                        </Link>
                    </ul>
                    <div class="ps-language-currency">
                        <Link
                            :href="route('register')"
                            class="ps-btn ps-btn--warning"
                        >
                            Sign Up
                        </Link>
                    </div>
                    <div class="ps-header__search">
                        <form action="" method="post">
                            <div class="ps-search-table">
                                <div class="input-group">
                                    <input
                                        class="form-control ps-input"
                                        type="text"
                                        placeholder="Ticket Status Checker"
                                        v-model="ticket_id"
                                    />
                                    <div
                                        v-if="this.ticket_id"
                                        class="input-group-append"
                                    >
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-navigation" style="background-color: #0f4f10">
            <div class="container">
                <div class="ps-navigation__left">
                    <nav class="ps-main-menu">
                        <ul class="menu">
                            <li>
                                <Link
                                    :href="route('home')"
                                    class="text-sm text-gray-700 ps-header__item"
                                    id="login-modal"
                                >
                                    <font color="#fff"> HOME</font>
                                </Link>
                            </li>

                            <li>
                                <Link
                                    :href="route('howtowin')"
                                    class="text-sm text-gray-700 ps-header__item"
                                    id="login-modal"
                                >
                                    <font color="#fff"> HOW TO WIN</font>
                                </Link>
                            </li>

                            <li class="menu-item-has-children">
                                <a href=""
                                    ><font color="#fff">
                                        PRIZES
                                        <i
                                            class="fa fa-chevron-down text-white"
                                        ></i></font
                                ></a>

                                <ul class="sub-menu">
                                    <li>
                                        <Link :href="route('dailyPrices')">
                                            Daily Prizes
                                        </Link>
                                    </li>
                                    <li>
                                        <Link :href="route('monthlyPrices')">
                                            Monthly Prizes
                                        </Link>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <Link :href="route('becomeAgent')">
                                    <font color="#fff">BECOME AN AGENT</font>
                                </Link>
                            </li>
                            <li>
                                <a
                                    href="https://westendnig.com/downloads/files/apps/Westend-Mobile-App.apk"
                                    ><font color="#fff"> DOWNLOAD APP</font></a
                                >
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="ps-navigation__right" style="color: #fff">
                    Need help? <strong>08027274500</strong>
                </div>
            </div>
        </div>
    </header>
    <header class="ps-header ps-header--1 ps-header--mobile">
        <div class="ps-noti">
            <div class="container">
                <marquee
                    ><p class="m-0">
                        THE MORE YOU <strong>PLAY</strong>. THE MORE YOUR
                        CHANCES OF <strong>WINNING !!</strong>
                    </p></marquee
                >
            </div>
            <a class="ps-noti__close"><i class="icon-cross"></i></a>
        </div>
        <div class="ps-header__middle">
            <div class="container">
                <div class="ps-logo">
                    <Link :href="route('home')">
                        <img src="../../../public/assets/img/logo.png" alt />
                    </Link>
                </div>
                <div class="ps-header__right">
                    <ul class="ps-header__icons">
                        <li>
                            <a class="ps-header__item open-search" href="#"
                                ><i class="icon-magnifier"></i
                            ></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="ps-menu--slidebar">
        <div class="ps-menu__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children">
                    <Link :href="route('home')"> HOME </Link>
                </li>
                <li class="menu-item-has-children">
                    <Link :href="route('playNow')"> HOW TO WIN </Link>
                </li>
                <li class="menu-item-has-children">
                    <a href="">PRIZES</a
                    ><span class="sub-toggle"
                        ><i class="fa fa-chevron-down"></i
                    ></span>
                    <ul class="sub-menu">
                        <Link :href="route('dailyPrices')"> Daily Prizes </Link>
                        <Link :href="route('monthlyPrices')">
                            Monthly Prizes
                        </Link>
                    </ul>
                </li>
                <Link
                    :href="route('becomeAgent')"
                    class="menu-item-has-children"
                >
                    BECOME AN AGENT
                </Link>
                <li class="menu-item-has-children">
                    <a
                        href="https://westendnig.com/downloads/files/apps/Westend-Mobile-App.apk"
                        >DOWNLOAD APP</a
                    >
                </li>
            </ul>
        </div>
        <div class="ps-menu__footer">
            <div class="ps-menu__item">
                <div class="ps-menu__contact">
                    Need help? <strong>08027274500</strong>
                </div>
            </div>
        </div>
    </div> -->
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
    name: "Dashboard",
    data() {
        return {
            email: "",
            ticket_id: "",
        };
    },
    props: {},
    components: {
        Link,
        Head,
    },
    computed: {},
    methods: {
        emptyTicket() {
            this.$swal("Please Enter A Valid Ticket Id");
        },
    },
    mounted() {
        $(".ps-menu--sticky").on("click", function () {
            $(".ps-navigation").slideToggle();
        });

        $(".open-search").on("click", function (event) {
            event.preventDefault();
            $(".ps-search").addClass("active");
        });

        $("#close-search").on("click", function (event) {
            event.preventDefault();
            $(".ps-search").removeClass("active");
        });

        var fixed_top = $(".header");
        $(window).on("scroll", function(){
            if( $(window).scrollTop() > 50){
                fixed_top.addClass("animated fadeInDown menu-fixed");
            }
            else{
                fixed_top.removeClass("animated fadeInDown menu-fixed");
            }
        });
    },

    beforeMount() {},
};
</script>

<style scoped>
.fa {
    font-size: 17px;
}
.bg-gray-100 {
    background-color: #f7fafc;
    background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
    border-color: #edf2f7;
    border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
    color: #a0aec0;
    color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
    color: #718096;
    color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
    color: #4a5568;
    color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
    color: #1a202c;
    color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-gray-800 {
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
    }

    .dark\:bg-gray-900 {
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
    }

    .dark\:border-gray-700 {
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--tw-border-opacity));
    }

    .dark\:text-white {
        color: #fff;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
    }

    .dark\:text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }
}
</style>
