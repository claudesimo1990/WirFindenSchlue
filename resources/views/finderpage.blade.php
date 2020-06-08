<!doctype html>
<html lang="en" class="text-gray-900 antialiased leading-tight">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{'/css/app.css'}}" media="all"/>
    <title>WirFindenDeinem</title>
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
          media="all"/>
    <!-- own style css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/css/rtl.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{'/css/app.css'}}" media="all"/>
    @livewireStyles
</head>
<body class="bg-gray-100">
<div class="container">
    <div class="max-w-sm w-full lg:max-w-full  mt-20 ml-20">
        <h1 class="text-black font-black text-center text-uppercase text-2xl mb-10">Pate Informationen</h1>
        <div
            class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            @if($pate->status == 1)
                <div class="mb-8">
                    <div class="mb-4">
                        <div class="bg-gray-100 h-12 px-3 py-3">
                            <span class="text-bold text-green-100">Anrede :</span><span
                                class="ml-4 text-black">{{$pate->anrede_2}}</span>
                        </div>
                        <div class="bg-gray-300 h-12 px-3 py-3 text-green-100">
                            <span class="text-bold text-green-100">Email :</span><span
                                class="ml-4 text-black">{{$pate->email_2}}</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="bg-gray-100 h-12 px-3 py-3">
                            <span class="text-bold text-green-100">Vorname und Nachname :</span><span
                                class="ml-4 text-black">{{$pate->vorname_2 . ' ' }} {{$pate->nachname_2}}</span>
                        </div>
                        <div class="bg-gray-300 h-12 px-3 py-3 text-green-100">
                            <span class="text-bold text-green-100">Telefon :</span><span
                                class="ml-4 text-black">{{$pate->phone_2}}</span>
                        </div>
                    </div>
                </div>
                @livewire('finder-component')
            @else
                <div class="mb-8">
                    <div class="mb-4">
                        <div class="bg-gray-300 h-12 px-3 py-3 text-green-100">
                            <span class="text-bold text-green-100">Bankname :</span><span
                                class="ml-4 text-black">IchFindeMeinem</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="bg-gray-100 h-12 px-3 py-3">
                            <span class="text-bold text-green-100">Email :</span><span
                                class="ml-4 text-black">kontakt@ichfindemeinen.de</span>
                        </div>
                        <div class="mb-4">
                            <div class="bg-gray-300 h-12 px-3 py-3 text-green-100">
                                <span class="text-bold text-green-100">Telefon :</span><span
                                    class="ml-4 text-black">+49 30 62933447</span>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
