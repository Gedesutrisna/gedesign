@extends('layouts.main')
@section('container')
    <section class="hero">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row gap-large gap-md gap-sm-n">
                <div class="col-7 col-sm-12" data-aos="fade-right">
                    <div class="hero-left">
                        <h1 class="title-hero" data-aos="fade-up" data-aos-delay="400">
                            Design Your Digital Future with 
                            <span class="highlight-gedesign">Gedesign</span>
                        </h1>
                        <p class="text" data-aos="fade-up" data-aos-delay="600">
                            Start your journey towards becoming a professional developer. Enhance your skills, expand your knowledge, and unlock new opportunities in the ever-evolving tech industry.
                        </p>
                        <div class="d-flex gap">
                            <a href="#" data-aos="fade-up" data-aos-delay="700">
                                <button class="btn btn-a">Build Now</button>
                            </a>
                            <a href="#aboutus" data-aos="fade-up" data-aos-delay="800">
                                <button class="btn btn-b">Explore Gedesign</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-5 d-sm-none" data-aos="fade-left" >
                    <div class="mb-md-2 moving-up-down">
                        <img src="assets/hero-image.png" alt="">
                    </div>
                </div>                
            </div>
        </div>
    </section>    
    <section class="aboutus" id="about">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row gap-large gap-sm-n">
                <div class="col-5 col-sm-12" data-aos="fade-right">
                    <div class="mb">
                        <img src="assets/about-image.png" alt="">
                    </div>
                </div>
                <div class="col-7 col-sm-12" data-aos="fade-left">
                    <div class="">
                        <h1 class="title" data-aos="fade-up" data-aos-delay="400">
                            What Drives <span class="highlight-gedesign">Gedesign</span>?
                        </h1>
                        <p class="text" data-aos="fade-up" data-aos-delay="600">At Gedesign, we are driven by a passion for creating meaningful digital experiences. Our mission is to help businesses reach new heights online by delivering tailored web solutions. With a focus on creativity, innovation, and customer satisfaction, we ensure each project aligns perfectly with our clients’ goals.</p>
                        <div class="d-flex gap mb">
                            <a href="#" data-aos="fade-up" data-aos-delay="700">
                                <button class="btn btn-a">Build Now</button>
                            </a>
                            <a href="#" data-aos="fade-up" data-aos-delay="800">
                                <button class="btn btn-b">Explore Gedesign</button>
                            </a>
                        </div>
                        <div class="h-line" data-aos="fade-up" data-aos-delay="800"></div>
                        <div class="grid grid-4 grid-sm-2 w-full" data-aos="fade-up" data-aos-delay="800">
                            <div class="text-center">
                                <h1 class="title-custom mb-0 counter" data-target="27">0</h1>
                                <p class="text">Projects Completed</p>
                            </div>
                            <div class="text-center">
                                <h1 class="title-custom mb-0 counter" data-target="14">0</h1>
                                <p class="text">Team Members</p>
                            </div>
                            <div class="text-center">
                                <h1 class="title-custom mb-0 counter" data-target="50">0</h1>
                                <p class="text">Websites Delivered</p>
                            </div>
                            <div class="text-center">
                                <h1 class="title-custom mb-0 counter" data-target="10">0</h1>
                                <p class="text">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row row-sm gap gap-sm-n">
                <div class="col-7 col-sm-12">
                    <div>
                        <h1 class="title" data-aos="fade-up" data-aos-delay="400">
                            Explore <span class="highlight-gedesign">Gedesign</span> Solutions
                        </h1>
                        <p class="text" data-aos="fade-up" data-aos-delay="600">
                            At Gedesign, we provide a range of services to elevate your digital presence and create impactful websites tailored to your needs.
                        </p>
                        <div class="grid grid-2 w-full">
                            <div class="card" data-aos="fade-up" data-aos-delay="800">
                                <div class="d-flex d-sm-block align-center gap mb mb-sm">
                                    <div class="mb-sm">
                                        <div class="icon">
                                            <img src="assets/checklist.png" alt="check">
                                        </div>
                                    </div>
                                    <h1 class="card-title">Customer Website Development</h1>
                                </div>
                                <p class="card-text">Tailored websites that reflect your brand's personality and meet business goals.</p>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="900">
                                <div class="d-flex d-sm-block align-center gap mb mb-sm">
                                    <div class="mb-sm">
                                        <div class="icon">
                                            <img src="assets/checklist.png" alt="check">
                                        </div>
                                    </div>
                                    <h1 class="card-title">Landing Page Design</h1>
                                </div>
                                <p class="card-text">High-converting landing pages for product launches, campaigns, or brand promotions.</p>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="1000">
                                <div class="d-flex d-sm-block align-center gap mb mb-sm">
                                    <div class="mb-sm">
                                        <div class="icon">
                                            <img src="assets/checklist.png" alt="check">
                                        </div>
                                    </div>
                                    <h1 class="card-title">UI/UX Design</h1>
                                </div>
                                <p class="card-text">We focus on user experience and interface design, that are enjoyable to use.</p>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="1100">
                                <div class="d-flex d-sm-block align-center gap mb mb-sm">
                                    <div class="mb-sm">
                                        <div class="icon">
                                            <img src="assets/checklist.png" alt="check">
                                        </div>
                                    </div>
                                    <h1 class="card-title">SEO Optimization</h1>
                                </div>
                                <p class="card-text">Increase your website's visibility on search engines with our SEO services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-sm-12" data-aos="fade-left">
                    <div class="mb-sm-2">
                        <img src="assets/service-image.png" alt="service-image">
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="portfolio" id="portfolio">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row mb">
                <div class="col-7 col-sm-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="">
                        <h1 class="title mb-0 mb-sm">Discover <span class="highlight-gedesign">Gedesign</span> Work</h1>
                    </div>
                </div>
                <div class="col-4 col-sm-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="">
                        <p class="text mb-0">Our portfolio showcases Gedesign bringing ideas to life for businesses and brands, one website at a time.</p>
                    </div>
                </div>
            </div>
            <div class="row gap-medium gap-md-small gap-sm-small">
                <div class="col-6 col-sm-12" data-aos="fade-right" data-aos-delay="400">
                    <div class="">
                        <div class="card">
                            <div class="">
                                <img src="assets/img-port-1.png" alt="" class="card-img-main mb">
                                <div class="card-body">
                                    <div class="d-flex between align-center mb">
                                        <div class="tag">Web System</div>
                                        <p class="card-text mb-0">Published on 13 May 2024</p>
                                    </div>
                                    <h1 class="card-title-large mb-2">Sekolah Coding Course Website</h1>
                                    <p class="card-text text-clip mb">Start your journey towards becoming a professional developer with Sekolah Coding. Our courses are designed to enhance your skills, expand your knowledge.</p>
                                    <a href="#" class="">
                                        <button class="btn btn-b w-full">See more</button>    
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-12">
                    <div class="d-flex flex-col gap-medium gap-md-small gap-sm-small">
                        <div class="card" data-aos="fade-up" data-aos-delay="400">
                            <div class="d-flex gap-medium">
                                <div class="card-body">
                                    <div class="d-flex between align-center mb-3 mb-sm-2">
                                        <div class="tag tag-small">Web Design</div>
                                        <p class="card-text mb-0">13 May 2024</p>
                                    </div>
                                    <h1 class="card-title-medium mb-2">Bright Pages</h1>
                                    <p class="card-text text-clip">Bright Pages is a creative web design service dedicated to crafting visually engaging and interactive websites.</p>
                                </div>
                                <img src="assets/img-port-1.png" alt="" class="card-img d-sm-none">
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-delay="600">
                            <div class="d-flex gap-medium">
                                <div class="card-body">
                                    <div class="d-flex between align-center mb-3 mb-sm-2">
                                        <div class="tag tag-small">UI/UX</div>
                                        <p class="card-text mb-0">13 May 2024</p>
                                    </div>
                                    <h1 class="card-title-medium mb-2">Zen Flow</h1>
                                    <p class="card-text text-clip">Zen Flow is a UI/UX design approach focused on creating seamless and intuitive mobile experiences. With user-centric..</p>
                                </div>
                                <img src="assets/img-port-1.png" alt="" class="card-img d-sm-none">
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-delay="800">
                            <div class="d-flex gap-medium">
                                <div class="card-body">
                                    <div class="d-flex between align-center mb-3 mb-sm-2">
                                        <div class="tag tag-small">Web System</div>
                                        <p class="card-text mb-0">13 May 2024</p>
                                    </div>
                                    <h1 class="card-title-medium mb-2">Mindful Living</h1>
                                    <p class="card-text text-clip">Discover a path to a balanced and fulfilling life with Mindful Living. Our website offers tips, resources, and inspiration for..</p>
                                </div>
                                <img src="assets/img-port-1.png" alt="" class="card-img d-sm-none">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimoni">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row mb">
                <div class="col-7 col-sm-12">
                    <div>
                        <h1 class="title mb-0 mb-sm" data-aos="fade-up" data-aos-delay="400"><span class="highlight-gedesign">Gedesign</span> Client Stories</h1>
                    </div>
                </div>
                <div class="col-4 col-sm-12">
                    <div>
                        <p class="text mb-0" data-aos="fade-up" data-aos-delay="500">
                            Each testimonial reflects our commitment to quality, creativity, and impactful results.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="800">
                <div class="col-12">
                    <div class="w-full">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="mb-sm mb">
                                            <div class="icon">
                                                <img src="assets/dots.png" alt="check">
                                            </div>
                                        </div>
                                        <p class="card-text mb">
                                            "Working with Gedesign transformed our online presence. Their attention to detail, creativity, and understanding of our brand made all the difference. Our website now truly reflects who we are, and we've seen a noticeable increase in engagement!"
                                        </p>
                                        <h1 class="card-title">Budi Santoso</h1>
                                        <p class="card-text">Owner Bali Sejahtera</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="mb-sm mb">
                                            <div class="icon">
                                                <img src="assets/dots.png" alt="check">
                                            </div>
                                        </div>
                                        <p class="card-text mb">
                                            "They took the time to understand our brand and delivered a website that perfectly represents who we are. The attention to detail and creativity made all the difference, and the feedback from our clients has been fantastic."
                                        </p>
                                        <h1 class="card-title">Sarah K.</h1>
                                        <p class="card-text">Creative Director</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="mb-sm mb">
                                            <div class="icon">
                                                <img src="assets/dots.png" alt="check">
                                            </div>
                                        </div>
                                        <p class="card-text mb">
                                            "Gedesign exceeded our expectations. From start to finish, they were professional, responsive, and creative. The site they designed for us is not only beautiful but also highly functional. We couldn’t be happier!"
                                        </p>
                                        <h1 class="card-title">James M.</h1>
                                        <p class="card-text">Marketing Director</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="mb-sm mb">
                                            <div class="icon">
                                                <img src="assets/dots.png" alt="check">
                                            </div>
                                        </div>
                                        <p class="card-text mb">
                                            "Choosing Gedesign was one of the best decisions we made for our brand. They brought our vision to life with style and precision, and the entire process was smooth. The results have driven more traffic and inquiries than we anticipated."
                                        </p>
                                        <h1 class="card-title">Laura B.</h1>
                                        <p class="card-text">Founder & CEO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="FAQs" id="faq">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row end row-sm gap-large gap-sm-n">
                <div class="col-7 col-sm-12">
                    <div>
                        <h1 class="title" data-aos="fade-up" data-aos-delay="400">
                            <span class="highlight-gedesign">Gedesign</span> Support & FAQs
                        </h1>
                        <p class="text" data-aos="fade-up" data-aos-delay="600">
                            Have questions about our services, process, or timelines? We’ve compiled a list of frequently asked questions to help you understand what working with Gedesign entails.
                        </p>
                        <div class="faq-container">
                            <div class="card faq" data-aos="fade-up" data-aos-delay="600">
                                <div class="d-flex between">
                                    <h1 class="card-title faq-question">What services does Gedesign offer?</h1>
                                    <i class='bx bx-chevron-down'></i>
                                </div>
                                <p class="card-text faq-answer">Gedesign specializes in creating custom websites tailored to your business needs. Our services include website development, landing page design, e-commerce solutions, UI/UX design, website maintenance, and SEO optimization. Each service is crafted to help you build a strong online presence.</p>
                            </div>
                            <div class="card faq active" data-aos="fade-up" data-aos-delay="700">
                                <div class="d-flex between">
                                    <h1 class="card-title faq-question">How do I place an order with Gedesign?</h1>
                                    <i class='bx bx-chevron-down'></i>
                                </div>
                                <p class="card-text faq-answer">Our team consists of highly skilled professionals with years of experience in the industry. We have successfully completed hundreds of projects across various sectors, bringing expertise and innovation to every challenge we encounter.</p>
                            </div>
                            <div class="card faq" data-aos="fade-up" data-aos-delay="800">
                                <div class="d-flex between">
                                    <h1 class="card-title faq-question">How long does it take to complete a website project?</h1>
                                    <i class='bx bx-chevron-down'></i>
                                </div>
                                <p class="card-text faq-answer">We offer 24/7 customer support to ensure that you can reach us anytime you need assistance. Our dedicated team is always ready to help you resolve any issues or answer your questions promptly and effectively.</p>
                            </div>
                            <div class="card faq" data-aos="fade-up" data-aos-delay="900">
                                <div class="d-flex between">
                                    <h1 class="card-title faq-question">How much does it cost to work with Gedesign?</h1>
                                    <i class='bx bx-chevron-down'></i>
                                </div>
                                <p class="card-text faq-answer">We offer 24/7 customer support to ensure that you can reach us anytime you need assistance. Our dedicated team is always ready to help you resolve any issues or answer your questions promptly and effectively.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-sm-12" data-aos="fade-left">
                    <div class="mb mt">
                        <img src="assets/faq-image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="banner">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="container-b">
                <div class="row center text-center">
                    <div class="col-12" data-aos="zoom-in" data-aos-delay="300">
                        <div>
                            <h1 class="title white mb-3 mb-sm-2">
                                Start Building Your Custom Website with 
                                <span class="highlight-gedesign white">Gedesign</span> Reach Out Today
                            </h1>
                            <div class=""data-aos="fade-up" data-aos-delay="500">
                                <a href="#">
                                    <button class="btn btn-c">Build Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row mb">
                <div class="col-7 col-sm-12" data-aos="fade-right" data-aos-delay="300">
                    <h1 class="title mb-0 mb-sm">
                        <span class="highlight-gedesign">Gedesign</span> Insights & Inspiration
                    </h1>
                </div>
                <div class="col-4 col-sm-12" data-aos="fade-left" data-aos-delay="400">
                    <p class="text mb-0">Our blog is a space for sharing practical advice, tutorials, and industry updates to help you stay ahead in web design and development.</p>
                </div>
            </div>
            <div class="row mb">
                <div class="col-12 d-md-none d-sm-none">
                    <div class="grid grid-3 w-full">
                        <!-- Blog Card 1 -->
                        <div class="card" data-aos="fade-up" data-aos-delay="500">
                            <img src="assets/img-port-1.png" alt="" class="card-img-blog mb">
                            <div class="card-body">
                                <div class="d-flex between align-center mb">
                                    <div class="tag tag-small">Web Design</div>
                                    <p class="card-text mb-0">13 May 2024</p>
                                </div>
                                <h1 class="card-title-large mb-2">5 Web Design Mistakes to Avoid</h1>
                                <p class="card-text">An attractive website design is not just about appearance, but also user friendliness! 😎 This time, we discuss 5 website design mistakes that are often made and must be avoided so that the user experience remains optimal.</p>
                            </div>
                        </div>
                        <!-- Blog Card 2 -->
                        <div class="card" data-aos="fade-up" data-aos-delay="600">
                            <img src="assets/img-port-1.png" alt="" class="card-img-blog mb">
                            <div class="card-body">
                                <div class="d-flex between align-center mb">
                                    <div class="tag tag-small">Web Developer</div>
                                    <p class="card-text mb-0">13 May 2024</p>
                                </div>
                                <h1 class="card-title-large mb-2">Why is SEO Important For Your Website?</h1>
                                <p class="card-text">SEO is not just about keywords, but a way to make your website better known! 📈 This time, we discuss why SEO is important for your website and how it affects the development of your online business.</p>
                            </div>
                        </div>
                        <!-- Blog Card 3 -->
                        <div class="card" data-aos="fade-up" data-aos-delay="700">
                            <img src="assets/img-port-1.png" alt="" class="card-img-blog mb">
                            <div class="card-body">
                                <div class="d-flex between align-center mb">
                                    <div class="tag tag-small">Web Developer</div>
                                    <p class="card-text mb-0">13 May 2024</p>
                                </div>
                                <h1 class="card-title-large mb-2">5 Tips & Tricks to Make Websites More Attractive</h1>
                                <p class="card-text">In building an attractive website, details such as colors, navigation, and loading speed play an important role! ✨ This time, we share 5 tips & tricks to make your website look more professional and comfortable for users.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Swiper for Responsive Design -->
                <div class="col-12 d-none d-md-block d-sm-block" data-aos="fade-up" data-aos-delay="800">
                    <div class="w-full">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- Swiper Slide 1 -->
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="500">
                                    <div class="card">
                                        <img src="assets/blog-1.png" alt="" class="card-img-blog mb">
                                        <div class="card-body">
                                            <div class="d-flex between align-center mb">
                                                <div class="tag tag-small">Web Design</div>
                                                <p class="card-text mb-0">13 May 2024</p>
                                            </div>
                                            <h1 class="card-title-large mb-2">5 Web Design Mistakes to Avoid</h1>
                                            <p class="card-text">An attractive website design is not just about appearance, but also user friendliness! 😎 This time, we discuss 5 website design mistakes that are often made and must be avoided so that the user experience remains optimal.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Swiper Slide 2 -->
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="600">
                                    <div class="card">
                                        <img src="assets/blog-2.png" alt="" class="card-img-blog mb">
                                        <div class="card-body">
                                            <div class="d-flex between align-center mb">
                                                <div class="tag tag-small">Web Developer</div>
                                                <p class="card-text mb-0">13 May 2024</p>
                                            </div>
                                            <h1 class="card-title-large mb-2">Why is SEO Important For Your Website?</h1>
                                            <p class="card-text">SEO is not just about keywords, but a way to make your website better known! 📈 This time, we discuss why SEO is important for your website and how it affects the development of your online business.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Swiper Slide 3 -->
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="700">
                                    <div class="card">
                                        <img src="assets/blog-3.png" alt="" class="card-img-blog mb">
                                        <div class="card-body">
                                            <div class="d-flex between align-center mb">
                                                <div class="tag tag-small">Web Developer</div>
                                                <p class="card-text mb-0">13 May 2024</p>
                                            </div>
                                            <h1 class="card-title-large mb-2">5 Tips & Tricks to Make Websites More Attractive</h1>
                                            <p class="card-text">In building an attractive website, details such as colors, navigation, and loading speed play an important role! ✨ This time, we share 5 tips & tricks to make your website look more professional and comfortable for users.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" data-aos="fade-up" data-aos-delay="600">
                <div class="col-12">
                    <a href="#programs" class="text">
                        <button class="btn btn-a">Explore More</button>
                    </a>
                </div>
            </div>
        </div>
    </section>    
@endsection