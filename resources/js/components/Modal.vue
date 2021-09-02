<template>
    <div class="box_modal">
    
        <!-- Top Modal -->
        <div class="top_modal">
            <img src="img/logo.svg" alt="logo">
        </div>
        <!-- /Top Modal -->

        
        <!-- Price -->
        <div class="price">
            <p id="price_in_dollar">&dollar;{{price}}</p>
            <p>per month</p>
        </div>
        <!-- /Price -->

        <h2>{{show}}</h2>

    </div>

</template>

<style lang="scss">


</style>
<script>
    export default {
        data(){
            return{
                price: "7.90"
            }
        },
        props:['show'],
        mounted() {
            console.log('Component mounted.')
        } 
    }
</script>
