import axios from "axios";

const SERVER = "http://127.0.0.1:8000/";
const instance = axios.create({
    baseURL: SERVER,
    headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
    },
});
export default instance;
