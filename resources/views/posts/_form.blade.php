<!-- Token generado por Laravel, para indicar que el formulario ha sido creado por si mismo -->
@csrf

<label class="uppercase text-gray-700 text-xs" for="">Titulo</label>
<span class="text-xs text-red-600">@error('titulo') {{ $message }} @enderror</span>
<input type="text" name="titulo" class="rounded border-gray-200 w-full mb-4" value="{{ old('titulo',$post->titulo) }}">

<label class="uppercase text-gray-700 text-xs" for="">Url</label>
<span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>
<input type="text" name="slug" class="rounded border-gray-200 w-full mb-4" value="{{ old('slug',$post->slug) }}">

<label class="uppercase text-gray-700 text-xs" for="">Contenido</label>
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>
<textarea name="body" rows="5" class="rounded border-gray-200 w-full mb-4">{{ old('body',$post->body) }}</textarea>

<div class="flex justify-between items-center ">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
    <button type="subtmit" class="bg-gray-800 text-white rounded px-4 py-2">Enviar</button>
</div>