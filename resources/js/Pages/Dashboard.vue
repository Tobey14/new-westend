

<template>

    <!-- Begin page -->
    <div id="layout-wrapper">


        <Sidebar/>

        <h4 class="countDownDays d-none" style="font-size:40px;">

        </h4>
        <h4 class="countDownDays2 d-none" style="font-size:40px;">

        </h4>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content" style="color:black !important;">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body row">
                                    <div class="col-8">
                                        <h4 class="mb-1 mt-1" v-if="agentData.last_funding"><span data-plugin="counterup"> &#8358; {{agentData.last_funding}}</span></h4>
                                        <h4 class="mb-1 mt-1" v-else><span data-plugin="counterup"> &#8358; 0</span></h4>
                                        <p class="text-muted mb-0">Last Funded Amount</p>
                                    </div>
                                    <div class="text-end mt-2 col-4">
                                        <i class="fa fa-money"></i>
                                    </div>


                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body row">

                                    <div class="col-8">
                                        <h4 class="mb-1 mt-1" v-if="agentWallet.total_balance"><span data-plugin="counterup" >&#8358; {{agentWallet.total_balance}}</span></h4>
                                        <h4 class="mb-1 mt-1"  v-else><span data-plugin="counterup">&#8358; 0</span></h4>
                                        <p class="text-muted mb-0">Total Wallet Balance</p>
                                    </div>

                                    <div class="text-end mt-2 col-4">
                                        <i class="fa fa-credit-card"> </i>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col-->


                        <div class="col-md-4">

                            <div class="card">
                                <div class="card-body row">

                                    <div class="col-8">
                                        <h4 class="mb-1 mt-1" v-if="agentWallet.bonus" ><span data-plugin="counterup">&#8358; {{agentWallet.bonus}}</span></h4>
                                        <h4 class="mb-1 mt-1" v-else><span data-plugin="counterup">&#8358; 0</span></h4>
                                        <p class="text-muted mb-0">Bonus/Commission</p>
                                    </div>

                                    <div class="text-end mt-2 col-4">
                                        <i class="fa fa-bullseye"></i>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                    <div class="d-flex mb-3 mt-3" style="width:100%;align-items:center;justify-content:space-between">
                        <div class="">
                            <Link :href="route('fund')">

                                <button type="submit" class="bntGreen" >Fund Wallet</button>
                            </Link>
                        </div>


                        <div class="text-center">
                            <Link :href="route('agentPlay')">

                                <button type="submit" class="bntGreen">Sell Ticket</button>
                            </Link>
                        </div>



                        <div class=" text-right">
                            <div class="text-right">
                                <button type="submit" class="bntGreen2"  @click="copyCode()">Copy Referral Code</button>

                            </div>

                        </div>

                    </div>


                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="fa fa-print"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{agentData.tickets}}</span></h4>
                                        <p class="text-muted mb-0">Total Tickets Played</p>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{agentData.referrals}}</span></h4>
                                        <p class="text-muted mb-0">Total Referrals</p>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col-->


                        <div class="col-md-4">

                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="fa fa-trophy"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{agentData.wins}}</span></h4>
                                        <p class="text-muted mb-0">Total Wins</p>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->



                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Latest Transaction</h4>
                                    <div class="table-response">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>

                                                    <th>S/N</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Transaction ID</th>
                                                    <th>Platform</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(transaction, index) in transactions" :key="index">

                                                    <td>
                                                        {{index + 1}}
                                                    </td>
                                                    <td>{{transaction.type}}</td>
                                                    <td>{{transaction.amount}}</td>
                                                    <td>{{transaction.transaction_id}}</td>
                                                    <td>{{transaction.platform}}</td>

                                                    <td :class="transaction.status =='failed'?'redText': transaction.status =='successful'?'greenText':'orangeText'">
                                                        {{transaction.status}}
                                                    </td>


                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->




                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
           <Footer></Footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


</template>

<script>
import { mapGetters, mapActions } from 'vuex';
import Footer from './agent/agentFooter.vue';
import Sidebar from './agent/sidebar.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';


export default{
    name:'Dashboard',
    data() {
        return {
            email:'',
        }
    },
    components:{
        Sidebar,
        Link,
        Footer
    },
    computed: {
        ...mapGetters([
            'agentWallet',
            'agentData',
            'agent',
            'transactions',

        ]),


    },

    methods: {
        ...mapActions(['getAgent']),
        copyCode(){
            navigator.clipboard.writeText(this.agent.referral_code);

            this.$swal('Referral Code Copied Successfully');

        }

    },
    mounted() {

},

    beforeMount() {


    },

}

</script>
<style scoped>
h4,p,table{
    font-size:20px !important;
}

.bntGreen{
    width:150px;height:30px;margin:auto;background:#12a05c;font-family: 'Poppins'; font-size:15px;color:white;
}

.bntGreen2{
    width:250px;height:30px;margin:auto;background:#12a05c;font-family: 'Poppins'; font-size:15px;color:white;
}

.redText{
    color:red;
}

.greenText{
    color:green;
}

.orangeText{
    color:orange;
}

.table-response{
    width: 100%;
    overflow-x: auto;
}

span{
    color: black !important;

}



@media screen and (max-width:400px){
    .bntGreen{
        width:100px;
        height:50px;
        margin:auto;
        background:#12a05c;
        font-family: 'Poppins';
         font-size:15px;
         color:white;

    }

    .bntGreen2{
        width:120px;
        height:50px;
        margin:auto;
        background:#12a05c;
        font-family: 'Poppins';
         font-size:15px;
         color:white;

    }
}
</style>


