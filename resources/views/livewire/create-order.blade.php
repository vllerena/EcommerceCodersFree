<div class="container py-8 grid lg:grid-cols-2 xl:grid-cols-5 gap-6">
    <div class="order-2 lg:order-1 lg:col-span-1 xl:col-span-3">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="mb-4">
                <x-jet-label value="Nombre de contacto" />
                <x-jet-input type="text" placeholder="Ingrese el nombre de la persona que recibirá el producto" class="w-full" />
            </div>
            <div>
                <x-jet-label value="Teléfono de contacto" />
                <x-jet-input type="text" placeholder="Ingrese un número de teléfono de contacto" class="w-full" />
            </div>
        </div>
        <div>
            <p class="mt-6 mb-3 text-lg text-gray-700 font-semibold">Envíos</p>
            <label class="bg-white rounded-lg shadow px-6 py-4 flex items-center mb-4 cursor-pointer">
                <input type="radio" value="1" name="shipping_type" class="text-gray-600">
                <span class="ml-2 text-gray-700">
                Recojo en tienda (Jr. Argentina #371 - Cajamarca)
            </span>
                <span class="font-semibold text-gray-700 ml-auto">
                Gratis
            </span>
            </label>
            <label class="bg-white rounded-lg shadow px-6 py-4 flex items-center cursor-pointer">
                <input type="radio" value="2" name="shipping_type" class="text-gray-600">
                <span class="ml-2 text-gray-700">
                Envío a domicilio
                </span>
            </label>
        </div>
        <div>
            <x-jet-button class="mt-6 mb-4">
                Continuar con la compra
            </x-jet-button>
            <hr>
            <p class="text-sm text-gray-700">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
        </div>
    </div>
    <div class="col-span-2">
        <ul>
            @forelse (Cart::content() as $item)
                <li class="flex p-2 border-b border-gray-200">
                    <img class="h-15 w-20 object-cover mr-4" src="{{$item->options->image}}" alt="">
                    <article class="flex-1">
                        <h1 class="font-bold">{{$item->name}}</h1>
                        <div class="flex">
                            <p>Cant: {{$item->qty}}</p>
                            @isset($item->options['color'])
                                <p class="mx-2">- Color: {{__($item->options['color'])}}</p>
                            @endisset
                            @isset($item->options['size'])
                                <p>- Talla: {{$item->options['size']}}</p>
                            @endisset
                        </div>
                        <p>USD {{$item->price}}</p>
                    </article>
                </li>
            @empty
                <li class="py-6 px-4">
                    <p class="text-center text-gray-700">
                        No tiene agregado ningún item en el carrito
                    </p>
                </li>
            @endforelse
        </ul>
    </div>
</div>
