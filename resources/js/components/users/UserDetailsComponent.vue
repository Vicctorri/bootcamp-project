<template>
    <div>
        <user-edit-component :user="user"></user-edit-component>
        <el-descriptions label="Username">
            <el-descriptions-item label="Username">{{ user.name }}</el-descriptions-item>
            <el-descriptions-item label="Email">{{ user.email }}</el-descriptions-item>
            <el-descriptions-item label="Role">{{ user.role.name }}</el-descriptions-item>
        </el-descriptions>
    </div>
</template>

<script>
import UserEditComponent from "./UserEditComponent";
export default {
    name: 'UserDetails',
    components: {
      UserEditComponent
    },
    computed: {
      user(){
          return this.$store.getters['user/getUser'];
      }
    },
    mounted() {
        this.loadUser();
    },
    methods: {
        loadUser(){
            this.$store.dispatch('user/loadUser', this.$route.params.id);
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
