<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4">Добавить Ветку</h3>
        </div>
        <div>
            <div class="mb-4" v-if="sections.length">
                <select
                    class="border-gray-300 p-2 w-1/4"
                    v-model="section_id"
                    @change="getBranches"
                >
                    <option value="null" selected disabled>Выбирите раздел</option>
                    <option v-for="section in sections" :value="section.id">{{section.title}}</option>
                </select>
                <div v-if="this.$page.props?.errors?.section_id" class="text-sm text-red-600">
                    {{ this.$page.props.errors.section_id}}
                </div>
            </div>
            <div class="mb-4" v-if="branches.length">
                <select
                    class="border-gray-300 p-2 w-1/4"
                    v-model="parent_id"
                >
                    <option value="null" selected disabled>Выбирите ветку</option>
                    <option v-for="branch in branches" :value="branch.id">{{branch.title}}</option>
                </select>
            </div>
            <div class="mb-4">
                <input type="text" placeholder="заголовок" v-model="title" class="border-gray-300 p-2 w-1/4">
                <div v-if="this.$page.props?.errors?.title" class="text-sm text-red-600">
                    {{ this.$page.props.errors.title}}
                </div>
            </div>
            <div>
                <a class="block py-2 w-1/4 bg-sky-500 border border-sky-600 text-white text-center" @click.prevent="store" href="#">Добавить</a>
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
      'sections'
    ],
    data() {
        return {
            title: '',
            section_id: null,
            branches: [],
            parent_id: null,
        }
    },

    methods: {
        store() {
            this.$inertia.post('/branches', {
                section_id: this.section_id,
                title: this.title,
                parent_id: this.parent_id,
            })
        },

        getBranches() {
            this.parent_id = null;
            axios.get(`/sections/${this.section_id}/branches`)
                .then(res => {
                    this.branches = res.data;
                })
        }
    }
}
</script>

<style scoped>

</style>
