
@extends("master")
@section("content")

<div class="flex items-center justify-between px-[30px]">
    <h1 class="md:text-[64px] sm:text-[48px] text-[32px] font-bold text-white font-poppins text-center sm:py-[40px] py-[20px]">Cart
    
    </h1>
    
    <form action="/buyItem" method="POST">
        @csrf
                
        <button 
        class="bg-orange-500 sm:px-[40px] px-[20px] sm:py-[20px] py-[10px] text-white font-poppins font-semibold sm:text-[24px] text-[18px] rounded-[14px] ">
                Buy Now
        </button>
    </form>
</div>



@foreach($products as $item)

<div class=" flex justify-center items-center w-[100%]">
    <a href="product/{{$item->id}}" class="h-[300px] mx-[20px] my-[20px] rounded-[14px] bg-secondary text-white  flex md:flex-row flex-col items-center justify-between px-[20px] py-[20px] w-[80%]">
        {{-- <div class="flex items-center gap-0"> --}}
            <div class="h-[250px] w-[250px] bg-primary_bg rounded-[10px] text-center overflow-hidden ">
                <img src="{{ route('image.show', ['filename' => $item->gallery]) }}" alt="" class=" overflow-hidden w-[100%] h-[100%]">
            </div>
            <div class="flex flex-col  justify-start w-full items-center  px-[10px]">
                <h2 class="px-[10px] sm:text-[24px] text-[18px] text-left font-poppins font-semibold">{{$item->name}}</h2>
                <p class="sm:text-[18px] text-[16px] font-poppins">Rs. {{$item->price}}</p>
                {{-- <p class="text-[18px] font-poppins">4.5/5.0</p> --}}
            </div>
        {{-- </div> --}}
    
        <div class="flex flex-col gap-[20px] items-center justify-center flex-1">
            
            
            <form action="/removeItem" method="POST">
                @csrf
                        <input type="hidden" name="item_id" value={{$item->cartid}}>
                <button 
                        class="bg-red-500 sm:px-[40px] px-[20px] sm:py-[20px] py-[10px] text-white font-poppins font-semibold sm:text-[24px] text-[18px]] rounded-[14px] ">
                        Delete
                </button>
            </form>
        </div>
    </a>
</div>

@endforeach


@endsection