<template>
    <div>
        <el-button type="primary" @click="dialogFormVisible = true">Add category</el-button>

        <el-dialog title="Add category" :visible.sync="dialogFormVisible"  width="500px">
            <el-form :model="form" :rules="rules" ref="categoryForm">
                <el-form-item label="Name" prop="name">
                    <el-input v-model="form.name" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Description" prop="description">
                    <el-input v-model="form.description" autocomplete="off"></el-input>
                </el-form-item>
            </el-form>
            <span slot="footer" class="dialog-footer">
                <el-button @click="dialogFormVisible = false">Cancel</el-button>
                <el-button type="primary" @click="createCategory('categoryForm')">Confirm</el-button>
            </span>
        </el-dialog>
    </div>
</template>

<script>
export default {
    name: 'CategoryCreateComponent',
    data() {
        return {
            dialogFormVisible: false,
            form: {
                name: '',
                description: ''
            },
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
        createCategory(formRef){
            this.$refs[formRef].validate((valid) => {
                if (valid) {
                    this.$store.dispatch('category/createCategory', {
                        name: this.form.name,
                        description: this.form.description,
                    }).then(() => {
                        this.dialogFormVisible = false;
                        this.$notify({
                            title: 'Success',
                            type: 'success',
                            message: `The category successfully created!`
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
