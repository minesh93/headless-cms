require('./bootstrap');
require('./components/component');

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

    created() {
        this.post.content = window._CONTENT;
    },

    methods: {
        update() {
            let isNewPost = true;
            
            if(this.post.id) {
                isNewPost = false;
            }

            let endPoint = `/content/${this.type.post_key}`;

            console.log(this.post);

            if(!isNewPost) {
                endPoint = `/content/${this.type.post_key}/edit/${this.post.id}`;
            }

            axios.post(endPoint, this.post).then(response => {
                
            });
        }
    },
});