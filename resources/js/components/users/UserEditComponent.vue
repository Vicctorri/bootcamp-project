<template>
    <div>
        <el-button type="primary" @click="dialogFormVisible = true">Edit user</el-button>

        <el-dialog title="Edit user" :visible.sync="dialogFormVisible"  width="500px">
            <el-form :model="user" :rules="rules" ref="userForm">
                <el-form-item label="Name" prop="name">
                    <el-input v-model="user.name" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Email" prop="email">
                    <el-input v-model="user.email" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Password" prop="password">
                    <el-input v-model="user.password" autocomplete="off"></el-input>
                </el-form-item>
            </el-form>
            <span slot="footer" class="dialog-footer">
                <el-button @click="dialogFormVisible = false">Cancel</el-button>
                <el-button type="primary" @click="updateUser('userForm')">Confirm</el-button>
            </span>
        </el-dialog>
    </div>
</template>

<script>
export default {
    name: 'UserEditComponent',
    props: {
      user: {
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
                ],
            }
        }
    },
    methods: {
        updateUser(formRef){
            this.$refs[formRef].validate((valid) => {
                if (valid) {
                    this.$store.dispatch('user/updateUser', this.user)
                        .then(() => {
                            // this.$store.dispatch('user/loadUser', this.$route.params.id);
                            this.dialogFormVisible = false;
                            this.$notify({
                                title: 'Success',
                                type: 'success',
                                message: `The user successfully updated!`
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
