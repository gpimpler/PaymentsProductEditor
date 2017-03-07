<template>
    <div class="row expanded" style="margin:0;padding:0">
        <div class="large-3 medium-4 columns common__sidebar">
            <div>
                <h3>Customer Personalization</h3>
                <md-switch class="md-primary">On</md-switch>
                <p>Number of Personalization Lines</p>
                <input type="range" min="1" max="6" step="1" value="1">
                <md-input-container>
                    <label>% Horizontal Position</label>
                    <md-input type="number"></md-input>
                </md-input-container>
                <md-input-container>
                    <label>% Vertical Position</label>
                    <md-input type="number"></md-input>
                </md-input-container>
                <md-input-container>
                    <label>% Width</label>
                    <md-input type="number"></md-input>
                </md-input-container>
                <md-input-container>
                    <label>% Height</label>
                    <md-input type="number"></md-input>
                </md-input-container>
            </div>
            <div>
                <h3>Check Start Number</h3>
                <md-switch class="md-primary">On</md-switch>
                <md-button-toggle md-single>
                    <md-button><i class="material-icons">format_align_left</i></md-button>
                    <md-button><i class="material-icons">format_align_center</i></md-button>
                    <md-button><i class="material-icons">format_align_right</i></md-button>
                </md-button-toggle>
            </div>
            <div>
                <h3>One-Liner/Expression</h3>
                <md-switch class="md-primary">On</md-switch>
            </div>
            <div>
                <h3>Institution Information</h3>
                <md-switch class="md-primary">On</md-switch>
                <md-button-toggle md-single>
                    <md-button><i class="material-icons">format_align_left</i></md-button>
                    <md-button><i class="material-icons">format_align_center</i></md-button>
                    <md-button><i class="material-icons">format_align_right</i></md-button>
                </md-button-toggle>
            </div>
            <div>
                <h3>MICR</h3>
                <md-switch class="md-primary">On</md-switch>
            </div>
            <div>
                <h3>Pridemark/Accent</h3>
                <md-switch class="md-primary">On</md-switch>
                <md-button-toggle md-single>
                    <md-button><i class="material-icons">format_align_left</i></md-button>
                    <md-button><i class="material-icons">format_align_center</i></md-button>
                    <md-button><i class="material-icons">format_align_right</i></md-button>
                </md-button-toggle>
            </div>
        </div>
        <div class="large-9 medium-8 columns" style="margin:0;padding:0;background-color:#ECECEC;">
            <configurator></configurator>
        </div>
    </div>
</template>

<script>
    import Configurator from '../components/Configurator.vue';

    export default {
        data: () => ({
            model: build.model
        }),
        mounted() {
            console.log('Designer mounted.')
        },
        components: {
            Configurator
        }
    }
</script>