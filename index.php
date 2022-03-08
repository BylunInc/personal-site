<!-- <?php
    header("Content-Security-Policy: script-src 'self' 'unsafe-inline' ajax.googleapis.com cdnjs.cloudflare.com cdnjs.com unpkg.com; style-src 'self' use.fontawesome.com; font-src 'self' fonts.googleapis.com fonts.gstatic.com;");
?> -->

<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tailwind-output.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo-bylun.svg" type="image/x-icon">
    <meta name="description"
        content="Bienvenue sur le site portfolio de Maxime Vigneron, où je vous présente tous mes projets de développement">
    <script src="https://kit.fontawesome.com/47cf0efbc5.js" crossorigin="anonymous"></script>
    <script defer src='https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js'></script>
    <title>Maxime Vigneron - Développeur Web</title>
</head>

<body class="bg-[#D3D9DA] ">
    <div class="cursor-default">
        <div class="flex flex-col readex">
            <div class="bg-[#526668] shadow-lg  z-10">
                <div class="flex items-center mt-2">
                    <div class="flex flex-col w-full items-center">
                        <div class="py-3 px-8 rounded-bl-3xl rounded-tr-3xl rounded-tl-xl rounded-br-xl bg-white select-none">
                            <h1 class="w-1/2 text-[#526668] font-bold text-5xl text-center">
                                bylun
                            </h1>
                            <span class="text-xs mt-1">par Maxime Vigneron</span>
                        </div>
                    </div>
                </div>
                <nav class="py-3 mt-2">
                  <ul class="grid w-3/4 mx-auto grid-cols-4 place-items-center text-md text-gray-200">
                      <li class="hover:text-white"><a href="#about">A propos</a></li>
                      <li class="hover:text-white"><a href="#technos">Technos</a></li>
                      <li class="hover:text-white"><a href="#projets">Projets</a></li>
                      <li class="hover:text-white"><a href="#contact">Contact</a></li>
                  </ul>  
                </nav>
            </div>

            <main class="mt-2 text-black">
                <section class="pl-2">
                    <h2 class="text-2xl md:text-3xl md:ml-[20%] text-[#526668] font-bold mt-2 scroll-mt-2 underline decoration-2 decoration-[#526668] underline-offset-1" id="about">A propos de moi</h2>
                    <div class="w-3/4 grid grid-rows-2 grid-cols-1 md:grid-cols-2 md:grid-rows-1 md:justify-between md:items-center mx-auto my-2">
                        <p class=" mb-3 md:mb-0 text-left text-sm md:text-base md:leading-7">
                            Bonjour ! Je m'appelle Maxime Vigneron, j'ai 21 ans, je viens de la région Grand-Est et je suis développeur web. Tout juste sorti de formation Développeur Web et Web Mobile, je recherche des projets afin de me forger un portfolio et de gagner en expérience. <br><br>
                            Vous pourrez trouver sur cette page toutes mes réalisations, ainsi que ma fiche technique et tous les moyens que vous avez de me joindre. <br><br>Bonne journée à vous !
                        </p>
                        <iframe title="Google Maps Grand-Est" class="w-full h-60 md:h-80 border-2 shadow-xl border-solid rounded-lg border-[#526668]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692570.0871575815!2d3.5659343705861013!3d48.77305091169526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479155dfc58fb5b1%3A0xb9c8197dcfd117fd!2sGrand%20Est!5e0!3m2!1sen!2sfr!4v1643140081219!5m2!1sen!2sfr" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </section>
                <div class="h-1 my-6 w-5/6 md:w-3/4 mx-auto rounded-full  bg-[#526668]"></div>
                <section class="pl-2" x-data="{ tech : 'first' }">
                    <h2 class="text-2xl md:text-3xl md:mr-[20%] text-[#526668] font-bold mt-2 scroll-mt-2 underline decoration-2 decoration-[#526668] underline-offset-1 md:text-right" id="technos">Mes Technos</h2>
                    <div class="w-3/4 mx-auto my-3">
                        <h3 class="text-[#526668] md:text-2xl text-lg font-bold mb-2 mt-4 text-bold">Langages: </h3>
                        <div>
                            <div class="md:w-3/4 text-sm md:text-base my-3 items-center mx-auto flex justify-around ">
                                <span class="p-3 hover:outline hover:outline-2 hover:outline-black rounded-full" @click="tech ='first'" :class="tech == 'first' ? 'bg-[#526668] border transition duration-150 border-none rounded-full' : ''">
                                    Front-End
                                </span>
                                <span class="p-3 hover:outline hover:outline-2 hover:outline-black rounded-full" @click="tech ='second'" :class="tech == 'second' ? 'bg-[#526668] transition duration-150 border-none rounded-full' : ''">
                                    Back-End
                                </span>
                                <span class="p-3 hover:outline hover:outline-2 hover:outline-black rounded-full" @click="tech ='third'" :class="tech == 'third' ? 'bg-[#526668]  transition duration-150 border-none rounded-full' : ''">
                                    Framework
                                </span>
                            </div>
                        </div>
                        <div class="border-2 group p-2 shadow-lg border-[#526668] bg-[#ccd3d4] rounded-lg border-solid grid md:h-48 place-items-center md:w-1/2 mx-auto">
                            <div>
                                <template x-if="tech === 'first'">
                                    <div class="grid grid-cols-3 gap-6 w-full" >
                                        <div class=" flex flex-col items-center text-amber-800">
                                            <i class="fab fa-html5 text-3xl "></i>
                                            <span class="group-hover:opacity-100 md:opacity-0 duration-175 transition-opacity text-sm">HTML5</span>
                                        </div>
                                        <div class=" flex flex-col items-center  text-blue-600">
                                            <i class="fab fa-css3 text-3xl "></i>
                                            <span class="group-hover:opacity-100 md:opacity-0 duration-175 transition-opacity text-sm">CSS3</span>
                                        </div>
                                        <div class="flex flex-col items-center text-amber-700">
                                            <i class="fab fa-js text-3xl "></i>
                                            <span class="group-hover:opacity-100 md:opacity-0 duration-175 transition-opacity text-sm">JavaScript</span>
                                        </div>
                                    </div>
                                    
                                </template>

                                <template x-if="tech === 'second'">
                                    <div class="grid grid-cols-2 gap-6 w-full">
                                        <div class="flex flex-col items-center text-violet-600">
                                            <i class="fab fa-php text-3xl "></i>
                                            <span class="group-hover:opacity-100 md:opacity-0 duration-175 transition-opacity text-sm">PHP</span>
                                        </div>
                                        <div class="flex flex-col items-center text-pink-600">
                                            <i class="fas fa-database text-3xl  "></i>
                                            <span class="group-hover:opacity-100 md:opacity-0 duration-175 transition-opacity text-sm">MySQL</span>
                                        </div>
                                    </div>
                                    
                                </template>
                                
                                <template x-if="tech === 'third'">
                                    
                                    <div class="grid grid-cols-3 grid-row-2 gap-6 w-full">
                                        <div class=" flex flex-col items-center text-slate-500">
                                            <i class="fas fa-mountain text-3xl "></i>
                                            <span class="group-hover:opacity-100 md:opacity-0 duration-175 transition-opacity text-sm">AlpineJS</span>
                                        </div>
                                        <div class=" flex flex-col items-center text-green-600">
                                            <i class="fab fa-vuejs text-3xl "></i>
                                            <span class="group-hover:opacity-100 md:opacity-0 duration-175 transition-opacity text-sm">Vue.js</span>
                                        </div>
                                        <div class=" flex flex-col items-center text-cyan-600">
                                            <i class="fab fa-react text-3xl "></i>
                                            <span class="group-hover:opacity-100 md:opacity-0 duration-175 transition-opacity text-sm">ReactJS</span>
                                        </div>
                                        <div class=" flex flex-col items-center text-purple-600">
                                            <i class="fab fa-bootstrap text-3xl "></i>
                                            <span class="group-hover:opacity-100 md:opacity-0 duration-175 transition-opacity text-sm">Bootstrap 5</span>
                                        </div>
                                        <div class=" flex flex-col items-center text-pink-600">
                                            <i class="fab fa-sass text-3xl "></i>
                                            <span class="group-hover:opacity-100 md:opacity-0 duration-175 transition-opacity text-sm">SCSS</span>
                                        </div>
                                        <div class=" flex flex-col items-center text-blue-600">
                                            <i class="fas fa-wind text-3xl "></i>
                                            <span class="group-hover:opacity-100 md:opacity-0 duration-175 transition-opacity text-sm">TailwindCSS</span>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <h3 class="text-[#526668] md:text-2xl text-lg font-bold mb-2 mt-4">Ce que je préfère utiliser: </h3>
                        <div class="border-2 border-[#526668] bg-[#ccd3d4] rounded-lg border-solid flex flex-col md:w-1/2 mx-auto shadow-lg">
                            <div>
                                <h4 class="text-[#526668] text-md ml-1">Front-End:</h4>
                                <div class="flex my-1 p-3 justify-around items-center border-b-2 border-solid border-b-[#526668]">
                                    <i class="fab fa-html5 text-3xl text-amber-800"></i>
                                    <div class="flex flex-col items-center text-slate-600">
                                        <i class="fas text-3xl fa-mountain "></i>
                                        <span class="text-sm">AlpineJs</span>
                                    </div>
                                    <i class="fab fa-sass text-3xl text-pink-500"></i>
                                    <i class="fab fa-js-square text-3xl text-amber-700"></i>
                                    
                                </div>
                                <h4 class="text-[#526668] text-md mt-2 ml-1">Back-End:</h4>
                                <div class="flex my-1 p-3 justify-around items-center">
                                    <i class="fab fa-php text-3xl text-blue-700"></i>
                                    <div class="flex flex-col items-center text-pink-600">
                                        <i class="fas text-3xl fa-database "></i>
                                        <span class="text-sm">MySQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="h-1 my-6 w-5/6 md:w-3/4 mx-auto rounded-full  bg-[#526668]"></div>
                <section class="pl-2">
                    <h2 class="text-2xl md:text-3xl md:ml-[20%] text-[#526668] font-bold mt-2 scroll-mt-2 underline decoration-2 decoration-[#526668] underline-offset-1" id="projets">Mes réalisations</h2>
                    <div class="grid xl:grid-cols-4 sm:grid-cols-2 gap-6 md:gap-2 place-items-center w-3/4 mx-auto my-3">
                        <div class="border-2 border-solid border-[#526668] w-52 h-[16rem] shadow-lg rounded-xl hover:scale-105 transition ease-in-out group">
                            <img src="" alt="spothifi" class="h-36 w-full rounded-tr-xl rounded-tl-xl">
                            <div class="w-full mt-2 border-t-2 border-solid border-t-[#526668] p-2">
                                <a target="_blank" rel="noopener" href="http://spothifi.maxime-vigneron.fr" class="w-full inline-block text-center text-lg font-bold group-hover:text-[#FF1361] hover:underline hover:decoration-red-900 ease-in-out transition">SpotHiFi</a>
                                <p class="text-sm text-center">Clone Front-End de Spotify, crée avec TailwindCSS</p>
                            </div>
                        </div>
                        <div class="border-2 border-solid border-[#526668] w-52 h-[16rem] shadow-lg rounded-xl hover:scale-105 transition ease-in-out group">
                            <img src="" alt="morpion" class="h-36 w-full rounded-tr-xl rounded-tl-xl">
                            <div class="w-full mt-2 border-t-2 border-solid border-t-[#526668] p-2">
                                <a target="_blank" rel="noopener" href="https://codepen.io/bylun/pen/ExwLxVj" class="w-full inline-block text-center text-lg font-bold group-hover:text-[#FF1361] hover:underline hover:decoration-red-900 ease-in-out transition">Morpion</a>
                                <p class="text-sm text-center">Morpion réalisé dans le cadre de ma formation</p>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="h-1 my-6 w-5/6 md:w-3/4 mx-auto rounded-full  bg-[#526668]"></div>
                <section class="pl-2">
                    <h2 class="text-2xl md:text-3xl md:mr-[20%] text-[#526668] font-bold mt-2 scroll-mt-2 underline decoration-2 decoration-[#526668]  underline-offset-1 md:text-right" id="contact">Me contacter</h2>
                    <div class="w-3/4 mx-auto my-3">
                        <form action="https://smartforms.dev/submit/61f09c3b7a195017922dd303" method="post" class="my-3 text-black" id="form">
                            <div class="md:w-3/4 md:mx-auto shadow-lg border-2 border-solid border-[#526668] rounded-lg bg-[#ccd3d4] p-2 flex flex-col">
                                <div class="flex w-full">
                                    <div class="flex flex-col w-1/2">
                                        <label for="nom">Votre nom: </label>
                                        <label for="prenom" class="my-2">Votre prénom: </label>
                                        <label for="mail">Votre adresse mail: </label>
                                    </div>
                                    <div class="flex flex-col ml-2 w-1/2 text-black">
                                        <input class="w-3/4 p-[2px] text-sm bg-transparent border-black rounded-lg border border-solid" type="text" name="nom" id="nom">
                                        <span class="error"></span>
                                        <input class="w-3/4 p-[2px] text-sm bg-transparent border-black my-2 rounded-lg border border-solid" type="text" name="prenom" id="prenom">
                                        <span class="error"></span>
                                        <input class="w-3/4 p-[2px] text-sm bg-transparent border-black rounded-lg border border-solid" type="email" name="mail" id="mail">
                                        <span class="error"></span>
                                    </div>

                                </div>
                                <div class="flex flex-col">
                                    <label for="message">Votre message: </label>
                                    <textarea name="message" id="message" class="border-black bg-transparent text-black p-1 my-1 rounded-lg border border-solid resize-none h-32"></textarea>
                                    <span class="error"></span>
                                </div>
                                <div class="my-3 flex justify-center items-center">
                                    <button type="submit" id="btnSubmit" class="border-none rounded-xl p-2 bg-[#526668] hover:bg-[#526668] hover:text-white transition ease-in-out">Envoyer</button>
                                </div>
                            </div>
                        </form>
                        <h3 class="text-[#526668] text-lg mb-2 mt-4">Mes autres liens: </h3>
                        <div class="my-2 flex justify-evenly">
                            <a target="_blank" href="https://github.com/BylunInc" rel="noopener" class="flex flex-col hover:text-[#FF1361] items-center group">
                                <i class="fab fa-github text-neutral-500 group-hover:text-[#FF1361] text-4xl"></i>
                                GitHub
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/in/maxime-vigneron-267084230" rel="noopener" class="flex flex-col hover:text-[#FF1361] items-center group">
                                <i class="fab fa-linkedin text-neutral-500 group-hover:text-[#FF1361] text-4xl"></i>
                                Linkedin
                            </a>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="bg-[#526668] h-44 flex justify-evenly text-gray-300 items-center">
                <a href="#about" class="hover:text-white">A propos</a>
                <a href="#technos" class="hover:text-white">Technos</a>
                <a href="#projets" class="hover:text-white">Projets</a>
                <a href="#contact" class="hover:text-white">Contact</a>
                <a target="_blank" rel="noopener" href="https://github.com/BylunInc" class="hover:text-white">
                    GitHub
                </a>
            </footer>
        </div>
    </div>
    <script src="js/formValidation.js"></script>
</body>

</html>