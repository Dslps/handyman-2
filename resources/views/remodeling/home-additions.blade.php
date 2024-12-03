@extends('layouts.app')
@section('content')

<div class="max-w-[1400px] m-auto flex flex-wrap">
    <!-- Первое изображение -->
    <div class="lg:w-1/2 justify-center px-10 py-5  lg:order-2 order-1">
        <img src="{{asset('img/home-additions/IMG_1777.jpeg')}}" alt="">
    </div>
    
    <!-- Первый блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
        <div>
            <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">Building and Renovations</p>
            <p style="font-size: var(--title);" class="font-semibold text-[var(--support-color)] pt-2">Home Additions</p>
            <div style="font-size: var(--comment);" class="text-[var(--support-color)]">Transform your living space and add on whatever you’re missing. Whether you need a small bathroom or an entire new section of your house, we’re here to help.</div>
            <div class="mx-auto mt-5">
                <a href="#">
                    <button class="button-request hover:bg-[var(--hover)] duration-300">Contact Us</button>
                </a>
                <img class="mt-[10px]" src="{{ asset('img/line.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
{{-- ------------------------------------------------------------------- --}}
<div class="w-full bg-[var(--support-color)]">
    <div class="max-w-[1400px] w-full m-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-10 text-[var(--color)]">
    
            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Custom designs</p>
                <div style="font-size:var(--comment)" class="">Our work is completely custom, so we can build anything
                    you’re dreaming up.</div>
            </div>
            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Hands-free work</p>
                <div style="font-size:var(--comment)" class="">Just let us know your vision and leave the rest to us.
                </div>
            </div>
            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Clean workspace</p>
                <div style="font-size:var(--comment)" class="">We’ll leave your home better than we found it with a
                    clean, organized result.</div>
            </div>
            <div class="flex flex-col justify-center text-center">
                <i style="font-size: 80px;" class="fa-regular fa-circle-check mb-5 text-[var(--accent-color)]"></i>
                <p style="font-size: var(--context);" class="text-[--accent-color] font-semibold">Licensed & insured team
                </p>
                <div style="font-size:var(--comment)" class="">Our team is fully licnensed and insured for your
                    safety.</div>
            </div>
    
        </div>
    </div>
</div>
{{-- ----------------------------------------------------- --}}
<div class="max-w-[1400px] m-auto flex flex-wrap">
    <!-- Первое изображение -->
    <div class="lg:w-1/2 px-10 py-10 lg:order-2 order-1">
        <img src="{{ asset('img/home-additions/Danbury.jpg') }}" alt="">
    </div>
    
    <!-- Первый блок с текстом -->
    <div class="lg:w-1/2 px-10 py-5 lg:order-1 order-2 flex flex-col items-center justify-center">
       

        <div class="p-10">
            <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-semibold">Your one-stop shop</p>
            <p style="font-size: var(--title);" class="text-[var(--support-color)] font-semibold">Get expert advice on your project</p>
            <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">A home addition can be a complex project, but it’s what we’re best at! Work with our expert home additions team to get advice on the best way to handle your addition.</div>
        
            <ul style="font-size: var(--base-text);" class="text-[var(--support-color)] space-y-[15px] font-semibold ml-5 my-10">
                <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Tearing down walls</li>
                <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Flow of traffic in the home</li>
                <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Air conditioning</li>
                <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Plumbing</li>
                <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Electrical</li>
            </ul>
            <div class="mx-auto mb-10">
                <a href="#">
                    <button class="button-request hover:bg-[var(--hover)] duration-300">Request your estimate</button>
                </a>
                <img class="mt-[10px]" src="{{ asset('img/line.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
{{-- ------------------------------------------------------------ --}}
<div class="w-full bg-[var(--support-color)]">
    <div class="max-w-[1400px] w-full m-auto text-[var(--color)]">
        <div class="text-center pt-20">
            <p style=" font-size: var(--context);" class="">Project spotlight</p>
            <p style=" font-size: var(--title);" class="mt-5">Knoxville home addition testimonial</p>
            <p style=" font-size: var(--base-text);" class="">Hear what our customers are saying about our home addition services.</p>
        </div>
        <div class="flex flex-col lg:flex-row">
            <div class="flex-1 p-10 lg:p-20">
                <div class="pb-5">
                    <img class="max-w-[100px] m-auto" src="{{ asset('img/home-additions/google-logo-transparent-compressed.png') }}" alt="">
                </div>
                <ul class="space-y-[15px]">
                    <li>
                        “I hired Smith Roofing & Exteriors to remodel my house. The scope of the project included adding a 15X20 room on the back of the house, adding a 20X30 deck with 2 ramps, and knocking down a wall in the middle of the house to open up for a living room/dining room combo. Ground breaking took place on September 1, 2023 and was completed on November 14, 2023.
                    </li>
                    <li>
                        I am extremely pleased with the final result. The project manager took my design and MADE IT HAPPEN, right down to the last detail. During the process, I was informed regularly on how things were going and what to expect. The communication was excellent. The workers were on site almost every day during the 10-week project and some even worked on the weekend.
                    </li>
                    <li>
                        The project manager kept me informed of any financial adjustments that had to be made. If there had to be an increase in the quote due to and unforeseen obstacle in construction, I had the opportunity to approve it. Still, even with a slight increase in the original quote, the project manager worked diligently to keep the final costs within my budget. When I was presented with the final payment amount, it was exactly what I anticipated it would be. There were no surprised added on to the final payment.
                    </li>
                    <li class=" font-semibold">
                        I would highly recommend Smith Roofing & Exteriors. The workers are dependable and very professional. They work quickly and do the job exceptionally well. I also appreciate that they were honest with me and treated me with respect and professionalism. I will definitely use Smith Roofing & Exteriors again!”
                    </li>
                </ul>
            </div>
            <div class="flex-1 p-10 lg:p-20">
                <div class="flex flex-wrap justify-center gap-5">
                    <div class="flex flex-col text-center">
                        <img class="max-w-[250px] max-h-[250px]" src="{{ asset('img/home-additions/home-additions-project-5.jpg') }}" alt="">
                        <p class="mt-[10px]">Click or tap photo to enlarge</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <img class="max-w-[250px] max-h-[250px]" src="{{ asset('img/home-additions/home-additions-project-5.jpg') }}" alt="">
                        <p class="mt-[10px]">Click or tap photo to enlarge</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <img class="max-w-[250px] max-h-[250px]" src="{{ asset('img/home-additions/home-additions-project-5.jpg') }}" alt="">
                        <p class="mt-[10px]">Click or tap photo to enlarge</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <img class="max-w-[250px] max-h-[250px]" src="{{ asset('img/home-additions/home-additions-project-5.jpg') }}" alt="">
                        <p class="mt-[10px]">Click or tap photo to enlarge</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- -------------------------------------------------------------------- --}}
<div class="w-full bg-[var(--comment-bg)]">
    <div class="max-w-[1400px] m-auto py-10">
        <div class="flex lg:flex-row flex-col m-auto">
            <div class="flex-1 p-10">
                <img src="{{ asset('img/home-additions/home-addition-big-small-graphic.png') }}" alt="">
            </div>
            <div class="flex-1 p-10">
                <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-semibold">Any size project</p>
                <p style="font-size: var(--title);" class="text-[var(--support-color)] font-semibold">No job too big or small</p>
                <div style="font-size: var(--base-text);" class="text-[var(--support-color)]">We can tackle any home addition project that you have in mind. Whether you want to add a small storage space or tear down walls and start from scratch, we’re ready to make your home addition dreams a reality.</div>
                <ul style="font-size: var(--base-text);" class="text-[var(--support-color)] space-y-[15px] font-semibold ml-5 my-10">
                    <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Tearing down walls</li>
                    <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Flow of traffic in the home</li>
                    <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Air conditioning</li>
                    <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Plumbing</li>
                    <li><i class="fa-solid fa-circle-check mr-[10px] text-[var(--accent-color)]"></i>Electrical</li>
                </ul>
                <div class="mx-auto mb-10">
                    <a href="#">
                        <button class="button-request hover:bg-[var(--hover)] duration-300">Request your estimate</button>
                    </a>
                    <img class="mt-[10px]" src="{{ asset('img/line.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
{{-- ------------------------------------------------------- --}}
<div class="w-full bg-[var(--comment-bg)]">
    <div class="max-w-[1400px] m-auto px-10 pb-20">
        <div class="mb-10">
            <p style="font-size: var(--context);" class="text-center font-semibold text-[var(--accent-color)]">3D renderings available</p>
            <p style="font-size: var(--title);" class="text-center font-semibold text-[var(--support-color)]">Visualize your space</p>
            <p style="font-size: var(--comment);" class="text-center">We offer the option to visualize your home’s layout changes by upgrading to receive a high-quality 3D rendering of what your space will look like before we even pick up a hammer.</p>
        </div>
        <div class="flex justify-center sm:flex-row flex-col flex-wrap lg:gap-[100px] gap-[40px]">
            <div class="flex-1 border-[10px]">
                <img class="" src="{{ asset('img/home-additions/11.jpg') }}" alt="">
            </div>
            <div class="flex-1 border-[10px]">
                <img class="" src="{{ asset('img/home-additions/12.jpg') }}" alt="">
            </div>
            <div class="flex-1 border-[10px]">
                <img class="" src="{{ asset('img/home-additions/13.jpg') }}" alt="">
            </div>
    </div>
</div>
{{-- ----------------------------------------------------- --}}
<div class="w-full bg-[url('/public/img/home-page/form-img.png')] bg-no-repeat bg-cover flex lg:justify-end justify-center">
    <div class="flex flex-col sm:p-16 p-[2rem] my-40 mr-0 lg:mr-[12vw] bg-[var(--color)] w-[600px]">
        <div class=" mb-10">
            <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-semibold">Contact us</p>
            <p style="font-size: var(--title);" class="text-[var(--support-color)] font-semibold">Get your evaluation</p>
            <p style="font-size: var(--base-text);">Give us a call</p>
            <p style="font-size: var(--title);" class="text-[var(--support-color)] font-semibold"><i class="fa-solid fa-phone mr-[10px] text-[30px]"></i>(865) 966-7648</p>
            <p style="font-size: var(--comment);">Send us a message</p>
        </div>
        <form class="form">
            <div class="relative z-0 w-full mb-5 group">
                <input style="font-size: var(--base-text);" type="text" name="username" id="username"
                    class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-[var(--support-color)] appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[var(--accent-color)] peer"
                    placeholder=" " required />
                <label for="username"
                    class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[var(--accent-color)] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Username
                </label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input style="font-size: var(--base-text);" type="tel" name="phone_number" id="phone_number"
                    class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-[var(--support-color)] appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[var(--accent-color)] peer"
                    placeholder=" " pattern="[+]*[0-9]{1,4}[0-9]{7,}" required />
                <label for="phone_number"
                    class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-[var(--accent-color)] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Phone Number
                </label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input style="font-size: var(--base-text);" type="email" name="email" id="email"
                    class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-[var(--support-color)] appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[var(--accent-color)] peer"
                    placeholder=" " required />
                <label for="email"
                    class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-[var(--accent-color)] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Email Address
                </label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <textarea name="message" id="message" rows="4"
                    class="block py-2.5 px-0 w-full text-gray-900 bg-transparent border-0 border-b-2 border-[var(--support-color)] appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-[var(--accent-color)] peer resize-none overflow-y-auto max-h-[150px]"
                    placeholder=" " required></textarea>
                <label for="message"
                    class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-[var(--accent-color)] peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Message
                </label>
            </div>
            
            <button class="w-full py-3 mt-5 bg-[var(--accent-color)] hover:bg-[var(--hover)] duration-300 text-[var(--color)] font-semibold">SUBMIT</button>
        </form>

    </div>
</div>
@endsection