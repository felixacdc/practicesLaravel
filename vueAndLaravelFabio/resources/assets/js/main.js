import Vue from 'vue'
import VueResource from 'vue-resource'

Vue.use(VueResource)

import VcUsers from './components/users.vue'

new Vue({
    el: '.container',

    components: {
        VcUsers // <vc-users>
    },

    data: {
        title: "Test title"
    }
});