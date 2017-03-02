<template>
    <div class="common__navigation">
        <ul>
            <li @click="launch('designer')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Product Designer</li>
            <li @click="launch('accents')"><i class="fa fa-flag" aria-hidden="true"></i> Accents</li>
            <li @click="launch('publisher')"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Publisher</li>
            <li @click="launch('styles')"><i class="fa fa-paint-brush" aria-hidden="true"></i> Style Guide</li>
        </ul>
    </div>
</template>

<script>
    export default {
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