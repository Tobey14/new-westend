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
        onFinish: () => {
            form.reset("password");
            $('.modal-backdrop').removeClass('show');
            $('.modal-backdrop').addClass('fade');
        },
    });
};
</script>

<template>
    <!-- login modal -->
    <div
        class="modal fade"
        id="loginModal"
        tabindex="1"
        role="dialog"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
            <div class="account-form-area">
                <button
                type="button"
                class="close-btn"
                data-dismiss="modal"
                aria-label="Close"
                >
                <i class="las la-times"></i>
                </button>
                <h3 class="title">Welcome Back</h3>
                <div class="account-form-wrapper">
                <form @submit.prevent="submit">
                    <div class="form-group">
                    <label>Email <sup>*</sup></label>
                    <input
                        type="email"
                        name="login_name"
                        id="login_name"
                        v-model="form.email"
                        placeholder="Enter your Email"
                    />
                    </div>
                    <div class="form-group">
                    <label>password <sup>*</sup></label>
                    <input
                        type="password"
                        name="login_pass"
                        id="login_pass"
                        placeholder="password"
                        v-model="form.password"
                    />
                    </div>
                    <div class="d-flex flex-wrap justify-content-between mt-2">
                    <div class="custom-checkbox">
                        <JetCheckbox v-model:checked="form.remember" name="remember" />
                        <label for="id-1">Remember Password</label>

                    </div>
                    <Link v-if="canResetPassword" :href="route('password.request')" class="link">Forgot Password?</Link>
                    </div>
                    <div class="form-group text-center mt-5">
                    <button class="cmn-btn" :disabled="form.processing">log in</button>
                    </div>
                </form>
                <p class="text-center mt-4">
                    Don’t have an account?
                    <Link :href="route('register')" >
                    Sign Up Now</Link>
                </p>
                <div class="divider">
                    <span>or</span>
                </div>
                <ul class="social-link-list">
                    <li>
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                    <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Sign Up modal -->
    <div
        class="modal fade"
        id="signupModal"
        tabindex="1"
        role="dialog"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
            <div class="account-form-area">
                <button
                type="button"
                class="close-btn"
                data-dismiss="modal"
                aria-label="Close"
                >
                <i class="las la-times"></i>
                </button>
                <h3 class="title">Open Free Account</h3>
                <div class="account-form-wrapper">
                <form>
                    <div class="form-group">
                    <label>Email <sup>*</sup></label>
                    <input
                        type="email"
                        name="signup_name"
                        id="signup_name"
                        placeholder="Enter your Email"
                    />
                    </div>
                    <div class="form-group">
                    <label>password <sup>*</sup></label>
                    <input
                        type="password"
                        name="signup_pass"
                        id="signup_pass"
                        placeholder="password"
                    />
                    </div>
                    <div class="form-group">
                    <label>confirm password <sup>*</sup></label>
                    <input
                        type="password"
                        name="signup_re-pass"
                        id="signup_re-pass"
                        placeholder="Confirm Password"
                    />
                    </div>
                    <div class="d-flex flex-wrap mt-2">
                    <div class="custom-checkbox">
                        <input type="checkbox" name="id-2" id="id-2" checked />
                        <label for="id-2">I agree to the</label>
                        <span class="checkbox"></span>
                    </div>
                    <a href="#0" class="link ml-1"
                        >Terms, Privacy Policy and Fees</a
                    >
                    </div>
                    <div class="form-group text-center mt-5">
                    <button class="cmn-btn">log in</button>
                    </div>
                </form>
                <p class="text-center mt-4">
                    Already have an account?
                    <a href="#0" data-target="#loginModal">Login</a>
                </p>
                <div class="divider">
                    <span>or</span>
                </div>
                <ul class="social-link-list">
                    <li>
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                    <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>
