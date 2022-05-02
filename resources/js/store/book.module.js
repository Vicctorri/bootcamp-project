import {loadBooks, loadBook, createBook, updateBook, deleteBook} from "../services/books/books.service";

const state = () => ({
    books: [],
    book: {}
});

const getters = {
    getBooks(state){
        return state.books;
    },
    getBook(state){
        return state.book;
    }
}

const actions = {
    async loadBooks({commit}){
        try {
            const response = await loadBooks();
            commit('LOAD_BOOKS', response.data);
        } catch (e) {
            throw e;
        }
    },
    async loadBook({commit}, id){
        try {
            const response = await loadBook(id);
            commit('LOAD_BOOK', response.data);
        } catch (e) {
            throw e;
        }
    },
    async createBook({commit}, book){
        try {
            const response = await createBook(book);
            commit('CREATE_BOOK', response.data);
        } catch (e) {
            throw e;
        }
    },
    async updateBook({commit}, book){
        try {
            await updateBook(book.id, {
                title: book.title,
                description: book.description,
                page_count: book.page_count,
                volume: book.volume,
                edition: book.edition,
                category_id: book.category.id
            });
        } catch (e) {
            throw e;
        }
    },
    async deleteBook({commit}, id){
        try {
            await deleteBook(id);
            commit('REMOVE_BOOK', id);
        } catch (e) {
            throw e;
        }
    }

}

const mutations = {
    LOAD_BOOKS(state, books){
        state.books = books;
    },
    LOAD_BOOK(state, book){
        state.book = book;
    },
    CREATE_BOOK(state, book){
        state.books.push(book);
    },
    REMOVE_BOOK(state, bookId){
        const index = state.books.findIndex(book => book.id === bookId);

        if (index !== -1) {
            state.books.slice(index, 1);
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
