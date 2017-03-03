<template>
    <div class="accents__upload">
        <div class="accents__upload-nav">
            <button class="accents__upload-button">Pridemarks/Accents</button>
            <button class="accents__upload-button">Expression/One-Liner</button>
            <button class="accents__upload-button">Monogram</button>
        </div>
        <div class="accents__upload-area">
            <h3 class="accents__upload-title">Upload Pridemarks or Accents</h3>
            <div class="accents__upload-drop">
                <p>Drag and Drop Images Here</p>
            </div>
            <button class="accents__upload-button">Select Files</button>
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