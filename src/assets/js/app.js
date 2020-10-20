import Vue from 'vue'
import VueMeta from 'vue-meta'
import Main from '@/Components/Main'

Vue.config.productionTip = false

Vue.use(VueMeta)

let app = document.getElementById('app')

new Vue({
  metaInfo: {
    titleTemplate: (title) => title ? `${title} - Protoyping` : 'Protoyping'
  },
  render: h => h(Main),
}).$mount(app)