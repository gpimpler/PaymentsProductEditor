<template>
<div class="common__sidebar-section">
    <h3 class="common__sidebar-subheading">
        <span class="common__sidebar-count" v-bind:class="{ active: isActive }">{{files.length}}</span>
        <slot></slot>
        <i class="common__sidebar-arrow fa fa-chevron-down"></i>
    </h3>
    <ul class="filelist" v-bind:class="{ active: isActive }">
        <li class="filelist__item" v-for="file in files">
            <md-checkbox class="md-primary">{{file}}</md-checkbox>
        </li>
    </ul>
</div>
</template>

<script>
    export default {
        props: ['files'],
        computed: {
            isActive() {
                return this.files.length ? true : false
            }
        },
        data: () => ({
            model: build.model
        }),
        mounted() {
            console.log('Accents File List mounted.');
        }
    }
</script>