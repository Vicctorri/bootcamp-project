<template>
    <div>
        <el-button type="primary" @click="dialogFormVisible = true">Add user</el-button>

        <el-dialog title="Create user" :visible.sync="dialogFormVisible"  width="500px">
            <el-form :model="form" :rules="rules" ref="userForm">
                <el-form-item label="Name" prop="name">
                    <el-input v-model="form.name" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Email" prop="email">
                    <el-input v-model="form.email" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Password" prop="password">
                    <el-input v-model="form.password" autocomplete="off"></el-input>
                </el-form-item>
            </el-form>
            <span slot="footer" class="dialog-footer">
                <el-button @click="dialogFormVisible = false">Cancel</el-button>
                <el-button type="primary" @click="createUser('userForm')">Confirm</el-button>
            </span>
        </el-dialog>
    </div>
</template>

<script>
export default {
    name: 'UserCreateComponent',
    data() {
        return {
            dialogFormVisible: false,
            form: {
                name: '',
                email: '',
                password: '',
            },
            rules: {
                name: [
                    {
                        required: true,
                        message: 'Please input active name'
                    }
                ],
                email: [
                    {
                        required: true,
                        message: 'Please input active email'
                    }
                ],
                password: [
                    {
                        required: true,
                        message: 'Please input active password'
                    }
                ]
            }
        }
    },
    methods: {
        createUser(formRef){
            this.$refs[formRef].validate((valid) => {
                if (valid) {
                    this.$store.dispatch('user/createUser', {
                        name: this.form.name,
                        email: this.form.email,
                        password: this.form.password
                    }).then(() => {
                        this.dialogFormVisible = false;
                        this.$notify({
                            title: 'Success',
                            type: 'success',
                            message: `The user successfully created!`
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
