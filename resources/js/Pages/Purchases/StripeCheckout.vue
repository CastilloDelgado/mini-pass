<template>
    <div>
        <stripe-checkout ref="checkoutRef" :pk="publishableKey" />
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
    components: {
        StripeCheckout,
    },

    data() {
        return {
            publishableKey: "",
        };
    },

    methods: {
        submit() {
            this.$refs.checkoutRef.redirectToCheckout();
        },
    },
};
</script>
