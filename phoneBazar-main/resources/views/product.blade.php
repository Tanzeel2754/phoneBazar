@extends("master")
@section("content")
    @isset($product)
    <section class="grid grid-cols-6 w-full sm:px-[33px] px-[10px] py-[40px]">
        <div class="md:col-span-4 col-span-6 w-full md:border-r-[4px] border-secondary flex flex-col gap-[40px]">
            <div class="md:h-[70vh] max-h-[50vh] w-[95%]  bg-inherit rounded-[20px] overflow-hidden ">
                <img src="{{ route('image.show', ['filename' => $product->gallery]) }}" alt="" class="object-contain  overflow-hidden w-[100%] h-[100%]">
            </div>
            <div class="md:flex hidden flex-col gap-[20px]">
                <h1 class="text-[48px] text-white font-poppins font-semibold">Key Features</h1>
            <ul class="flex flex-row justify-between items-center flex-wrap w-[95%]">
                
                <li class="text-[24px] font-poppins text-white"><span class="font-bold">Company:</span> {{$product['company']}}</li>
                <li class="text-[24px] font-poppins text-white"><span class="font-bold">Storage:</span> {{$product['rom']}} GB </li>
                <li class="text-[24px] font-poppins text-white"><span class="font-bold">RAM:</span> {{$product['ram']}} GB</li>
                
            </ul>
            </div>
            
        </div>
        <aside class="md:col-span-2 col-span-6 sm:px-[40px] px-[10px] flex flex-col  gap-[40px] md:mt-0 mt-[20px]">

            <h2 class="md:text-[64px] sm:text-[48px] text-[24px] text-white font-poppins font-semibold">{{$product['name']}}</h2>
            <p class="md:text-[48px] sm:text-[36px] text-[20px] text-white font-poppins font-semibold">Rs. {{$product['price']}}</p>

            <p class="md:text-[24px] sm:text-[18px] text-[16px] text-secondary_text font-poppins ">{{$product['description']}}</p>
            <div class="md:hidden flex flex-col gap-[20px]">
                <h1 class="md:text-[48px] sm:text-[36px] text-[20px] text-white font-poppins font-semibold">Key Features</h1>
            <ul class="flex  flex-col justify-center items-start flex-wrap gap-[5px] ">
                
                <li class="md:text-[24px] sm:text-[18px] text-[16px] font-poppins text-white"><span class="font-bold">Company:</span> {{$product['company']}}</li>
                <li class="md:text-[24px] sm:text-[18px] text-[16px] font-poppins text-white"><span class="font-bold">Storage:</span> {{$product['rom']}} GB </li>
                <li class="md:text-[24px] sm:text-[18px] text-[16px] font-poppins text-white"><span class="font-bold">RAM:</span> {{$product['ram']}} GB</li>
                
            </ul>
            </div>
            <div class="flex sm:flex-row flex-col gap-[20px] sm:justify-between justify-center items-center">
                <form action="/add_to_cart" method="POST" class="flex-1">

                    @csrf
                    <input type="hidden" name="product_id" value={{$product['id']}}>
                    <button
                    class="bg-red-500 px-[40px] py-[20px] text-white font-poppins font-semibold md:text-[32px] sm:text-[24px] text-[18px] rounded-[14px]">
                    Add to Cart
                    </button>
                </form>
                <a href="/buyproduct/{{$product['id']}}"
                    class="bg-orange-500 px-[40px] py-[20px] text-white font-poppins text-center font-semibold md:text-[32px] sm:text-[24px] text-[18px]   rounded-[14px] flex-1">Buy
                    Now</a>

            </div>
        </aside>
    </section>
    @endisset
@endsection