@extends('layouts.app')
@section('content')
    <div class="bg-[var(--accent-color)] pr-3 pl-3 pb-5">

        <div class="w-full bg-[url(/public/img/carpentry/home-page.jpg)]">

            <div class="flex flex-col text-center text-[var(--color)] py-60">
                <p style="font-size: var(--context);" class="font-semibold text-[var(--accent-color)]">A place to gather</p>
                <p style="font-size: var(--title-start);" class=" font-semibold leading-[70px]">Knoxville kitchen remodeling
                </p>
                <p style="font-size: var(--base-text);" class="px-5 max-w-[700px] m-auto">The heart of many homes, your
                    kitchen is a space meant for gathering as a family and spending quality time. Create a space where
                    you’re proud to make these memories with the help of our renovation and remodeling team.</p>
                <div class="mx-auto mb-10">
                    <a href="#">
                        <button class="button-request hover:bg-[var(--hover)] duration-300">Request your estimate</button>
                    </a>
                    <img class="mt-[10px]" src="{{ asset('img/line.png') }}" alt="">
                </div>
            </div>


            <div class="flex justify-end relative">
                <div
                    class="max-w-[600px] absolute top-[-150px] right-[100px] rounded-[10px] p-5 bg-[var(--color)] text-center">
                    <div>
                        <p style="font-size: 27px;">Ready to build your dream kitchen?</p>
                        <p style="font-size: var(--base-text);">Schedule your free consultation with a design and remodeling
                            expert on our team.</p>
                        <p style="font-size: 27px;">(865) 966-7648</p>
                        <div class="mx-auto ">
                            <a href="#">
                                <button class="button-request hover:bg-[var(--hover)] duration-300">Request your
                                    estimate</button>
                            </a>
                            <img class="mt-[10px] mx-auto" src="{{ asset('img/line.png') }}" alt="">
                        </div>
                    </div>

                    <!-- Изображение за пределами контейнера -->
                    <img src="{{ asset('img/kithen-remodels/men.jpg') }}" alt="Image"
                        class="absolute bottom-[-20px] left-[-40px] w-[120px] h-[120px] border-[5px] border-[var(--support-color)] rounded-full">
                </div>
            </div>
        </div>
    </div>   
        {{-- ---------------------------------------------- --}}
        <div class="w-full bg-[--support-color]">

            <div class="max-w-[1400px] m-auto flex flex-col lg:flex-row pt-40 px-5">
                <div class="m-auto">
                    <img class="w-[500px]" src="{{ asset('img/kithen-remodels/design-new.png') }}" alt="">
                </div>
                <div class="text-[var(--color)] m-auto p-10 bg-[#4c4c4c]">
                    <p style="font-size: var(--context);" class=" font-semibold">Where families gather</p>
                    <p style="font-size: var(--title-start);"
                        class=" py-0 lg:py-3 text-[#e3dad3] leading-[70px] font-semibold">A place to create memories</p>
                    <p style="font-size: var(--base-text);" class="text-[#e3dad3]">Whether it’s time spent cooking, enjoying
                        a meal, or simply gathering around the island to talk and laugh, the kitchen is a centerpeice in
                        your home. Create a more open, inviting space for family and guests alike.</p>
                </div>
            </div>

        </div>
        {{-- ----------------------------------------------------------------- --}}
<div class="bg-[var(--support-color)] max-h-[1000px] h-[100vw] p-5">

    <div class="max-w-[1400px] m-auto pt-10">
        <div class="text-[var(--color)] gap-5 flex">
            <div>
                <a class="text-[30px] border-t-2 hover:border-[var(--accent-color)] p-2" href="#">TRADITIONAL</a>
            </div>
            <div>
                <a class="text-[30px] border-t-2 hover:border-[var(--accent-color)] p-2" href="#">CONTEMPORARY</a>
            </div>
            <div>
                <a class="text-[30px] border-t-2 hover:border-[var(--accent-color)] p-2" href="#">MODERN</a>
            </div>
        </div>

        <div class="relative">
            <div class="flex gap-4 z-[5] absolute top-5">
                <div class="  rounded-[10px] left-0 bg-[#4c4c4c] text-[var(--color)] max-w-[650px] w-[50vw] p-5">
                    <div class="">
                        Our traditional kitchen styles provide an elegant, timeless aesthetic with the addition of a modern American look and feel. To guests and family members, it is often viewed as a very inviting space to spend time.
                    </div>
                    
                </div>
                <div class="flex mt-[10px]">
                    <button class="w-[30px] h-[30px] rounded-full border-2 border-[var(--color)]"><i class="text-[10px] text-[var(--color)] fa-solid fa-chevron-left"></i></button>
                    <div style="font-size: var(--context);" class="text-[var(--color)] px-5">1 / 3</div>
                    <button class="w-[30px] h-[30px] rounded-full border-2 border-[var(--color)]"><i class="text-[10px] text-[var(--color)] fa-solid fa-chevron-right"></i></button>
                </div>
            </div>


            <div class=" absolute top-[70px] left-[10vw]">
                <img class="w-[1000px]" src="{{asset('img/kithen-remodels/1.jpg')}}" alt="">
            </div>
            <div class="lg:block hidden absolute top-[200px] left-[2vw] border-[5px] border-[var(--support-color)] rounded-[10px]">
                <img class="rounded-[10px] w-[200px]" src="{{asset('img/kithen-remodels/2.jpg')}}" alt="">
            </div>
            <div class="lg:block hidden absolute top-[500px] left-[2vw] border-[5px] border-[var(--support-color)] rounded-[10px]">
                <img class="w-[300px] rounded-[10px]" src="{{asset('img/kithen-remodels/3.jpg')}}" alt="">
            </div>
        </div>

    </div>

    
