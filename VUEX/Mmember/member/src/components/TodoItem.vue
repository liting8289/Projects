<template>
  <div>
    <div v-if="!editing">{{ todo.title }}</div>
    <div v-else>
      <input v-bind:value="todoText" @change="todoTextChange" type="text" />
    </div>
    <div>
      <button @click="updateTodoI(todo)">{{ editing ? 'Update' : 'Edit' }}</button>
      <button @click="deleteTodo(todo.id)">Delete</button>
    </div>
  </div>
</template>

<script>
import { mapActions } from 'vuex'
export default {
  props: {
    todo: {},
  },
  data() {
    return {
      todoText: "",
      editing: false
    }
  },
  methods: {
    ...mapActions(['deleteTodo', 'updateTodo']),
    todoTextChange(e) {
      this.todoText = e.target.value;
    },
    updateTodoI(todo) {
      this.editing = this.editing == true ? false : true;
      if (this.editing) {
        this.todoText = todo.title;
        this.updateTodo(todo);
      }
      else {
        todo.title = this.todoText;
      }
    }
  }
}
</script>

<style>

</style>