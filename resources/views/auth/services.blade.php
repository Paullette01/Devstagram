@extends('layouts.app')
@section('titulo')
    Registra un servicio
@endsection
@section('contenido')
    <div class="md:flex md:justify-center md:gap=10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('Imagenes/Materiales DevStagram-UPV/Materiales DevStagram-UPV/Diseño/registrar.jpg')}}" alt="Imagen de registro de usuario">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <!-- Formulario de registro -->
            <form action={{route('serviceR')}} method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for ="codigo" class="mb-2 black uppercase text-gray-500 font-bold">
                        Id
                    </label>
                    <input
                        id="codigo"
                        name="codigo"
                        type="text"
                        placeholder="Ingresa el id del servicio"
                        class="border p-3 w-full rounded tg
                        @error('codigo')
                            border-red-500
                        @enderror"
                        value="{{old('codigo')}}"
                    />
                    <!-- Mostrar directiva de registro de nombre obligatorio -->
                    @error('codigo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for ="nombre" class="mb-2 black uppercase text-gray-500 font-bold">
                        Nombre del servicio
                    </label>
                    <input
                        id="nombre"
                        name="nombre"
                        type="text"
                        placeholder="Ingresa el nombre del servicio"
                        class="border p-3 w-full rounded tg
                        @error('nombre')
                            border-red-500
                        @enderror"
                        value="{{old('nombre')}}"
                    />
                    <!-- Mostrar directiva de registro de nombre obligatorio -->
                    @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="descCorta" class="mb-2 black uppercase text-gray-500 font-bold">
                        Descripcion corta
                    </label>
                    <input
                        id="descCorta"
                        name="descCorta"
                        type="text"
                        placeholder="Ingresa una descripcion corta"
                        class="border p-3 w-full rounded tg
                        @error('descCorta')
                            border-red-500
                        @enderror"
                        value="{{old('descCorta')}}"
                    />
                    @error('descCorta')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="descLarga" class="mb-2 black uppercase text-gray-500 font-bold">
                        Descripcion larga
                    </label>
                    <input
                        id="descLarga"
                        name="descLarga"
                        type="text"
                        placeholder="Ingresa una descripcion larga"
                        class="border p-3 w-full rounded tg
                        @error('descLarga')
                            border-red-500
                        @enderror"
                        value="{{old('descLarga')}}"
                    />
                    @error('descLarga')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="precioS" class="mb-2 black uppercase text-gray-500 font-bold">
                        Precio del Servicio
                    </label>
                    <input
                        id="precioS"
                        name="precioS"
                        type="text"
                        placeholder="Ingresa tel precio del servicio"
                        class="border p-3 w-full rounded tg
                        @error('precioS')
                            border-red-500
                        @enderror"
                        value="{{old('precioS')}}"
                    />
                    <!-- Mostrar directiva de registro de nombre obligatorio -->
                    @error('precioS')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="fechaIn" class="mb-2 black uppercase text-gray-500 font-bold">
                        Fecha de ingreso del registro
                    </label>
                    <input
                        id="fechaIn"
                        name="fechaIn"
                        type="date"
                        placeholder="Ingresa la fecha de registro"
                        class="border p-3 w-full rounded tg
                        @error('fechaIn')
                            border-red-500
                        @enderror"
                        value="{{old('fechaIn')}}"
                    />
                    <!-- Mostrar directiva de registro de nombre obligatorio -->
                    @error('fechaIn')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="caractS" class="mb-2 black uppercase text-gray-500 font-bold">
                        Caracteristicas del servicio
                    </label>
                    <input
                        id="caractS"
                        name="caractS"
                        type="text"
                        placeholder="Ingresa las caracteristicas del servicio"
                        class="border p-3 w-full rounded tg
                        @error('caractS')
                            border-red-500
                        @enderror"
                        value="{{old('caractS')}}"
                    />
                    <!-- Mostrar directiva de registro de nombre obligatorio -->
                    @error('caractS')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <input
                    type="submit"
                    value="Registrar Servicio"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection