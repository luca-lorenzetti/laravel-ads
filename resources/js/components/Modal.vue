<template>
    <div class="box_modal">
    
        <!-- Top Modal -->
        <div class="top_modal">
            <img src="img/logo.svg" alt="logo">
        </div>
        <!-- /Top Modal -->


        <!-- Container_content_modal -->
        <div class="container_content_modal">
            <!-- Price -->
            <div class="price">
                <p id="price_in_dollar">&dollar;{{price}}</p>
                <p>per month</p>
            </div>
            <!-- /Price -->

            <!-- Includes section -->
            <div class="includes_section">
                <p>Includes</p>

                <ul>
                    <li v-for="(item , index) in includes" :key="index"> {{item}}</li>
                </ul>
            </div>
            <!-- /Includes section -->

            <!-- Subscribe -->
            <div class="subscribe_section">
                <button class="subscribe">Subscribe</button>
            </div>
            <!-- /Subscribe -->
        </div>
        <!-- /Container_content_modal -->


        


    </div>

</template>

<style lang="scss">


</style>
<script>
    export default {
        data(){
            return{
                price: "7.90",
                includes: [`A Spotify Premium subscription \n (Ad free, listen offline)`, `No data charges for music listening on Spotify Premium`, `12-month contract applies`]
            }
        },
        props:['show'],
        mounted() {
            console.log('Component mounted.')
        } 
    }
</script>
