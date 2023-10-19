<template>
    <Section>
        <template #header>Now Popular</template>
        <div class="flex flex-col space-y-10 lg:space-y-0 lg:grid lg:grid-cols-2 lg:space-x-36">
            <Link :href="route('recipe.show', {recipe: 1})" class="group">
                <img class="rounded shadow-md shadow-gray-700" src="https://www.allrecipes.com/thmb/xHBuon0awT1mhSciCN_r_qe1KQQ=/771x514/filters:no_upscale():max_bytes(150000):strip_icc():focal(399x0:401x2):format(webp)/20144-banana-banana-bread-mfs-60-bddcb8e0caac452386de52f6fecf33db.jpg" alt="recipe">
                <div class="mt-4">
                    <h4 class="font-bold text-2xl group-hover:border-primary border-b-2 border-transparent transition-all text-primary inline">Recipe name</h4>
                    <p class="mt-3">Recipe rating</p>
                </div>
            </Link>
            <div class="flex flex-col space-y-8">
                <Link v-for="i in 4" :href="route('recipe.show', {recipe: 1})" class="group flex gap-5">
                    <img class="w-40 rounded" src="https://www.allrecipes.com/thmb/xHBuon0awT1mhSciCN_r_qe1KQQ=/771x514/filters:no_upscale():max_bytes(150000):strip_icc():focal(399x0:401x2):format(webp)/20144-banana-banana-bread-mfs-60-bddcb8e0caac452386de52f6fecf33db.jpg" alt="r">
                    <div class="flex flex-col space-y-2">
                        <h2 class="font-bold text-lg group-hover:border-primary border-b-2 border-transparent transition-all text-primary">Recipe name</h2>
                        <p>Recipe rating</p>
                    </div>
                </Link>
            </div>
        </div>
    </Section>
    <Section>
        <template #header>Explore</template>
        <div class="flex flex-wrap justify-center gap-10">
            <RecipeItem />
        </div>
    </Section>
</template>
<script setup>
import {Link} from '@inertiajs/vue3';
import Section from "@/Components/Section.vue";
import RecipeDetails from "@/Pages/RecipeDetails.vue";
import RecipeItem from "@/Components/RecipeItem.vue";
</script>
