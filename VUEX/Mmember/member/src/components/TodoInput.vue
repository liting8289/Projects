<template>
  <div>
    <input @change="todoTextChange" v-bind:value="todoText" type="text" placeholder="name"/>
    <button  @click="addTodoI(todoText)">Add</button>
  </div>
</template>

<script>
import { mapActions } from 'vuex';
import {v1} from'uuid';
export default {
    data(){
        return{
            todoText:""
        }
    },
    methods:{
        ...mapActions(["addTodo"]),
        addTodoI(){
            this.addTodo({
                id:v1(),
                title:this.todoText
            });
            this.todoText ="";
        },
        todoTextChange(e){
            this.todoText =e.target.value;
        },
    }
}
</script>

<style>

</style>