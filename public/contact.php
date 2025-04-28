<?php include('temps/header.php'); ?>

    <!-- About -->
    <section class="relative h-[304px] bg-[url(../img/about-page-banner.png)] bg-cover z-10 flex items-center">
        <div class="absolute inset-0 bg-[url(../img/about-page-banner-overlay.png)] bg-cover z-20"></div>

        <div class="container">
            <!-- title banner -->
            <div class="relative z-30">
                <h1 class="font-black text-[44px] text-[#EEFF06] uppercase mb-[14px]">Contact Us</h1>
                <p class="text-white leading-[16px] w-[432px]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
        </div>
    </section>

    <!-- Contact form -->
    <section class="pt-[59px] pb-[60px]">
        <div class="container">
            <h2 class="font-bold text-[40px] text-center">Get in touch</h2>

            <div class="mt-[15px] px-[53px]">
                <form action="POST" class="contact-form flex justify-between flex-wrap">
                    <!-- name -->
                    <div class="w-1/2 pr-5">
                        <input type="text" name="" id="" placeholder="Full name" required>
                    </div>

                    <!-- email -->
                    <div class="w-1/2 pl-5">
                        <input type="email" name="" id="" placeholder="Email address" required>
                    </div>

                    <!-- contact -->
                    <div class="w-1/2 pr-5">
                        <input type="text" name="" id="" placeholder="Contact number" required>
                    </div>

                    <!-- subject -->
                    <div class="w-1/2 pl-5">
                        <input type="text" name="" id="" placeholder="Subject" required>
                    </div>

                    <!-- description -->
                    <div class="w-full">
                        <textarea id="" name="" rows="1" placeholder="Description"></textarea>
                    </div>

                    <!-- submit -->
                    <div class="w-full -mt-[10px]">
                        <button type="submit" class="btn font-bold text-xl p-[12px_23px_10px_23px] cursor-pointer float-right">Send a Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact info -->
    <section class="bg-[#F9F9F9] py-[33px] mb-[60px]">
        <div class="container">
            <div class="flex justify-between ">
                <div class="w-2/5 pt-[13px]">
                    <h4 class="font-bold text-lg text-[#DD3142] mb-[5px]">Contact Us</h4>
                    <p class="leading-[16px] pr-[75px]">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
    
                    <h6 class="font-medium text-[#DD3142] mb-[3px] mt-[33px]">Business hours:</h6>
                    <span>Monday to Saturday 9:30 am - 4:30 pm</span>
    
                    <h6 class="font-medium text-[#DD3142] mb-[3px] mt-[17px]">Address:</h6>
                    <span>A-67 south Ex Delhi-11002</span>
    
                    <h6 class="font-medium text-[#DD3142] mb-[3px] mt-[15px]">Email:</h6>
                    <a href="mailto:abc@abc.com" class="duration:500 hover:#DD3142">abc@abc.com</a>
    
                    <h6 class="font-medium text-[#DD3142] mb-[3px] mt-[16px]">Phone:</h6>
                    <a href="tel:1800-458495-4455" class="duration:500 hover:#DD3142">1800 - 458495-4455</a>
                </div>
    
                <div  class="w-3/5 pl-10">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28032.380053828794!2d77.20954446971811!3d28.56833612563335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3f6be9a2261%3A0xacab7cfae96d0215!2sA-33%20%2C%20South%20Extension%20Part%20I!5e0!3m2!1sen!2sbd!4v1745766487873!5m2!1sen!2sbd" width="100%" height="354px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                  
                <!-- <div id="map" class="w-3/5"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=MM_API_KEY"></script> -->
            </div>
        </div>
    </section>

    <?php include('temps/blog-section.php'); ?>

<?php include('temps/footer.php'); ?>
