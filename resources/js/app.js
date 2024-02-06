import './bootstrap';
import {createApp} from 'vue'
// Vuetify component
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
// Custom components
import Carousel from "./components/Carousel.vue";
import LeafWrapper from "./components/LeafWrapper.vue";
import ContactForm from "./components/ContactForm.vue";
import Reviews from "./components/Reviews.vue";

const vuetify = createVuetify({
    components,
    directives,
})

const app = createApp().use(vuetify)
app
    .component('carousel', Carousel)
    .component('leaf-wrapper', LeafWrapper)
    .component('contact-form', ContactForm)
    .component('reviews', Reviews)

app.mount('#app')
