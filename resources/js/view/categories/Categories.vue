<template>
    <div>
        <div class="view-title d-flex">
            <h1>Categories</h1>
            <category-create-component></category-create-component>
        </div>
        <div class="view-content">
            <el-table
                class="table"
                :data="categories"
                v-loading="loading"
                style="width: 100%">
                <el-table-column
                    prop="name"
                    label="Name"
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
                            <category-edit-component :category="scope.row"></category-edit-component>
                            <el-button type="danger" @click="deleteCategory(scope.row)">
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
import CategoryCreateComponent from "../../components/categories/CategoryCreateComponent";
import CategoryEditComponent from "../../components/categories/CategoryEditComponent";
export default {
    name: 'Categories',
    components: {
        CategoryCreateComponent,
        CategoryEditComponent
    },
    data() {
        return {
            loading: true
        }
    },
    computed: {
        categories() {
            return this.$store.getters['category/getCategories'];
        }
    },
    mounted() {
        this.search();
    },
    methods: {
        search() {
            this.$store.dispatch('category/loadCategories')
                .then(() => {
                    this.loading = false;
                })
        },
        deleteCategory(category) {
            this.$confirm(
                `Are you sure you want to delete category ${category.name}?`,
                {
                    title: 'Delete category',
                    confirmButtonText: "OK",
                    cancelButtonText: "Cancel",
                    type: "warning"
                }
            )
                .then(() => {
                    this.$store.dispatch('category/deleteCategory', category.id)
                        .then(() => {
                            this.$notify({
                                title: 'Success',
                                type: 'success',
                                message: `The ${category.name} successfully deleted!`
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
.d-flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
</style>
