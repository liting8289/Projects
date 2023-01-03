<template>
    <div class="input-group justify-content-md-center container-md">
        <input v-on:keyup.enter="addTodoI(todoText)" @change="todoTextChange" v-bind:value="todoText" type="text" class="form-control " />
        <button @click="addTodoI(todoText)" class="btn btn-light btn-outline-secondary btn-sm me-md-2">Add</button>
    </div>
</template>

<script>
import { mapActions } from 'vuex';
import { v1 } from 'uuid';
export default {
    data() {
        return {
            todoText: ""
        }
    },
    methods: {
        ...mapActions(["addTodo"]),
        todoTextChange(e) {
            this.todoText = e.target.value;
        },
        addTodoI() {
            this.addTodo({
                id: v1(),
                title: this.todoText,
                completed:false,
            });
            console.log(this.todoText)
        },
    }
}
</script>

<style>

</style>