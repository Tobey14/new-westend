<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard.vue";
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";


defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.transform((data) => ({
        ...data,
        remember: form.remember ? "on" : "",
    })).post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <div class="account-pages pt-sm-5 authentication-bg" style="height: 100vh">
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

            <div class="row align-items-center justify-content-center ">
                <JetValidationErrors class="my-3 text-white errorDiv p-3" />
            </div>

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>
            <div class="row align-items-center justify-content-center mt-3">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-success">Welcome Back!</h5>
                                <p class="text-muted">
                                    Sign in to Westend Gaming Platform.
                                </p>
                            </div>
                            <div class="p-2 mt-4">
                                <form @submit.prevent="submit">
                                    <div class="mb-3">
                                        <label class="form-label" for="email"
                                            >Email</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-model="form.email"
                                            id="username"
                                            placeholder="Enter Email"
                                        />
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            <Link
                                                v-if="canResetPassword"
                                                :href="
                                                    route('password.request')
                                                "
                                                class="text-primary"
                                            >
                                                Forgot your password?
                                            </Link>
                                        </div>

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

                                    <div class="form-check">
                                        <JetCheckbox
                                            v-model:checked="form.remember"
                                            name="remember"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="auth-remember-check"
                                            >Remember me</label
                                        >
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button
                                            class="btn btn-success w-md waves-effect waves-light"
                                            :disabled="form.processing"
                                            type="submit"
                                            style="font-size: 15px;"

                                        >
                                            Log In
                                        </button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="font-size-14 mb-3 title">
                                                Sign in with
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
                                        <p class="mb-0">
                                            Don't have an account ?
                                            <Link
                                                :href="route('register')"
                                                class="fw-medium text-success"
                                                >Signup now
                                            </Link>
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
