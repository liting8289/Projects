import Vue from "vue";
import Vuex from "vuex";
// import axios from 'axios'

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    todos: [
      {
        id: 1,
        title: "one",
        completed: false,
      },
      {
        id: 2,
        title: "two",
        completed: false,
      },
      {
        id: 3,
        title: "three",
        completed: false,
      },
    ],
  },
  getters: {
    allTodos: (state) => state.todos,
  },

  mutations: {
    add_todo(state, todo) {
      state.todos.push(todo);
    },
    delete_todo(state, id) {
      state.todos = state.todos.filter((todo) => todo.id != id);
    },
    update_todo(state, todo) {
      let index = state.todos.findIndex((t) => t.id == todo.id);
      console.log(index);
    },
    change_complete(state, todo) {
      let status = state.todos.findIndex((t) => t.completed == todo.completed);
      console.log(status);
    },
  },
  actions: {
    addTodo({ commit }, todo) {
      commit("add_todo", todo);
    },
    deleteTodo({ commit }, id) {
      commit("delete_todo", id);
    },
    updateTodo({ commit }, todo) {
      commit("update_todo", todo);
    },
    changeCompleted({ commit }) {
      commit("change_complete");
    },
  },
  modules: {},
});
