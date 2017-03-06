<template>
    <div class="accents row expanded" style="margin:0;padding:0">
        <div class="large-8 medium-8 columns">
            <div class="accents__introduction">
                <h1 class="accents__introduction-title"><i class="fa fa-flag"></i> Accents</h1>
                <p class="accents__introduction-caption">The accent utility is a drag and drop system for maintaining accents, pridemarks, expressions, and other graphical content used in the Check Preview Server. Tips: Use the highest resolution images available for the highest quality images.</p>
            </div>
            <accents-upload></accents-upload>
        </div>
        <div class="large-4 medium-4 columns common__sidebar">
            <h2 class="common__sidebar-heading"><i class="fa fa-files-o"></i> Files Awaiting Publishing</h2>
            <div class="common__sidebar-section">
                <h3 class="common__sidebar-subheading common__sidebar-subheading-active">
                    <span class="common__sidebar-count common__sidebar-count-active">16</span>
                    Pridemarks/Accents
                    <i class="common__sidebar-arrow fa fa-chevron-down"></i>
                </h3>
                <ul class="common__sidebar-list common__sidebar-list-active">
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                </ul>
            </div>
            <div class="common__sidebar-section">
                <h3 class="common__sidebar-subheading">
                    <span class="common__sidebar-count">0</span>
                    Expressions
                    <i class="common__sidebar-arrow fa fa-chevron-down"></i>
                </h3>
                <ul class="common__sidebar-list">
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                </ul>
            </div>
            <div class="common__sidebar-section">
                <h3 class="common__sidebar-subheading">
                    <span class="common__sidebar-count">0</span>
                    Monograms
                    <i class="common__sidebar-arrow fa fa-chevron-down"></i>
                </h3>
                <ul class="common__sidebar-list">
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
                    </li>
                    <li class="common__sidebar-listitem">
                        <i class="fa fa-check-square-o"></i>
                        EX50BL.png
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