import PluginManager from './components/PluginManager.vue'

if (typeof vueApp !== 'undefined') {
    vueApp.booting((app) => {
        app.component('v-plugin-manager', PluginManager)
    })
}
