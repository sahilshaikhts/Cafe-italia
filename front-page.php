<?php get_header()?>    
<main>
        <section id="banner"
            class="relative h-screen min-h-content bg-[url('<?php echo get_template_directory_uri() ?>/assets/images/banner_cafe_2.jpg')] bg-no-repeat bg-cover bg-center">
            <div class="min-h-content absolute inset-0 bg-gradient-to-b from-gray-900 to-gray-600 opacity-50"></div>
            <div class="relative z-10 flex flex-col h-full justify-center mx-12 xl:mx-60">
                <div class="flex flex-col items-start">
                    <div class="font-primary text-4xl mt-5 lg:text-5xl">Experience real coffee</div>
                    <p class="font-primary-light max-w-xl text-lg mt-2 lg:text-xl text-white"> Welcome to our café,
                        where the aroma of freshly brewed coffee fills the air, and every cup tells
                        a story of exotic lands and rich flavors.
                    </p>
                    <button class="bg-white mt-5 p-2 hover:bg-black hover:text-white"><a class="font-secondary text-xl"
                            href="#about-us">Learn more</a></button>
                </div>
            </div>
        </section>

        <section id="about-us"
            class="flex relative justify-center items-center min-h-fit lg:h-[30rem] background-color-main ">
            <div class="flex flex-col w-full h-full justify-between items-center mx-8 xl:mx-60 lg:flex-row">

                <div class="flex  w-fit justify-center lg:w-1/3 lg:justify-start">
                    <div class="flex min-w-[13rem] w-1/3">
                        <img class="h-fit" src="<?php echo get_template_directory_uri() ?>/assets/images/showcase_1.jpg" />
                    </div>
                </div>

                <div class="flex flex-col justify-center my-4 lg:w-1/2 lg">
                    <h2 class="font-secondary text-3xl my-1 md:text-3xl">About Us</h2>
                    <p class="font-primary-light text-lg my-1 min-[1340px]:text-l"> At cafe italia, we believe that
                        great coffee is an art form. From the careful selection of
                        premium coffee beans to the expertly crafted brewing techniques,
                        every step is a testament to our commitment to quality. Our team of dedicated baristas,
                        fueled by their love for coffee, ensures that each cup is a masterpiece, awakening your
                        senses
                        with every sip.</p>
                    <button
                        class="bg-white min-w-fit w-1/5 my-4 p-2 white-space font-secondary text-xl hover:bg-black hover:text-white min-1340:text-l ">
                        Read more </button>
                </div>
            </div>
        </section>

        <section id="gallery" class="relative min-h-fit background-color-lighter ">
            <div class="flex flex-col items-center items-center mx-8 xl:mx-60 lg:flex-row">

                <div class="flex w-full justify-center my-14 lg:w-1/2 lg:justify-start">
                    <h1 class="font-primary text-4xl md:text-5xl">Gallery</h1>
                </div>

                <div class="flex justify-center my-14 w-50rem lg:w-1/2 lg:justify-start">
                    <div class="grid grid-cols-3 gap-2 gallery ">
                        <div class="col-span-2">
                            <div class="relative w-full h-full">
                                <div class="w-full h-full overflow-hidden"> <img
                                        class="w-full h-full object-cover object-center ease-in-out duration-500 hover:scale-150"
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/showcase_1.jpg" /></div>
                            </div>
                        </div>
                        <div>
                            <div class="relative w-full h-full">
                                <div class="w-full h-full overflow-hidden"> <img
                                        class="w-full h-full object-cover object-center ease-in-out duration-500 hover:scale-150"
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/showcase_2.jpg" /></div>
                            </div>
                        </div>

                        <div>
                            <div class="relative w-full h-full">
                                <div class="w-full h-full overflow-hidden"> <img
                                        class="w-full h-full object-cover object-center ease-in-out duration-500 hover:scale-150"
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/showcase_3.jpg" /></div>
                            </div>
                        </div>
                        <div>
                            <div class="relative w-full h-full">
                                <div class="w-full h-full overflow-hidden"> <img
                                        class="w-full h-full object-cover object-center ease-in-out duration-500 hover:scale-150"
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/showcase_4.jpg" /></div>
                            </div>
                        </div>
                        <div class="gallery-container">
                            <div class="relative w-full h-full">
                                <div class="w-full h-full overflow-hidden"> <img
                                        class="w-full h-full object-cover object-center ease-in-out duration-500 hover:scale-150"
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/showcase_5.jpg" /></div>
                            </div>
                        </div>
                        <div class="gallery-container">
                            <div class="relative w-full h-full">
                                <div class="w-full h-full overflow-hidden"> <img
                                        class="w-full h-full object-cover object-center ease-in-out duration-500 hover:scale-150"
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/showcase_6.jpg" /></div>
                            </div>
                        </div>
                        <div class="gallery-container col-span-2">
                            <div class="relative w-full h-full">
                                <div class="w-full h-full overflow-hidden"> <img
                                        class="w-full h-full object-cover object-center ease-in-out duration-500 hover:scale-150"
                                        src="<?php echo get_template_directory_uri() ?>/assets/images/showcase_7.jpg" /></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="testimonial" class="relative min-h-fit h-[550px]  background-color-main">
            <div class="flex flex-col h-full items-center py-6 justify-center mx-8 xl:mx-60 lg:flex-row">
                <div class="flex flex-col w-full lg:h-[50%] justify-center items-center">

                    <h1 class="font-primary text-3xl my-4 lg:text-4xl">Testimonial</h1>

                    <div class="flex content-slider w-full my-4 h-full justify-center items-center">

                        <div class="relative flex w-full min-h-[150px] h-full background-color-lighter overflow-x-scroll snap-x scroll-smooth">

                            <div id="slide-1"
                                class="relative min-w-full flex flex-col justify-center items-center icon-quote ">
                                <h2 class="font-secondary text-xl my-1 md:text-2xl text-orange-700">Sarah Bailey</h2>
                                <p class="w-3/4 text-center">
                                    Cafe Italia — where every sip feels like a journey through the heart of Italy.
                                    Exceptional brews, warm ambiance. A coffee lover's paradise.
                                </p>
                            </div>
                            <div id="slide-2"
                                class="relative min-w-full flex flex-col justify-center items-center icon-quote ">
                                <h2 class="font-secondary text-xl my-1 md:text-2xl text-orange-700">Caleb Suro</h2>
                                <p class="w-3/4  text-center">
                                    In the hustle of the day, Cafe Italia is my escape. Unparalleled coffee varieties,
                                    charming atmosphere. My daily dose of perfection.
                                </p>
                            </div>
                            <div id="slide-3"
                                class="relative min-w-full flex flex-col justify-center items-center icon-quote ">
                                <h2 class="font-secondary text-xl my-1 md:text-2xl text-orange-700">Rohan Nagar</h2>
                                <p class="w-3/4 text-center">
                                    Cafe Italia captures the essence of great coffee. From rich espressos to soothing
                                    lattes, it's a symphony of flavors in every cup.
                                </p>
                            </div>
                            <div id="slide-4"
                                class="relative min-w-full flex flex-col justify-center items-center icon-quote ">
                                <h2 class="font-secondary text-xl my-1 md:text-2xl text-orange-700">Vlod kito</h2>
                                <p class="w-3/4 text-center">
                                    Cozy vibes, exceptional brews. Cafe Italia is my go-to for delightful coffee
                                    moments.
                                </p>
                            </div>
                        </div>

                        <div class="flex absolute m-4 bottom-0">
                            <a class="btn_slider-nav flex w-4 h-4 bg-orange-700 rounded-full mx-1"
                                href="#slide-1"><button class="w-full h-full"
                                    onclick='OnClickSliderNav(event)'></button></a>
                            <a class="btn_slider-nav flex w-4 h-4 bg-white rounded-full mx-1" href="#slide-2"><button
                                    class="w-full h-full" onclick='OnClickSliderNav(event)'></button></a>
                            <a class="btn_slider-nav flex w-4 h-4 bg-white rounded-full mx-1" href="#slide-3"><button
                                    class="w-full h-full" onclick='OnClickSliderNav(event)'></button></a>
                            <a class="btn_slider-nav flex w-4 h-4 bg-white rounded-full mx-1" href="#slide-4"><button
                                    class="w-full h-full" onclick='OnClickSliderNav(event)'></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="find-us"
            class="flex relative justify-center items-center min-h-fit h-[60rem] background-color-lighter  ">

            <div class="flex flex-col justify-between w-full h-full items-center  mx-8 xl:mx-60 lg:flex-row">

                <div class="flex w-full flex-col h-1/3 justify-center my-4 lg:w-1/2 lg:h-1/2">
                    <iframe class="w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d350.14605425281167!2d-75.71303463116051!3d45.40594646100962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce0449c5c2c19d%3A0x1c2916a5a320e453!2sCosenza%20bar%20and%20cafe!5e0!3m2!1sen!2sca!4v1699649164841!5m2!1sen!2sca"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="flex w-full flex-col h-1/2 justify-center  lg:w-1/2 ">
                    <form class="flex w-full h-full justify-between items-center px-12 flex-col" action="">
                        <h1 class="font-primary text-3xl m-5 lg:text-4xl ">Get in touch</h1>
                        <input name="name" placeholder="Name"
                            class="h-12 w-full max-w-[450px] my-2 text-lg text-black font-secondary-light p-4"></input>
                        <input name="Email" placeholder="Email"
                            class="h-12 w-full max-w-[450px] my-2 text-lg text-black font-secondary-light p-4"></input>
                        <input name="number" placeholder="Phone number"
                            class="h-12 w-full max-w-[450px] my-2 text-lg text-black font-secondary-light p-4"></input>
                        <textarea name="message" placeholder="Your message"
                            class="h-20 w-full max-w-[450px] my-2 text-lg text-black font-secondary-light p-4 resize-none"></textarea>
                        <input type="submit" value="Submit"
                            class="bg-black text-white min-w-fit w-1/2 my-4 p-4 white-space font-secondary text-xl hover:bg-white hover:text-black min-1340:text-l "></input>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php get_footer()?>
