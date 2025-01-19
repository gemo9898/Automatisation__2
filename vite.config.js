import { defineConfig } from 'vite'

export default defineConfig({
    root: './assets',
    base: '/build/',
    server: {
        port: 3000
    },
    build: {
        manifest: true,
        outDir: '../public/build',
    }
})