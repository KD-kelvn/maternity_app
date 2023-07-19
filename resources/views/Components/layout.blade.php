<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maternity-App</title>
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    /> 
    <script src="https://cdn.tailwindcss.com" ></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                colors: {
                    main: "#f25845",
                }
                },
            },
        };
    </script>
    </head>
    <body>
        <x-navbar/>
        <div class="app relative flex w-full">
        <x-sidebar/>
            <div class="app-center-container flex flex-col mt-[8%] ml-[19%] w-[52%]">
                {{$slot}}
            </div>
        <x-suggestions   />
        </div>
    </body>
</html>
