import httpRequest from "../httpRequest";

const loadBooks = () => {
    return httpRequest.get('/books');
};

const loadBook = (id) => {
    return httpRequest.get(`/book/${id}`);
}

const createBook = (book) => {
    return httpRequest.post(`/book`, book);
}

const updateBook = (id, book) => {
    return httpRequest.put(`/book/${id}`, book);
}

const deleteBook = (id) => {
    return httpRequest.delete(`/book/${id}`);
}

export {
    loadBooks,
    loadBook,
    createBook,
    updateBook,
    deleteBook
}
