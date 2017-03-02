<template>
    <div class="common__header ">
        <div style="display:inline-block">
            <img src="../../images/harland-clarke-logo.png" style="height:70px" />
        </div>
        <div class="float-right common__user">
            <span class="common__user-name">User Name</span> <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('AppHeader mounted.')
        }
    }
</script>