<template>
    <div class="row expanded publisher" style="margin:0;padding:0">
        <div class="large-12 medium-12 columns">
            <div class="publisher__introduction">
                <div class="large-9 medium-8 columns">
                    <h1 class="common__title"><i class="fa fa-cloud-upload"></i> Publisher</h1>
                    <p class="common__description">Publisher allows you to update products out to the various environments. You can publish all changes or be selective of those that you want to publish.</p>
                </div>
                <div class="large-3 medium-4 columns">
                    <div class="publisher__button"><button class="common__button">Publish All</button><span class="publisher__button-count">{{fileCount}}</span></div>
                </div>
            </div>
        </div>
        <div class="large-12 columns publisher__upload">
            <div class="large-6 columns">
                <publisher-upload :files="layouts">
                    <span slot="title">Product Layouts</span>
                    <span slot="button">Publish Layouts</span>
                </publisher-upload>
                <publisher-upload :files="monograms">
                    <span slot="title">Monograms</span>
                    <span slot="button">Publish Monograms</span>
                </publisher-upload>
                <publisher-upload :files="pridemarks">
                    <span slot="title">Pridemarks</span>
                    <span slot="button">Publish Pridemarks</span>
                </publisher-upload>
            </div>
            <div class="large-6 columns">
                <publisher-upload :files="expressions">
                    <span slot="title">Expressions</span>
                    <span slot="button">Publish Expressions</span>
                </publisher-upload>
            </div>
        </div>
    </div>
</template>

<script>
    import PublisherUpload from '../components/PublisherUpload.vue';
    export default {
        data: () => ({
            model: build.model,
            layouts: [
                '13407',
                '13408'
            ],
            monograms: [],
            pridemarks: [],
            expressions: [
                'EX50AL.png',
                'EX50BL.png',
                'EX50CL.png',
                'EX50DL.png',
                'EX50EL.png',
                'EX50FL.png',
                'EX50GL.png',
                'EX50HL.png',
                'EX50IL.png',
                'EX50JL.png',
                'EX50KL.png',
                'EX50LL.png',
                'EX50ML.png'
            ]
        }),
        computed: {
            fileCount() {
                return this.layouts.length + this.monograms.length + this.pridemarks.length + this.expressions.length
            }
        },
        mounted() {
            console.log('Publisher mounted.');
        },
        components: {
            PublisherUpload
        }
    }
</script>