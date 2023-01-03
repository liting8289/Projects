<template>
    <div class="itemContainer">
        <div v-for="todo in allTodos" :key="todo.id">
            <TodoItem :todo="todo" />
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

<style scoped>
.itemContainer {
    display: flex;
    align-content: center;
    flex-direction: column;
}
</style>