import FormSubmission from "@/pages/from_page/page/FormSubmission.vue";
import UsersList from "@/pages/list_page/page/UsersList.vue";
import {pages} from "@/routers/pages";

const routes = [
    {
        path: pages.FORM,
        name: "form",
        component: FormSubmission,
    },
    {
        path: pages.USER_LIST,
        name: "user-list",
        component: UsersList,
    },
]
export default routes;