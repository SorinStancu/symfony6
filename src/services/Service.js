import http from "../httpaxios";
class Service {
    getAll(params) {
        return http.get("/producatori", { params });
    }
    get(id) {
        return http.get(`/tutorials/${id}`);
    }
    create(data) {
        return http.post("/tutorials", data);
    }
    update(id, data) {
        return http.put(`/tutorials/${id}`, data);
    }
    delete(id) {
        return http.delete(`/tutorials/${id}`);
    }
    deleteAll() {
        return http.delete(`/tutorials`);
    }
    findByTitle(title) {
        return http.get(`/producatori?title=${title}`);
    }
}
export default new Service();