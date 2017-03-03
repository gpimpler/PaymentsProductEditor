<template>
    <div class="common__header">
        <div class="common__header-content">
            <div class="common__header-logo" @click="onHomeClick()">
                <img src="../../images/harland-clarke-logo.png" style="height:70px" />
            </div>
            <div class="float-right common__user">
                <span class="common__user-name">Welcome, {{model.user.name}}</span> <md-avatar class="md-avatar-icon md-medium">
                <md-icon>account_circle</md-icon>
            </md-avatar>
            </div>
        </div>
        <app-navigation></app-navigation>
    </div>
</template>

<script>
    import AppNavigation from './AppNavigation.vue'

    export default {
        data: () => ({
            model: build.model
        }),
        mounted() {
            console.log('AppHeader mounted.')
        },
        components: {
            AppNavigation
        },
        methods: {
            onHomeClick: function () {
                window.location.href = "#/"
            }
        }
    }
</script>