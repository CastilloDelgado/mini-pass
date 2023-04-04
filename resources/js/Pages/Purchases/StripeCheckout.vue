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
            publishableKey:
                "pk_test_51Mq9wQFRY0xDs6dWnMwl4TfVlQwHmjS3sORzXJvkT2FJXUeAfVqEKRmiR11xV6x7qVxHaqA99hwz0EYqFO5lfSJw00NsrChguz",
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
