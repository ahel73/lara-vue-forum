<template>
    <div>{{branch}}
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4">Добавить тему</h3>
        </div>
        <div>
            <div class="mb-4">
                <input type="text" placeholder="Заголовок" v-model="title" class="border-gray-300 p-2 w-1/2">
            </div>
            <div class="mb-4">
                <textarea placeholder="Описание" v-model="diccription" class="border-gray-300 p-2 w-1/2"></textarea>
            </div>
            <div>
                <a class="block w-1/4 py-2 bg-sky-500 border border-sky-600 text-white text-center" @click.prevent="store" href="#">Добавить</a>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "Create",
    layout: MainLayout,
    components: {
        Link,
    },
    props: [
      'branch'
    ],
    data() {
        return {
            title: '',
            diccription: '',
        }
    },

    methods: {
        store() {
            this.$inertia.post('/themes', {title: this.title, deccription: this.diccription, branch_id: this.branch.id})
        }
    }
}
</script>

<style scoped>

</style>
