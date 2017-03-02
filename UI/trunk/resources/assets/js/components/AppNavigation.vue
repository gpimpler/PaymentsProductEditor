<template>
    <div class="common__navigation">
        <ul>
            <li><a href="#/designer"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Product Designer</a></li>
            <li><a href="#/accents"><i class="fa fa-flag" aria-hidden="true"></i> Accents</a></li>
            <li><a href="#/publisher"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Publisher</a></li>
            <li><a href="#/styles"><i class="fa fa-paint-brush" aria-hidden="true"></i> Style Guide</a></li>
        </ul>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('AppNavigation mounted.')
        }
    }
</script>