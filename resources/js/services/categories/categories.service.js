import httpRequest from "../httpRequest";

const loadCategories = () => {
    return httpRequest.get('categories');
}

const createCategory = (category) => {
    return httpRequest.post('/category', category);
}

const updateCategory = (id, category) => {
    return httpRequest.put(`/category/${id}`, category);
}

const deleteCategory = (id) => {
    return httpRequest.delete(`/category/${id}`);
}

export {
    loadCategories,
    createCategory,
    updateCategory,
    deleteCategory
}
