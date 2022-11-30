<template>
        <div class="page-wrapper" style="background-color: #0f0232;color:white !important">
            <Modal />
            <Header />

            <!-- hero start -->
            <section class="hero">
                <div class="hero__shape">
                <img src="images/elements/hero-shape.jpg.png" alt="image" />
                </div>
                <div class="hero__element">
                <img src="images/elements/hero-building.png" alt="image" />
                </div>
                <div
                class="hero__car wow bounceIn"
                data-wow-duration="0.5s"
                data-wow-delay="1s"
                >
                <img
                    src="images/elements/car-shadow.png"
                    alt="image"
                    class="car-shadow"
                />
                <img src="images/elements/car-ray.png" alt="image" class="car-ray" />
                <img
                    src="images/elements/car-light.png"
                    alt="image"
                    class="car-light"
                />
                <img
                    src="images/elements/hero-car.png"
                    alt="image"
                    class="hero-car"
                />
                <img
                    src="images/elements/car-star.png"
                    alt="image"
                    class="car-star"
                />
                </div>
                <div class="container">
                <div class="row justify-content-center justify-content-lg-start">
                    <div class="col-lg-6 col-md-8">
                    <div class="hero__content">
                        <div
                        class="hero__subtitle wow fadeInUp"
                        data-wow-duration="0.5s"
                        data-wow-delay="0.3s"
                        >
                        Contest FOR YOUR CHANCE to
                        </div>
                        <h2
                        class="hero__title wow fadeInUp"
                        data-wow-duration="0.5s"
                        data-wow-delay="0.5s"
                        >
                        big win
                        </h2>
                        <p
                        class="wow fadeInUp"
                        data-wow-duration="0.5s"
                        data-wow-delay="0.7s"
                        >
                        With ₦500, ₦200, or even ₦100. You can be a Winner Today!
                        </p>
                        <div
                        class="hero__btn wow fadeInUp"
                        data-wow-duration="0.5s"
                        data-wow-delay="0.9s"
                        >
                        <Link :href="route('playNow')" id="" class="cmn-btn">Play Now</Link>
                        <a
                            class="video-btn"
                            href="https://www.youtube.com/embed/d6xn5uflUjg"
                            data-rel="lightcase:myCollection"
                            ><i class="fas fa-play"></i
                        ></a>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="hero__thumb">
                        <img src="images/elements/car-main.png" alt="" />
                    </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- hero start -->

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
                        <div class="play-card__icon d-flex">
                        <img src="images/icon/play/1.png" class="m-auto" alt="image-icon" />
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
                        <div class="play-card__icon d-flex">
                        <img src="images/icon/play/2.png" class="m-auto" alt="image-icon" />
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
                        <div class="play-card__icon d-flex">
                        <img src="images/icon/play/3.png" class="m-auto" alt="image-icon" />
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

            <!-- contest section start -->
            <section class="position-relative pt-120 pb-120">
                <div class="bg-el">
                <img src="images/elements/contest-bg.png" alt="image" />
                </div>
                <div class="container">
                <div class="row justify-content-center">
                    <div
                    class="col-lg-8 wow fadeInUp"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.3s"
                    >
                    <div class="section-header text-center">
                        <span class="section-sub-title"
                        >Try your chance at winning</span
                        >
                        <h2 class="section-title">Prizes to Win</h2>
                        <p>
                        Participants buy tickets and lots are drawn to determine the
                        winners.
                        </p>
                    </div>
                    </div>
                </div>
                <!-- row end -->
                <div
                    class="row wow fadeInUp"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.3s"
                >
                    <div class="col-lg-12">
                    <div class="tab-content" id="contestTabContent">
                        <div
                        class="tab-pane fade show active"
                        id="car"
                        role="tabpanel"
                        aria-labelledby="car-tab"
                        >
                        <div class="row mb-none-30">
                            <div class="col-xl-4 col-md-6 mb-30">
                            <div class="contest-card">
                                <a href="play-now.html" class="item-link"></a>
                                <div class="contest-card__thumb">
                                <img src="img/products/03.jpg" alt="image" />
                                <div class="contest-num">
                                    <span>Daily</span>
                                    <h4 class="number">Prizes</h4>
                                </div>
                                </div>
                                <div class="contest-card__content"></div>
                                <div class="contest-card__footer">
                                <ul class="contest-card__meta">
                                    <li>&nbsp;</li>
                                    <Link :href="route('playNow')">
                                        <li>
                                        <span>PLAY NOW</span>
                                        </li>
                                    </Link>
                                </ul>
                                </div>
                            </div>
                            <!-- contest-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6 mb-30">
                            <div class="contest-card">
                                <a href="play-now.html" class="item-link"></a>
                                <div class="contest-card__thumb">
                                <img src="img/products/04.png" alt="image" />
                                <div class="contest-num">
                                    <span>Monthly</span>
                                    <h4 class="number">Prizes</h4>
                                </div>
                                </div>
                                <div class="contest-card__content"></div>
                                <div class="contest-card__footer">
                                <ul class="contest-card__meta">
                                    <li>&nbsp;</li>
                                    <Link :href="route('playNow')">
                                        <li>
                                        <span>PLAY NOW</span>
                                        </li>
                                    </Link>

                                </ul>
                                </div>
                            </div>
                            <!-- contest-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6 mb-30">
                            <div class="contest-card">
                                <a href="play-now.html" class="item-link"></a>
                                <div class="contest-card__thumb">
                                <img src="img/products/05.jpeg" alt="image" />
                                <div class="contest-num">
                                    <span>Monthly</span>
                                    <h4 class="number">Prizes</h4>
                                </div>
                                </div>
                                <div class="contest-card__content"></div>
                                <div class="contest-card__footer">
                                <ul class="contest-card__meta">
                                    <li>&nbsp;</li>

                                    <Link :href="route('playNow')">
                                        <li>
                                        <span>PLAY NOW</span>
                                        </li>
                                    </Link>

                                </ul>
                                </div>
                            </div>
                            <!-- contest-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6 mb-30">
                            <div class="contest-card">
                                <a href="play-now.html" class="item-link"></a>
                                <div class="contest-card__thumb">
                                <img src="img/products/07.jpg" alt="image" />
                                <div class="contest-num">
                                    <span>Monthly</span>
                                    <h4 class="number">Prizes</h4>
                                </div>
                                </div>
                                <div class="contest-card__content"></div>
                                <div class="contest-card__footer">
                                <ul class="contest-card__meta">
                                    <li>&nbsp;</li>
                                    <Link :href="route('playNow')">
                                        <li>
                                        <span>PLAY NOW</span>
                                        </li>
                                    </Link>

                                </ul>
                                </div>
                            </div>
                            <!-- contest-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6 mb-30">
                            <div class="contest-card">
                                <a href="play-now.html" class="item-link"></a>
                                <div class="contest-card__thumb">
                                <img src="img/products/01.png" alt="image" />
                                <div class="contest-num">
                                    <span>Monthly</span>
                                    <h4 class="number">Prizes</h4>
                                </div>
                                </div>
                                <div class="contest-card__content"></div>
                                <div class="contest-card__footer">
                                <ul class="contest-card__meta">
                                    <li>&nbsp;</li>

                                    <Link :href="route('playNow')">
                                        <li>
                                            <span>PLAY NOW</span>
                                        </li>
                                    </Link>

                                </ul>
                                </div>
                            </div>
                            <!-- contest-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6 mb-30">
                            <div class="contest-card">
                                <a href="play-now.html" class="item-link"></a>
                                <div class="contest-card__thumb">
                                <img src="img/products/02.png" alt="image" />
                                <div class="contest-num">
                                    <span>Monthly</span>
                                    <h4 class="number">Prizes</h4>
                                </div>
                                </div>
                                <div class="contest-card__content"></div>
                                <div class="contest-card__footer">
                                <ul class="contest-card__meta">
                                    <li>&nbsp;</li>
                                    <Link :href="route('playNow')">
                                        <li>
                                            <span>PLAY NOW</span>
                                        </li>
                                    </Link>
                                </ul>
                                </div>
                            </div>
                            <!-- contest-card end -->
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- table content end -->
                    </div>
                </div>
                <!-- row end-->
                <div class="row mt-30">
                    <div class="col-lg-12">
                    <div class="btn-grp"></div>
                    </div>
                </div>
                </div>
            </section>
            <!-- contest section end -->

            <!-- winner section start -->
            <section class="position-relative pt-120 pb-120">
                <div class="">
                <img src="/img/promotion/shape3.png" alt="image" />
                </div>
                <div class="container">
                <div class="row justify-content-center">
                    <div
                    class="col-lg-8 wow fadeInUp"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.3s"
                    >
                    <div class="section-header text-center">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                    </div>
                </div>
                <!-- row end -->
                </div>
                <!-- container end -->
            </section>
            <!-- winner section end -->

            <!-- latest winner section start  -->
            <section class="latest-winner-section position-relative pt-120 pb-120">
                <div class="el-1">
                <img src="images/elements/w-el-1.png" alt="image" />
                </div>
                <div class="el-2">
                <img src="images/elements/w-el-2.png" alt="image" />
                </div>
                <div class="el-3">
                <img src="images/elements/w-el-3.png" alt="image" />
                </div>
                <div class="container">
                <div class="row justify-content-center">
                    <div
                    class="col-lg-8 wow fadeInUp"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.3s"
                    >
                    <div class="section-header text-center">
                        <span class="section-sub-title"
                        >Meet the latest winners from your favorite contest</span
                        >
                        <h2 class="section-title">Latest Winners</h2>
                        <p>
                        Check your ticket number's to see if you are a Winner in the
                        Dream Lottery.
                        </p>
                    </div>
                    </div>
                </div>
                <!-- row end -->

                <div
                    class="row wow fadeInUp"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.5s"
                >
                    <div class="col-lg-12">
                    <ul
                        class="nav nav-tabs winner-tab-nav"
                        id="winnerTab"
                        role="tablist"
                    ></ul>
                    <div class="tab-content mt-50" id="winnerTabContent">
                        <div
                        class="tab-pane fade show active"
                        id="dream"
                        role="tabpanel"
                        aria-labelledby="dream-tab"
                        >
                        <div class="row mb-none-30">
                            <div class="col-lg-4 mb-30">
                            <div class="number-check-wrapper">
                                <h3 class="title">Check My Tickets</h3>
                                <p>
                                Are you holding on to a winning ticket? Here's an easy
                                way to find out.
                                </p>
                                <form class="check-number-form">
                                <input
                                    type="tel"
                                    class="form-control mt-30 mb-30"
                                    name="check-number1"
                                    id="check-number1"
                                    placeholder="Enter Ticket No"
                                    v-model="ticket_id"
                                />
                                <div class="number-list-wrapper">
                                    <div class="text-center mt-50">
                                        <Link
                                            :href="
                                                route('ticketStatus', {
                                                    id: this.ticket_id,
                                                })
                                            "
                                             class="cmn-btn" v-if="this.ticket_id">
                                            check my ticket
                                        </Link>

                                        <Link
                                            @click="emptyTicket()"
                                             class="cmn-btn" v-else>
                                            check my ticket
                                        </Link>
                                    </div>
                                </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-lg-8 mb-30">
                            <div class="winner-card mb-30" v-for="(
                                            ticket, index
                                        ) in winningTickets"
                                        :key="index">
                                <div class="winner-card__content">
                                <div class="content-bottom">
                                    <div class="number-list-wrapper">
                                    <p>Winning Ticket:</p>
                                    <span class="cmn-btn mt-2">{{ ticket.ticket_id }}</span>
                                    <!-- number-list end -->
                                    </div>
                                    <div class="right">
                                    <p>Amount:</p>
                                    <span class="contest-num">₦ {{
                                                                ticket.amount_won
                                                                    .toString()
                                                                    .replace(
                                                                        /\B(?=(\d{3})+(?!\d))/g,
                                                                        ","
                                                                    )
                                                            }}</span>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <!-- winner-card end -->
                            <div class="btn-grp">
                                <a href="winner.html" class="btn-border">browse more</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- tab-content end -->
                    </div>
                </div>
                <!-- row end -->
                </div>
            </section>
            <!-- latest winner section end  -->

            <!-- overview section start -->
            <section class="overview-section pt-120">
                <div class="map-el">
                <img src="images/elements/map.png" alt="image" />
                </div>
                <div class="obj-1">
                <img src="images/elements/overview-obj-1.png" alt="image" />
                </div>
                <div class="obj-2">
                <img src="images/elements/overview-obj-2.png" alt="image" />
                </div>
                <div class="obj-3">
                <img src="images/elements/overview-obj-3.png" alt="image" />
                </div>
                <div class="obj-4">
                <img src="images/elements/overview-obj-4.png" alt="image" />
                </div>

                <div class="container">
                <div class="row justify-content-center">
                    <div
                    class="col-lg-8 wow fadeInUp"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.3s"
                    >
                    <div class="section-header text-center">
                        <span class="section-sub-title"
                        >Our Users Around the World</span
                        >
                        <h2 class="section-title">Let the number speak for us</h2>
                        <p>
                        Over the years we have provided millions of players with
                        tickets to lotteries across the globe and enjoyed having more
                        than one million winners
                        </p>
                    </div>
                    </div>
                </div>
                <!-- row end -->
                </div>
                <!-- container end -->
                <div class="map-pointer">
                <div class="pointer num-1"></div>
                <div class="pointer num-2"></div>
                <div class="pointer num-3"></div>
                <div class="pointer num-4"></div>
                <div class="pointer num-5"></div>
                <div class="pointer num-6"></div>
                <div class="pointer num-7"></div>
                <div class="pointer num-8"></div>
                <div class="pointer num-9"></div>
                </div>

                <div class="container">
                <div class="row justify-content-center mb-none-30">
                    <div
                    class="col-lg-4 col-sm-6 mb-30 wow bounceIn"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.3s"
                    >
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                        <img src="images/icon/overview/1.png" alt="" />
                        </div>
                        <div class="overview-card__content">
                        <span class="number">12000+</span>
                        <p>Verified Users</p>
                        </div>
                    </div>
                    <!-- overview-card end -->
                    </div>
                    <div
                    class="col-lg-4 col-sm-6 mb-30 wow bounceIn"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.5s"
                    >
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                        <img src="images/icon/overview/2.png" alt="" />
                        </div>
                        <div class="overview-card__content">
                        <span class="number">13</span>
                        <p>Years on the market</p>
                        </div>
                    </div>
                    <!-- overview-card end -->
                    </div>
                    <div
                    class="col-lg-4 col-sm-6 mb-30 wow bounceIn"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.7s"
                    >
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                        <img src="images/icon/overview/3.png" alt="" />
                        </div>
                        <div class="overview-card__content">
                        <span class="number">98%</span>
                        <p>Customer Satisfaction</p>
                        </div>
                    </div>
                    <!-- overview-card end -->
                    </div>
                </div>
                </div>
                <!-- container end -->
            </section>
            <!-- overview section end -->

            <!-- features section start -->
            <section class="pt-120 pb-120">
                <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                    <div class="row mb-none-30">
                        <div class="col-lg-6 mb-30">
                        <div class="row mb-none-30">
                            <div
                            class="col-lg-12 col-md-6 mb-30 wow fadeInUp"
                            data-wow-duration="0.5s"
                            data-wow-delay="0.3s"
                            >
                            <div class="feature-card hover--effect-1">
                                <div class="feature-card__icon d-flex">
                                <img src="images/icon/feature/1.png" class="m-auto" alt="image" />
                                </div>
                                <div class="feature-card__content">
                                <h3 class="feature-title">Safe Service</h3>
                                <p>
                                    Nulla ultricies in nulla ac efficitur. In vel neque
                                    arcu. Donec quis
                                </p>
                                </div>
                            </div>
                            <!-- feature-card end -->
                            </div>
                            <!-- feature-card end -->
                            <div
                            class="col-lg-12 col-md-6 mb-30 wow fadeInUp"
                            data-wow-duration="0.5s"
                            data-wow-delay="0.5s"
                            >
                            <div class="feature-card hover--effect-1">
                                <div class="feature-card__icon d-flex">
                                <img src="images/icon/feature/3.png" class="m-auto" alt="image" />
                                </div>
                                <div class="feature-card__content">
                                <h3 class="feature-title">Network</h3>
                                <p>
                                    Nulla ultricies in nulla ac efficitur. In vel neque
                                    arcu. Donec quis
                                </p>
                                </div>
                            </div>
                            <!-- feature-card end -->
                            </div>
                            <!-- feature-card end -->
                        </div>
                        </div>
                        <div class="col-lg-6 mb-30 mt-lg-5">
                        <div class="row mb-none-30">
                            <div
                            class="col-lg-12 col-md-6 mb-30 wow fadeInUp"
                            data-wow-duration="0.5s"
                            data-wow-delay="0.3s"
                            >
                            <div class="feature-card hover--effect-1">
                                <div class="feature-card__icon d-flex">
                                <img src="images/icon/feature/2.png" class="m-auto" alt="image" />
                                </div>
                                <div class="feature-card__content">
                                <h3 class="feature-title">Security</h3>
                                <p>
                                    Nulla ultricies in nulla ac efficitur. In vel neque
                                    arcu. Donec quis
                                </p>
                                </div>
                            </div>
                            <!-- feature-card end -->
                            </div>
                            <!-- feature-card end -->
                            <div
                            class="col-lg-12 col-md-6 mb-30 wow fadeInUp"
                            data-wow-duration="0.5s"
                            data-wow-delay="0.5s"
                            >
                            <div class="feature-card hover--effect-1">
                                <div class="feature-card__icon d-flex">
                                <img src="images/icon/feature/4.png" class="m-auto" alt="image" />
                                </div>
                                <div class="feature-card__content">
                                <h3 class="feature-title">Support</h3>
                                <p>
                                    Nulla ultricies in nulla ac efficitur. In vel neque
                                    arcu. Donec quis
                                </p>
                                </div>
                            </div>
                            <!-- feature-card end -->
                            </div>
                            <!-- feature-card end -->
                        </div>
                        </div>
                    </div>
                    </div>
                    <div
                    class="col-lg-6 order-lg-2 order-1 text-lg-left text-center wow fadeInRight"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.5s"
                    >
                    <div class="section-header">
                        <span class="section-sub-title">An Exhaustive list of</span>
                        <h2 class="section-title">Our features.</h2>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                        pretium, elit quis vehicula interdum, sem metus iaculis
                        sapien, sed bibendum lectus augue eu metus.
                        </p>
                        <a
                        href="#0"
                        class="d-flex align-items-center mt-3 justify-content-lg-start justify-content-center"
                        >Show all features<i
                            class="las la-angle-double-right text-danger"
                        ></i
                        ></a>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- features section end -->

            <!-- testimonial section start -->
            <section class="has-bg--shape pt-120 pb-120 tbg mb-100">
                <div class="bg-shape">
                <div class="round-shape d-sm-block d-none">
                    <img src="images/elements/round-shape.png" alt="image" />
                </div>
                <div class="shape-1"></div>
                <div class="shape-2"></div>
                <div class="shape-3"></div>
                <div class="shape-4"></div>
                <div class="shape-5"></div>
                <div class="shape-6"></div>
                </div>
                <div class="container">
                <div class="row justify-content-center">
                    <div
                    class="col-lg-9 wow fadeInUp"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.3s"
                    >
                    <div class="section-header text-center">
                        <span class="section-sub-title">Testimonial</span>
                        <h2 class="section-title">our Happy Customers</h2>
                        <p>Find out what our members have to say about us!</p>
                    </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                    <div
                        class="testimonial-area bg_img"
                        data-background="images/elements/testimonial-single.jpg"
                    >
                        <div class="testimonial-slider">
                        <div class="testimonial-single">
                            <div class="testimonial-single__content">
                            <h4 class="client-name">Dave Ford</h4>
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Duis in pulvinar metus. Praesent vestibulum metus
                                ut dui consectetur.”
                            </p>
                            </div>
                        </div>
                        <!-- testimonial-single end -->
                        <div class="testimonial-single">
                            <div class="testimonial-single__content">
                            <h4 class="client-name">Joshua Temitope</h4>
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Duis in pulvinar metus. Praesent vestibulum metus
                                ut dui consectetur. ”
                            </p>
                            </div>
                        </div>
                        <!-- testimonial-single end -->
                        </div>
                        <!-- testimonial-slider end -->
                    </div>
                    <!-- testimonial-area end -->
                    </div>
                </div>
                </div>
            </section>
            <!-- testimonial section end -->

            <!-- support section start  -->
            <section class="pb-120">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-sub-title"
                        >Get in touch with our friendly support</span
                        >
                        <h2 class="section-title">Customer Support</h2>
                        <p>
                        Have a question or need help? Contact our friendly support
                        team.
                        </p>
                    </div>
                    </div>
                </div>
                <div class="row mb-none-30">
                    <div
                    class="col-lg-6 mb-30 wow zoomIn"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.3s"
                    >
                    <div class="support-card">
                        <div class="support-card__thumb">
                        <img src="images/icon/support/1.png" alt="image" />
                        </div>
                        <div class="support-card__content">
                        <h3 class="support-card__title">Talk to our support team</h3>
                        <p>
                            Got a question about Westend? Get in touch with our friendly
                            staff.
                        </p>
                        <div class="btn-grp justify-content-xl-start mt-3">
                            <a
                            href="tel:+2348027274500"
                            class="btn-border btn-sm text-capitalize"
                            >Call us <i class="fas fa-phone-alt"></i
                            ></a>
                            <a
                            href="mailto:info@westendnig.com"
                            class="cmn-btn btn-sm text-capitalize"
                            >Email us <i class="far fa-envelope"></i
                            ></a>
                        </div>
                        </div>
                    </div>
                    <!-- support-card end -->
                    </div>
                    <div
                    class="col-lg-6 mb-30 wow zoomIn"
                    data-wow-duration="0.5s"
                    data-wow-delay="0.5s"
                    >
                    <div class="support-card">
                        <div class="support-card__thumb">
                        <img src="images/icon/support/2.png" alt="image" />
                        </div>
                        <div class="support-card__content">
                        <h3 class="support-card__title">Our Guide to Westend</h3>
                        <p>Check out our FAQs to see if we can help you out.</p>
                        <div class="btn-grp justify-content-xl-start mt-3">
                            <Link :href="route('faq')" class="btn-border btn-sm text-capitalize"
                            >FAQs & Help</Link
                            >
                        </div>
                        </div>
                    </div>
                    <!-- support-card end -->
                    </div>
                </div>
                </div>
            </section>
            <!-- support section end  -->


            <!-- <div class="ps-home ps-home--1">
                <section class="ps-section--banner">
                    <div>
                        <div
                            class="ps-banner"
                            style="
                                background: url('/assets/img/promotion/slide1.png');
                            "
                        >
                            <div class="container container-initial">
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <div class="ps-banner__desc">
                                            WITH &#8358;500, &#8358;200, OR EVEN
                                            &#8358;100
                                        </div>
                                        <h1>
                                            YOU CAN BE <br />A
                                            <font color="#0f4f10"
                                                ><b>WINNER</b></font
                                            >
                                            TODAY!
                                        </h1>
                                        <Link
                                            :href="route('playNow')"
                                            class="bg-warning ps-banner__shop"
                                            id=""
                                        >
                                            PLAY NOW
                                        </Link>

                                        <div
                                            class="mobile ps-countdown"
                                            style="text-align: left"
                                        >
                                            <br />
                                            <h4>
                                                REMAINING TIME TILL MONTHLY DRAW
                                            </h4>
                                            <div class="row">
                                                <div class="col-6">
                                                    <h4
                                                        class="countDownDays d-flex"
                                                        style="font-size: 40px"
                                                    ></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ps-banner__thumnail">
                                        <img
                                            class="ps-banner__image"
                                            src="assets/img/promotion/slide1.png"
                                            alt="alt"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="ps-home__content">
                    <div class="container">
                        <div class="ps-promo ps-not-padding">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="ps-promo__item">
                                        <img
                                            class="ps-promo__banner"
                                            src="assets/img/promotion/bg-cash.png"
                                            alt="alt"
                                        />
                                        <div class="ps-promo__content">
                                            <Link
                                                :href="route('playNow')"
                                                class=""
                                                id=""
                                            >
                                                <span class="ps-promo__badge"
                                                    >Play
                                                </span>
                                            </Link>
                                            <br /><br />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="ps-promo__item">
                                        <img
                                            class="ps-promo__banner"
                                            src="assets/img/promotion/bg-generator.png"
                                            alt="alt"
                                        />
                                        <div class="ps-promo__content">
                                            <Link
                                                :href="route('playNow')"
                                                class=""
                                                id=""
                                            >
                                                <span class="ps-promo__badge"
                                                    >Play
                                                </span>
                                            </Link>
                                            <br /><br />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="ps-promo__item">
                                        <img
                                            class="ps-promo__banner"
                                            src="assets/img/promotion/bg-keke.png"
                                            alt="alt"
                                        />
                                        <div class="ps-promo__content">
                                            <Link
                                                :href="route('playNow')"
                                                class=""
                                                id=""
                                            >
                                                <span class="ps-promo__badge"
                                                    >Play
                                                </span>
                                            </Link>

                                            <br /><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="ps-section--latest">
                        <div class="container">
                            <h3 class="ps-section__title">DAILY WINNERS</h3>
                            <div class="ps-section__carousel">
                                <Carousel
                                    :itemsToShow="3"
                                    :wrapAround="true"
                                    :autoplay="2000"
                                    :transition="300"
                                    :itemsToScroll="1"
                                >
                                    <slide
                                        v-for="(
                                            ticket, index
                                        ) in winningTickets"
                                        :key="index"
                                        :index="index + 1"
                                    >
                                        <div class="ps-section__product">
                                            <div
                                                class="ps-product ps-product--standard"
                                            >
                                                <div
                                                    class="ps-product__thumbnail"
                                                >
                                                    <div
                                                        class="ps-product__badge"
                                                    >
                                                        <div
                                                            class="ps-badge ps-badge--sold"
                                                        >
                                                            WON
                                                            {{
                                                                ticket.amount_won
                                                                    .toString()
                                                                    .replace(
                                                                        /\B(?=(\d{3})+(?!\d))/g,
                                                                        ","
                                                                    )
                                                            }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="ps-product__content"
                                                >
                                                    <h5
                                                        class="ps-product__title"
                                                    >
                                                        {{ ticket.ticket_id }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </slide>
                                </Carousel>
                            </div>
                        </div>
                    </section>

                    <Link :href="route('playNow')" class="" id="">
                        <img
                            class="img-fluid"
                            src="assets/img/promotion/shape2.png"
                        />
                    </Link>

                    <div class="container">
                        <section class="ps-section--deals">
                            <div class="ps-section__header">
                                <h3 class="ps-section__title">
                                    TIME TILL MONTHLY DRAW!
                                </h3>
                                <div class="ps-countdown">
                                    <div class="">
                                        <div class="">
                                            <h4
                                                class="countDownDays2 text-center"
                                                style="font-size: 40px"
                                            ></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                                        :href="route('playNow')"
                                                        class="ps-product__image"
                                                    >
                                                        <figure>
                                                            <img
                                                                src="assets/img/products/01.png"
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
                                                            MONTHLY PRIZES
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
                                                        :href="route('playNow')"
                                                        class="ps-product__image"
                                                    >
                                                        <figure>
                                                            <img
                                                                src="assets/img/products/02.png"
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
                                                            MONTHLY PRIZES
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
                                                        :href="route('playNow')"
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
                                                            DAILY PRIZES

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
                                                        :href="route('playNow')"
                                                        class="ps-product__image"
                                                    >
                                                        <figure>
                                                            <img
                                                                src="assets/img/products/04.png"
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
                                                            MONTHLY PRIZES
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
                                                        :href="route('playNow')"
                                                        class="ps-product__image"
                                                    >
                                                        <figure>
                                                            <img
                                                                src="assets/img/products/05.jpeg"
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
                                                            MONTHLY PRIZES
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
                                                        :href="route('playNow')"
                                                        class="ps-product__image"
                                                    >
                                                        <figure>
                                                            <img
                                                                src="assets/img/products/07.jpg"
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
                                                            MONTHLY PRIZES
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
                        </section>
                    </div>

                    <Link :href="route('playNow')" class="" id="">
                        <img
                            class="desktop img-fluid"
                            src="assets/img/promotion/shape1a.png"
                        />
                    </Link>
                    <Link :href="route('playNow')" class="" id="">
                        <img
                            class="mobile img-fluid"
                            src="assets/img/promotion/shape1.png"
                        />
                    </Link>

                    <div class="container">
                        <section
                            class="ps-section--newsletter"
                            data-background="assets/img/newsletter-bg.jpg"
                        >
                            <h3 class="ps-section__title">
                                Join our newsletter and get <br />N200 discount
                                for your first game
                            </h3>
                            <div class="ps-section__content">
                                <form action="" method="post">
                                    <div class="ps-form--subscribe">
                                        <div class="ps-form__control">
                                            <input
                                                class="form-control ps-input"
                                                type="email"
                                                placeholder="Enter your email address"
                                            />
                                            <button
                                                class="ps-btn ps-btn--warning"
                                            >
                                                Subscribe
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>

                    <img
                        class="img-fluid"
                        src="assets/img/promotion/shape3.png"
                    />
                </div>
            </div>

            <br />
            <hr /> -->

            <Footer />
        </div>
        <!-- <div class="ps-search">
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
        </div> -->
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Header from "./homeHeader.vue";
import Footer from "./Footer.vue";
import Modal from "./modals.vue";
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
import axios from "axios";

export default {
    name: "Dashboard",
    data() {
        return {
            email: "",
            image: "",
            ticket_id: "WG-",
            winningTickets: [],

            timeTo: {
                day: 0,
                hour: 0,
                minute: 0,
                second: 0,
            },
        };
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
    components: {
        Link,
        Head,
        Footer,
        Header,
        Modal,
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
        countdownTimeStart() {
            var date = new Date();
            var countDownDate = new Date(date.getFullYear(), date.getMonth() + 1, 0).getTime();

            // Update the count down every 1 second
            setInterval(function () {
                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor(
                    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                );
                var minutes = Math.floor(
                    (distance % (1000 * 60 * 60)) / (1000 * 60)
                );
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                if (days < 10) {
                    days = "0" + days;
                }

                if (hours < 10) {
                    hours = "0" + hours;
                }

                if (minutes < 10) {
                    minutes = "0" + minutes;
                }

                if (seconds < 10) {
                    seconds = "0" + seconds;
                }

                // document.querySelector(".countDownDays").innerHTML =
                //     days + ":" + hours + ":" + minutes + ":" + seconds;
                // document.querySelector(".countDownDays2").innerHTML =
                //     days + ":" + hours + ":" + minutes + ":" + seconds;

                if (distance < 0) {
                    clearInterval(x);
                    // document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        },
    },
    mounted() {
        this.countdownTimeStart();

        axios.get("/api/winnings/get").then((response) => {
            this.winningTickets = response.data;
        });
    },

    beforeMount() {
        this.image = "assets/img/promotion/slide1.png";
    },
};
</script>

<style scoped>
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
