<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div id="app">
            <tasks list="{{$data}}"></tasks>
            <template id="tasks-template">
                <h1>My tasks:</h1>
                <ul class="list-group">
                    <li class="list-group-item" v-for="task in list">
                        @{{ task.body }}
                    </li>
                </ul>
            </template>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.min.js"></script>
    <script>
        Vue.component('tasks',{
            props: ['list'],
            template: '#tasks-template',
            created(){
                this.list= JSON.parse(this.list)
            }
        });
        new Vue({
            el: '#app',
            data:{
                tasks:[]
            },
            methods:{

            }
        });
    </script>
    </body>
</html>
