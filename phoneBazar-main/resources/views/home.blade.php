@extends("master")
@section("content")


<div class="grid md:grid-cols-6 sm:grid-cols-3 flex flex-col  h-[80vh]">
    <aside class="md:col-span-1 col-span-0 md:flex hidden  border-r-[4px] border-secondary px-[20px]  flex-col gap-[15px] ">
        <div class="text-white flex items-center justify-center text-[32px] font-poppins">Filters</div>
        {{-- <h2>{{{$filters}}}</h2> --}}
        @isset($filters)
        <div class="grid grid-cols-2 gap-[8px]">
            
                @foreach ($filters as $item)
                <div class="px-[5px] py-[5px]  rounded-full bg-white flex items-center justify-center">{{$item}}</div>
                @endforeach
                
            
            <a href="/home" class="px-[5px] py-[5px] rounded-[10px] text-white tracking-[0.25px] bg-gray-500 flex items-center justify-center">X Clear</a>


        </div>
        @endisset
        <form action="/filters" method="get" class="flex-1">
        <ul  class=" bg-secondary text-white p-[5px] flex flex-col gap-[40px] rounded-[14px] h-[100%] ">
            <li class="flex flex-col items-start gap-[10px]">
                <button class="text-[24px] px-[10px] font-poppins" >Brands</button>
                <ul class="text-[18px] flex flex-col font-poppins items-start px-[50px]" id="list-brands">
                    
                    @foreach ($brands as $item)
                        <input name="brand" type="submit" class="cursor-pointer hover:text-blue-700" value="{{$item->company}}">
                    @endforeach
                    
                
                    </ul>
            </li>
            
            <li class="flex flex-col items-start gap-[10px]">
                <span class="text-[24px] px-[10px] font-poppins" >Price Range</span>
                <div class="flex gap-[20px] justify-center items-start px-[20px]  w-[90%] ">
                    <input type="number" placeholder="Min" name="min" class="max-w-[50%] text-[20px] text-white bg-primary_bg h-[50px] text-center rounded-[6px] px-[5px] [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none placeholder-gray-300">
                    <input type="number" placeholder="Max" name="max" class="max-w-[50%] text-[20px] text-white bg-primary_bg h-[50px] text-center  rounded-[6px] px-[5px] [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none placeholder-gray-300">
                    <input type="submit" value="price" class="hidden">
                </div>
                {{-- <span class="flex justify-end px-[20px] font-poppins text-[16px]">Rs. 50,000</span> --}}
            </li>
            <li class="">
                <span class="text-[24px] px-[10px] font-poppins" >Search by RAM</span>
                <ul class="text-[18px] flex flex-col font-poppins items-start px-[50px]" id="list-brands">
                    <li><button name="ram" value="4" class="hover:text-blue-700">4 GB</button></li>
                    <li><button name="ram" value="6"  class="hover:text-blue-700">6 GB</button></li>
                    <li><button name="ram" value="8" class="hover:text-blue-700">8 GB</button></li>
                    <li><button name="ram" value="12" class="hover:text-blue-700">12 GB</button></li>
                    <li><button name="ram" value="16" class="hover:text-blue-700">16 GB</button></li>
                    
                    
                </ul>
            </li>
            <li class="flex flex-col items-start gap-[10px]">
                <span class="text-[24px] px-[10px] font-poppins" >Search by Storage</span>
                <ul class="text-[18px] flex flex-col font-poppins items-start px-[50px]" id="list-brands">
                    <li><button name="rom" value="16" class="hover:text-blue-700">16 GB</button></li>
                    <li><button name="rom" value="32" class="hover:text-blue-700">32 GB</button></li>
                    <li><button name="rom" value="64" class="hover:text-blue-700">64 GB</button></li>
                    <li><button name="rom" value="128" class="hover:text-blue-700">128 GB</button></li>
                    <li><button name="rom" value="256" class="hover:text-blue-700">256 GB</button></li>
                    <li><button name="rom" value="512" class="hover:text-blue-700">512 GB</button></li>
                    
                </ul>
            </li>
        </ul>
        @isset($rawData)
        <input type="hidden" name="data" value="{{$rawData}}">
            
        @endisset
    </form>

    </aside>
    @isset($noProducts)
            <h2 class=" md:col-span-5 col-span-3 w-full text-center py-[50px] md:text-[48px] sm:text-[32px] text-[24px]  text-white font-bold font-poppins">No Products To Display...</h2>
    @endisset
    
    <section class="md:col-span-5 sm:col-span-3 grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3  ">
        {{-- @isset($searchName)
        <h3 class=" col-span-5 w-full py-[10px] text-[24px] text-white h-[20px] font-poppins">Showing Results for  search "<span class="font-bold">{{$searchName}}</span>"</h3>
        @endisset --}}
        @foreach ($products as $item)
            <a href="product/{{$item['id']}}" class="h-[400px] mx-[20px] my-[20px] rounded-[14px] col-span-1 bg-secondary text-white  flex flex-col items-start px-[20px] py-[20px] justify-between ">
                <div class="min-h-[250px] bg-primary_bg w-full rounded-[10px] text-center overflow-hidden ">
                    <img src="{{ route('image.show', ['filename' => $item->gallery]) }}" alt="" class=" overflow-hidden w-[100%] h-[100%]">
                </div>
                <h2 class="px-[10px] text-[22px] text-left font-poppins font-semibold">{{$item['name']}}</h2>
                <div class="flex justify-between items-center w-full px-[10px]">
                    <p class="text-[18px] font-poppins">Rs. {{$item['price']}}</p>
                    {{-- <p class="text-[18px] font-poppins">4.5/5.0</p> --}}
                </div>
            </a>
        @endforeach
        
        
        
    </section>

    
</div>

@endsection