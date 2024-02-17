import { defineAsyncComponent } from 'vue'

if (typeof vueApp !== 'undefined') {
    vueApp.booting((app) => {
        app.component(
            'v-plugin-manager',
            defineAsyncComponent(() => import('./components/PluginManager.vue'))
        )
    })
}
