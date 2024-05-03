<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    @vite('resources/css/app.css')
    @vite('resources/js/galeria.js')
</head>

<style>
    .image-rodado{
        background-image: url("{{asset('img/rodado.jpg')}}");
        height: 450px;
    }

    .image-sembrador{
        background-image: url("{{asset('img/sembrador.jpg')}}");
        height: 450px;
    }
    
    .image-olivos{
        background-image: url("{{asset('img/olivos.jpg')}}");
        height: 450px;
    }

    .image-barcas{
        background-image: url("{{asset('img/barcas.jpg')}}");
        height: 450px;
    }
    .image-fondo2{
        background-image: url("{{asset('img/fondo2.jpg')}}");
        height: 500px;
    }

    .image-autoretrato{
        background-image: url("{{asset('img/autorretrato.jpg')}}");
        height: 500px;
    }

    html {
    scroll-behavior: smooth; 
    }

    #contactanos {
        scroll-margin-top: 110px; 
    }

    #top {
        scroll-margin-top: 60px; 
    }

</style>
<body class="bg-[#0D0910]">
    <div class="container bg-[#0D0910] p-4 w-[90rem]">
        <!-- navbar -->
        <div class="grid grid-cols-1">
            <div class="flex justify-end gap-8">
                <!-- Enlaces del Navbar -->
                <a href="/" class="text-gray-300">Inicio</a>
                <a id="link-top" href="#top" class="text-gray-300">Top 4</a>
                <a id="link-galeria" href="#" class="text-gray-400">Galería</a>
                <a id="link-contactanos" href="#contactanos" class="text-gray-300">Contáctanos</a>
                <a id="link-nosotros" href="#nosotros" class="text-gray-300">Nosotros</a>
            </div>
        </div>

        <!-- Inicio -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-5 mt-4">
            <div>
                <p class="text-center text-neutral-300 font-medium text-3xl mb-5">Obras de van Gogh</p>
                <p class="text-center text-neutral-300 text-xl"><span class="font-medium">Vincent van Gogh</span> fue increíblemente prolífico en su carrera corta pero intensa como pintor. En una década de trabajo, desde 1880 hasta su muerte en 1890, creó aproximadamente 860 pinturas al óleo. Además de estas pinturas, también produjo alrededor de 1300 dibujos, acuarelas y esbozos.<br> Su productividad es aún más impresionante si se tiene en cuenta que luchó con problemas de salud mental durante gran parte de su carrera.</p>
                <br><br>
                <p class="text-center text-neutral-300 text-xl">«Uno puede tener un hogar ardiendo en el alma y, sin embargo, nadie vino a sentarse junto a él. Los transeúntes ven solo una voluta de humo de la chimenea y continúan su camino.»<br>
                    - Vincent Van Gogh</p>
            </div>
            <div class="image-autoretrato bg-contain bg-center bg-no-repeat"></div>
        </div>

        <!-- Tabs -->

        <div id="top" class="h-full flex items-center mt-20">
            <div class="w-full pb-5">
                <div>
                    <div 
                        role="tablist"
                        aria-label="tabs"
                        class="relative w-max mx-auto h-12 grid grid-cols-4 items-center px-[3px] rounded-full bg-gray-400/50 overflow-hidden shadow-900/200 transition mb-5">
                        <div class="absolute indicator h-11 my-auto bottom-0 top-0 left-0 rounded-full bg-white shadow-md"></div>
                        <button
                        role="tab"
                        aria-selected="true"
                        aria-controls="panel-1"
                        id="tab-1"
                        tabindex="0"
                        class="relative block h-10 px-6 tab rounded-full">
                            <span class="text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7h.01m3.486 1.513h.01m-6.978 0h.01M6.99 12H7m9 4h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 3.043 12.89 9.1 9.1 0 0 0 8.2 20.1a8.62 8.62 0 0 0 3.769.9 2.013 2.013 0 0 0 2.03-2v-.857A2.036 2.036 0 0 1 16 16Z"/>
                                </svg>
                            </span>
                        </button>
                        <button
                        role="tab"
                        aria-selected="false"
                        aria-controls="panel-2"
                        id="tab-2"
                        tabindex="-1"
                        class="relative block h-10 px-6 tab rounded-full">
                            <span class="text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7h.01m3.486 1.513h.01m-6.978 0h.01M6.99 12H7m9 4h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 3.043 12.89 9.1 9.1 0 0 0 8.2 20.1a8.62 8.62 0 0 0 3.769.9 2.013 2.013 0 0 0 2.03-2v-.857A2.036 2.036 0 0 1 16 16Z"/>
                                </svg>
                            </span>
                        </button>
                        <button
                        role="tab"
                        aria-selected="false"
                        aria-controls="panel-3"
                        id="tab-3"
                        tabindex="-1"
                        class="relative block h-10 px-6 tab rounded-full">
                            <span class="text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7h.01m3.486 1.513h.01m-6.978 0h.01M6.99 12H7m9 4h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 3.043 12.89 9.1 9.1 0 0 0 8.2 20.1a8.62 8.62 0 0 0 3.769.9 2.013 2.013 0 0 0 2.03-2v-.857A2.036 2.036 0 0 1 16 16Z"/>
                                </svg>
                            </span>
                        </button>
                        <button
                        role="tab"
                        aria-selected="false"
                        aria-controls="panel-4"
                        id="tab-4"
                        tabindex="-1"
                        class="relative block h-10 px-6 tab rounded-full">
                            <span class="text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7h.01m3.486 1.513h.01m-6.978 0h.01M6.99 12H7m9 4h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 3.043 12.89 9.1 9.1 0 0 0 8.2 20.1a8.62 8.62 0 0 0 3.769.9 2.013 2.013 0 0 0 2.03-2v-.857A2.036 2.036 0 0 1 16 16Z"/>
                                </svg>
                            </span>
                        </button>
                    
                    
                    
                    </div>
                    <!-- Contenido de tabs -->
                    <div class="relative">
                        <div
                            role="tabpanel"
                            id="panel-1"
                            class="tab-panel transition duration300">
                                <p class="font-medium text-center text-neutral-300 mb-5 text-xl">Trigal con cuervos</p>
                                <div class="image-rodado bg-cover bg-center bg-clip-content"></div>
                                <p class="text-neutral-300 mt-5  mb-10 text-center"> 
                                    Vincent van Gogh (1853-1890)<br>
                                    Óleo en tela<br>
                                    50,5 x 103,0 cm.<br>
                                    Auvers-sur-Oise, Julio de 1890 / Museo Van Gogh, Amsterdam (Fundación Vincent van Gogh)
                                </p>
                                <div class="grid grid-cols-2 gap-6">
                                    <p class="text-neutral-300 mb-5 text-xl">
                                        Campo de trigo con cuervos es una de las pinturas más famosas de Van Gogh. A menudo se afirma que este fue su último trabajo. Se dice que el cielo amenazante, los cuervos y el camino sin salida se refieren al final de su vida que se acerca. Pero eso es solo un mito persistente. De hecho, realizó varios trabajos después de este. <br><br>
                                        Van Gogh quería que sus campos de trigo bajo un cielo tormentoso expresaran «tristeza y soledad extrema», pero al mismo tiempo quería mostrar lo que consideraba «saludable y fortalecedor en el campo». 
                                    </p>

                                    <p class="text-neutral-300 mb-5 text-xl">
                                        Van Gogh utilizó poderosas combinaciones de colores en esta pintura: el cielo azul contrasta con el trigo amarillo anaranjado, mientras que el rojo del camino se intensifica con las franjas verdes de la hierba.
                                    </p>
                                </div>
                        </div>
                        <div 
                            role="tabpanel"
                            id="panel-2"
                            class="absolute top-0 tab-panel invisible opacity-0 transition duration300 w-full">
                                <p class="font-medium text-center text-neutral-300 mb-5 text-xl">Trigal bajo nubes de tormenta</p>
                                <div class=" image-sembrador bg-cover bg-center bg-clip-content" ></div>
                                <p class="text-neutral-300 text-center mt-5 mb-10 ">
                                    Vincent van Gogh (1853-1890)<br>
                                    Óleo sobre lienzo <br>
                                    50,4 x 101,3 cm.<br>
                                    Auvers-sur-Oise, Julio de 1890 / Museo Van Gogh, Amsterdam (Fundación Vincent van Gogh)
                                </p>
                                <div class="grid grid-cols-2 gap-6">
                                    <p class="text-neutral-300 mb-5 text-xl">
                                        En las últimas semanas de su vida, Van Gogh completó una serie de pinturas de los campos de trigo alrededor de Auvers. Este campo bajo un cielo oscuro es uno de ellos.<br><br>

                                        En estos paisajes trató de expresar «tristeza y soledad extrema», pero las emociones abrumadoras que experimentó Van Gogh en la naturaleza también fueron positivas. Le escribió a su hermano Theo: «Casi creo que estos lienzos te dirán lo que yo no puedo decir con palabras, lo que considero saludable y fortalecedor del campo«.
                                    </p>

                                    <p class="text-neutral-300 mb-5 text-xl">
                                        El formato alargado de Trigal bajo nubes de tormenta es inusual. Destaca la grandiosidad del paisaje, al igual que la composición simple: dos planos horizontales.
                                    </p>
                                </div>
                        </div>
                        <div 
                            role="tabpanel"
                            id="panel-3"
                            class="absolute top-0 tab-panel invisible opacity-0 transition duration300 w-full">
                                <p class="font-medium text-center text-neutral-300 mb-5 text-xl">Los comedores de patatas</p>
                                <div class="image-olivos bg-cover bg-center bg-clip-content"></div>
                                <p class="text-neutral-300 text-center mt-5 mb-10 ">Óleo sobre lienzo<br>82 x 114 cm.<br>Museo Van Gogh, Amsterdam (Fundación Vincent van Gogh)</p>
                                <div class="grid grid-cols-2 gap-6">
                                    <p class="text-neutral-300 mb-5 text-xl">
                                        Van Gogh vio a los «come patatas» como una obra maestra, por lo que eligió deliberadamente una composición difícil. La pintura tenía que representar la dura realidad de la vida en el campo, por lo que dio a los campesinos caras toscas y manos huesudas y trabajadoras. Quería demostrar de esta manera que 'ellos mismos han labrado la tierra con estas manos que están poniendo en el plato… que así se han ganado honestamente su comida'. <br><br>

                                        Pintó las cinco figuras en colores tierra: «algo así como el color de una patata muy polvorienta, sin pelar, por supuesto».                            
                                    </p>

                                    <p class="text-neutral-300 b-5m text-xl">
                                        El estilo de la pintura es característico del período temprano de Van Gogh en los Países Bajos. La pintura utiliza tonos oscuros de marrón y negro, lo que transmite un ambiente sombrío y deprimente. Además, la técnica del pincel es muy gruesa y audaz, lo que le da a la obra una textura rugosa y áspera.<br><br>

                                        Es muy expresiva y emotiva. Los rostros de los campesinos son muy detallados y tienen una expresión de tristeza y desesperanza. La mesa y las sillas son simples y rústicas, lo que muestra la humildad y la falta de medios de los personajes.<br>
                                    </p>
                                </div>
                        </div>
                        <div 
                            role="tabpanel"
                            id="panel-4"
                            class="absolute top-0 tab-panel invisible opacity-0 transition duration300 w-full">
                                <p class="font-medium text-center text-neutral-300 mb-5 text-xl">Viñedos en Auvers</p>
                                <div class="image-barcas bg-cover bg-center bg-clip-content"></div>
                                <p class="text-neutral-300 text-center mt-5 mb-10">Vincent van Gogh (1853-1890)<br>
                                    Óleo sobre lienzo<br>
                                    64,2 x 79,5 cm.<br>
                                    Auvers-sur-Oise, Julio de 1890 / Museo de Arte de Saint Louis</p>

                                <div class="grid grid-cols-2 gap-6">
                                    <p class="text-neutral-300 mb-5 text-xl">
                                        Este lienzo se centra en las formas retorcidas de las vides representadas con la característica pincelada fuertemente cargada de Vincent van Gogh. Las amapolas rojas animan la composición, al igual que los tejados rojos a lo lejos. 
                                    </p>

                                    <p class="text-neutral-300 mb-5 text-xl">
                                        En mayo de 1890, después de pasar dos años en el sur de Francia, Van Gogh se mudó al pueblo de Auvers, justo al norte de París. Pasó dos prolíficos meses allí, produciendo alrededor de 70 pinturas antes de su suicidio.
                                    </p>
                                </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- contactanos  -->
        <div id="contactanos" class="grid grid-cols-1 gap-2 mb-20">
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
        </div>

        <hr class="my-2 border-gray-700">

        <!-- Sobre nosotros -->
        <div id="nosotros" class=" mt-20">
            <x-footer-component>
                
            </x-footer-component>
        </div>

    </div>
</body>
</html>