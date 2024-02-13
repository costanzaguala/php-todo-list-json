const { createApp } = Vue;

createApp({
    data() {
        return {
            todolist: []
        }
    },
    created () {
        axios
            .get('http://localhost:8888/php-todo-list-json/todolist.php')
            .then(res => {
                console.log(res.data); 
                this.todolist = res.data; 
            });
    }
}).mount('#app');