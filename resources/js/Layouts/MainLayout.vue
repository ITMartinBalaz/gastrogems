<template>
    <header class="w-full bg-primary">
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <Link :href="route('/')" class="text-lg font-medium">
                    <img :src="route('images.main-logo')" alt="logo" class="w-48 border-0">
                </Link>
                <div class="flex space-x-4 gap-4">
                    <Link class="nav-link">
                        Popular
                    </Link>
                    <Link class="nav-link">
                        Search by ingredients
                    </Link>
                    <Link class="nav-link">
                        Explore
                    </Link>
                </div>
                <div class="flex gap-4">
                    <Link class="nav-link">Log In</Link>
                    <Link class="nav-link">Register</Link>
                </div>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4 w-full">
        <slot>Default</slot>
    </main>
</template>

<script setup>
import {Link, usePage} from '@inertiajs/vue3';
import {computed} from 'vue';
const page = usePage()
</script>
