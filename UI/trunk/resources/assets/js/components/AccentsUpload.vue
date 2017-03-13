<template>
    <div class="accents__upload show-for-large">
        <div class="accents__upload-nav">
            <button v-model="uploadAreas.pridemarks" @click="toggleUploadArea('pridemarks')" class="accents__upload-button" v-bind:class="{ active: uploadAreas.pridemarks }">Pridemarks/Accents</button>
            <button v-model="uploadAreas.expressions" @click="toggleUploadArea('expressions')" class="accents__upload-button" v-bind:class="{ active: uploadAreas.expressions }">Expression/One-Liner</button>
            <button v-model="uploadAreas.monograms" @click="toggleUploadArea('monograms')" class="accents__upload-button" v-bind:class="{ active: uploadAreas.monograms }">Monogram</button>
        </div>
        <div class="accents__upload-area">
            <div v-show="uploadAreas.pridemarks">
                <h3 class="accents__upload-area-title">Upload Pridemarks or Accents</h3>
                <div class="accents__upload-area-drop">
                    <p>Drag and Drop Images Here <i class="fa fa-file-image-o" aria-hidden="true"></i></p>
                </div>
                <button class="accents__upload-area-button">Select Files</button>
            </div>
            <div v-show="uploadAreas.expressions">
                <h3 class="accents__upload-area-title">Upload Expressions Or One-Liners</h3>
                <div class="accents__upload-area-drop">
                    <p>Drag and Drop Images Here <i class="fa fa-file-image-o" aria-hidden="true"></i></p>
                </div>
                <button class="accents__upload-area-button">Select Files</button>
            </div>
            <div v-show="uploadAreas.monograms">
                <h3 class="accents__upload-area-title">Upload Monograms</h3>
                <div class="accents__upload-area-drop">
                    <p>Drag and Drop Images Here <i class="fa fa-file-image-o" aria-hidden="true"></i></p>
                </div>
                <button class="accents__upload-area-button">Select Files</button>
            </div>
        </div>
    </div>
</template>

<script>
    import _ from 'lodash'
    export default {
        data: () => ({
            model: build.model,
            uploadAreas: {
                pridemarks: true,
                expressions: false,
                monograms: false
            }
        }),
        mounted() {
            console.log('Accents Upload mounted.')
        },
        methods: {
            toggleUploadArea(model) {
                // this.uploadAreas.expressions = false
                // this.uploadAreas.pridemarks = true
                _.forEach(this.uploadAreas, (value, key) => {
                    if (key !== model) {
                        this.uploadAreas[key] = false
                    } else {
                        this.uploadAreas[key] = true
                    }
                })
            }
        }
    }
</script>