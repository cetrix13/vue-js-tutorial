// Include vue.js
var Vue = require('vue');

// import template and alert's logic
import Alert from './components/Alert.vue';

new Vue({
    el:'#app',
    // components in use
    components: { Alert: Alert },
    ready() {
        alert("Ready to go");
    }
});