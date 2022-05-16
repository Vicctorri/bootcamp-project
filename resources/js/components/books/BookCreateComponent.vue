<template>
    <div>
        <el-button type="primary" @click="dialogFormVisible = true">Add book</el-button>

        <el-dialog title="Add book" :visible.sync="dialogFormVisible" width="500px">
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
                <el-form-item label="Image">
                    <el-upload
                        action=""
                        list-type="picture"
                        :auto-upload="false"
                        :file-list="formData.files"
                        :on-change="photoChanged"
                    >
                        <el-button size="mini" type="primary">Add image</el-button>
                    </el-upload>
                </el-form-item>
                <el-form-item label="Book PDF">
                    <el-upload
                        action=""
                        list-type="file"
                        :auto-upload="false"
                        :file-list="formData.files"
                        :on-change="bookChanged"
                    >
                        <el-button size="mini" type="primary">Add file</el-button>
                    </el-upload>
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
            image: null,
            formData: {
                files: []
            },
            imageUrl: '',
            dialogFormVisible: false,
            form: {
                title: '',
                description: '',
                page_count: '',
                volume: '',
                edition: '',
                category_id: '',
                image: '',
                file: ''
            },
            rules: {
                title: [
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
        categories() {
            return this.$store.getters['category/getCategories'];
        },
    },
    mounted() {
        this.$store.dispatch('category/loadCategories');
    },
    methods: {
        createBook(formRef) {
            this.$refs[formRef].validate((valid) => {
                if (valid) {
                    const formData = new FormData();
                    formData.append('title', this.form.title);
                    formData.append('description', this.form.description);
                    formData.append('page_count', this.form.page_count);
                    formData.append('volume', this.form.volume);
                    formData.append('edition', this.form.edition);
                    formData.append('category_id', this.form.category_id);
                    formData.append('image', this.form.image);
                    formData.append('file', this.form.file);

                    this.$store.dispatch('book/createBook', formData).then(() => {
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
        },
        photoChanged(file){
            this.form.image = file.raw;  // add photo to form when it's selected
        },
        bookChanged(file) {
          this.form.file = file.raw;
        },
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

.avatar-uploader .el-upload {
    border: 1px dashed #d9d9d9;
    border-radius: 6px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
.avatar-uploader .el-upload:hover {
    border-color: #409EFF;
}
.avatar-uploader-icon {
    font-size: 28px;
    color: #8c939d;
    width: 178px;
    height: 178px;
    line-height: 178px;
    text-align: center;
}
.avatar {
    width: 178px;
    height: 178px;
    display: block;
}
</style>
