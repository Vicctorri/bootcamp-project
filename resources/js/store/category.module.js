import {loadCategories, updateCategory, createCategory, deleteCategory} from "../services/categories/categories.service";

const state = () => ({
    categories: [],
    category: {}
})

const getters = {
    getCategories(state){
        return state.categories;
    },
    getCategory(state){
        return state.category;
    }
}

const actions = {
    async loadCategories({commit}){
        try {
            const response = await loadCategories();
            commit('LOAD_CATEGORIES', response.data);
        } catch (e) {
            throw e;
        }
    },
    async createCategory({commit}, category){
        try {
            const response = await createCategory(category);
            commit('CREATE_CATEGORY', response.data);
        } catch (e) {
            throw e;
        }
    },
    async updateCategory({commit}, category){
        try {
            await updateCategory(category.id, {
                name: category.name,
                description: category.description,
            });
        } catch (e) {
            throw e;
        }
    },
    async deleteCategory({commit}, categoryId){
        try {
            await deleteCategory(categoryId);
            commit('REMOVE_CATEGORY', categoryId);
        } catch (e) {
            throw e;
        }
    }
}

const mutations = {
    LOAD_CATEGORIES(state, categories){
        state.categories = categories;
    },
    CREATE_CATEGORY(state, category){
        state.categories.push(category);
    },
    REMOVE_CATEGORY(state, categoryId){
        const index = state.categories.findIndex(category => category.id === categoryId);

        if (index !== -1) {
            state.categories.slice(index, 1);
        }
    }
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
