import axios from "axios";
const authSession = "Bearer " + localStorage.getItem("session");
// axios.defaults.baseURL = "http://localhost:8000/";

export default class API {
  async createUser(data) {
    return await axios.post("/api/create", data, {
      headers: {
        "Content-Type": "multipart/form-data",
        Authorization: authSession
      }
    });
  }

  async signIn(data) {
    return await axios.post("/api/login", data, {
      headers: {
        "Content-Type": "multipart/form-data",
        Authorization: authSession
      }
    });
  }
}
