import './bootstrap';
import {createApp} from 'vue'
import Carousel from "./components/Carousel.vue";
import LeafWrapper from "./components/LeafWrapper.vue";
import ContactForm from "./components/ContactForm.vue";

const app = createApp()

app
    .component('carousel', Carousel)
    .component('leaf-wrapper', LeafWrapper)
    .component('contact-form', ContactForm)

app.mount('#app')
