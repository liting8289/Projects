<template>
    <div>
        <div v-for="todo in allTodos" :key="todo.id">
            <TodoItem :todo="todo"/>
        </div>
    </div>

</template>

<script>
import { mapGetters } from 'vuex';
import TodoItem from './TodoItem.vue';

export default {
    components: {
        TodoItem,
    },
    computed: {
        ...mapGetters(["allTodos"])

    }
}
</script>

<style>

</style>