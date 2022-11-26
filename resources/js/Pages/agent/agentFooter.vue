<template>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    {{ this.Year }}© WestEnd Gaming Limited.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with
                        <i class="mdi mdi-heart text-danger"></i> by
                        <a
                            href="https://wa.me/2347054370313"
                            target="_blank"
                            class="text-reset"
                            >Brainiac Solutions</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
// import { mapGetters, mapActions } from 'vuex';
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
    name: "sideBar",
    components: {
        Link,
    },
    data() {
        return {
            businessName: "",
            desc: "",
            size: "",
            plan: "",
            year: new Date().getFullYear(),
        };
    },

    methods: {},
    mounted() {},
    created() {},
};
</script>
<style scoped></style>
