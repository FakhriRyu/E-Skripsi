<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        E-Skripsi
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(90deg, #33aaff 0%, #ffffff 100%);
        }
    </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                    href="#">
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <a href="/" class="flex ms-2 md:me-24">
                        <img src="https://www.unib.ac.id/wp-content/uploads/2019/10/logo-unib-e1571906638799.png" class="h-8 mt-2 mb-2 mr-3 me-3" alt="FlowBite Logo" />
                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">E-Skripsi</span>
                    </a>
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <!--Hero-->
    <!--Hero-->
<div class="pt-24">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
            <p class="uppercase tracking-loose w-full">Apa itu E-Skripsi?</p>
            <h1 class="my-4 text-5xl font-bold leading-tight">
                Sistem Informasi Skripsi Elektronik FKIP
            </h1>
            <p class="leading-normal text-2xl mb-8">
                Merupakan suatu inovasi teknologi informasi yang bertujuan untuk menyediakan solusi efektif dalam proses pengelolaan dan pemantauan skripsi di lingkungan akademis
            </p>
            <a href="/login" class="bg-blue-100 text-black font-bold ml-10 px-10 py-5 rounded-lg text-lg">Masuk</a>
        </div>
        <!--Right Col - Image-->
        <div class="w-full md:w-2/5 py-4 text-center ml-auto">
            <img class="w-full md:w-3/5 z-50 rounded-lg" src="https://www.unib.ac.id/wp-content/uploads/2019/10/logo-unib-e1571906638799.png" alt="Skripsi Illustration">
        </div>
    </div>
</div>

</body>

</html>
