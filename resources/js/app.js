import './bootstrap';
import {createApp} from 'vue'
import Carousel from "./components/Carousel.vue";
import LeafWrapper from "./components/LeafsBlock/LeafWrapper.vue";

const app = createApp()

app
    .component('carousel', Carousel)
    .component('leaf-wrapper', LeafWrapper)

app.mount('#app')
