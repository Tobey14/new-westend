<template>

    <header id="page-topbar">
        <h4 class="countDownDays d-none" style="font-size: 40px"></h4>
        <h4 class="countDownDays2 d-none" style="font-size: 40px"></h4>
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <Link :href="route('dashboard')" class="logo logo-dark">

                        <span class="logo-sm">
                            <img src="/agent/assets/images/logo-sm.png" alt="" height="42">
                        </span>
                        <span class="logo-lg">
                            <img src="/agent/assets/images/logo.png" alt="" height="40">
                        </span>
                    </Link>

                    <Link :href="route('dashboard')" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="/agent/assets/images/logo-sm.png" alt="" height="42">
                        </span>
                        <span class="logo-lg">
                            <img src="/agent/assets/images/logo.png" alt="" height="40">
                        </span>
                    </Link>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div style="font-family: 'Poppins';" class="desktop">
                    <h2 class="mx-5" style="text-transform:capitalize; margin-top:10px;"> <i class="fa fa-bell"></i> {{this.url}}</h2>
                    <h6 class="mx-5 mt-0">{{(new Date()).toString().substr(0,15)}}</h6>

                </div>
            </div>

        </div>
    </header>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <!-- LOGO -->
        <div class="navbar-brand-box">
            <Link :href="route('dashboard')" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="/agent/assets/images/logo-sm.png" alt="" height="42">
                </span>
                <span class="logo-lg">
                    <img src="/agent/assets/images/logo.png" alt="" height="40">
                </span>
            </Link>

            <Link :href="route('dashboard')" class="logo logo-light">
                <span class="logo-sm">
                    <img src="/agent/assets/images/logo-sm.png" alt="" height="42">
                </span>
                <span class="logo-lg">
                    <img src="/agent/assets/images/logo.png" alt="" height="40">
                </span>
            </Link>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
        </button>

        <div data-simplebar class="sidebar-menu-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">

                    <div class="px-4">
                        <img v-if="$page.props.user.image" :src="$page.props.user.image" alt="" style="width:100px;height:100px;border-radius:50%;">
                        <img v-else src="/agent/assets/images/default.png" alt="" style="width:100px;height:100px;border-radius:50%;"><br>


                        <h2 style="font-family: 'Poppins'; font-size:33px;color:black;font-weight:bolder">Hi {{$page.props.user.name}}</h2><br>
                        <h4 style="font-family: 'Poppins'; font-size:15px;color:black;">Referral Code: <br> <span style="font-family: 'Poppins'; font-size:23px;color:black;font-weight:bolder">{{agent.referral_code}} </span> </h4>
                        <h4 style="font-family: 'Poppins'; font-size:15px;color:black;">Total Wallet Balance: <br> <span style="font-family: 'Poppins'; font-size:23px;color:black;font-weight:bolder"> &#8358;{{agentWallet.total_balance}}</span> </h4>

                        <Link :href="route('agentPlay')">
                            <button type="submit" style="width:80%;margin:auto;background:#12a05c;font-family: 'Poppins'; font-size:15px;color:white;">Sell Ticket</button>
                        </Link>
                    </div>
                    <li class="menu-title">Menu</li>


                    <li>
                        <Link :href="route('dashboard')">

                            <i class="fa fa-home"></i>
                            <span class="ml-2">Dashboard</span>
                        </Link>
                    </li>

                    <li>
                        <Link :href="route('wallet')" class=" waves-effect">
                            <i class="fa fa-money"></i>
                            <span class="ml-2">My Wallet</span>
                        </Link>
                    </li>

                    <li>
                        <Link :href="route('referral')" class="waves-effect">
                            <i class="uil-calender"></i>
                            <span class="ml-2">Referrals</span>
                        </Link>
                    </li>

                    <li>
                        <Link :href="route('ticket')" class=" waves-effect">
                            <i class="uil-comments-alt"></i>
                            <span class="ml-2">Tickets</span>
                        </Link>
                    </li>
                    <li class="menu-title">My Profile</li>

                    <li>
                        <Link :href="route('settings')" class="waves-effect">
                            <i class="uil-calender"></i>
                            <span class="ml-2">Settings</span>
                        </Link>
                    </li>

                    <li>
                        <form @submit.prevent="logout" class="waves-effect">
                            <button style="padding-left: 20px;color: red;">
                                <i class="uil-comments-alt" ></i><span class="ml-2">Log Out</span>
                            </button>
                        </form>
                    </li>



                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>



</template>

<script>
import { mapGetters, mapActions } from 'vuex';
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';



export default {
    name:'sideBar',
    components:{
        Link,
    },
    data() {
        return {
           url: this.$inertia.page.url

        }
    },
    computed: {
        ...mapGetters([
            'agent',
            'agentWallet',
        ]),

    },

    methods: {
        ...mapActions(['getAgent']),
        logout(){
            Inertia.post(route('logout'));
        },

    },
    mounted() {
        this.getAgent(this.$page.props.user.id);

        this.url= this.url.substring(1, this.url.length);
        $('.vertical-menu-btn').on('click', function(){
                $('.vertical-menu').toggle();
        })

    },
    created() {

    },
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

span{
    font-size:15px !important;
    color: black !important;

}



</style>
