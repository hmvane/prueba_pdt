<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museo virtual Vincent van Gogh</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<style>
    .image-one{
        background-image: url("{{asset('img/one.jpg')}}");
        height: 450px;
    }

    .image-two{
        background-image: url("{{asset('img/two.jpg')}}");
        height: 450px;
    }

    .image-three{
        background-image: url("{{asset('img/tree.jpg')}}");
        height: 450px;
    }

    .image-four{
        background-image: url("{{asset('img/four.jpg')}}");
        height: 450px;
    }
    .image-fondo1{
        background-image: url("{{asset('img/fondo1.jpg')}}");
        height: 400px;
    }

    .image-principal{
        background-image: url("{{asset('img/principal.jpg')}}");
        height:700px;
    }

    html{
        scroll-behavior: smooth;
    }

    #contactanos {
        scroll-margin-top: 170px; 
    }

    #obras {
        scroll-margin-top: 110px; 
    }

    #galeria {
        scroll-margin-top: 40px; 
    }
</style>

<body class="bg-[#0D0910]">
    <div class="container bg-[#0D0910] p-4 w-[90rem]">
        <!-- navbar -->
        <div class="grid grid-cols-1">
            <div class="flex justify-end gap-8">
                <!-- Enlaces del Navbar -->
                <a id="link-carouselExampleCaptions" href="#carouselExampleCaptions" class="text-gray-300">Inicio</a>
                <a id="link-obras" href="#obras" class="text-gray-300">Obras</a>
                <a id="link-galeria" href="#galeria" class="text-gray-300">Galería</a>
                <a id="link-contactanos" href="#contactanos" class="text-gray-300">Contáctanos</a>
                <a id="link-nosotros" href="#nosotros" class="text-gray-300">Nosotros</a>
            </div>
        </div>

        <!-- Videos principales -->
        <div
            id="carouselExampleCaptions"
            class="relative mt-4 mb-4"
            data-twe-carousel-init
            data-twe-ride="carousel">
            <!-- botones -->
            <div
                class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                data-twe-carousel-indicators>
                <button
                type="button"
                data-twe-target="#carouselExampleCaptions"
                data-twe-slide-to="0"
                data-twe-carousel-active
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-current="true"
                aria-label="Slide 1"></button>
                <button
                type="button"
                data-twe-target="#carouselExampleCaptions"
                data-twe-slide-to="1"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 2"></button>
                <button
                type="button"
                data-twe-target="#carouselExampleCaptions"
                data-twe-slide-to="2"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 3"></button>
            </div>
            <!-- contendio (videos) -->
            <div
                class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <div
                        class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[900ms] ease-in-out motion-reduce:transition-none"
                        data-twe-carousel-fade
                        data-twe-carousel-item
                        data-twe-carousel-active>
                        <iframe class="w-full h-full aspect-[2]"
                            src="https://www.youtube.com/embed/6PndwgJuF3g?si=gRfhItyryxaM7duZ&amp;controls=0&amp;start=8"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>
                </div>
                <div
                    class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[900ms] ease-in-out motion-reduce:transition-none"
                    data-twe-carousel-fade
                    data-twe-carousel-item>
                        <iframe class="w-full h-full aspect-[2]"
                            src="https://www.youtube.com/embed/EIbejGufzZA?si=COmvJXfyaKITIp6N&amp;controls=0&amp;start=60"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>
                </div>
                <div
                    class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[900ms] ease-in-out motion-reduce:transition-none"
                    data-twe-carousel-fade
                    data-twe-carousel-item>
                        <iframe class="w-full h-full aspect-[2]"
                            src="https://www.youtube.com/embed/1A7TiOJS54Y?si=0UWQOw2D-xCZO3iV&amp;controls=0&amp;start=16"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>
                </div>
            </div>

        </div>

        <!-- Historia y galeria -->
        <div id="obras" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-20">
            <div>
                <div class="image-one bg-cover bg-center bg-clip-content"></div>
                <p class="text-neutral-300 text-center text-xl"><span class="font-medium">Campo de trigo con cipreses (1889):</span> Esta pintura es una de las muchas obras de van Gogh que muestran campos de trigo.</p>
            </div>

            <div>
                <div class="image-two bg-cover bg-center bg-clip-content"></div>
                <p class="text-neutral-300 text-center text-xl"> <span class="font-medium">La habitación de Van Gogh en Arles (1888):</span> Es una representación de su habitación en la famosa “Casa Amarilla” en Arles.</p>
            </div>

            <div>
                <div class="image-three bg-cover bg-center bg-clip-content"></div>
                <p class="text-neutral-300 text-center text-xl"><span class="font-medium">Los girasoles (1888):</span> Una serie de pinturas que representan girasoles en un jarrón.</p>
            </div>

            <div>
                <div class="image-four bg-cover bg-center bg-clip-content"></div>
                <p class="text-neutral-300 text-center text-xl"><span class="font-medium">Terraza de café por la noche (1888):</span> En esta pintura, van Gogh retrata una escena nocturna de la vida en un café al aire libre.</p>
            </div>   
        </div>

        <div id="galeria" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-5 my-20">
            <div class="image-principal bg-cover bg-center"></div>
            
            <div class="text-center">
                <p class="text-neutral-300 text-center font-medium text-3xl mb-5 mt-32">Estilo de van Gogh</p>
                <p class="text-neutral-300 text-center font-medium text-2xl mb-5">Vincent van Gogh: Travesía de Estilos y Colores</p>
                <p class="text-neutral-300 text-center text-xl mb-10">Vincent van Gogh, uno de los artistas más célebres de la historia del arte, vivió una vida breve pero intensamente creativa que dio lugar a una evolución estilística fascinante. Su viaje artístico, desde sus inicios oscuros hasta su característico postimpresionismo lleno de color, es una muestra brillante de su constante evolución y experimentación.<br><br>
                    Te invitamos a explorar las diferentes etapas de este incomparable maestro del postimpresionismo.</p>
                <a href="/galeria"><button class="bg-[#313131] hover:bg-[#0A070C] text-white py-2 px-4 rounded w-3/5 mt-10 mb-32">Galeria</button></a>            
            </div>
        </div>

        <!-- Videos secundarios + Contactanos -->
        <div id="contactanos" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2 my-20">
            <div>
                <form class="max-w-md mx-auto">
                    <h1 class="text-center font-medium text-2xl text-neutral-300 mb-5">Contacto</h1>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo Electronico</label>
                    </div>
                    
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre Completo</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_asunto" id="floating_asunto" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_asunto" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Asunto</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mensaje(opcional)</label>
                    </div>
                    <button class="bg-[#313131] hover:bg-[#0A070C] text-white py-2 px-4 rounded w-full mt-10">Enviar</button>     
                </form>
            </div>

            <div
                id="carouselExampleCaptions2"
                class="relative mt-4 "
                data-twe-carousel-init
                data-twe-ride="carousel">
                <!-- botones -->
                <div
                    class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                    data-twe-carousel-indicators>
                    <button
                    type="button"
                    data-twe-target="#carouselExampleCaptions2"
                    data-twe-slide-to="0"
                    data-twe-carousel-active
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true"
                    aria-label="Slide 1"></button>
                    <button
                    type="button"
                    data-twe-target="#carouselExampleCaptions2"
                    data-twe-slide-to="1"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 2"></button>
                </div>
                <!-- contendio (videos) -->
                <div
                    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                    <div
                            class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[900ms] ease-in-out motion-reduce:transition-none"
                            data-twe-carousel-fade
                            data-twe-carousel-item
                            data-twe-carousel-active>
                            <iframe 
                                class="w-full h-full aspect-[2]"
                                src="https://www.youtube.com/embed/EKsxllElz-g?si=ImHVXuzBIxFIyDMY&amp;controls=0"
                                title="YouTube video player2"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen>
                            ></iframe>        

                    </div>
                    <div
                        class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[900ms] ease-in-out motion-reduce:transition-none"
                        data-twe-carousel-fade
                        data-twe-carousel-item>
                            <iframe class="w-full h-full aspect-[2]"
                                src="https://www.youtube.com/embed/TlEv28tp3js?si=yRyItIl8Xr9gzvTU&amp;controls=0" 
                                title="YouTube video player" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" 
                                allowfullscreen>
                            </iframe>
                    </div>
                </div>
            </div>
        </div>
            
        <hr class="my-2 border-gray-700">

        <!-- Sobre nosotros -->
        <div id="nosotros" class="mt-20">
            <x-footer-component>

            </x-footer-component>
        </div>
    </div>
</body>
</html>
