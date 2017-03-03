<template>
    <div class="row expanded" style="margin:0;padding:0">
        <div class="large-9 medium-8 columns">
            Accents
        </div>
        <div class="large-3 medium-4 columns common__sidebar">
            Sidebar
        </div>
    </div>
</template>

<script>
    export default {
        data: () => ({
            model: build.model
        }),
        mounted() {
            console.log('Accents mounted.');
        }
    }
</script>