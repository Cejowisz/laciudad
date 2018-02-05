<template>
    <div>
        <nav class="pushpinn mm-nav">
            <div class="nav-wrapper container">
                <a :href="home">
                    <img src="img/logo.png" style="width: 105px;" class="responsive-img mm-logo" alt="Lacuidad Logo">
                </a>
                <a href="#" data-activates="slide-out" class="button-collapse show-on-large icon-hide"><i class="material-icons blue-text">menu</i></a>
                <ul class="right hide-on-small-and-down">
                    <links></links>
                </ul>
                <ul id="slide-out" class="side-nav">
                    <links></links>
                </ul>
            </div>
        </nav>



    </div>

</template>


<script>
    import Links from '../partials/Links.vue'
    export default {
        components: {
            Links
        },
        data(){
            return{
                home: '/'
            }
        },
        methods: {

        }
    }
</script>

<style>
    @media (min-width: 607px) {
        .icon-hide{
            display: none !important;
        }
    }

    @media (max-width: 606px) {
        .icon-hide{
            float: right !important;
        }
    }
</style>