<template>
    <div class="row expanded" style="margin:0;padding:0">
        <div class="large-9 medium-8 columns">
            <div class="accents__introduction">
                <h1 class="accents__introduction-title"><i class="fa fa-flag"></i> Accents</h1>
                <p class="accents__introduction-caption">The accent utility is a drag and drop system for maintaining accents, pridemarks, expressions, and other graphical content used in the Check Preview Server. Tips: Use the highest resolution images available for the highest quality images.</p>
            </div>
            <accents-upload></accents-upload>
        </div>
        <div class="large-3 medium-4 columns common__sidebar">
            <h2><i class="fa fa-files-o"></i> Files Awaiting Publishing</h2>
            <div>
                <h3><span>16</span> Pridemarks/Accents <i class="fa fa-chevron-down"></i></h3>
                <ul>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                </ul>
            </div>
            <div>
                <h3><span>0</span> Expressions<i class="fa fa-chevron-down"></i></h3>
                <ul class="hide">
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                </ul>
            </div>
            <div>
                <h3><span>0</span> Monograms<i class="fa fa-chevron-down"></i></h3>
                <ul class="hide">
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
                    <li><i class="fa fa-checkbox"></i><span>EX50BL.png</span></li>
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