Vue.component('tasks',{
    props: ['list'],
    created(){
        this.list= JSON.parse(this.list)
    }
});
new Vue({
    el: 'body',
    data:{
        tasks:[]
    },
    methods:{

    }
});
