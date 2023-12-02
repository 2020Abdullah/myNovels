/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';

// vuetify
import 'vuetify/styles'
import { createApp } from 'vue';
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import router from './router';
// fonts mdi
import "@mdi/font/css/materialdesignicons.css";
// main css
import "../css/main.css";

const app = createApp({});

import AppComponent from './layouts/AppComponent.vue';
app.component('AppComponent', AppComponent);

const vuetify = createVuetify({
  components,
  directives
})

app.use(router).use(vuetify).mount('#app');
