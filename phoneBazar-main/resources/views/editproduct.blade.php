@extends("masterSeller")
@section("content")

<div class="w-full flex justify-center items-center py-[50px]">
    <form action="/updateProduct" method="POST" enctype="multipart/form-data" class="flex flex-col sm:gap-0 gap-[15px] justify-around items-center sm:h-[80vh] sm:w-[70%] w-[100%] border-2px border-white border-solid sm:px-0 pl-[20px]">
        @csrf
    
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="name" class="text-white sm:text-[24px] text-[18px] font-poppins ">Name of Product:</label>
                <input type="text" id="name" name="name" autocomplete="off" placeholder="Name" value="{{$product->name}}" required class="sm:w-[400px] w-[90%] px-[20px] py-[10px] bg-secondary text-white font-poppins sm:text-[18px] text-[16px] focus:outline-none rounded-[7px]">
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="price" class="text-white sm:text-[24px] text-[18px] font-poppins ">Price of Product:</label>
                <input type="number" id="price" name="price" placeholder="Price" value="{{$product->price}}"  required class="sm:w-[400px] w-[90%] px-[20px] py-[10px] bg-secondary text-white font-poppins sm:text-[18px] text-[16px] focus:outline-none rounded-[7px] [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="company" class="text-white sm:text-[24px] text-[18px] font-poppins ">Name of Company:</label>
                <input type="text" id="company" name="company" autocomplete="off" value="{{$product->company}}"  required placeholder="Company" class="sm:w-[400px] w-[90%] px-[20px] py-[10px] bg-secondary text-white font-poppins sm:text-[18px] text-[16px] focus:outline-none rounded-[7px]">
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="ram" class="text-white sm:text-[24px] text-[18px] font-poppins ">RAM:</label>
                <select name="ram" id="ram" value="4" value="{{$product->ram}}" disabled required class="sm:w-[400px] w-[90%] px-[20px] py-[10px] sm:text-[18px] text-[16px] bg-secondary text-white rounded-[7px]">
                    
                    <option value="{{$product->ram}}" selected>{{$product->ram}} GB</option>
                    
                </select>
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="rom" class= "text-white sm:text-[24px] text-[18px] font-poppins ">Storage:</label>
                <select name="rom" id="rom" required value="{{$product->rom}}" disabled class="sm:w-[400px] w-[90%] px-[20px] py-[10px] sm:text-[18px] text-[16px] bg-secondary text-white rounded-[7px]"> 
            
                    <option value="{{$product->rom}}" selected>{{$product->rom}} GB</option>
                    
                </select>
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="image"  class="text-white sm:text-[24px] text-[18px] font-poppins ">Image:</label>
                <input type="file" id="image" required name="gallery" disabled class="text-white sm:w-[400px] w-[90%] bg-secondary px-[20px] py-[10px] rounded-[7px]" accept=".jpg,.jpeg, .png,">
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="desc" class="text-white sm:text-[24px] text-[18px] font-poppins ">Description:</label>
                <textarea name="description" id="desc"  autocomplete="off" placeholder="Description" id="address" cols="80" rows="5" class="resize-none sm:text-[18px] text-[16px] text-white font-poppins sm:w-[400px] w-[90%] focus:outline-none px-[20px] py-[10px] rounded-[7px] bg-secondary"> {{$product->description}}</textarea>

            </div>
        
        
            <input type="hidden" name="id" value="{{$product->id}}">
            <div class="flex sm:flex-row flex-col sm:gap-[40px] gap-[10px]">
                <input type="submit" value="Update Details" class="py-[15px] w-[200px]  bg-white font-rubik sm:text-[20px] text-[18px] font-semibold rounded-full hover:bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500 hover:text-white flex justify-center cursor-pointer" >
            <a href="/adminhome" class="bg-gray-500 text-white py-[15px] w-[200px] font-rubik sm:text-[20px] text-[18px] font-semibold  rounded-full flex justify-center cursor-pointer">Cancel</a>
            </div>
    
    </form>
</div>

@endsection