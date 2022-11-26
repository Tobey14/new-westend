import axios from 'axios';

const state = {
    agent:[],
    agentWallet:[],
    agentTickets:[],
    agentPurchases:[],
    agentData:[],
    transactions:[],
    agentReferrals:[],
    
    
};

const getters   = {
    agent: (state)=>state.agent,
    agentWallet: (state)=>state.agentWallet,
    agentTickets: (state)=>state.agentTickets,
    agentPurchases: (state)=>state.agentPurchases,
    agentReferrals: (state)=>state.agentReferrals,
    agentData: (state)=>state.agentData,
    transactions: (state)=>state.transactions,
};

const actions = {
    async getAgent({ commit }, id){
        const response = await axios.get('/api/agent/get', {
            params: {
              id:id
            }
        });
        commit('setAgent', response.data.agent);
        commit('agentWallet', response.data.wallet);
        commit('agentTickets', JSON.parse(JSON.stringify(response.data.all_tickets)));
        commit('agentReferrals', JSON.parse(JSON.stringify(response.data.all_referrals)));
        commit('agentData', response.data);
        commit('setTransactions', JSON.parse(JSON.stringify(response.data.transactions)));
        commit('agentPurchases', JSON.parse(JSON.stringify(response.data.all_purchase)));
        
    },
    

    async paystackFundWallet({ commit }, details){
        const response = await axios.post('/api/paystack/wallet/fund', {

            
               agent:details.agent,
               wallet:details.wallet,
               amount: details.amount,
               platform: details.platform,
               ref: details.ref,
               status:details.status

               
               
        });


    },

    async raveFundWallet({ commit }, details){
        console.log('rave yes')
        const response = await axios.post('/api/rave/wallet/fund', {

               agent:details.agent,
               wallet:details.wallet,
               amount: details.amount,
               platform: details.platform,
               ref: details.ref,
               status:details.status

        });

    },


    async paystackCreatePurchase({ commit }, details){
        const response = await axios.post('/api/user/paystack/purchase/create', {

               phone:details.phone,
               referral:details.referral,
               playAmount: details.playAmount,
               denomination:details.amount,
               platform: details.platform,
               ref: details.ref,
               status:details.status

        });
    },

    async raveCreatePurchase({ commit }, details){
        const response = await axios.post('/api/user/rave/purchase/create', {

               phone:details.phone,
               referral:details.referral,
               playAmount: details.playAmount,
               denomination:details.amount,
               platform: details.platform,
               ref: details.ref,
               status:details.status

        });
    },

    async playAgentTicket({ commit }, details){
        const response = await axios.post('/api/agent/play_ticket', {

               phone:details.phone,
               user:details.user,
               nos: details.nos,
               amount:details.amount,
               playAmount: details.playAmount,


        });

        if(response.status == 200){
            return response.data;
        }
    },

    printTicket(tickets){

        $all_tickets = ' ';
        for(tick in tickets){
            $all_tickets = $all_tickets + ' ' + $tick.ticket_id + ',';
        }

        var data = '<style>h3{font-size:10px;}.ticketCont{width:300px;margin:auto;padding:2%;margin-top:10px;border:1px solid black;}.logo-sm{width: 7%;margin: auto;}</style>'+'<div class="ticketCont">'+
                '<div class="tickContent" style="align-items:center;justify-content:center;">'+
                '<img src="../../../public/agent/assets/images/logo-sm.png" alt="" class="logo-sm" style="text-align:center !important;padding-bottom:10px;">'+
                '<h3 class="" style="text-align:center !important">WestEnd Gaming Platform Limited</h3>'+
                '<div style="display:flex;justify-content:space-between">'+
                '<h3 style="float:left">Ticket ID(s):'+$all_tickets+'</h3>'+
                '<h3 style="float:right">Phone: '+tickets[0].phone+'</h3>'+
                '</div><div style="display:flex;justify-content:space-between">'+
                '<h3 style="float:left">Total Amount: '+tickets[0].amount * tickets.length+'</h3>'+
                '<h3 style="float:right">Date:'+tickets[0].created_at.toString().substring(0,10)+'</h3>'+
                '</div><div style="display:flex;justify-content:space-between"><h3 style="float:left">Agent: '+this.agent.name+'</h3>'+
                '<h3 style="float:right">status: '+tickets[0].status+'</h3>'+
                '</div></div></div>';

        var myWindow= window.open('','')
        myWindow.document.write(data)
        myWindow.print();
    },

    async searchAgentTickets({ commit }, query){
        const response = await axios.get('/api/agent/ticket/search', {
            params: {
              item:query.item,
              id:query.id,
            }
        });
        
        commit('agentTickets', JSON.parse(JSON.stringify(response.data)));
        
        
    },

    async updateAgentDetails({ commit }, details){
        const response = await axios.post('/api/agent/update_details', {

               phone:details.phone,
               id:details.id,
               email: details.email,
               name: details.name,
               image:details.image,
               gender: details.gender,


        });

        if(response.status == 200){
            return 'success';
        }
    },

    async fundReferralWallet({ commit }, query){
        const response = await axios.get('/api/agent/referral/fund', {
            params: {
                agent:query.user,
                referral:query.agent,
                amount:query.amount,
            }
        });     
        
    },

};

const mutations = {
    setAgent: (state, userAgent)=> (state.agent = userAgent),
    agentWallet: (state, data)=> (state.agentWallet = data),
    agentTickets: (state, data)=> (state.agentTickets = data),
    agentPurchases: (state, data)=> (state.agentPurchases = data),
    agentReferrals: (state, data)=> (state.agentReferrals = data),
    agentData: (state, data)=> (state.agentData = data),
    setTransactions: (state, data)=> (state.transactions = data)

};


export default {
    state, getters, actions, mutations
}