<script setup>
defineEmits(['updatePlugin'])

defineProps({
    plugin: {
        type: Object,
        required: true,
    },
})

const version = (version) => {
    return `v${version.replace(/^v/, '')}`
}
</script>

<template>
    <div class="list-group-item">
        <div class="row align-items-center">
            <div class="col">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="mb-2">
                            <a :href="plugin['url']" target="_blank">
                                {{ plugin['name'] }}
                            </a>
                        </h4>
                        <div class="d-flex align-items-center gap-1">
                            <span>{{ version(plugin['version']) }}</span>
                            <span class="badge bg-green-lt">{{ version(plugin['latest']) }}</span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-sm btn-icon" @click="$emit('updatePlugin', plugin)">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-sm"
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
                                <path d="M12 5l0 14" />
                                <path d="M18 11l-6 -6" />
                                <path d="M6 11l6 -6" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
