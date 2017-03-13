<template>
    <div class="common__content-holder accents row expanded" style="margin:0;padding:0">
        <div class="large-8 medium-6 columns">
            <div class="accents__introduction">
                <h1 class="common__title"><i class="fa fa-flag"></i> Accents</h1>
                <p class="common__description show-for-large">The accent utility is a drag and drop system for maintaining accents, pridemarks, expressions, and other graphical content used in the Check Preview Server. Tips: Use the highest resolution images available for the highest quality images.</p>
                <p class="common__description hide-for-large">Unfortunately file upload is not available on mobile or tablet devices. You may still public those items that are in the queue and manage what gets published.</p>
                <button class="common__button common__button-icon hide-for-large"><i class="fa fa-cloud-upload"></i> Publisher</button>
            </div>
            <accents-upload></accents-upload>
        </div>
        <div class="large-4 medium-6 columns common__sidebar">
            <h2 class="common__sidebar-heading"><i class="fa fa-files-o"></i> Files Awaiting Publishing</h2>
            <accents-file-list :files="accents">Pridemarks/Accents</accents-file-list>
            <accents-file-list :files="expressions">Expressions</accents-file-list>
            <accents-file-list :files="monograms">Monograms</accents-file-list>
        </div>
    </div>
</template>

<script>
    import AccentsUpload from '../components/AccentsUpload.vue';
    import AccentsFileList from '../components/AccentsFileList.vue';

    export default {
        data: () => ({
            model: build.model,
            accents: [
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
            ],
            expressions: [
                'EX50NL.png'
            ],
            monograms: []
        }),
        mounted() {
            console.log('Accents mounted.');
        },
        components: {
            AccentsUpload,
            AccentsFileList
        }
    }
</script>