<template>
    <div>
        <div class="flex items-center">
            <h3 class="text-xl mr-4">Разделы</h3>
            <Link :href="route('sections.create')" class="block mr-4 w-1/6 px-2 py-1  bg-white border border-gray-3000 rounded-lg text-center">+ Раздел</Link>
            <Link :href="route('branches.create')" class="block w-1/6 px-2 py-1  bg-white border border-gray-3000 rounded-lg text-center">+ Ветку</Link>
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3";

export default {
    name: "Index",
    layout: MainLayout,
    components: {
        Link,
    }
}
</script>

<style scoped>

</style>
