import axios from "axios";

const httpRequest = axios.create({
    baseURL: 'http://localhost:88/api/',
    headers: {
        Accept: "application/json;charset=UTF-8",
        "Content-Type": "application/json;charset=UTF-8",
    },
    timeout: 0,
});

const responseInterceptor = (response) => {
    return response.data;
};

httpRequest.interceptors.response.use(responseInterceptor);

export default httpRequest;
