<template>
    <div style="margin:0;padding:0">
        <div class="common__sidebar">
            Sidebar
        </div>
        <div class="" style="background-color:#ECECEC;">
            <configurator></configurator>

        </div>

    </div>
</template>

<script>
    import Configurator from '../components/Configurator.vue';

    export default {
        data: () => ({
            model: build.model
        }),
        mounted() {
            console.log('Designer mounted.')
        },
        components: {
            Configurator
        }
    }
</script>