<script setup>
const content = [
  {
    id: 1,
    title: "POINT-OF-SALE (POS)",
    icon: "bi:file-post",
    items: [
      "Rich POS functionalities for different business scenarios - retail, merchandise, catering, or sports and entertainment",
      "From sales, returns, payments, to discounts",
      "Manage all POS systems in different shops centrally using SAP Customer Checkout manager",
    ],
  },
  {
    id: 2,

    title: "INTEGRATION",
    icon: "lucide:combine",
    items: [
      "Benefit from the integration flexibility",
      "Use SAP Customer Checkout as standalone without SAP ERP systems, or",
      "Integrated with SAP S/4HANA, SAP Business One, or SAP Business ByDesign to transmit transactions to your warehouse management and accounting applications",
    ],
  },
  {
    id: 3,
    title: "LOYALTY",
    icon: "fluent-mdl2:insights",
    items: [
      "Gain insights on customer purchase history",
      "Offer personalized loyalty programs to your customers.",
      "Define your own point calculation, and let your customers collect and redeem loyalty points",
      "Integrate a mobile app to view, collect, and redeem loyalty points",
    ],
  },
  {
    id: 4,
    title: "COUPONS & GIFT CARDS",
    icon: "hugeicons:coupon-percent",
    items: [
      "Reward your customers with personalized coupons directly in your POS",
      "Sell gift cards to loyal customers and redeem them completely or partially",
      "Central gift card reports and insights",
    ],
  },
  {
    id: 5,
    title: "MOBILE ORDER",
    icon: "mynaui:mobile",
    items: [
      "Let your customers order food and beverages via their smartphone",
      "Offer to customers your different assortments",
      "Let your customers pay in advance - cashless, and via smartphone",
      "Order and pick up ",
      "Reduce waiting time for your customers to order menu",
    ],
  },
  {
    id: 6,
    title: "REPORTING & ANALYTICS",
    icon: "lucide:chart-line",
    items: [
      "Access real-time reports and track revenue per shop, cashier, or sales item",
      "Keep your financial results under control",
      "Analyze sales data in SAP Customer Checkout manager",
      "Explore detailed insights when integrated with SAP S/4HANA, SAP Business One, SAP Business ByDesign, and SAP Analytics Cloud",
    ],
  },
];
</script>

<template>
  <CommonReason
    extra-class=" md:grid-cols-2 min-[900px]:grid-cols-3"
    :contents="content"
    title="Why you should choose SAP Customer checkout"
    description="With real-time insights, streamlined processes, and robust security, our solution empowers your business to stay ahead in a competitive market."
  />
</template>
