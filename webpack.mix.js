const mix = require('laravel-mix')
const path = require('path')

const directory = path.basename(path.resolve(__dirname))
const source = `platform/plugins/${directory}`
const dist = `public/vendor/core/plugins/${directory}`

mix.vue().js(`${source}/resources/js/plugin-manager.js`, `${dist}/js`)

if (mix.inProduction()) {
    mix.copyDirectory(`${dist}/js`, `${source}/public/js`)
}
