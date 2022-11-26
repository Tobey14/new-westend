

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

                        <div class="mb-3 mt-1">
                            <div style="font-family: 'Poppins';" class="d-flex mt-3 justify-content-between">
                                <h2 class="">All Tickets</h2>

                                <div class="">
                                    <Link :href="route('agentPlay')">

                                        <button type="submit" style="width:150px;height:30px;margin:auto;background:#12a05c;font-family: 'Poppins'; font-size:15px;color:white;">Sell Ticket</button>
                                    </Link>
                                </div>
                                
                            </div>                            
                        </div>

                        <div class="row mb-3">
                            <div style="font-family: 'Poppins';" class="col-lg-2 col-md-3">
                                <h2 class="mt-2">{{agentData.tickets}}</h2>
                                <h4 class="mt-1">Played Tickets</h4>
                                <hr style="transform:rotate(180deg)">
                            </div>  
                            
                            <div style="font-family: 'Poppins';" class="col-lg-2 col-md-3">
                                <h2 class="mt-2"> &#8358; {{agentData.amount_won}}</h2>
                                <h4 class="mt-1">Total Amount Won</h4>
                                <hr style="transform:rotate(180deg)">
                            </div>  

                            <div style="font-family: 'Poppins';" class="col-lg-2 col-md-3">
                                <h2 class="mt-2">{{agentData.wins}}</h2>
                                <h4 class="mt-1">Tickets Won</h4>
                                <hr style="transform:rotate(180deg)">
                            </div>  
                        </div>

                        <div class="mb-5">
                            <p style="font-family: 'Poppins';font-size:13px;" class="text-success">You get 10% Commission on the won amount when a user wins under you. Visit to withdraw your earnings</p>
                        </div>

                        <div class="mb-3" style="text-align:left;">
                            <div style="font-family: 'Poppins';" class="d-flex text-left">
                                <h6 class="mt-3 px-3">Sort By</h6>
                                <select name="mx-2 ml-4" id="" style="width:200px;" @change="changeSortType()">
                                    <option value="latest">Latest</option>
                                    <option value="First">Oldest</option>
                                </select>
                                <input type="text" class="mx-2 inputRef" placeholder="search here..." v-model="searchItem" @keyup="searchTickets()">

                            </div>

                            
                        </div>

                        
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-response">
        
                                        <h4 class="card-title">All Ticket Purchase</h4>
        
                                        <table class="table table-bordered dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Phone</th>
                                                    <th>Ticket IDs</th>
                                                    <th>Amount</th>
                                                    <th>No Of Tickets</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
        
        
                                            <tbody>
                                                <tr v-for="(tick,index) in this.agentPurchases" :key="index">
                                                    <td>{{tick.phone}}</td>
                                                    <td>{{tick.ticket_ids.substr(0,tick.ticket_ids.length -1)}}.</td>
                                                    <td>&#8358; {{tick.total_amount}}</td>
                                                    <td>{{tick.no_of_tickets}}</td>
                                                    <td>{{tick.created_at.toString().substring(0,10)}}</td>
                                                    <td>
                                                        <button class="btn btn-primary" @click="printTicket(tick)">print</button>  
                                                    </td>
                                                </tr>
                                            
                                            
                                            
                                            
                                           
                                            
                                           
                                           
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
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
            currentPrintTicket:{
                created_at:''
            },
            searchItem:'',
               
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
            'agentTickets',
            'agentPurchases',
            "agent",
        ]),

        
    },

    methods: { 
        ...mapActions(['getAgent', 'searchAgentTickets']),
        printTicket(ticket){

            var data = '<style>h3{font-size:10px;}.ticketCont{width:300px;margin:auto;padding:2%;margin-top:10px;border:1px solid black;}.logo-sm{width: 7%;margin: auto;}</style>'+'<div class="ticketCont">'+
                    '<div class="tickContent" style="align-items:center;justify-content:center;">'+
                    '<img src="../../../public/agent/assets/images/logo-sm.png" alt="" class="logo-sm" style="text-align:center !important;padding-bottom:10px;">'+
                    '<h3 class="" style="text-align:center !important">WestEnd Gaming Platform Limited</h3>'+
                    '<div style="display:flex;justify-content:space-between">'+
                    '<h3 style="float:left">Ticket ID(s):'+ticket.ticket_ids.substr(0,ticket.ticket_ids.length -1)+'.</h3>'+
                    '<h3 style="float:right">Phone: '+ticket.phone+'</h3>'+
                    '</div><div style="display:flex;justify-content:space-between">'+
                    '<h3 style="float:left">Amount: '+ticket.total_amount+'</h3>'+
                    '<h3 style="float:right">Date:'+ticket.created_at.toString().substring(0,10)+'</h3>'+
                    '</div><div style="display:flex;justify-content:space-between"><h3 style="float:left">Agent: '+this.agent.name+'</h3>'+
                    '<h3 style="float:right">No Of Tickets: '+ticket.no_of_tickets+'</h3>'+
                    '</div></div></div>';

            document.body.innerHTML = data;
            // var myWindow= window.open('','')
            // myWindow.document.write(data)
            window.print();
            location.reload();
        },
        changeSortType(){
            this.agentTickets = this.agentTickets.reverse();
        },

        searchTickets(){
            console.log('searching');

            if(this.searchItem == ''){
                this.getAgent(this.$page.props.user.id);
            } 

            this.searchAgentTickets({item:this.searchItem, id:this.agent.id});
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
    width:170px;
    height:40px;
    font-size:13px;
    border:1px solid grey;
}

.ticketCont{
    width:400px;
    padding:10%;

}

.logo-sm{
    width: 7%;
    margin: auto;
}

.table-response{
    width: 100%;
    overflow-x: auto;
}
</style>


