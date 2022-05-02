<template>
    <div>
        <el-button type="primary" @click="dialogFormVisible = true">Edit</el-button>

        <el-dialog title="Edit category" :visible.sync="dialogFormVisible"  width="500px">
            <el-form :model="category" :rules="rules" ref="categoryForm">
                <el-form-item label="Name" prop="name">
                    <el-input v-model="category.name" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Description" prop="description">
                    <el-input v-model="category.description" autocomplete="off"></el-input>
                </el-form-item>
            </el-form>
            <span slot="footer" class="dialog-footer">
                <el-button @click="dialogFormVisible = false">Cancel</el-button>
                <el-button type="primary" @click="updateCategory('categoryForm')">Confirm</el-button>
            </span>
        </el-dialog>
    </div>
</template>

<script>
export default {
    name: 'CategoryEditComponent',
    props: {
        category: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            dialogFormVisible: false,
            rules: {
                name: [
                    {
                        required: true,
                        message: 'Please input category name'
                    }
                ],
                description: [
                    {
                        required: true,
                        message: 'Please input category description'
                    }
                ],
            }
        }
    },
    methods: {
        updateCategory(formRef){
            this.$refs[formRef].validate((valid) => {
                if (valid) {
                    this.$store.dispatch('category/updateCategory', this.category)
                        .then(() => {
                            this.dialogFormVisible = false;
                            this.$notify({
                                title: 'Success',
                                type: 'success',
                                message: `The category successfully updated!`
                            });
                        }).catch(e => {
                        this.$notify.error({
                            title: 'Error',
                            message: e
                        });
                    })
                }

                return false;
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

.el-select {
    width: 100%;
}
</style>
