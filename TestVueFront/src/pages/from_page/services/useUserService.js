import api from "@/services/api/api";

export const useUserService = () => {
    async function createUsers(users) {
        return api.post("api/form-submission", users);
    }

    return {createUsers: createUsers};
}