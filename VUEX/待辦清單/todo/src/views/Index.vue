<template>
  <div class="wrape">
    <h1 class="title">Todo List</h1>
    <TodoInput class="layout" />
    <TodoList class="layout" />
  </div>
</template>

 <script >
import TodoInput from '../components/TodoInput.vue';
import TodoList from '../components/TodoList.vue';
export default {
    components:{
    TodoInput,
    TodoList,
  }
}
</script>

<style scoped>
.wrape{
  max-width: 100%;
  display: flex;
  align-content: center;
  flex-direction: column;
}
.title{
margin: 30px 0;
}
.layout{
  margin: 20px 0;
  display: flex;
  align-content: center;
}
</style>