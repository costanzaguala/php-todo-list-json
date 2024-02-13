<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php to do list</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <h1>
                Php to do list
            </h1>
        </header>

        <main id="app">
            <ul>
                <li v-for="todo in todolist" :class="{
                                                        'completed': todo.status == true
                                                    }">
                    {{todo.task}}
                </li>

            </ul>
        </main> 

        <!-- JS -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="./db/js/script.js"></script>
        
    </body>
</html>