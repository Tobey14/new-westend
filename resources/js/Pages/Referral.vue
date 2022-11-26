

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
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="mb-3 mt-1">
                        <div style="font-family: 'Poppins';" class="">
                            <h2 class="mt-3">All Referrals</h2>
                            
                        </div>                            
                    </div>

                    <div class="mb-3" style="text-align:left;">
                        <div style="font-family: 'Poppins';" class="d-flex text-left">
                            <h5 class="mt-3">Referral Code:</h5>
                            <input type="text" class="mx-2 px-2 inputRef" disabled v-model="agent.referral_code">
                            <button type="submit" style="width:100px;background:#12a05c;height:30px;font-size:15px;color:white;" @click="copyCode()">Copy Code</button>

                        </div>

                        
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">All Referrals</h4>
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0"  v-if="this.agentReferrals.length > 0">
                                            <thead class="table-light">
                                                <tr>
                                                    
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Referral Code</th>
                                                    <th>Date Joined</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(ref, index) in agentReferrals" :key="index">
                                                   
                                                    <td>{{ref.name}}</td>
                                                    <td>
                                                        {{ref.phone}}
                                                    </td>
                                                    <td>
                                                        {{ref.email}}
                                                    </td>

                                                    <td>
                                                        {{ref.referral_code}}
                                                    </td>
                                                    <td>
                                                        {{ref.created_at.toString().substring(0,10)}}
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary" @click="fundReferral(ref)">Fund</button>  
                                                    </td>
                                                </tr>

                                                
                                            </tbody>
                                        </table>

                                        <div class="table" v-else>


                                            <table class="table table-centered table-nowrap">
                                                <thead class="table-light">
                                                    <tr>
                                                        
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Referral Code</th>
                                                        <th>Date Joined</th>
                                                        
                                                    </tr>
                                                </thead>
                                            </table>
                                            <div class="p-3 text-center">No Referrals Yet</div>

                                        </div>

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
            refCode:''
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
            'agentReferrals'
        ]),

        
    },

    methods: { 
        ...mapActions(['getAgent', 'fundReferralWallet']),
        copyCode(){
            navigator.clipboard.writeText(this.agent.referral_code);

            this.$swal('Referral Code Copied Successfully');

        },
        fundReferral(referral){
            // var amount = prompt('How much');
            this.$swal({  
                title: "You are about to fund "+referral.name+"'s Wallet, Enter Amount to continue?", 
                input: 'number',
                inputPlaceholder: "Enter Amount",
                showDenyButton: true,  
                confirmButtonText: `Fund`,  
                denyButtonText: `Cancel`,
            }).then((result) => {  
                /* Read more about isConfirmed, isDenied below */  
                if (result.isConfirmed) { 
                    var amount = result.value;

                    if(!amount){
                        this.$swal('Invalid Amount Entered');
                        return;
                    }

                    if(parseInt(amount) > parseInt(this.agentWallet.total_balance)){
                        this.$swal('Account Balance Insufficient For This Transaction');
                        return;

                    }

                    this.fundReferralWallet({amount:amount, agent:referral.id, user:this.agent.id}).then((data)=>{
                        this.getAgent(this.$page.props.user.id);
                        this.$swal('Funding Successful')  

                    });

                } else if (result.isDenied) {    

                    this.$swal('Funding Cancelled');
                }
            });
            
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

.inputRef{
    width:120px;
    height:30px;
    border:1px solid grey;
    font-size:20px;
}
</style>


