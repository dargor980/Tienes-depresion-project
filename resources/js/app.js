require('./bootstrap');

window.Vue= require('vue');
import swal from 'sweetalert2';
window.Swal = swal;


Vue.component('test',require('./components/test.vue').default);


const app = new Vue({
    el:'#app',
});