Vue.component('tasks',{
    props:['list'],
    template: '#task-template' 
})
new Vue({
    el: '#app',
    data:{
    tasks: [ 
            {body: 'Buy milk', completed: false},
            {body: 'Pay for the internet access', completed: false},
            {body: 'Check the weather for tomorrow', completed: true},
    ]} 
});
