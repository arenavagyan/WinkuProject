<template>
    <footer>
        <div class="shadow_blue"></div>
        <div class="responsive_footer">
            <div class="footer_main">
                <ul class="ul_footer">
                    <li class="li_footer">
                        <ul>
                            <li><a href="">
                                    <img src="../assets/public/logo.png" alt="" class="black_logo_footer">
                                </a>
                            </li>
                            <li>
                                <p>
                                    The trio took this simple idea and built it into the world’s <br> leading carpooling
                                    platform.
                                </p>
                            </li>
                            <li>
                                <i class="fa-regular fa-map"></i>
                                <p>33 new montgomery st.750 san francisco, CA USA <br> 94105</p>
                            </li>
                            <li><i class="fa-solid fa-mobile-screen"></i>
                                <p>+1-56-346-345</p>
                            </li>
                        </ul>
                    </li>
                    <li class="li_footer">
                        <ul>
                            <li>
                                <h6>Follow</h6>
                                <div class="div_hr"></div>
                            </li>
                            <li><a href=""><i class="fa-brands fa-square-facebook"></i>
                                    <p>Facebook</p>
                                </a></li>
                            <li><a href=""><i class="fa-brands fa-square-twitter"></i>
                                    <p>Twitter</p>
                                </a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i>
                                    <p>Instagram</p>
                                </a></li>
                            <li><a href=""><i class="fa-brands fa-square-google-plus"></i>
                                    <p>Google+</p>
                                </a></li>
                            <li><a href=""><i class="fa-brands fa-square-pinterest"></i>
                                    <p>Pinterest</p>
                                </a></li>
                        </ul>
                    </li>
                    <li class="li_footer">
                        <ul>
                            <li>
                                <h6>Navigate</h6>
                                <div class="div_hr"></div>
                            </li>
                            <li><a href="">
                                    <p>About Us</p>
                                </a></li>
                            <li><a href="">
                                    <p>Contact Us</p>
                                </a></li>
                            <li><a href="">
                                    <p>Terms & Conditions</p>
                                </a></li>
                            <li><a href="">
                                    <p>RSS Syndications</p>
                                </a></li>
                            <li><a href="">
                                    <p>Sitemap</p>
                                </a></li>
                        </ul>
                    </li>

                    <li class="li_footer">
                        <ul>
                            <li>
                                <h6>Useful Links</h6>
                                <div class="div_hr"></div>
                            </li>
                            <li><a href="">
                                    <p>Leasing</p>
                                </a></li>
                            <li><a href="">
                                    <p>Submit Route</p>
                                </a></li>
                            <li><a href="">
                                    <p>How Does It Work?</p>
                                </a></li>
                            <li><a href="">
                                    <p>Agent Listings</p>
                                </a></li>
                            <li><a href="">
                                    <p>View All</p>
                                </a></li>
                        </ul>
                    </li>


                    <li class="li_footer">
                        <ul>
                            <li>
                                <h6>Download Apps</h6>
                                <div class="div_hr"></div>
                            </li>
                            <li><a href="">
                                    <button class="button_footer"><i class="fa-brands fa-android brand_button button_i"></i>Android </button></a></li>
                            <li><a href="">
                                    <button class="button_footer"><i class="fa-brands fa-apple brand_button button_i"></i>Apple </button></a></li>
                            <li><a href="">
                                    <button class="button_footer"><i class="fa-brands fa-windows brand_button button_i"></i>Windows </button></a></li>

                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </footer>
</template>

<script setup>
   </script>

<style scoped>
    .shadow_blue {
        height: .25rem;
        background-image: radial-gradient(circle, #18a4cfd6 0%, #ffffff 100%);
    }

    footer {
        margin-top: 3.6rem;
        width: 100%;
        background-color: rgb(255, 255, 255);
        color: rgb(87, 87, 87);

    }

    .responsive_footer {
        /* width: 1400px; */
        margin: 0 auto;
        padding: 3rem;
    }

    .ul_footer {
        display: flex;
        justify-content: space-between;

    }

    .ul_footer .li_footer ul {
        width: 100%;
        display: flex;
        flex-direction: column;


    }

    .ul_footer .li_footer:nth-child(1) ul li {
        padding: .7rem 0rem;
        display: flex;
        align-items: center;
    }

    .ul_footer .li_footer ul li i {
        padding: 0rem .7rem;
        color: rgb(87, 87, 87);
    }

    .ul_footer .li_footer:nth-child(1) {
        width: 29%;
    }

    .ul_footer .li_footer:nth-child(n+2) {
        width: 15%;
    }


    .ul_footer .li_footer:nth-child(n+2) ul li {
        padding: .5rem 0rem;
        display: flex;
        align-items: center;
    }

    .ul_footer .li_footer:nth-child(n+2) ul li:nth-child(1) {
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: start;
        padding-left: .5rem;
    }

    .ul_footer .li_footer:nth-child(n+2) ul li:nth-child(n+2) a {
        display: flex;
        justify-content: center;
        align-items: center;
        color: rgb(87, 87, 87);

    }

    h6 {
        font-size: .8rem;
    }

    button {

        display: flex;
        align-items: center;
        justify-content: center;
        background-color: transparent;
        border-radius: .2rem;
        width: 8.5rem;
        padding: .5rem;
        border: 1px solid var(--gray);
        font-size: .82rem;
        color: var(--dark);
    }

    button:hover {

        background-color: var(--blue2);
        color: var(--white);
        border-color: transparent;
    }

    button:hover .brand_button{
        color: var(--white) !important;
    }

    button i {
        padding: 0;
    }

    .div_hr {
        width: 2rem;
        height: .11rem;
        margin: .2rem 0rem 1rem 0rem;
        border-left: none;
    }

    p {
        font-size: .7rem;
        padding: .1rem;
    }

    @media (max-width:480px) {
        .ul_footer{
            flex-direction: column;
        }
        .li_footer{
            
            width:100% !important;
        }
        .black_logo_footer{
            width:17rem;
            margin-bottom: 1.5rem;

        }
        .li_footer p{
            font-size: 2rem;
            line-height: 4rem;
        }
        .li_footer h6{
            font-size: 2.5rem;
            margin-top: 3rem;
            font-weight: bold;
        }
        .div_hr{
            width: 7rem;
            height: .25rem;
            border: none;
        }
        .shadow_blue{
            height: 1rem;
        }
        .li_footer ul li i{
            font-size: 2.9rem;
            margin-right: 1rem;
        }
        .button_footer{
            width: 15rem;
            font-size: 1.5rem;
        }

    }
    @media (min-width:481px) and (max-width:1024px){
        .ul_footer{
            flex-direction: column;
        }
        .li_footer{
            
            width:100% !important;
        }
        .black_logo_footer{
            width:10rem;
            margin-bottom: 1.5rem;

        }
        .li_footer p{
            font-size: 2rem;
            line-height: 4rem;
        }
        .li_footer h6{
            font-size: 2.5rem;
            margin-top: 3rem;
            font-weight: bold;
        }
        .div_hr{
            width: 7rem;
            height: .25rem;
            border: none;
        }
        .shadow_blue{
            height: 1rem;
        }
        .li_footer ul li i{
            font-size: 2.9rem;
            margin-right: 1rem;
        }
        .button_footer{
            width: 15rem;
            font-size: 1.5rem;
        }


    }
</style>