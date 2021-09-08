<template>
    <div class="content_app" v-if="showModal == true">

        <!-- Box Modal -->
         <div class="box_modal">


                <button id="close_modal" v-on:click="closeModal">X</button>

            <!-- Top Modal -->
            <div class="top_modal">
                <img src="img/logo.svg" alt="logo">
            </div>
            <!-- /Top Modal -->


            <!-- Container_content_modal -->
            <div class="container_content_modal">

                <!-- Price -->
                <div class="price">
                    <p id="price_in_dollar">&dollar;{{subscribe.price}}</p>
                    <p>per month</p>
                </div>
                <!-- /Price -->

                <!-- Includes section -->
                <div class="includes_section">
                    <p>Includes</p>

                    <ul>
                        <li v-for="(item , index) in subscribe.includes" :key="index"> {{item}}</li>
                    </ul>
                </div>
                <!-- /Includes section -->

                <!-- Subscribe -->
                <div class="subscribe_section">
                    <button class="subscribe">Subscribe</button>
                </div>
                <!-- /Subscribe -->

                <div class="alternative_price">
                    <p>Or &dollar;{{subscribe.alternativePrice}} per month without contract</p>
                </div>
            </div>
            <!-- /Container_content_modal -->
        </div>
        <!-- /Box Modal -->

    </div>


</template>

<style lang="scss">

</style>
<script>

    export default {
        data(){
            return{
                subscribe:{
                    price: "7.90",
                    alternativePrice: "9.90",
                    includes: [`A Spotify Premium subscription \n (Ad free, listen offline)`, `No data charges for music listening on Spotify Premium`, `12-month contract applies`]
                },
            showModal: false
            }
        },
        props:['session', 'type'],
        methods:{

            //Check Set Cookie
            setCookie:function(cname, cvalue, exdays){
                    const d = new Date();

                    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                    let expires = "expires="+d.toUTCString();
                    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                },

            //Check Get Cookie
            getCookie:function (cname) {
                let name = cname + "=";
                let ca = document.cookie.split(';');

                for(let i = 0; i < ca.length; i++) {
                    let c = ca[i];

                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            },

            //Check Cookies
            checkCookie:function () {

                return !this.getCookie("spotify_cookie") ? true : false;
            },
            // Check if session has started
            checkSession:function () {

                return  this.session == 0  ? false : true;

            },

            closeModal:function(){
                if(this.type == "cookie"){
                    this.showModal = false;
                    this.setCookie("spotify_cookie", true, 3);
                }
                else if(this.type == "session"){
                    this.showModal = false;
                }
            }
        },

        created(){
            if( this.type == "cookie"){

                if(this.checkCookie()){

                    this.showModal = true;
                }
            }
            else if(this.type == "session")

                !this.checkSession() ? this.showModal = true : this.showModal = false;

        },
        mounted() {
        }
    }
</script>
