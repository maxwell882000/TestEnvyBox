import {defineStore} from "pinia";
import {useUserService} from "@/pages/from_page/services/useUserService";

export const useUsersStore = defineStore("users_store", {
    state: () => ({users: []}),

    actions: {
        async storeUser(user) {
            try {
                const results = useUserService().createUsers(user);
                this.users.push(user);
                alert("Success");
            } catch (e) {
                alert(e);
            }
        }
    }
})