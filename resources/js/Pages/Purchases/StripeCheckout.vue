<template>
    <div class="w-full flex justify-center">
        <stripe-checkout
            ref="checkoutRef"
            :pk="publishableKey"
            :sessionId="sessionId"
        />
        <button
            @click="submit"
            class="bg-green-600 font-bold px-8 py-2 rounded-lg text-white hover:scale-[1.05] hover:bg-green-700 transition"
        >
            Proceder con el pago
        </button>
    </div>
</template>

<script>
import { StripeCheckout } from "@vue-stripe/vue-stripe";
export default {
    props: {
        sale: Object,
    },

    components: {
        StripeCheckout,
    },

    data() {
        return {
            sessionId: null,
            publishableKey: this.$inertia.page.props.stripe_publish,
        };
    },

    mounted() {
        this.getSession();
    },

    methods: {
        getSession() {
            axios
                .get(route("get-session", this.$props.sale.id))
                .then((response) => {
                    this.sessionId = response.data.id;
                })
                .catch((error) => console.log(error));
        },

        submit() {
            this.$refs.checkoutRef.redirectToCheckout();
        },
    },
};
</script>
