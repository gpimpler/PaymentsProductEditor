<template>
    <div class="common__footer ">
        Copyright &copy; {{year}} Harland Clarke Holdings Inc.
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('AppFooter mounted.')
        },
        computed: {
            year: function () {
                return "2017"
            }
        }
    }
</script>