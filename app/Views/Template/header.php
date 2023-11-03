<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Frontend with CodeIgniter 4" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <title>Tickitz App</title>
    <link rel="shortcut icon" type="image/png" href="/img/favicon.ico">
</head>

<body>
    <header class="sticky top-0 px-5 md:px-20 relative flex justify-between py-4 bg-white z-10 md:shadow-sm">
        <nav class="flex items-center">
            <img class="h-8 md:h-10 lg:h-14 pe-10" src="/img/tickitz.png" alt="" />
        </nav>
        <div class="flex items-center">
            <a class="hidden lg:block text-[#414141] text-base font-normal hover:font-bold tracking-wide" href="/admin">Dashboard</a>
            <a class="hidden lg:block pl-7 text-[#414141] text-base font-normal hover:font-bold tracking-wide" href="/">Movie</a>
            <a class="hidden lg:block pl-7 text-[#414141] text-base font-normal hover:font-bold tracking-wide" href="/list_movie">Manage Movie</a>
        </div>
        <div class="block">
            <button class="mt-2 h-6 w-16 md:h-8 md:w-20 border border-[#4338ca] text-[#4338ca] rounded-md text-[10px] md:text-[12px] tracking-wide text-[#4338ca] mr-4 hover:text-white hover:bg-[#4338ca]">Sign In</button>
            <button class="mt-2 h-6 w-16 md:h-8 md:w-20 bg-[#4338ca] rounded-md text-[10px] md:text-[12px] tracking-wide text-white hover:text-[#4338ca] hover:bg-white hover:border hover:border-[#4338ca]">Sign Up</button>
        </div>
    </header>