@extends('layouts.main')

@section('title','Editar Perfil')

@section('content')

    <main class="font-inter bg-gray"> 
        <section>
            <form action="/events/update/{{$profile->user_id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-col  justify-center items-center gap-8 h-auto w-full p-8">

                <div class="h-auto w-3/5 p-8 bg-white rounded-lg flex flex-col gap-8 hover:shadow-card hover:transition-all hover:delay-150">
                    <div class="flex items-center justify-between">
                        <div class="">
                            <h2 class="font-semibold text-xl hover:underline">Editando Perfil - {{$profile->nome}}</h2>
                        </div>
                        <div class="">
                            <i class="bi bi-caret-up-fill text-2xl hover:cursor-pointer"></i>
                        </div>
                    </div>
                        <div class="flex items-center w-full justify-between flex-col gap-5">
                            <div class="flex justify-center items-center h-96 w-3/5 flex-col gap-3">
                                <div class="flex justify-center items-center  h-full w-full">
                                    <label class="border-4 border-gray-200 border-dashed flex justify-center items-center text-2xl font-extrabold hover:border-blue-500 delay-150 transition-all hover:cursor-pointer h-full w-full " for="inputImage"><span>Mudar Foto</span></label>
                                    <input class="hidden" type="file" accept="image/jpg,image/jpeg,image/png" name="imageProfile" id="inputImage">
                                    <img class="h-full w-full object-contain" src="/img/profileImg/{{$profile->imageProfile}}" alt="">
                                    
                                </div> 
                                <span>Foto em jpg até 2mb</span>
                            </div>
                            <div class="flex flex-col w-full gap-3">
                                <h4 class="">Sobre Mim</h4>
                                <textarea class="resize-none border-2 p-5 border-gray-200 max-h-72 outline-none text-black font-medium text-base rounded-lg" name="description" id="" cols="70" rows="10" >{{$profile->description}}</textarea>
                            </div>
                        </div>

                        <div class="flex justify-between items-center pt-10 w-full">
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Nome Completo</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="nome" id="" minlength="1" maxlength="25" value="{{$profile->nome}}"> 
                            </div>
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Estado/Cidade</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="Estado" id="" value="{{$profile->Estado}}"> 
                            </div>
                        </div>
                </div>

                <div class=" h-auto w-3/5 p-8 bg-white rounded-lg flex flex-col gap-8">
                    <div class="flex items-center justify-between">
                        <div class="">
                            <h2 class="font-semibold text-xl hover:underline">Atributos</h2>
                        </div>
                        <div class="">
                            <i class="bi bi-caret-up-fill text-2xl hover:cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Tatuagens</label>
                            <select name="tatuagem" id="" value="">
                                <option value="" selected disabled>Escolha</option>
                                @if($profile->tatuagem == 0)
                                <option value="1">Sim</option>
                                <option selected value="0">Não</option>
                                @else
                                <option selected value="1">Sim</option>
                                <option value="0">Não</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="Salvar Mudanças">
                </form>
            </div>
        </section>
    </form>
    </main>
    <script>
    let inputImg = document.getElementById('inputImage');
    inputImg.addEventListener("change", (e, limite = 2048) => {
    let file = inputImg.files[0];
        if (file.size > limite ) {
            console.log(`Upload Completo!`);
        } else {
            console.log(`Só é permitido imagem com mais de 2Mb de tamanho e a sua imagem tem ${file.size}`);
        };
    });

    </script>
@endsection