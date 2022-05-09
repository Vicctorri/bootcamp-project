<template>
    <div>
        <el-button type="primary" @click="dialogFormVisible = true">Add book</el-button>

        <el-dialog title="Add book" :visible.sync="dialogFormVisible"  width="500px">
            <el-form :model="form" :rules="rules" ref="bookForm">
                <el-form-item label="Title" prop="title">
                    <el-input v-model="form.title" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Description" prop="description">
                    <el-input v-model="form.description" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Page number" prop="page_count">
                    <el-input v-model="form.page_count" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Volume" prop="volume">
                    <el-input v-model="form.volume" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Edition" prop="edition">
                    <el-input v-model="form.edition" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Category" prop="category_id">
                    <el-select v-model="form.category_id" placeholder="">
                        <el-option
                            v-for="category in categories"
                            :key="category.id"
                            :label="category.name"
                            :value="category.id"
                        ></el-option>
                    </el-select>
                </el-form-item>
            </el-form>
            <span slot="footer" class="dialog-footer">
                <el-button @click="dialogFormVisible = false">Cancel</el-button>
                <el-button type="primary" @click="createBook('bookForm')">Confirm</el-button>
            </span>
        </el-dialog>
    </div>
</template>

<script>
export default {
    name: 'BookCreateComponent',
    data() {
        return {
            dialogFormVisible: false,
            form: {
                title: '',
                description: '',
                page_count: '',
                volume: '',
                edition: '',
                category_id: '',
            },
            rules: {
                name: [
                    {
                        required: true,
                        message: 'Please input book title'
                    }
                ],
                category_id: [
                    {
                        required: true,
                        message: 'Please select an category'
                    }
                ]
            }
        }
    },
    computed: {
        categories(){
            return this.$store.getters['category/getCategories'];
        }
    },
    mounted() {
        this.$store.dispatch('category/loadCategories');
    },
    methods: {
        createBook(formRef){
            this.$refs[formRef].validate((valid) => {
                if (valid) {
                    this.$store.dispatch('book/createBook', {
                        title: this.form.title,
                        description: this.form.description,
                        page_count: this.form.page_count,
                        volume: this.form.volume,
                        edition: this.form.edition,
                        category_id: this.form.category_id
                    }).then(() => {
                        this.dialogFormVisible = false;
                        this.$notify({
                            title: 'Success',
                            type: 'success',
                            message: `The book successfully added!`
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
.el-select {
    width: 100%;
}
</style>
