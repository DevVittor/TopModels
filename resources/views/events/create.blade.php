@extends('layouts.main')

@section('title','Criar Perfil')

@section('content')

    <main class="font-inter bg-cinza2"> 
        <section>
            <div class="flex flex-col  justify-center items-center gap-8 h-auto w-full p-8">

                <div class="h-auto w-3/5 p-8 bg-white rounded-lg flex flex-col gap-8 hover:shadow-card hover:transition-all hover:delay-150">
                        <div class="">
                            <h1 class="font-semibold text-xl underline">Crie seu Perfil</h1>
                        </div>
                        <div class="flex items-start justify-between gap-5">
                            <div class="flex justify-center items-center flex-col gap-3">
                                <div class="h-64 w-48 rounded-lg">
                                    <img class="object-cover h-full w-full rounded-lg" class="" src="https://images.pexels.com/photos/2065195/pexels-photo-2065195.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                                </div> 
                                <span>Foto em jpg até 2mb</span>
                            </div>
                            <div class="flex flex-col gap-3">
                                <h4 class="">Sobre Mim</h4>
                                <textarea class="resize-none border-2 p-5 border-gray-200 max-h-52 outline-none text-black font-medium text-base rounded-lg" name="" id="" required cols="70" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="flex justify-between items-center pt-10 w-full">
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Nome Completo</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id=""> 
                            </div> 
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Preço/H</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id=""> 
                            </div>
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Moedas Aceitas</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id=""> 
                            </div>
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Formas de Pagamento</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id=""> 
                            </div>
                            
                        </div>
                        <div class="flex justify-between items-center pt-5 w-full">
                            
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Categoria</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id=""> 
                            </div>
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">E-mail</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id=""> 
                            </div>
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Celular/Whatsapp</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id=""> 
                            </div>
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Nacionalidade</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id=""> 
                            </div>
                        </div>
                </div>

                <div class=" h-auto w-3/5 p-8 bg-white rounded-lg flex flex-col gap-8">
                    <div class="">
                        <h2 class="font-semibold text-xl underline">Corpo</h2>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Etinia</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Estilo do Corpo</label>
                            <input class="w-auto rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Altura</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Peso</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Deficiência</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Gênero</label>
                            <input class="w-auto rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Sexualidade</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Data de nascimento</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Cicatriz</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Cor dos olhos</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Cor do cabelo</label>
                            <input class="w-auto rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Estilo do cabelo</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                </div>

                <div class=" h-auto w-3/5 p-8 bg-white rounded-lg flex flex-col gap-8">
                    <div class="">
                        <h2 class="font-semibold text-xl underline">Atributos</h2>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Tatuagens</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Piercing</label>
                            <input class="w-auto rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Ôculos</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Silicone</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Tamanho dos peitos</label><!--Vai ter todas as opções apenas no peito apenas na bunda peito e bunda -->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Estilo do peito</label><!--Gigante,Grande,Médio,Pequeno,Nenhum-->
                            <input class="w-auto rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Tamanho da bunda</label><!--Empinados,Moles,Naturais,Nenhum-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Estilo da bunda</label><!--Gigante,Grande,Média,Normal,Pequena-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Fumante</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Viagem</label><!--Disponível,Ausente,Depende-->
                            <input class="w-auto rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Tirar Foto</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Gravar Vídeo</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                </div>



                <div class="bg-white h-96 w-3/5 p-8 rounded-lg">
                    <div class="flex justify-center hover:cursor-pointer items-center h-full w-full border-8 border-dashed border-gray-200 ">
                        <h2 class="flex flex-col justify-center items-center gap-3 text-3xl font-extrabold text-gray-500"><i class="bi bi-cloud-arrow-up-fill text-blue-400"></i>Upload Vídeo</h2>
                    </div>
                </div>



                <div class="bg-white h-auto w-3/5 p-8 rounded-lg flex flex-col gap-8">
                    <div class="">
                        <h2 class="font-semibold text-xl underline">Horários de Atendimento</h2>
                    </div>
                    <div class="flex items-center justify-between h-full w-full bg-white">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Domingo</label><!--Vai ter todas as opções apenas no peito apenas na bunda peito e bunda -->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Segunda-Feira</label><!--Gigante,Grande,Médio,Pequeno,Nenhum-->
                            <input class="w-auto rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Terça-Feira</label><!--Empinados,Moles,Naturais,Nenhum-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Quarta-Feira</label><!--Gigante,Grande,Média,Normal,Pequena-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                    <div class="flex items-center justify-between h-full w-full bg-white">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Quinta-Feira</label><!--Vai ter todas as opções apenas no peito apenas na bunda peito e bunda -->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Sexta-Feira</label><!--Gigante,Grande,Médio,Pequeno,Nenhum-->
                            <input class="w-auto rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Sábado</label><!--Empinados,Moles,Naturais,Nenhum-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Feriados</label><!--Gigante,Grande,Média,Normal,Pequena-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                </div>


                <!--Serviços-->
                <div class="bg-red-500 h-96 w-3/5 p-8 rounded-lg"></div>

                <!--Local de Encontro-->
                <div class="bg-red-500 h-96 w-3/5 p-8 rounded-lg"></div>

                <!--Rede Social-->
                <div class="bg-red-500 h-96 w-3/5 p-8 rounded-lg"></div>

            </div>
        </section>
    </main>
@endsection