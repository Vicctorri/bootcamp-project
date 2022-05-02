<template>
    <div>
        <book-edit-component :book="book"></book-edit-component>
        <el-descriptions label="Username">
            <el-descriptions-item label="Title">{{ book.title }}</el-descriptions-item>
            <el-descriptions-item label="Description">{{ book.description }}</el-descriptions-item>
            <el-descriptions-item label="Page number">{{ book.page_count }}</el-descriptions-item>
            <el-descriptions-item label="Volume">{{ book.volume }}</el-descriptions-item>
            <el-descriptions-item label="Edition">{{ book.edition }}</el-descriptions-item>
            <el-descriptions-item label="Category">{{ book.category.name }}</el-descriptions-item>

        </el-descriptions>
    </div>
</template>

<script>
import BookEditComponent from "./BookEditComponent";
export default {
    name: 'BookDetails',
    components: {
        BookEditComponent
    },
    computed: {
        book(){
            return this.$store.getters['book/getBook'];
        }
    },
    mounted() {
        this.loadBook();
    },
    methods: {
        loadBook(){
            this.$store.dispatch('book/loadBook', this.$route.params.id);
        }
    }
}
</script>
