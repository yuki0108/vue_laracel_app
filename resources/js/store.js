import Vue from "vue";
import Vuex from "vuex";
import TaskList from "../js/store/TaskList";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        TaskList: TaskList,
    },
});
