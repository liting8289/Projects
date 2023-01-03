<template>
  <div class="itemLayout">
    <input  @change="onComplete(todo)" :checked="todo.completed" type="checkbox" />

    <label v-bind:class="[todo.completed ? 'completed' : '']" class="itemContainer" >
      <div v-if="!editing" class="textItem" >{{ todo.title }}</div>
      <div v-else>
        <input v-bind:value="todoText" @change="todoTextChange" v-on:keyup.enter="updateTodoI(todo)" type="text" class="textItem" />
      </div>
    </label>
    <div>
      <button @click="updateTodoI(todo)" class="btn btn-light btn-outline-secondary btn-sm me-md-2">
        {{ editing ? 'Update' : 'Edit' }}
      </button>
      <button @click="deleteTodo(todo.id)" class="btn btn-light btn-outline-danger btn-sm">Delete</button>
    </div>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
export default {
  props: {
    todo: {},
  },
  data() {
    return {
      todoText: "",
      editing: false,
    }
  },
  computed: {
    ...mapGetters(["todos"])
  },
  watch:{
  },
  methods: {
    ...mapActions(['deleteTodo', 'updateTodo','changeCompleted']),
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
    },
    onComplete(todo){
      todo.completed = this.completed == true ? false : true;
      this.changeCompleted();
    },
  }
}
</script>

<style scoped>
.itemLayout {
  display: flex;
  justify-content: center;
  margin: 10px;
  max-width: 1300px;
}

.itemContainer {
  display: flex;
  justify-content: space-between;
  flex-direction: row;
}

.textItem {
  min-width: 200px;
  max-width: 1200px;
}

.completed {
  text-decoration-line: line-through;
}
</style>