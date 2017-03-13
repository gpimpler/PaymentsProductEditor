<template>
    <div class="row expanded designer" style="margin:0;padding:0">
        <div class="large-3 medium-4 columns common__sidebar designer__inputs">
            <div class="designer__inputs-wrapper">
                <div class="designer__inputs-header">
                    <h3 class="designer__inputs-title"><i class="fa fa-font" aria-hidden="true"></i> Customer Personalization</h3>
                    <md-switch v-model="switches.checked1" @input="toggleDesignerInputs('checked1')" class="md-primary">{{(switches.checked1) ? 'On' : 'Off'}}</md-switch>
                </div>
                <md-button-toggle md-single class="md-primary">
                    <md-button class="md-toggle"><md-icon>format_align_left</md-icon></md-button>
                    <md-button><md-icon>format_align_center</md-icon></md-button>
                    <md-button><md-icon>format_align_right</md-icon></md-button>
                </md-button-toggle>
                <div class="designer__inputs-holder" v-show="switches.checked1">
                    <p class="designer__inputs-caption">Number of Personalization Lines</p>
                    <input type="range" min="1" max="6" step="1" value="1">
                    <div class="designer__inputs-fields">
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
                </div>
                <hr>
            </div>
            <div class="designer__inputs-wrapper">
                <div class="designer__inputs-header">
                    <h3 class="designer__inputs-title"><i class="fa fa-font" aria-hidden="true"></i> Check Start Number</h3>
                    <md-switch v-model="switches.checked2" @input="toggleDesignerInputs('checked2')" class="md-primary">{{(switches.checked2) ? 'On' : 'Off'}}</md-switch>
                </div>
                <md-button-toggle md-single class="md-primary">
                    <md-button class="md-toggle"><md-icon>format_align_left</md-icon></md-button>
                    <md-button><md-icon>format_align_center</md-icon></md-button>
                    <md-button><md-icon>format_align_right</md-icon></md-button>
                </md-button-toggle>
                <div class="designer__inputs-holder" v-show="switches.checked2">
                    <p class="designer__inputs-caption">Number of Personalization Lines</p>
                    <input type="range" min="1" max="6" step="1" value="1">
                    <div class="designer__inputs-fields">
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
                </div>
                <hr>
            </div>
            <div class="designer__inputs-wrapper">
                <div class="designer__inputs-header">
                    <h3 class="designer__inputs-title"><i class="fa fa-camera" aria-hidden="true"></i> One-Liner/Expression</h3>
                    <md-switch v-model="switches.checked3" @input="toggleDesignerInputs('checked3')" class="md-primary">{{(switches.checked3) ? 'On' : 'Off'}}</md-switch>
                </div>
                <md-button-toggle md-single class="md-primary">
                    <md-button class="md-toggle"><md-icon>format_align_left</md-icon></md-button>
                    <md-button><md-icon>format_align_center</md-icon></md-button>
                    <md-button><md-icon>format_align_right</md-icon></md-button>
                </md-button-toggle>
                <div class="designer__inputs-holder" v-show="switches.checked3">
                    <p class="designer__inputs-caption">Number of Personalization Lines</p>
                    <input type="range" min="1" max="6" step="1" value="1">
                    <div class="designer__inputs-fields">
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
                </div>
                <hr>
            </div>
            <div class="designer__inputs-wrapper">
                <div class="designer__inputs-header">
                    <h3 class="designer__inputs-title"><i class="fa fa-font" aria-hidden="true"></i> Institution Information</h3>
                    <md-switch v-model="switches.checked4" @input="toggleDesignerInputs('checked4')" class="md-primary">{{(switches.checked4) ? 'On' : 'Off'}}</md-switch>
                </div>
                <md-button-toggle md-single class="md-primary">
                    <md-button class="md-toggle"><md-icon>format_align_left</md-icon></md-button>
                    <md-button><md-icon>format_align_center</md-icon></md-button>
                    <md-button><md-icon>format_align_right</md-icon></md-button>
                </md-button-toggle>
                <div class="designer__inputs-holder" v-show="switches.checked4">
                    <p class="designer__inputs-caption">Number of Personalization Lines</p>
                    <input type="range" min="1" max="6" step="1" value="1">
                    <div class="designer__inputs-fields">
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
                </div>
                <hr>
            </div>
            <div class="designer__inputs-wrapper">
                <div class="designer__inputs-header">
                    <h3 class="designer__inputs-title"><i class="fa fa-font" aria-hidden="true"></i> MICR</h3>
                    <md-switch v-model="switches.checked5" @input="toggleDesignerInputs('checked5')" class="md-primary">{{(switches.checked5) ? 'On' : 'Off'}}</md-switch>
                </div>
                <md-button-toggle md-single class="md-primary">
                    <md-button class="md-toggle"><md-icon>format_align_left</md-icon></md-button>
                    <md-button><md-icon>format_align_center</md-icon></md-button>
                    <md-button><md-icon>format_align_right</md-icon></md-button>
                </md-button-toggle>
                <div class="designer__inputs-holder" v-show="switches.checked5">
                    <p class="designer__inputs-caption">Number of Personalization Lines</p>
                    <input type="range" min="1" max="6" step="1" value="1">
                    <div class="designer__inputs-fields">
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
                </div>
                <hr>
            </div>
            <div class="designer__inputs-wrapper">
                <div class="designer__inputs-header">
                    <h3 class="designer__inputs-title"><i class="fa fa-camera" aria-hidden="true"></i> Pridemark/Accent</h3>
                    <md-switch v-model="switches.checked6" @input="toggleDesignerInputs('checked6')" class="md-primary">{{(switches.checked6) ? 'On' : 'Off'}}</md-switch>
                </div>
                <md-button-toggle md-single class="md-primary">
                    <md-button class="md-toggle"><md-icon>format_align_left</md-icon></md-button>
                    <md-button><md-icon>format_align_center</md-icon></md-button>
                    <md-button><md-icon>format_align_right</md-icon></md-button>
                </md-button-toggle>
                <div class="designer__inputs-holder" v-show="switches.checked6">
                    <p class="designer__inputs-caption">Number of Personalization Lines</p>
                    <input type="range" min="1" max="6" step="1" value="1">
                    <div class="designer__inputs-fields">
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
                </div>
                <hr>
            </div>
        </div>
<!--         <div class="designer__configurator" style="margin:0;padding:0;background-color:#ECECEC;"> -->
            <configurator></configurator>
        <!-- </div> -->
    </div>
</template>

<script>
    import Configurator from '../components/Configurator.vue';
    import _ from 'lodash';

    export default {
        data: () => ({
            model: build.model,
            switches: {
                checked1: true,
                checked2: false,
                checked3: false,
                checked4: false,
                checked5: false,
                checked6: false
            }
        }),
        mounted() {
            console.log('Designer mounted.')
        },
        components: {
            Configurator
        },
        methods: {
            toggleDesignerInputs(model) {
                // only 1 input section should ever be visible
                _.forEach(this.switches, (value, key) => {
                    if (key !== model) {
                        this.switches[key] = false
                    } else {
                        this.switches[key] = true
                    }
                })
            }
        }
    }
</script>