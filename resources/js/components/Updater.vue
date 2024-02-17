<script setup>
import { ref, defineProps } from 'vue'
import PluginItem from './PluginItem.vue'
import LoadingSpinner from './LoadingSpinner.vue'

const props = defineProps({
    lastUpdateCheck: String,
})

const checkForUpdatesLoading = ref(false)
const pluginUpdates = ref([])
const lastCheck = ref(props.lastUpdateCheck)

const checkForUpdates = () => {
    checkForUpdatesLoading.value = true

    $httpClient
        .make()
        .post(route('plugin-manager.check-for-updates'))
        .then(({ data }) => {
            const { last_check, plugins } = data.data

            lastCheck.value = last_check
            pluginUpdates.value = []

            plugins.forEach((plugin) => {
                if (['semver-safe-update', 'update-possible'].includes(plugin['latest-status'])) {
                    pluginUpdates.value.push(plugin)
                }
            })

            if (pluginUpdates.value.length < 1) {
                Botble.showSuccess('Everything is up to date.')
            }
        })
        .finally(() => (checkForUpdatesLoading.value = false))
}

const globalUpdate = () => {}

const updatePlugin = (plugin) => {
    $httpClient
        .make()
        .post(route('plugin-manager.update-plugin', { name: plugin.name }))
        .then(() => window.location.reload())
}
</script>

<template>
    <div class="card">
        <div class="card-header">
            <div>
                <h3 class="card-title">
                    Updates
                    <span class="card-subtitle"> Run a check for updates to your plugins. </span>
                </h3>
            </div>
        </div>
        <div class="card-body">
            <p>
                <strong>Last update check:</strong> <span class="text-muted">{{ lastCheck }}</span>
            </p>

            <div class="btn-list">
                <button type="button" class="btn" @click="checkForUpdates" :disabled="checkForUpdatesLoading">
                    <loading-spinner v-if="checkForUpdatesLoading" />

                    <svg
                        v-else
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                    </svg>
                    Check for updates
                </button>

                <button type="button" class="btn" @click="globalUpdate">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 4v16l13 -8z" />
                    </svg>
                    Run global update
                </button>
            </div>

            <div v-if="pluginUpdates.length > 0" class="list-group list-group-flush mt-3">
                <plugin-item
                    v-for="plugin in pluginUpdates"
                    :key="plugin.name"
                    :plugin="plugin"
                    @updatePlugin="updatePlugin"
                />
            </div>
        </div>
    </div>
</template>
