Vue.component('tasks',{
    props: ['list'],
    data: {
        list: []
    },
    created: function() {
       this.fetchTaskList();
    },
    methods:{
        fetchTaskList: function(){
            this.$http.get('api/tasks', function(tasks){
                this.list = tasks;
            }.bind(this));
        }
    }
});
new Vue({
    el: 'body',
    data:{
        tasks:[]
    }
});
