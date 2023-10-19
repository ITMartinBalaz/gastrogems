<template>
    <Link v-for="i in 10" :href="route('recipe.show', {recipe: 1})"
          class="group flex flex-col space-y-4 border border-gray-500 rounded-md pb-5 hover:border-primary hover:scale-105 duration-150">
        <img class="w-72 rounded"
             src="https://www.allrecipes.com/thmb/xHBuon0awT1mhSciCN_r_qe1KQQ=/771x514/filters:no_upscale():max_bytes(150000):strip_icc():focal(399x0:401x2):format(webp)/20144-banana-banana-bread-mfs-60-bddcb8e0caac452386de52f6fecf33db.jpg"
             alt="r">
        <span class="pl-3">Category</span>
        <h3 class="font-bold text-xl pl-3 text-primary">Recipe name</h3>
    </Link>
</template>
<script setup>
import {Link} from "@inertiajs/vue3";
</script>
