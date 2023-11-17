<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') | Panel de Administración</title>
</head>
<body>
    <header>
        <nav class="w-screen bg-teal-500 h-fit overflow-hidden">
            <div class="py-4 lg:px-8 px-4 max-w-[1280px] h-16 m-auto text-white flex items-center justify-between">
                <div>
                    <h1 class="lg:text-2xl text-xl uppercase tracking-wider cursor-pointer font-bold">Document</h1>
                </div>
                <div class="flex lg:gap-8 gap-6 uppercase tracking-wider cursor-pointer text-lg items-center" id="navItems">
                    <span class="group">
                        Services
                        <div class="w-0 group-hover:w-full h-0.5 bg-white ease-in-out duration-500"></div>
                    </span>
                    <span class="group">
                        About
                        <div class="w-0 group-hover:w-full h-0.5 bg-white ease-in-out duration-500"></div>
                    </span>
                    <span class="group">
                        Contact
                        <div class="w-0 group-hover:w-full h-0.5 bg-white ease-in-out duration-500"></div>
                    </span>
                </div>
                <div id="hamburger" class="fa fa-bars flex items-center text-xl" style="display:none;"></div>
                <div id="mobileNav"
                    class="fixed flex flex-col gap-8 pt-16 px-4 text-xl uppercase bg-teal-500 h-full inset-0 top-16 w-[70%] left-[-70%] ease-in-out duration-500 cursor-pointer">
                    <span>Services</span>
                    <span>About</span>
                    <span>Contact</span>
                </div>
            </div>
        </nav>
    </header>
    <main>

        @yield('content')

    </main>
</body>
</html>