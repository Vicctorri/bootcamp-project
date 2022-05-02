<template>
    <div>
        <el-button type="primary" @click="dialogFormVisible = true">Edit book</el-button>

        <el-dialog title="Edit book" :visible.sync="dialogFormVisible"  width="500px">
            <el-form :model="book" :rules="rules" ref="bookForm">
                <el-form-item label="Title" prop="title">
                    <el-input v-model="book.title" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Description" prop="description">
                    <el-input v-model="book.description" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Page number" prop="page_count">
                    <el-input v-model="book.page_count" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Volume" prop="volume">
                    <el-input v-model="book.volume" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Edition" prop="edition">
                    <el-input v-model="book.edition" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Category" prop="category_id">
                    <el-input v-model="book.category.name" autocomplete="off"></el-input>
                </el-form-item>
            </el-form>
            <span slot="footer" class="dialog-footer">
                <el-button @click="dialogFormVisible = false">Cancel</el-button>
                <el-button type="primary" @click="updateBook('bookForm')">Confirm</el-button>
            </span>
        </el-dialog>
    </div>
</template>

<script>
export default {
    name: 'BookEditComponent',
    props: {
        book: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            dialogFormVisible: false,
            rules: {
                title: [
                    {
                        required: true,
                        message: 'Please input book title'
                    }
                ],
            }
        }
    },
    methods: {
        updateBook(formRef){
            this.$refs[formRef].validate((valid) => {
                if (valid) {
                    this.$store.dispatch('book/updateBook', this.book)
                        .then(() => {
                            this.dialogFormVisible = false;
                            this.$notify({
                                title: 'Success',
                                type: 'success',
                                message: `The book successfully updated!`
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
