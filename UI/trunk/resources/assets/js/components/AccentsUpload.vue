<template>
    <div class="accents__upload row expanded" style="margin:0">
        <div class="accents__upload-nav large-3 medium-12 columns" style="margin:0;padding:0">
            <button class="accents__upload-button accents__upload-button-active">Pridemarks/Accents</button>
            <button class="accents__upload-button">Expression/One-Liner</button>
            <button class="accents__upload-button">Monogram</button>
        </div>
        <div class="accents__upload-area large-9 medium-12 columns">
            <h3 class="accents__upload-area-title">Upload Pridemarks or Accents</h3>
            <div class="accents__upload-area-drop">
                <p>Drag and Drop Images Here <i class="fa fa-file-image-o" aria-hidden="true"></i></p>
            </div>
            <button class="accents__upload-area-button">Select Files</button>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => ({
            model: build.model
        }),
        mounted() {
            console.log('Accents Upload mounted.');
        }
    }
</script>