</div>

<Div class="relative bg-[url(/public/img/kithen-remodels/blueprint-new.jpg)] bg-cover w-full border-b-[10px] border-[var(--color)]">

    <div class="text-[var(--color)] text-center pt-20 mb-10">
        <p style="font-size: var(--context);" class=" font-semibold">No job too big or small</p>
        <p style="font-size: var(--title);" class=" font-semibold">Whatever you need done</p>
    </div>


    <div class="flex flex-col lg:flex-row p-5 justify-center max-w-[1400px] m-auto gap-20">
        <div class="flex-1 bg-[#2a4085] h-max rounded-[10px] text-[var(--color)] max-w-[600px] m-auto p-10"> 
            <p style=" font-size: 27px;" class="text-[#acbbeb]">Removal & Replacements</p>
            <p style=" font-size: var(--comment);" class="my-5">Are you wanting to upgrade your existing space, but keep the layout the same? This may be the option for you. We can make your space look completely refreshed and feel like new without the time and cost of changing layouts.</p>
            <p style=" font-size: var(--base-text);" class=" font-semibold my-5">Enhance your kitchen with all new:</p>
            <ul style="font-size: var();" class="">
                <li class="flex items-center"><img class="w-[50px] mr-5" src="{{asset('img/kithen-remodels/10.svg')}}" alt=""> Appliances</li>
                <li class="flex items-center"><img class="w-[50px] mr-5" src="{{asset('img/kithen-remodels/11.svg')}}" alt=""> Cabinets</li>
                <li class="flex items-center"><img class="w-[50px] mr-5" src="{{asset('img/kithen-remodels/12.svg')}}" alt=""> Countertops</li>
                <li class="flex items-center"><img class="w-[50px] mr-5" src="{{asset('img/kithen-remodels/13.svg')}}" alt=""> Flooring</li>
                <li class="flex items-center"><img class="w-[50px] mr-5" src="{{asset('img/kithen-remodels/14.svg')}}" alt=""> Backsplash & other accents</li>
            </ul>
        </div>
        <div class="flex-1 bg-[#2a4085] rounded-[10px] p-10 mb-[100px] max-w-[600px] text-[var(--color)] m-auto">
            <p style=" font-size: 27px;" class="text-[#acbbeb]">Completely Custom Kitchen</p>
            <p style=" font-size: var(--comment);" class="my-5">From tearing down walls to completely altering the layout of your kitchen, our team can make your dream kitchen a reality. With our custom kitchen option, there is no limit to what we can do.</p>
            <img src="{{asset('img/kithen-remodels/ezgif.com-gif-maker.gif')}}" alt="">
        </div>
    </div>
    <div class="w-max absolute bottom-[-150px] lg:left-[100px] left-[25%]">
        <img class="max-w-[400px] xl:max-w-[500px]" src="{{asset('img/kithen-remodels/blueprint-rolls.png')}}" alt="">
    </div>
</Div>

