<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard.vue";
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";
import { Country, State, City } from 'country-state-city';

const states = State.getStatesOfCountry('NG');

const form = useForm({
    name: "",
    email: "",
    password: "",
    phone: "",
    referred_by: "",
    password_confirmation: "",
    state:"",
    terms: false,
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <div class="account-pages pt-sm-2 authentication-bg">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="text-center">
                    <Link :href="route('home')">
                        <img
                            src="../../../../public/agent/assets/images/logo.png"
                            alt=""
                            width="150"
                            class="text-center"
                        />
                    </Link>
                </div>
            </div>

            <h4 class="countDownDays d-none" style="font-size:40px;">

            </h4>
            <h4 class="countDownDays2 d-none" style="font-size:40px;">

            </h4>

            <h4 class="countDownDays d-none" style="font-size: 40px"></h4>
            <h4 class="countDownDays2 d-none" style="font-size: 40px"></h4>

            <div class="row align-items-center justify-content-center">
                <JetValidationErrors class="my-3 text-white errorDiv p-3" />
            </div>

            <div class="row align-items-center justify-content-center mt-3">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-success">Register Account</h5>
                                <p class="text-muted">
                                    Register as a WestEnd Games Agent now.
                                </p>
                            </div>
                            <div class="p-2 mt-4">
                                <form @submit.prevent="submit">
                                    <div class="mb-3">
                                        <label
                                            class="form-label"
                                            for="useremail"
                                            >Email</label
                                        >
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="useremail"
                                            v-model="form.email"
                                            placeholder="Enter email"
                                        />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="username"
                                            >Full Name</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="username"
                                            v-model="form.name"
                                            placeholder="Enter Full Name"
                                        />
                                    </div>

                                    <div class="mb-3">
                                        <label
                                            class="form-label"
                                            for="useremail"
                                            >Phone</label
                                        >
                                        <input
                                            type="tel"
                                            class="form-control"
                                            id="userphone"
                                            v-model="form.phone"
                                            placeholder="Enter Correct Phone Number"
                                        />
                                    </div>

                                    <div class="mb-3">
                                        <label
                                            class="form-label"
                                            for="useremail"
                                            >Referrer ID (Optional)</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="userphone"
                                            v-model="form.referred_by"
                                            placeholder="Enter Referral ID"
                                        />
                                    </div>


                                    <div class="mb-3">
                                        <label
                                            class="form-label"
                                            for="useremail"
                                            >Select States</label
                                        >
                                        
                                        <select class="form-control" id="userstate" v-model="form.state" required>
                                            <option v-for="state in states" :key="state.isoCode" :value="state.name" >
                                            
                                                {{ state.name }}
                                            </option>
                                            
                                        </select>
                                    </div>

      

                                    

                                    <div class="mb-3">
                                        <label
                                            class="form-label"
                                            for="userpassword"
                                            >Password</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="userpassword"
                                            v-model="form.password"
                                            placeholder="Enter password"
                                        />
                                    </div>

                                    <div class="mb-3">
                                        <label
                                            class="form-label"
                                            for="userpassword"
                                            >Confirm Password</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="userpassword"
                                            v-model="form.password_confirmation"
                                            placeholder="Re-enter password"
                                        />
                                    </div>

                                    <div class="form-check">
                                        <input
                                            type="checkbox"
                                            class="form-check-input"
                                            id="auth-terms-condition-check"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="auth-terms-condition-check"
                                            >I accept
                                            <a
                                                href="javascript: void(0);"
                                                class="text-dark"
                                                >Terms and Conditions</a
                                            ></label
                                        >
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button
                                            class="btn btn-success w-md waves-effect waves-light"
                                            type="submit"
                                            :disabled="form.processing"
                                            style="font-size: 15px;"
                                        >
                                            Register
                                        </button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="font-size-14 mb-3 title">
                                                Sign up using
                                            </h5>
                                        </div>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a
                                                    href="javascript:void()"
                                                    class="social-list-item bg-primary text-white border-primary"
                                                >
                                                    <i
                                                        class="mdi mdi-facebook"
                                                    ></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a
                                                    href="javascript:void()"
                                                    class="social-list-item bg-info text-white border-info"
                                                >
                                                    <i
                                                        class="mdi mdi-twitter"
                                                    ></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a
                                                    href="javascript:void()"
                                                    class="social-list-item bg-danger text-white border-danger"
                                                >
                                                    <i
                                                        class="mdi mdi-google"
                                                    ></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="text-muted mb-0">
                                            Already have an account ?<Link
                                                :href="route('login')"
                                                class="underline text-success hover:text-gray-900"
                                            >
                                                Login</Link
                                            >
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
</template>

<style>
.errorDiv{
    border:1px solid red;
    background:whitesmoke;
    position: relative;

}
</style>