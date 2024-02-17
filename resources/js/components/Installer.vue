<script setup>
import { ref } from 'vue'
import LoadingSpinner from './LoadingSpinner.vue'

const pluginName = ref(null)
const loading = ref(false)

const requirePlugin = () => {
    loading.value = true

    $httpClient
        .make()
        .post(route('plugin-manager.require-plugin', { name: pluginName.value }))
        .then(() => window.location.reload())
        .finally(() => (loading.value = false))
}
</script>

<template>
    <div class="card mb-3">
        <div class="card-header">
            <h4 class="card-title">Install a new plugin</h4>
        </div>
        <div class="card-body">
            <form @submit.prevent="requirePlugin">
                <div class="mb-3">
                    <input
                        type="text"
                        v-model="pluginName"
                        class="form-control"
                        placeholder="vendor/plugin-name"
                        required
                    />
                </div>
                <button type="submit" class="btn btn-primary" :disabled="loading">
                    <loading-spinner v-if="loading" />
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
                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                        <path d="M7 11l5 5l5 -5" />
                        <path d="M12 4l0 12" />
                    </svg>
                    Install
                </button>
            </form>
        </div>
    </div>
</template>