{{-- ------------------------------------------------------------ --}}
<div class="w-full bg-[--support-color]" id="kithen-remodels">
    <div class="max-w-[1400px] m-auto pt-[150px] lg:pt-[100px] pb-[100px]">
        <div class="text-center mb-5">
            <p style="font-size: var(--context);" class="text-[var(--accent-color)] font-semibold">Some of our work</p>
            <p style="font-size: var(--title);" class=" font-semibold text-[var(--color)]">Before and after photos</p>
        </div>
        
        <div class="flex flex-wrap justify-center gap-[100px] p-5">
            <!-- Контейнеры с изображениями -->
            <div class="image-container w-[600px] h-[600px] relative cursor-pointer">
                <img class="w-full h-full object-cover" src="{{ asset('/img/bathroom/1.jpg') }}" alt="">
                <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white bg-black bg-opacity-50">
                    <p>Triple Crown Blvd</p>
                    <p><i class="fa-solid fa-location-dot"></i> Knoxville, TN</p>
                </div>
            </div>
        
            <div class="image-container w-[600px] h-[600px] relative cursor-pointer">
                <img class="w-full h-full object-cover" src="{{ asset('/img/bathroom/2.jpg') }}" alt="">
                <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white bg-black bg-opacity-50">
                    <p>Triple Crown Blvd</p>
                    <p><i class="fa-solid fa-location-dot"></i> Knoxville, TN</p>
                </div>
            </div>
        
            <div class="image-container w-[600px] h-[600px] relative cursor-pointer">
                <img class="w-full h-full object-cover" src="{{ asset('/img/bathroom/3.jpg') }}" alt="">
                <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white bg-black bg-opacity-50">
                    <p>Triple Crown Blvd</p>
                    <p><i class="fa-solid fa-location-dot"></i> Knoxville, TN</p>
                </div>
            </div>
        
            <div class="image-container w-[600px] h-[600px] relative cursor-pointer">
                <img class="w-full h-full object-cover" src="{{ asset('/img/bathroom/4.jpg') }}" alt="">
                <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white bg-black bg-opacity-50">
                    <p>Triple Crown Blvd</p>
                    <p><i class="fa-solid fa-location-dot"></i> Knoxville, TN</p>
                </div>
            </div>
        </div>
        
        <!-- Модальное окно для карусели -->
        <div id="modal" class="flex fixed top-0 left-0 w-full h-full bg-black bg-opacity-75 hidden justify-center items-center">
            <div class="relative w-[80%] h-[80%]">
                <!-- Кнопка закрытия -->
                <button class="absolute top-0 right-0 text-white text-xl z-20" onclick="closeModal()"><i class="fa-solid fa-xmark"></i></button>
                <div id="carousel" class="w-full h-full flex justify-center items-center relative">
                    <img id="modalImage" src="" alt="" class="object-contain max-w-full max-h-full">
                    <!-- Кнопки для карусели -->
                    <button onclick="prevImage()" class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white text-3xl z-10"><i class="fa-solid fa-arrow-left"></i></button>
                    <button onclick="nextImage()" class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white text-3xl z-10"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        
    </div>
