<script setup>
import Installer from './Installer.vue'
import updater from './Updater.vue'

defineProps({
    lastUpdateCheck: String,
})
</script>

<template>
    <div>
        <installer />
        <updater :last-update-check="lastUpdateCheck" />
    </div>
</template>
