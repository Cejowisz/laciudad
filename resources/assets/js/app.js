require('./bootstrap');
// export const bus = new Vue();

window.Vue = require('vue');

// import Links from './components/pages/partials/Links.vue';
import AppNav from './components/pages/template/Nav.vue';
import AppFooter from './components/pages/template/Footer.vue';

// Auth
import Register from './components/auth/Register.vue';

// Pages
import Contact from './components/pages/Contact.vue';

// Admin
import BookCreate from './components/dashboard/BookCreate.vue';
import BookList from './components/dashboard/BookList.vue';




if (document.getElementById('app')) {
    const app = new Vue({
        el: '#app',
        components: {
            AppNav,
            Contact,
            AppFooter,
            Register
        }
    });
}

if (document.getElementById('admin')) {
    const admin = new Vue({
        el: '#admin',
        components: {
            BookCreate,
            BookList
        }
    });
}

