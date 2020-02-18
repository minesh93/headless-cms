require('./bootstrap');

import Vue from 'vue';
import axios from 'axios';

let app = new Vue({
    el: '#app',

    data() {
        return {
            post: window._POST,
            type: window._TYPE
        }
    },

    methods: {
        update() {
            let isNewPost = true;
            
            if(this.post.id) {
                isNewPost = false;
            }

            let endPoint = `/content/${this.type.post_key}`;

            axios.post(endPoint, this.post).then(response => {
                console.log(response);
            });
        }
    },
});