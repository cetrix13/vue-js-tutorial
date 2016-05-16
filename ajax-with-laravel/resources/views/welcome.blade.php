<!DOCTYPE html>
<html>
    <head>
        <title>My task list with Vue.js</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <tasks list="{{$data}}" inline-template>
                <h2>My tasks:</h2>
                <ul class="list-group">
                    <li class="list-group-item" v-for="task in list">
                        @{{ task.body }}
                    </li>
                </ul>
            </tasks>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
