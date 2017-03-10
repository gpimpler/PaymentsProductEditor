<template>
    <div class="publisher__box" v-bind:class="{ active: isActive }">
        <div class="row publisher__box-header">
            <div class="large-6 columns">
                <h2 class="publisher__box-title"><slot name="title"></slot></h2>
            </div>
            <div class="large-6 columns">
                <div class="publisher__button" v-if="files.length">
                    <button class="common__button"><slot name="button"></slot></button>
                    <span class="publisher__button-count">{{files.length}}</span>
                </div>
                <p class="publisher__upload-status" v-else>no changed detected</p>
            </div>
        </div>
        <div class="row" v-if="files.length">
            <ul class="filelist large-12 columns" v-bind:class="{ active: isActive }">
                <li class="filelist__item" v-for="file in files">
                    <md-checkbox class="md-primary">{{file}}</md-checkbox>
                </li>
            </ul>
        </div>
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
            console.log('Publisher Upload mounted.');
        }
    }
</script>