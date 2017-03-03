<template>
    <div class="common__navigation clearfix">
        <div class="common__navigation-btn" @click="launch('designer')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Designer</div>
        <div class="common__navigation-btn" @click="launch('accents')"><i class="fa fa-flag" aria-hidden="true"></i> Accents</div>
        <div class="common__navigation-btn" @click="launch('publisher')"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Publisher</div>
        <div class="common__navigation-btn" @click="launch('styles')"><i class="fa fa-paint-brush" aria-hidden="true"></i> Style Guide</div>
    </div>
</template>

<script>
    export default {
        data: () => ({
            model: build.model
        }),
        mounted() {
            console.log('AppNavigation mounted.')
        },
        methods: {
            launch: function (url) {
                window.location.href = "#/" + url;
            }
        }
    }
</script>