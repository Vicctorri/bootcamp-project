<template>
    <div class="sidebar">
        <el-menu
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
            <el-menu-item index="4" :route="{ name: 'Categories' }">
                <span>Categories</span>
            </el-menu-item>
        </el-menu>
        <div>
            <a href="/">
                <el-button>
                    View site
                </el-button>
            </a>
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
        padding-left: 0!important;
    }

    a {
        text-decoration: none;
        padding: 0;
        color: $--color-text;
    }

    .el-button,
    .el-menu-item {
        background-color: transparent!important;
        border: 1px solid #fff;
        height: 40px;
        margin: 5px 0;
        border-radius: 5px;
        display: flex!important;
        align-items: center!important;

        &:hover {
            border-color: $--color-text;

            a,
            span {
                color: $--color-text!important;
            }
        }
    }

    .el-button {
        color: #fff;
        padding: 20px 10px;
        font-size: 16px;
    }
}
</style>
