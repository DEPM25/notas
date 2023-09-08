<div class="container mx-auto px-auto flex justify-center items-start m-10">
    <div class="flex flex-col h-auto w-screen bg-gray-100 p-5 rounded-lg shadow-lg">
        {{-- Titulo --}}
        <div class="py-2">
            <h2 class="text-center text-3xl">Bienvenid@ a la plataforma de notas</h2>
        </div>
        {{-- Subtitulo --}}
        <div class="py-1">
            <h2 class="text-center">
                {{ auth()->user()->info_user->nombre_1}} {{ auth()->user()->info_user->nombre_2  }} {{ auth()->user()->info_user ->apellido_1  }}  {{ auth()->user()->info_user->apellido_2  }}
            </h2>
        </div>
    </div>
</div>
