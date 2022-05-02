<template>
    <div>
        <div class="view-title d-flex">
            <h1>Books</h1>
            <book-create-component></book-create-component>
        </div>
        <div class="view-content">
            <el-table
                class="table"
                :data="books"
                v-loading="loading"
                style="width: 100%">
                <el-table-column
                    prop="title"
                    label="Title"
                    width="180">
                </el-table-column>
                <el-table-column
                    prop="description"
                    label="Description">
                </el-table-column>
                <el-table-column
                    label="Actions"
                    width="180">
                    <template slot-scope="scope">
                        <div class="d-flex">
                            <router-link :to="{ name: 'BookDetails', params: { id: scope.row.id }}">
                                <el-button type="primary">
                                    View
                                </el-button>
                            </router-link>
                            <el-button type="danger" @click="deleteBook(scope.row)">
                                Delete
                            </el-button>
                        </div>
                    </template>
                </el-table-column>
            </el-table>
        </div>

    </div>
</template>

<script>
import BookCreateComponent from "../../components/books/BookCreateComponent";

export default {
    name: 'Books',
    components: {
        BookCreateComponent
    },
    data() {
        return {
            loading: true
        }
    },
    computed: {
        books() {
            return this.$store.getters['book/getBooks'];
        }
    },
    mounted() {
        this.search();
    },
    methods: {
        search() {
            this.$store.dispatch('book/loadBooks').then(() => {
                this.loading = false;
            })
        },
        deleteBook(book) {
            console.log(book)
            this.$confirm(
                `Are you sure you want to delete book ${book.title}?`,
                {
                    title: 'Delete book',
                    confirmButtonText: "OK",
                    cancelButtonText: "Cancel",
                    type: "warning"
                }
            ).then(() => {
                this.$store.dispatch('book/deleteBook', book.id)
                    .then(() => {
                        this.$notify({
                            title: 'Success',
                            type: 'success',
                            message: `The ${book.title} successfully deleted!`
                        });
                        this.search();
                    })
                    .catch(e => {
                        this.$notify.error({
                            title: 'Error',
                            message: e
                        });
                    });
            })
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

.d-flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
</style>
