<template>
  <div >
    <h1 >Member List</h1>
    <TodoInput />
    <TodoList />
    <TodoItem />
  </div>
</template>

 <script >
import TodoInput from '../components/TodoInput.vue';
import TodoList from '../components/TodoList.vue';
import TodoItem from '../components/TodoItem.vue';

export default {
    components:{
    TodoInput,
    TodoList,
    TodoItem,
  }
}
</script>

<style scoped>

</style>