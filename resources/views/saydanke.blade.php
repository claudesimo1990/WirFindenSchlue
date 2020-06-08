<!doctype html>
<html lang="en" class="text-gray-900 antialiased leading-tight">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WirFindenDeinem</title>
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{'/css/app.css'}}" media="all"/>
    @livewireStyles
</head>
<body class="bg-gray-100">
<div class="max-w-6xl mx-auto mt-20">
    <h1 class="text-black font-black text-center text-uppercase text-2xl mb-10">Wir finden deinen Schlü</h1>

    <div class="bg-green-100 border border-green-400 text-green-400 px-4 py-3 my-5 rounded relative text-center" role="alert">
        <strong class="font-bold">Danke für ihre Zahlung mit Paypal</strong>
        <span class="block sm:inline"></span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
  </span>
    </div>
    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col  leading-normal">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dolore dolores eligendi et, explicabo fuga
        fugiat officiis porro possimus quasi quo, sunt ullam! Facere maxime, nihil obcaecati repellat vero
        voluptatem.
    </div>
    <a class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full mt-10 flex mx-auto justify-center" href="{{route('homepage')}}">zur Startseite</a>
</div>
@livewireScripts
</body>
</html>
