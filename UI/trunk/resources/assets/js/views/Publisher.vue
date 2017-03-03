<template>
    <div class="row expanded" style="margin:0;padding:0">
        <div class="large-9 medium-8 columns">
            <div class="publisher__introduction">
                <h1><i class="fa fa-cloud-upload"></i> Publisher</h1>
                <p>Publisher allows you to update products out to the various environments. You can publish all changes or be selective of those that you want to publish.</p>
            </div>
        </div>
        <div class="large-3 medium-4 columns">
            <div><button>Publish All</button><span>49</span></div>
        </div>
        <div class="large-6 medium-12 columns">
            <div class="publisher__upload">
                <h2>Product Layouts</h2>
                <div><button>Publish Layouts</button><span>1</span></div>
                <ul>
                    <li>13706</li>
                </ul>
            </div>
            <div class="publisher__upload">
                <h2>Monograms</h2>
                <div><button>Publish Monograms</button><span>1</span></div>
                <ul>
                    <li>13706</li>
                </ul>
            </div>
            <div class="publisher__upload">
                <h2>Pridemarks</h2>
                <div><button>Publish Pridemarks</button><span>1</span></div>
                <ul>
                    <li>13706</li>
                </ul>
            </div>
        </div>
        <div class="large-6 medium-12 columns">
            <div class="publisher__upload">
                <h2>Expressions</h2>
                <div><button>Publish Expressions</button><span>1</span></div>
                <ul>
                    <li>13706</li>
                </ul>
            </div>
        </div>
<!--         <div class="large-3 medium-4 columns common__sidebar">
            Sidebar
        </div> -->
    </div>
</template>

<script>
    export default {
        data: () => ({
            model: build.model
        }),
        mounted() {
            console.log('Publisher mounted.');
        }
    }
</script>