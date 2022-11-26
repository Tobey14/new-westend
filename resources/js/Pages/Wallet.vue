

<template>

    <!-- Begin page -->
    <div id="layout-wrapper">

        
        <Sidebar/>

        
<!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="d-flex mb-3 mt-3" style="align-content:center;justify-content:space-between">
                        <div class="">
                            <Link :href="route('fund')">

                                <button type="submit" style="width:150px;height:55px;margin:auto;background:#12a05c;font-family: 'Poppins';font-size:15px;color:white;">Fund Wallet</button>
                            </Link>
                        </div>

                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="fa fa-money-bill"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">&#8358; {{agentWallet.total_balance}}</span></h4>
                                        <p class="text-muted mb-0">Wallet Balance</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="fa fa-money-bill-1-wave"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">&#8358; {{agentWallet.bonus}}</span></h4>
                                        <p class="text-muted mb-0">Bonus/Commission</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> <!-- end col-->


                        <div class="col-md-4">

                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="fa fa-file"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{agentData.tickets}}</span></h4>
                                        <p class="text-muted mb-0">Played Tickets</p>
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
                                    <div class="table-responsive">
                                        <table class="table table-centered table-response table-nowrap mb-0">
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
            'transactions'
        ]),

        
    },

    methods: { 
        ...mapActions(['getAgent'])
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
</style>


