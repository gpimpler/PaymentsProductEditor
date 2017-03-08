<template>
    <div class="accents row expanded" style="margin:0;padding:0">
        <div class="large-8 medium-6 columns">
            <div class="accents__introduction">
                <h1 class="common__title"><i class="fa fa-flag"></i> Accents</h1>
                <p class="accents__introduction-caption show-for-large">The accent utility is a drag and drop system for maintaining accents, pridemarks, expressions, and other graphical content used in the Check Preview Server. Tips: Use the highest resolution images available for the highest quality images.</p>
                <p class="accents__introduction-caption hide-for-large">Unfortunately file upload is not available on mobile or tablet devices. You may still public those items that are in the queue and manage what gets published.</p>
                <button class="common__button common__button-icon hide-for-large"><i class="fa fa-cloud-upload"></i> Publisher</button>
            </div>
            <accents-upload></accents-upload>
        </div>
        <div class="large-4 medium-6 columns common__sidebar">
            <h2 class="common__sidebar-heading"><i class="fa fa-files-o"></i> Files Awaiting Publishing</h2>
            <div class="common__sidebar-section">
                <h3 class="common__sidebar-subheading common__sidebar-subheading-active">
                    <span class="common__sidebar-count common__sidebar-count-active">16</span>
                    Pridemarks/Accents
                    <i class="common__sidebar-arrow fa fa-chevron-down"></i>
                </h3>
                <ul class="filelist filelist-active">
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                </ul>
            </div>
            <div class="common__sidebar-section">
                <h3 class="common__sidebar-subheading">
                    <span class="common__sidebar-count">0</span>
                    Expressions
                    <i class="common__sidebar-arrow fa fa-chevron-down"></i>
                </h3>
                <ul class="filelist">
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                </ul>
            </div>
            <div class="common__sidebar-section">
                <h3 class="common__sidebar-subheading">
                    <span class="common__sidebar-count">0</span>
                    Monograms
                    <i class="common__sidebar-arrow fa fa-chevron-down"></i>
                </h3>
                <ul class="filelist">
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                    <li class="filelist__item">
                        <md-checkbox class="md-primary">EX50BL.png</md-checkbox>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import AccentsUpload from '../components/AccentsUpload.vue';

    export default {
        data: () => ({
            model: build.model
        }),
        mounted() {
            console.log('Accents mounted.');
        },
        components: {
            AccentsUpload
        }
    }
</script>