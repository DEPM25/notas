<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/Escudo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/Escudo.png') }}" type="image/x-icon">

    @vite('resources/css/app.css')
</head>
<body>
<section style="background-image: url('images/background_login3.svg')" class="w-full h-screen min-h-screen bg-no-repeat bg-center bg-cover flex items-center justify-center">
    <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-6xl p-5 items-center">
        <div class="sm:w-1/2 px-16">

            <div class="flex items-center justify-center bg-auto py-4 m-5">
                <img src="{{ $configuracion->escudo ? URL::asset('images/'.$configuracion->escudo) : URL::asset('images/Escudo.png') }}" alt="">
            </div>
            <form method="POST" action="{{ route('iniciar-sesion') }}" class="flex flex-col gap-4">
                @csrf
                <div class="relative mb-3">
                    <input
                        name="nick"
                        type="text"
                        value="{{ old('nick') }}"
                        class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-700 transition duration-200 ease-linear placeholder:text-transparent focus:border-[#ED3237] focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-black dark:border-neutral-600 dark:text-black dark:focus:border-[#ED3237] dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                        placeholder="Nick" />
                    <label
                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-black transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-[#ED3237] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-opacity-40 dark:peer-focus:text-primary"
                    >Nick</label
                    >
                    @error('nick') {{ $message }} @enderror
                </div>

                <!--Password input-->
                <div class="relative mb-3">
                    <input
                        name="password"
                        type="password"
                        class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight transition duration-200 ease-linear placeholder:text-transparent focus:border-[#ED3237] focus:pb-[0.625rem] focus:pt-[1.625rem] focus:shadow-te-primary focus:outline-none peer-focus:text-[#ED3237] dark:border-neutral-600 dark:text-black dark:focus:border-[#ED3237] dark:peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
                        placeholder="Contraseña" />
                    <label
                        class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-black transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-[#ED3237] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-opacity-40 dark:peer-focus:text-primary"
                    >Contraseña</label
                        @error('password') {{ $message }} @enderror
                    >
                </div>

                <div class="flex items-center mb-4">
                    <input name="remember" id="default-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Recordarme</label>
                </div>

                <button class="bg-[#ED3237] rounded text-white py-2 hover:bg-[#c72c31] hover:shadow-lg hover:transition-shadow">Iniciar Sesion</button>
            </form>

            <a target="_blanck" class="flex items-center justify-center py-4 italic text-sm underline" href="{{ $configuracion->link ?? '#' }}">{{ $configuracion->nombre_colegio ?? 'Nombre Institucion' }}</a>
        </div>
        <div class="sm:block hidden w-1/2 py-20 px-1 bg-gray-200 rounded-2xl">
            <img class="rounded-2xl" src="{{ URL::asset('images/img_login.svg') }}" alt="">
        </div>
    </div>
</section>
</body>
</html>
