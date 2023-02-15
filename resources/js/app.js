require('./bootstrap')

import { createApp } from 'vue'
import LandingPage from './components/LandingPage.vue'

const app = createApp({})

app.component('LandingPage', LandingPage)

app.mount('#app')