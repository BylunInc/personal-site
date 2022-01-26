<?php
    header("Content-Security-Policy: script-src 'self' 'unsafe-inline' ajax.googleapis.com cdnjs.cloudflare.com cdnjs.com unpkg.com; style-src 'self' use.fontawesome.com; font-src 'self' fonts.googleapis.com fonts.gstatic.com;");
?>

<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tailwind-output.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/code.svg" type="image/x-icon">
    <meta name="description"
        content="Bienvenue sur le site portfolio de Maxime Vigneron, où je vous présente tous mes projets de développement">
    <script src="https://kit.fontawesome.com/47cf0efbc5.js" crossorigin="anonymous"></script>
    <title>Maxime Vigneron - Développeur Web</title>
</head>

<body class="bg-gray-900 ">
    <div class="cursor-default">
        <div class="flex flex-col readex">
            <div class="bg-orange-900 shadow-lg  z-10">
                <div class="flex items-center mt-2">
                    <div class="flex flex-col w-full items-center">
                        <div class="py-3 px-8 rounded-bl-3xl rounded-tr-3xl rounded-tl-xl rounded-br-xl bg-white ">
                            <h1 class="w-1/2 text-orange-900 font-bold text-5xl text-center">
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

            <main class="mt-2 text-white">
                <section class="pl-2">
                    <h2 class="text-2xl md:text-3xl md:ml-[20%] text-orange-800 font-bold mt-2 scroll-mt-2 underline decoration-2 decoration-orange-800 underline-offset-1" id="about">A propos de moi</h2>
                    <div class="w-3/4 grid grid-rows-2 grid-cols-1 md:grid-cols-2 md:grid-rows-1 md:justify-between md:items-center mx-auto my-2">
                        <p class=" mb-3 md:mb-0 text-left text-sm md:text-base md:leading-7">
                            Bonjour ! Je m'appelle Maxime Vigneron, j'ai 21 ans, je viens de la région Grand-Est et je suis développeur web. Tout juste sorti de formation Développeur Web et Web Mobile, je recherche des projets afin de me forger un portfolio et de gagner en expérience. <br><br>
                            Vous pourrez trouver sur cette page toutes mes réalisations, ainsi que ma fiche technique et tous les moyens que vous avez de me joindre. <br><br>Bonne journée à vous !
                        </p>
                        <iframe title="Google Maps Grand-Est" class="w-full h-60 md:h-80 border-2 shadow-xl border-solid rounded-lg border-orange-900" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692570.0871575815!2d3.5659343705861013!3d48.77305091169526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479155dfc58fb5b1%3A0xb9c8197dcfd117fd!2sGrand%20Est!5e0!3m2!1sen!2sfr!4v1643140081219!5m2!1sen!2sfr" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </section>
                <div class="h-1 my-6 w-5/6 md:w-3/4 mx-auto rounded-full  bg-orange-900"></div>
                <section class="pl-2">
                    <h2 class="text-2xl md:text-3xl md:mr-[20%] text-orange-800 font-bold mt-2 scroll-mt-2 underline decoration-2 decoration-orange-800 underline-offset-1 md:text-right" id="technos">Mes Technos</h2>
                    <div class="w-3/4 mx-auto my-3">
                        <h3 class="text-orange-700 text-lg mb-2 mt-4">Langages: </h3>
                        <div class="border-2 p-1 shadow-lg border-orange-900 rounded-lg border-solid flex flex-col md:w-3/4 mx-auto">
                            <div class="grid grid-cols-9 text-sm items-center">
                                <span class="font-bold text-center">HTML <i class="fab text-md md:text-lg text-amber-700 fa-html5"></i></span>
                                <div class="mx-auto relative col-span-7 w-3/4 h-2 bg-gray-700 rounded-full">
                                    <span class="absolute inset-0 h-2 w-[90%] bg-amber-800 rounded-lg"></span>
                                </div>
                                <span>90%</span>
                            </div>

                            <div class="grid grid-cols-9 text-sm items-center my-2">
                                <span class="font-bold text-center">CSS <i class="fab text-md md:text-lg fa-css3 text-amber-700"></i></span>
                                <div class="mx-auto col-span-7 relative w-3/4 h-2 bg-gray-700 rounded-full">
                                    <span class="absolute inset-0 h-2 w-[85%] bg-amber-800 rounded-lg"></span>
                                </div>
                                <span>85%</span>
                            </div>
                            <div class="grid grid-cols-9 text-sm items-center">
                                <span class="font-bold text-center">PHP <i class="fab text-md md:text-lg  text-amber-700 fa-php"></i></span>
                                <div class="mx-auto col-span-7 relative w-3/4 h-2 bg-gray-700 rounded-full">
                                    <span class="absolute inset-0 h-2 w-[75%] bg-amber-800 rounded-lg"></span>
                                </div>
                                <span>75%</span>
                            </div>
                            <div class="grid grid-cols-9 text-sm items-center my-2">
                                <span class="font-bold text-center">JS <i class="fab text-md md:text-lg fa-js-square text-amber-700"></i></span>
                                <div class="mx-auto col-span-7 relative w-3/4 h-2 bg-gray-700 rounded-full">
                                    <span class="absolute inset-0 h-2 w-[75%] bg-amber-800 rounded-lg"></span>
                                </div>
                                <span>75%</span>
                            </div>

                            <div class="grid grid-cols-9 text-sm items-center">
                                <span class="font-bold text-center">Vue.js <i class="fab text-md md:text-lg fa-vuejs text-amber-700"></i></span>
                                <div class="mx-auto col-span-7 relative w-3/4 h-2 bg-gray-700 rounded-full">
                                    <span class="absolute inset-0 h-2 w-[20%] bg-amber-800 rounded-lg"></span>
                                </div>
                                <span>20%</span>
                            </div>
                        </div>

                        <h3 class="text-orange-700 text-lg mb-2 mt-4">Ce que je préfère utiliser: </h3>
                        <div class="border-2 border-orange-900 rounded-lg border-solid flex flex-col md:w-3/4 mx-auto shadow-lg">
                            <div>
                                <h4 class="text-orange-700 text-md ml-1">Front-End:</h4>
                                <div class="flex my-1 p-3 justify-around items-center border-b-2 border-solid border-b-orange-900">
                                    <i class="fab fa-html5 text-3xl text-yellow-600"></i>
                                    <i class="fab text-3xl fa-vuejs text-green-700"></i>
                                    <i class="fab fa-sass text-3xl text-pink-500"></i>
                                    <i class="fab fa-js-square text-3xl text-yellow-400"></i>
                                    
                                </div>
                                <h4 class="text-orange-700 text-md mt-2 ml-1">Back-End:</h4>
                                <div class="flex my-1 p-3 justify-around items-center">
                                    <i class="fab fa-php text-3xl text-teal-700"></i>
                                    <div class="flex flex-col items-center">
                                        <i class="fas text-3xl fa-database text-amber-600"></i>
                                        <span>MySQL</span>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <img src="img/logo-logomark.svg" alt="Firebase logo" class="text-xl h-10 w-10">
                                        <span>Firebase</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="h-1 my-6 w-5/6 md:w-3/4 mx-auto rounded-full  bg-orange-900"></div>
                <section class="pl-2">
                    <h2 class="text-2xl md:text-3xl md:ml-[20%] text-orange-800 font-bold mt-2 scroll-mt-2 underline decoration-2 decoration-orange-800 underline-offset-1" id="projets">Mes réalisations</h2>
                    <div class="grid md:grid-cols-4 gap-4 md:gap-2 place-items-center w-3/4 mx-auto my-3">
                        <div class="border-2 border-solid border-orange-900 w-52 h-[16rem] shadow-lg rounded-xl hover:scale-105 transition ease-in-out group">
                            <img src="" alt="terragusto" class="h-36 w-full rounded-tr-xl rounded-tl-xl">
                            <div class="w-full mt-2 border-t-2 border-solid border-t-orange-900 p-2">
                                <a target="_blank" rel="noopener" href="http://terragusto.maxime-vigneron.fr" class="w-full inline-block text-center text-lg font-bold group-hover:text-amber-700 hover:underline hover:decoration-amber-900 ease-in-out transition">L'Atelier Terra Gusto</a>
                                <p class="text-sm text-center">Mon premier site, conçu de A à Z durant ma formation</p>
                            </div>
                        </div>
                        <div class="border-2 border-solid border-orange-900 w-52 h-[16rem] shadow-lg rounded-xl hover:scale-105 transition ease-in-out group">
                            <img src="" alt="spothifi" class="h-36 w-full rounded-tr-xl rounded-tl-xl">
                            <div class="w-full mt-2 border-t-2 border-solid border-t-orange-900 p-2">
                                <a target="_blank" rel="noopener" href="http://spothifi.maxime-vigneron.fr" class="w-full inline-block text-center text-lg font-bold group-hover:text-amber-700 hover:underline hover:decoration-amber-900 ease-in-out transition">SpotHiFi</a>
                                <p class="text-sm text-center">Clone Front-End de Spotify, crée avec TailwindCSS</p>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="h-1 my-6 w-5/6 md:w-3/4 mx-auto rounded-full  bg-orange-900"></div>
                <section class="pl-2">
                    <h2 class="text-2xl md:text-3xl md:mr-[20%] text-orange-800 font-bold mt-2 scroll-mt-2 underline decoration-2 decoration-orange-800 underline-offset-1 md:text-right" id="contact">Me contacter</h2>
                    <div class="w-3/4 mx-auto my-3">
                        <form action="https://smartforms.dev/submit/61f09c3b7a195017922dd303" method="post" class="my-3 text-gray-300">
                            <div class="md:w-3/4 md:mx-auto shadow-lg border-2 border-solid border-orange-900 rounded-lg bg-gray-900 p-2 flex flex-col">
                                <div class="flex w-full">
                                    <div class="flex flex-col w-1/2">
                                        <label for="nom">Votre nom: </label>
                                        <label for="prenom" class="my-2">Votre prénom: </label>
                                        <label for="mail">Votre adresse mail: </label>
                                    </div>
                                    <div class="flex flex-col ml-2 w-1/2 text-white">
                                        <input class="w-3/4 p-[2px] text-sm bg-gray-900 border-orange-600 rounded-lg border border-solid" type="text" name="nom" id="nom">
                                        <input class="w-3/4 p-[2px] text-sm bg-gray-900 border-orange-600 my-2 rounded-lg border border-solid" type="text" name="prenom" id="prenom">
                                        <input class="w-3/4 p-[2px] text-sm bg-gray-900 border-orange-600 rounded-lg border border-solid" type="email" name="mail" id="mail">
                                    </div>

                                </div>
                                <div class="flex flex-col">
                                    <label for="message">Votre message: </label>
                                    <textarea name="message" id="message" class="border-orange-600 bg-gray-900 text-white p-1 my-1 rounded-lg border border-solid resize-none h-32"></textarea>
                                </div>
                                <div class="my-3 flex justify-center items-center">
                                    <button type="submit" class="border-none rounded-xl p-2 bg-orange-700 hover:bg-orange-900 hover:text-white transition ease-in-out">Envoyer</button>
                                </div>
                            </div>
                        </form>
                        <h3 class="text-orange-700 text-lg mb-2 mt-4">Mes autres liens: </h3>
                        <div class="my-2 flex justify-evenly">
                            <a target="_blank" href="https://github.com/BylunInc" rel="noopener" class="flex flex-col hover:text-orange-900 items-center">
                                <i class="fab fa-github text-neutral-500 hover:text-orange-900 text-4xl"></i>
                                GitHub
                            </a>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="bg-orange-900 h-44 flex justify-evenly text-gray-300 items-center">
                <a href="#about">A propos</a>
                <a href="#technos">Technos</a>
                <a href="#projets">Projets</a>
                <a href="#contact">Contact</a>
                <a target="_blank" rel="noopener" href="https://github.com/BylunInc">
                    GitHub
                </a>
            </footer>
        </div>
    </div>
</body>

</html>