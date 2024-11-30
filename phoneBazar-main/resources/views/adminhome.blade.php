@extends('masterSeller')
@section('content')
    <div class="lg:grid grid-cols-6 md:grid-cols-5 sm:grid-cols-3 grid-cols-1">
        <a href="/addProduct"
            class="sm:h-[400px] h-[100px] mx-[20px] my-[20px] rounded-[14px] col-span-1 border-[3px] border- border-dashed text-white  flex flex-col items-start sm:px-[20px] sm:py-[20px] p-[10px] justify-start gap-[40px] ">
            <div
                class="bg-secondary sm:min-h-[250px] min-h-[50px] flex-1 bg-primary_bg w-full rounded-[10px] flex sm:flex-col flex-row justify-center items-center overflow-hidden border-[1px]  border-slate-300">
                <div class="sm:text-[120px] text-[32px] flex justify-center items-center">+</div>
                <h2
                    class="px-[10px] sm:text-[24px] text-[18px] text-left font-poppins font-semibold sm:w-full flex justify-center items-center">
                    Add item</h2>
            </div>
            {{-- <div class="flex justify-between items-center w-full px-[10px]">
            <p class="text-[18px] font-poppins">Rs. {{$item['price']}}</p>
        </div> --}}
        </a>
        @foreach ($products as $item)
            <div href="product/{{ $item['id'] }}"
                class="h-[400px]  mx-[20px] my-[20px] rounded-[14px] col-span-1 bg-secondary text-white  flex flex-col items-start px-[20px] py-[20px] justify-between ">
                <div class="min-h-[250px] bg-primary_bg w-full rounded-[10px] text-center overflow-hidden ">
                    <img src="{{ route('image.show', ['filename' => $item->gallery]) }}" alt=""
                        class=" overflow-hidden w-[100%] h-[100%]">
                </div>
                <div class="flex flex-col justify-end w-full gap-[10px] ">
                    <h2 class="px-[10px] text-[22px] text-left font-poppins font-semibold">{{ $item['name'] }}</h2>
                    <div class="flex flex-row justify-between items-center w-full px-[10px] parent">
                        <p class="text-[18px] font-poppins ">Rs. {{ $item['price'] }}</p>
                        {{-- <p class="text-[18px] font-poppins">4.5/5.0</p> --}}

                        <a href="/editproduct/{{ $item->id }}"
                            class="px-[20px] text-[16px] py-[5px] bg-green-500 rounded-[6px] cursor-pointer">Edit</a>
                        <a href="/deleteproduct/{{ $item->id }}" onclick="return confirm('Are you sure?')"
                            class="px-[10px] text-[16px] py-[5px] bg-red-500 rounded-[6px] cursor-pointer">Delete</a>
                    </div>
                    {{-- <button>Edit</button> --}}
                </div>

            </div>
        @endforeach
    </div>
@endsection
