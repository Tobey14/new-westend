

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
                            <h2 class="mt-3">Settings</h2>
                            
                        </div>                            
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Settings</h4>

                                    <div id="basic-example">
                                        <!-- Seller Details -->
                                        <h3>Personal Information</h3>
                                        <section>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="basicpill-firstname-input">Name</label>
                                                        <input type="text" v-model="agent.name" class="form-control" id="basicpill-firstname-input" placeholder="Enter your name">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="basicpill-phoneno-input">Phone</label>
                                                        <input type="text" v-model="agent.phone" class="form-control" id="basicpill-phoneno-input" placeholder="Enter your Phone Number">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="basicpill-lastname-input">Gender</label><br>
                                                        <select name="" class="form-control" v-model="agent.gender">
                                                            <option value="m">Male</option>
                                                            <option value="f">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="basicpill-email-input">Email</label>
                                                        <input type="email" v-model="agent.email" class="form-control" id="basicpill-email-input" placeholder="Enter your email address">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="basicpill-email-input">Image</label>
                                                        <input type="file" class="form-control pt-3" id="imageFile">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <input type="button" class="btn btn-success inputRef" value="Submit" @click="submitUpdateForm()">
                                                    </div>
                                                </div>
                                                
                                            </div>  
                                        </section>

                                        <!-- Company Document -->
                                        <h3>Change Pasword</h3>
                                        <section>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="basicpill-pancard-input">Current Password</label>
                                                        <input type="text" class="form-control" id="basicpill-pancard-input" v-model="form.current_password" placeholder="Enter Current Password" />
                                                    </div>
                                                </div><!-- end col-md-6 -->

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="basicpill-vatno-input">New Password</label>
                                                        <input type="text" class="form-control" id="basicpill-vatno-input" v-model="form.password" placeholder="Enter New Password">
                                                    </div>
                                                </div><!-- end col-md-6 -->

                                                
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="basicpill-vatno-input">Confirm Password</label>
                                                        <input type="text" class="form-control" id="basicpill-vatno-input" v-model="form.password_confirmation" placeholder="Confirm Password">
                                                    </div>
                                                </div><!-- end col-md-6 -->
                                            </div><!-- end row -->

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <input type="button" class="btn btn-success inputRef" value="Submit" @click="submitPassword">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </section>
                                    </div>

                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
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
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';



export default{
    name:'Dashboard',
    props :{
        email: String,
        token: String,
    },
    data() {
        return {
            form:{
                current_password: '',
                password: '',
                password_confirmation: '',
            }
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
            'agent'
        ]),

        
    },

    methods: { 
        ...mapActions(['getAgent','updateAgentDetails']),
        submitUpdateForm(){

            console.log('yes');
            var formData = new FormData();

            var imagefile = document.querySelector('#imageFile');
            formData.append("image", imagefile.files[0]);


            this.updateAgentDetails({
                id:this.agent.id,
                name:this.agent.name,
                phone:this.agent.phone,
                email:this.agent.email,
                gender:this.agent.gender,
                image:formData ,
            })
        },
        submitPassword(){

            const newForm = useForm({
                email:this.agent.email,
                current_password:this.form.current_password,
                password:this.form.password,
            });
            newForm.post(route('password.update'), {
                onFinish: () => {
                    this.form = {password:'', password_confirmation:'', current_password:''};
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
    width:170px;
    height:40px !important;
    font-size:13px;
    border:1px solid grey;
}
</style>


