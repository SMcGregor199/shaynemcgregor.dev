import { createApp } from 'vue';
import './style.css';
import App from './App.vue';

//importing the creatApp function from vue, and then 
//we import App (which is the whole App.vue file) 
// and we 'mount' or place that template inside the div with id of app
// inside our index.html
createApp(App).mount('#app')
