<template>
  <section class="payment">
    <div>
      <span>Amount:</span>
      <input type="text" v-model="amount" />
      <button type="button" @click="razorPay">Pay with Razorpay</button>
    </div>
  </section>
</template>

<script>
import axios from "axios";

export default {
  name: "app",
  data() {
    return {
      amount: 100,
    };
  },
  methods: {
    razorPay() {
      axios
        .post("/api/payment/razorpay", { amount: this.amount })
        .then((res) => {
          if (res.data) {
            window.location.href =
              "/pay/razorpay?key=" +
              res.data.key +
              "&amount=" +
              res.data.amount +
              "&order_id=" +
              res.data.order_id;
          }
        })
        .catch((err) => {});
    },
  },
};
</script>
