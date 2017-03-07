<template>
    <div>
        <div class="row designer">
            <div class="medium-3 columns">
                <div class="field-group">
                    <md-input-container>
                        <label for="product">Products</label>
                        <md-select name="product" id="product" v-model="model.state.product" :disabled="model.products.types.length < 2">
                            <md-option v-for="prod in model.products.types" :value="prod.id">{{prod.type}}</md-option>
                        </md-select>
                    </md-input-container>
                </div>
            </div>
            <div class="medium-3 columns">
                <div class="field-group">
                    <md-input-container>
                        <label for="style">Styles</label>
                        <md-select name="style" id="style" v-model="model.state.style" :disabled="model.products.styles.length < 2">
                            <md-option v-for="style in model.products.styles" :value="style">{{style}}</md-option>
                        </md-select>
                    </md-input-container>
                </div>
            </div>
            <div class="medium-6 columns">
                <p class="designer__caption"><span class="bold">StyleId {{model.state.style}}</span> is a personal check layout with Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, quas delectus fugiat nobis minima molestiae nihil natus, soluta ut eligendi?</p>
            </div>
            <div class="large-12 columns" style="text-align:center">
                <img style="border:solid 1px #000;" src="https://www.ordermychecks.com/products/images/base/wdlm_01_base.jpg" />
            </div>
        </div>
        <div class="row expanded designer__fields" style="background-color:#83a4c7">
            <h2 class="column designer__fields-heading">Add Fields to Product</h2>
            <hr/>
            <div class="medium-6 columns">
                <ul class="designer__fields-list">
                    <li class="designer__fields-item">Customer Personalization</li>
                    <li class="designer__fields-item">Starting Check Number</li>
                    <li class="designer__fields-item">Institution Information</li>
                    <li class="designer__fields-item">Over Signature Line</li>
                </ul>
            </div>
            <div class="medium-6 columns">
                <ul class="designer__fields-list">
                    <li class="designer__fields-item">Pridemark</li>
                    <li class="designer__fields-item">Monogram</li>
                    <li class="designer__fields-item">Expression</li>
                </ul>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data: () => ({
            model: build.model,
            product: "0",
            style: "0",
            disableProduct: true
        }),
        mounted() {
            console.log('Configurator mounted.')
        }
    }
</script>