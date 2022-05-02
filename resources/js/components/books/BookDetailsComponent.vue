<template>
    <div>
        <book-edit-component :book="book" loadBook="loadBook"></book-edit-component>
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

<style lang="scss" scoped>
$--color-primary: #1b2133;
$--color-secondary: #CA5BB6;
$--color-danger: #F25A62;
$--color-success: #38C8F4;
$--color-text: #F99B41;

.el-button--primary {
    background-color: $--color-primary;
}

.el-button--danger {
    background-color: $--color-danger;
}
</style>
