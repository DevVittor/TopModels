@extends('layouts.main')

@section('title',$profile->nome)

@section('content')

    <!--<main class="font-inter ">
        <section>
            <div class="flex justify-center h-profile  items-center flex-row p-5">
                <div class=" h-full 1/5">
                    <img class="h-full w-full object-cover pointer-events-none" src="/img/profileImg/{{$profile->imageProfile}}" alt="">
                </div>
                <div class=" h-full  bg-white border-r-2 border-b-2 border-t-2 rounded-r-md rounded-t-md rounded-l-none p-5 w-2/5">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-2.5">
                            <h2 class="text-2xl font-semibold">{{$profile->nome}}</h2>
                            @if($profile->verificada == false)
                            <h4 class="font-light text-base ">(Não Verificada)</h4>
                            @else
                            <img class="h-7 w-7" src="/img/check.png" alt="">
                            @endif
                        </div>
                        <div class="">
                            <button class="text-white bg-red-600 p-10px-25px rounded-md shadow-card font-semibold text-base"><i class="pr-2 fa-solid fa-triangle-exclamation"></i>Denunciar</button>
                        </div>
                    </div>
                    <div class="mt-2.5">
                        <nav>
                            <ul class="flex items-center gap-2.5">
                                <li><span class="p-3px-12px border-2 border-gray-100 text-black font-normal rounded-sm"><i class="fa-solid fa-location-dot pr-2 text-red-600"></i>{{$profile->city}}</span></li>
                                <li><span class="p-3px-12px border-2 border-gray-100 text-black font-normal rounded-sm"><i class="fa-solid fa-venus pr-2"></i>Mulher</span></li>
                                <li><span class="p-3px-12px border-2 border-gray-100 text-black font-normal rounded-sm"><i class="fa-solid fa-cake-candles pr-2"></i>25 Anos</span></li>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class="mt-6">
                        <p class="text-base font-light">{{$profile->description}}</p>
                    </div>
                    <div class="flex items-center justify-between mt-8">
                        <div class="">
                            <nav>
                                <ul class="flex items-center gap-2.5 text-2xl ">
                                    <li><span class="cursor-pointer"><i class="fa-brands fa-square-facebook"></i></span></li>
                                    <li><span class="cursor-pointer"><i class="fa-brands fa-square-twitter"></i></span></li>
                                    <li><span class="cursor-pointer"><i class="fa-brands fa-square-instagram"></i></span></li>
                                    <li><span class="cursor-pointer"><i class="fa-brands fa-telegram"></i></span></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="">
                            <a target="_blank" class="bg-green-500 pt-2.5 pb-2.5 pr-5 pl-5 text-white text-xl rounded-sm shadow-card" href="#"><i class="pr-2 fa-brands fa-square-whatsapp"></i>Entrar em Contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section >
            <div class="flex justify-center items-center">
                <div class="p-3 grid grid-cols-6 gap-2.5 w-4/5">
                    <div class="bg-pink p-3 rounded-md shadow-card gap-16 flex flex-col justify-between">
                        <h2 class=" font-semibold text-white text-2xl">Ohos</h2>
                        <h4 class=" font-normal text-white text-base">Castanhos</h4>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class=" flex justify-center items-center">
                <div class="p-3 grid grid-cols-6 gap-2.5 w-4/5">
                    <div class="bg-blue-500 p-3 rounded-md shadow-card gap-16 flex flex-col justify-between">
                        <h2 class=" font-semibold text-white text-2xl">Ohos</h2>
                        <h4 class=" font-normal text-white text-base">Castanhos</h4>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="flex justify-center items-center flex-col pt-10 gap-8">
                <div class="">
                    <h2 class="text-3xl text-black font-extrabold underline"><i class="fa-solid fa-camera-retro pr-2"></i>Galeria</h2>
                </div>
                <div class="w-full max-w-5xl p-5 pb-10 mx-auto mb-10 gap-3 columns-3 space-y-3">
                    <img class="hover:border-4 border-4 border-transparent delay-150 transition-all hover:delay-200 hover:border-rosa rounded-md hover:cursor-pointer" src="https://images.pexels.com/photos/2737021/pexels-photo-2737021.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div> 
            </div>
        </section>
        <section>
            <div class="flex justify-center items-center flex-col pb-10 pt-10">
                <div class="flex items-center justify=center gap-3 mb-10">
                    <div class="">
                        <img class="h-14" src="/img/local.png" alt="">
                    </div>
                    <div class="flex justify-center items-center text-black flex-col">
                        <h2 class="text-3xl font-extrabold underline">Local de Encontro</h2>
                        <span class="mt-2 text-sm font-normal">Rua Brasilia de alburque - Tanque</span>
                    </div>
                </div>
                <iframe class="w-3/4 h-banner rounded-md shadow-card" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.3318797001425!2d-43.36743762385366!3d-22.938001479233186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd854cf082cef%3A0x69de85aa6f716032!2sR.%20Paulo%20Moreira%20da%20Silva%2C%20290%20-%20Taquara%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2022770-210!5e0!3m2!1spt-BR!2sbr!4v1686890258880!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    
    </main>-->

    <main class="">
        <section class="">
            <div class="flex items-center h-alturamax">
                <div class="flex justify-center items-center w-56 h-full">
                    <nav>
                        <ul class="flex justify-center items-center flex-col gap-5 text-white font-semibold text-lg">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Fotos</a></li>
                            <li><a href="#">Vídeos</a></li>
                            <li><a href="#">Serviços</a></li>
                            <li><a href="#">Corpo</a></li>
                            <li><a href="#">Atendimento</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="flex w-full h-full">
                    <div class="flex justify-center items-center p-5 h-full w-1/3">
                        <img class="h-full w-full object-cover rounded-md" src="/img/profileImg/{{$profile->imageProfile}}" alt="">
                    </div>
                    <div class="p-5 flex flex-col w-full gap-3">
                        <h2 class="text-white text-4xl font-bold">{{$profile->nome}}</h2>
                        <h4 class="text-white text-base font-light"><i class="bi bi-geo-alt-fill pr-2 text-red-600"></i>{{$profile->Estado}}</h4>
                        <p class="text-white text-base font-normal mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, architecto sapiente aperiam consequatur cumque maiores atque? Ipsam adipisci velit culpa, ex totam libero, maxime enim, ea dolores omnis impedit! Repellendus optio culpa non, commodi odit nulla vero dolor, quaerat, voluptas quidem architecto dignissimos voluptatibus nemo? Ratione magni atque impedit, quia repellendus explicabo voluptates recusandae obcaecati dolorum molestiae ducimus quam dicta! Quidem magnam ex enim laborum deserunt aperiam quis cum ipsa harum qui vitae mollitia expedita, nihil illo? Quasi eveniet laudantium pariatur sequi debitis rem aspernatur neque nulla error sit explicabo illo ipsam similique enim quaerat laborum, alias, id dolorem iusto repellat eligendi corporis. Fuga quas dolor sapiente enim nobis mollitia inventore iure, temporibus harum dolore debitis delectus hic. Ad et similique unde, facere, quos quidem eos placeat praesentium, minima distinctio nisi voluptatum deserunt commodi! Explicabo unde perspiciatis blanditiis eveniet obcaecati atque doloremque voluptatem inventore quas maiores reprehenderit consectetur at, provident aspernatur soluta. Perferendis inventore esse saepe est optio quod quisquam, magni autem earum doloribus ad possimus aliquam odit amet? Quo culpa nam ut accusamus, unde neque ad modi earum perspiciatis blanditiis, illum similique? Laborum quis voluptatem est error dicta velit sed sint exercitationem unde quia, atque dignissimos itaque necessitatibus distinctio quod culpa, perferendis in hic soluta, assumenda corrupti? Minus beatae eligendi maxime accusamus tenetur excepturi placeat optio expedita, quae voluptates nihil suscipit voluptas illo quam, veritatis autem recusandae commodi sint. Qui omnis alias distinctio molestiae consectetur porro ullam provident quos impedit. Ad aliquam ipsam exercitationem quia! At assumenda cumque perspiciatis atque est aperiam animi soluta quia ullam corporis doloremque rem esse saepe amet asperiores quos accusamus minus, molestias consequatur ipsam, mollitia sequi non dignissimos debitis! Dolorum delectus neque consequatur tempora inventore harum excepturi laboriosam nostrum sit, expedita ipsam, architecto sequi, doloribus repudiandae et ut? Fuga accusamus obcaecati optio nisi at?</p>
                        <div class="mt-10">
                            <nav>
                                <ul class="flex items-center gap-3 text-2xl text-white">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection