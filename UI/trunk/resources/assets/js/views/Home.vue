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
                        <label>
                            Provide your feedback.
                            <textarea width="100%" placeholder="My feedback."></textarea>
                        </label>
                        <div class="row">
                            <div class="small-6 columns"><label><input type="checkbox" /> Submit Anonymously</label></div>
                            <div class="small-6 columns"><button type="submit" class="button">Submit Idea</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Home mounted.')
        },
        methods: {
            launch: function (url) {
                window.location.href = "#/" + url;
            }
        }
    }
</script>