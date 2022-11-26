<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue';
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue';
import JetButton from '@/Jetstream/Button.vue';
import JetInput from '@/Jetstream/Input.vue';
import JetLabel from '@/Jetstream/Label.vue';
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <Head title="Forgot Password" />

    <div class="account-pages pt-5 authentication-bg" style="height: 100vh">
        <div class="container card mt-5">
            <div class="row align-items-center justify-content-center">
                <div class="text-center">
                    <Link :href="route('home')">
                        <img
                            src="../../../../public/agent/assets/images/logo.png"
                            alt=""
                            width="150"
                            class="text-center pb-4"
                        />
                    </Link>
                </div>
            </div>
      

            <div class="mb-4 text-gray-600">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </div>

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <div class="row align-items-center justify-content-center ">
                <JetValidationErrors class="my-3 text-white errorDiv p-3" />
            </div>

            <form @submit.prevent="submit">
                <div>
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
                </div>

                <div class="flex items-center justify-end mt-4">
                    <JetButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing" style="font-size:18px;padding:15px 30px !important;background:#0d7c3e;">
                        Email Password Reset Link
                    </JetButton>
                </div>
            </form>
        </div>
    </div>
</template>

<style scoped>
.card{
    width:50%;
    margin-top:100px;
    padding:40px;
}

@media screen and (max-width:500px) {
    .card{
        width:80%;
        margin-top:30px;
        padding:10px;
    }
}



</style>
