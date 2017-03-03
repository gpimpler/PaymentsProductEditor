<template>
    <div>
        <div class="home__launchpad">
            <div class="row small-up-1 medium-up-2 large-up-3 expanded">
                <h1>Product Management</h1>
                <div class="column" @click="launch('designer')">
                    <div class="home__launcher home__launcher-designer">
                        <div class="home__launcher-title">Designer</div>
                        <div class="home__launcher-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                    </div>
                    <div class="home__launcher-caption">
                        <p>Modify and Create new product setups for payments and retail check applications. Choose from existing designs or create new ones.</p>
                    </div>
                </div>
                <div class="column" @click="launch('accents')">
                    <div class="home__launcher home__launcher-accents">
                        <div class="home__launcher-title">Accents</div>
                        <div class="home__launcher-icon"><i class="fa fa-flag" aria-hidden="true"></i></div>
                    </div>
                    <div class="home__launcher-caption">
                        <p>Easily add new Accent elements to be used as pridemarks, one-liners, and center cuts.</p>
                    </div>
                </div>
                <div class="column" @click="launch('publisher')">
                    <div class="home__launcher home__launcher-publisher">
                        <div class="home__launcher-title">Publisher</div>
                        <div class="home__launcher-icon"><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>
                    </div>
                    <div class="home__launcher-caption">
                        <p>Once you are done adding or editing content, publish it to the environments for immediate use.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="home__ideas">
            <div class="row expanded">
                <div class="large-3 columns">
                    <img src="../../images/idea-icon.png" />
                </div>
                <div class="large-5 columns">
                    <h1>Got Great Ideas?</h1>
                    <p>Help us improve our products. Together we can make good products great. You can help make a direct impact on our business by helping us refine and add functionality that helps us get to market faster with a higher degree of quality.</p>
                </div>
                <div class="large-4 columns">
                    <form>
                        <md-input-container md-theme="white">
                            <label style="color:#FFF;">Your Feedback</label>
                            <md-textarea v-model="feedback" style="color:#FFF;"></md-textarea>
                        </md-input-container>
                        <div class="row" style="padding:0">
                            <div class="small-12 medium-6 columns">
                                <md-checkbox v-model="anonymous" class="md-primary" :disabled="feedback==''"> Submit Anonymously</md-checkbox>
                            </div>
                            <div class="small-12 medium-6 columns">
                                <md-button @click.native="onIdeaSubmit()" class="md-raised md-primary" :disabled="feedback==''">Submit Idea</md-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <md-dialog-alert
                :md-title="thanks.title"
                :md-content-html="thanks.contentHtml"
                @open="onOpenFeedback"
                @close="onCloseFeedback"
                ref="thanksDialog">
        </md-dialog-alert>
    </div>
</template>

<script>
    export default {
        data: () => ({
            anonymous: false,
            feedback: "",
            thanks: {
                title: 'Thank you!',
                contentHtml: 'We appreciate your feedback and will be reviewing your feedback for inclusion into the application.'
            }
        }),
        mounted() {
            console.log('Home mounted.')
        },
        methods: {
            launch: function (url) {
                window.location.href = "#/" + url;
            },
            onIdeaSubmit: function () {
                // TODO: Setup db table to catalog these items
                console.log("Submit an idea...stick it in the database: " + this.feedback);
                this.openDialog('thanksDialog');
            },
            openDialog(ref) {
                this.$refs[ref].open();
            },
            closeDialog(ref) {
                this.$refs[ref].close();
            },
            onOpenFeedback: function () {

            },
            onCloseFeedback: function () {
                this.feedback = '';
            }
        }
    }
</script>