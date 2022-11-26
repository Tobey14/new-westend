<template>

    <!-- Begin page -->
    <div id="layout-wrapper">

        
        <Sidebar/>

        <h4 class="countDownDays d-none" style="font-size: 40px"></h4>
        <h4 class="countDownDays2 d-none" style="font-size: 40px"></h4>
        
<!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="mb-3 mt-1">
                            <div style="font-family: 'Poppins';" class="text-center">
                                <h2 class="mt-3">Sell Ticket</h2>
                                
                            </div>                            
                        </div>

                        <div class="row mb-3 cardDiv">
                            <form id="paymentForm" class="col-md-6">
                                
                                <div class="form-group col-4">
                                    <label for="phone">Phone Number</label>
                                    <input type="phone" class="inputRef" id="email-address" placeholder="08025347828" required v-model="phone"/>
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

                                <div class="form-group col-4">
                                    <label for="amount">Enter Play Amount</label>
                                    <input type="tel" class="inputRef" id="amount" required placeholder="Enter Amount" v-model="playAmount" />
                                </div>                             
                                
                                
                            </form> 

                            <div class="ps-checkout__order col-md-6">
                                <h3 class="ps-checkout__heading">Ticket Summary</h3>
                                <div class="ps-checkout__row">
                                    <div class="ps-title"><b> Phone Number</b> </div>
                                    <div class="ps-title">
                                        <label class="ps-checkout__label">{{phone}}</label>
                                    </div>
                                </div>
                                
                                <div class="ps-checkout__row">
                                    <div class="ps-title"><b> Amount</b> </div>
                                    <div class="ps-title">
                                        <label class="ps-checkout__label">₦{{amount}}</label>
                                    </div>
                                </div>

                                <div class="ps-checkout__row">
                                    <div class="ps-title"><b> No Of Tickets</b> </div>
                                    <div class="ps-title">
                                        <label class="ps-checkout__label">{{Math.floor(playAmount/amount)}}</label>
                                    </div>
                                </div>
                                
                                <div class="ps-checkout__payment">
                                
                                
                                <button class="ps-btn ps-btn--warning" style="width:70%;margin:auto;" @click="playTicket()">
                                    Play Ticket
                                </button>



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
import PaystackPop from "@paystack/inline-js";




export default{
    name:'Dashboard',
    data() {
        return {
            
            amount:500,
            phone:'',
            playAmount:500,

        }
    },
    components:{
        Sidebar,
        Link,
        Footer
    },
    computed: {
        ...mapGetters([
            
            'agent',
            'agentWallet'
        ]),

        
    },

    methods: { 
        ...mapActions(['playAgentTicket','getAgent']),

        playTicket(){
            console.log(this.playAmount)
            if(this.phone == ''){
                this.$swal('Phone number is required for this operation.');
                return;
            }

            if(Math.floor(this.agentWallet.total_balance/this.playAmount) < 1 ){
                this.$swal('Insufficient Wallet Balance.');
                return;
            }

            if(Math.floor(this.playAmount/this.amount) < 1 ){
                this.$swal('Play amount is less than single ticket amount');
                return;
            }
            console.log('playing')

            this.playAgentTicket({
                user:this.agent.id,
                amount: this.amount,
                nos: this.playAmount/this.amount,
                phone:this.phone,
                playAmount:this.playAmount

            }).then((res)=>{

                this.$swal('Ticket Played Successfully');


                this.amount= 500;
                this.phone='';
                this.playAmount=500;

                console.log(res)
                this.printTicket(res);

                this.getAgent(this.$page.props.user.id);

            });


        },

        printTicket(tickets){

            var $all_tickets = ' ';
            for(var tick of tickets){
                $all_tickets = $all_tickets + ' ' + tick.ticket_id + ',';
            }

            var data = '<style>h3{font-size:10px;}.ticketCont{width:300px;margin:auto;padding:2%;margin-top:10px;border:1px solid black;}.logo-sm{width: 7%;margin: auto;}</style>'+'<div class="ticketCont">'+
                    '<div class="tickContent" style="align-items:center;justify-content:center;">'+
                    '<h3 class="" style="text-align:center !important">WestEnd Gaming Platform Limited</h3>'+
                    '<div style="display:flex;justify-content:space-between">'+
                    '<h3 style="float:left">Ticket ID(s):'+$all_tickets+'</h3>'+
                    '<h3 style="float:right">Phone: '+tickets[0].phone+'</h3>'+
                    '</div><div style="display:flex;justify-content:space-between">'+
                    '<h3 style="float:left">Total Amount: '+tickets[0].amount * tickets.length+'</h3>'+
                    '<h3 style="float:right">Date:'+tickets[0].created_at.toString().substring(0,10)+'</h3>'+
                    '</div><div style="display:flex;justify-content:space-between"><h3 style="float:left">Agent: '+this.agent.name+'</h3>'+
                    '<h3 style="float:right">status: played</h3>'+
                    '</div></div></div>';

            document.body.innerHTML = data;
            // var myWindow= window.open('','')
            // myWindow.document.write(data)
            window.print();
            location.reload();
        },
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
    width:250px;
    height:40px;
    font-size:13px;
    border:1px solid grey;
    font-size:17px;
    padding:10px;
}
.ps-title{
    font-size:18px;
}


.cardDiv{
    background: #e6ebe7;
    border:1px solid black;
    border-radius:10px;
    padding-top:20px;
    padding-bottom:20px;
    width:80%;
    margin: auto;
}
@media screen and (max-width:850px){
  .cardDiv{
    width: 100%;
  } 

}

@media screen and (max-width:330px) {

    .inputRef{
        width:200px;
        
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
    transition: all .1s ease-in;
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