</div>
{{-- ----------------------------------------------------------------------- --}}
<div class="w-full bg-[var(--support-color)] ">
    <div class="max-w-[1400px] m-auto flex flex-col lg:flex-row gap-[50px] px-10 pt-[100px] border-t-[3px] border-dashed border-[var(--color)]">
        <div class="flex-1">
            <img src="{{asset('/img/kithen-remodels/team-graphic-new.png')}}" alt="">
        </div>
        <div class="flex-1 text-[var(--color)]">
            <p style="font-size: var(--context);" class="mb-5">A complete handyman service</p>
            <p style="font-size: var(--title);" class="">More than just kitchens</p>
            <p style="font-size: var(--comment);" class="">We’re complete home remodel and repair experts in virtually every aspect of your home:</p>
            <div class="flex flex-col gap-y-5 mt-[40px]">
                <div class="flex items-center">
                    <img class="w-[50px] mr-[10px]" src="{{asset('/img/kithen-remodels/Painting.svg')}}" alt="">
                    <p>Painting</p>
                </div>
                <div class="flex items-center">
                    <img class="w-[50px] mr-[10px]" src="{{asset('/img/kithen-remodels/Plumbing.svg')}}" alt="">
                    <p>Plumbing</p>
                </div>
                <div class="flex items-center">
                    <img class="w-[50px] mr-[10px]" src="{{asset('/img/kithen-remodels/Roofing-&-siding.svg')}}" alt="">
                    <p>Roofing & siding</p>
                </div>
                <div class="flex items-center">
                    <img class="w-[50px] mr-[10px]" src="{{asset('/img/kithen-remodels/and-much-more.svg')}}" alt="">
                    <p>and much more</p>
                </div>
                <div class="">
                    <a href="#">
                        <button class="button-request hover:bg-[var(--hover)] duration-300">Request your
                            estimate</button>
                    </a>
                    <img class="mt-[10px]" src="{{ asset('img/line.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
{{-- -------------------------------------------------- --}}
<div class="w-full bg-[var(--support-color)] pt-[100px]">
    <div class="max-w-[1400px] m-auto justify-center flex p-10 gap-5 lg:flex-row flex-col">
        <div class="flex-1 text-[var(--color)]">
            <div class="pb-5">
                <p style="font-size: var(--context);" class="">Let’s get started</p>
                <p style="font-size: var(--title);" class=" font-semibold">Speak with our remodel team</p>
                <p style="font-size: var(--comment);" class="">Contact our team and let’s discuss your options for a kitchen remodel.</p>
            </div>
            <div class="mt-5">
                <p style="font-size: var(--comment);" class=" font-semibold">Step 1</p>
                <p style="font-size: var(--context);" class=" font-semibold text-[var(--accent-color)]">Phone call</p>
                <p style="font-size: var(--comment);" class="">Give us a call and get answers to your general questions or schedule an in-person visit.</p>
            </div>
            <div class="mt-5">
                <p style="font-size: var(--comment);" class=" font-semibold">Step 2</p>
                <p style="font-size: var(--context);" class=" font-semibold text-[var(--accent-color)]">In-Person Consultation</p>
                <p style="font-size: var(--comment);" class="">Book an in-depth consultation at your home where our expert remodelers will give feedback and advice on your specific project and space.</p>
            </div>
            <div class="mt-5">
                <p style="font-size: var(--comment);" class=" font-semibold">Step 3</p>
                <p style="font-size: var(--context);" class=" font-semibold text-[var(--accent-color)]">Beginning the Remodel</p>
                <p style="font-size: var(--comment);" class="">As soon as you’re ready, we’ll get straight to work making your dream kitchen a reality.</p>
            </div>
            <div></div>
            <div></div>
        </div>
        <div class="flex-1">
            <div class="flex flex-col sm:p-16 p-[2rem] max-w-[600px] bg-[var(--color)]">
                <div class=" mb-10">
                    <div class="text-center">
                        <p style="font-size: 25px;">Give us a call</p>
                        <p style="font-size: var(--base-text);" class="text-[var(--support-color)] font-semibold"><i class="fa-solid fa-phone mr-[10px] text-[20px]"></i>(865) 966-7648</p>
                        <p style="font-size: var(--comment);">Send us a message</p>
                    </div>
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
    </div>
</div>


<script>
    // Данные для каждой карусели (массив с изображениями для каждой группы)
const carouselData = [
["/img/bathroom/1.jpg", "/img/bathroom/2.jpg", "/img/bathroom/3.jpg"],
["/img/bathroom/4.jpg", "/img/bathroom/5.jpg", "/img/bathroom/6.jpg"],
["/img/bathroom/7.jpg", "/img/bathroom/8.jpg", "/img/bathroom/9.jpg"],
["/img/bathroom/10.jpg", "/img/bathroom/11.jpg", "/img/bathroom/12.jpg"]
];

// Переменные для отслеживания текущего изображения и карусели
let currentIndex = 0;
let currentCarousel = 0;

// Генерация динамического списка для каждого изображения
document.querySelectorAll('.image-container').forEach((container, index) => {
container.onclick = () => openModal(index); // Привязываем к каждому контейнеру свой индекс
});

// Открыть модальное окно и начать карусель
function openModal(carouselIndex) {
currentCarousel = carouselIndex;  // Устанавливаем текущую карусель
currentIndex = 0; // Начинаем с первого изображения
const modal = document.getElementById('modal');
const modalImage = document.getElementById('modalImage');
const carousel = carouselData[carouselIndex];

// Загружаем первое изображение
modalImage.src = carousel[currentIndex];
modal.classList.remove('hidden'); // Показываем модальное окно
}

// Закрыть модальное окно
function closeModal() {
const modal = document.getElementById('modal');
modal.classList.add('hidden'); // Прячем модальное окно
}

// Перейти к следующему изображению
function nextImage() {
const carousel = carouselData[currentCarousel];
currentIndex = (currentIndex + 1) % carousel.length; // Переход к следующему изображению с цикличностью
const modalImage = document.getElementById('modalImage');
modalImage.src = carousel[currentIndex]; // Обновляем изображение
}

// Перейти к предыдущему изображению
function prevImage() {
const carousel = carouselData[currentCarousel];
currentIndex = (currentIndex - 1 + carousel.length) % carousel.length; // Переход к предыдущему изображению с цикличностью
const modalImage = document.getElementById('modalImage');
modalImage.src = carousel[currentIndex]; // Обновляем изображение
}

</script>   
@endsection
