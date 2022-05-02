<template>
    <div class="sidebar">
        <el-menu
            default-active="1"
            class="el-menu-vertical-demo"
            background-color="transparent"
            text-color="#fff"
            active-text-color="#F99B41"
            :router="true"
        >
            <el-menu-item index="1" :route="{ name: 'ExampleComponent' }">
                <span>Example</span>
            </el-menu-item>
            <el-menu-item index="2" :route="{ name: 'Users' }">
                <span>Users</span>
            </el-menu-item>
            <el-menu-item index="3" :route="{ name: 'Books' }">
                <span>Books</span>
            </el-menu-item>
            <el-menu-item index="3" :route="{ name: 'Categories' }">
                <span>Categories</span>
            </el-menu-item>
        </el-menu>
        <div>
            <el-button>
                <a href="/">
                    View site
                </a>
            </el-button>
        </div>
    </div>
</template>
<script>
export default {
    name: "Sidebar",
};
</script>

<style lang="scss" scoped>
@import "resources/sass/app";

.sidebar {
    background-color: #1b2133;
    height: 100vh;
    min-height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 20px;

    .el-menu-vertical-demo {
        border-right: 0;
    }

    a {
        text-decoration: none;
        padding: 0;
        color: $--color-text;
    }
}
</style>
