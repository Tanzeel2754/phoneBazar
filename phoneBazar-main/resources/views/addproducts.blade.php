@extends("masterSeller")
@section("content")

<div class="w-full flex justify-center items-center py-[50px]">
    <form action="/addProduct" method="POST" enctype="multipart/form-data" class="flex flex-col sm:gap-0 gap-[15px] justify-around items-center sm:h-[80vh] sm:w-[70%] w-[100%] border-2px border-white border-solid sm:px-0 pl-[20px]">
        @csrf
    
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="name" class="text-white sm:text-[24px] text-[18px] font-poppins ">Name of Product:</label>
                <input type="text" id="name" name="name" autocomplete="off" placeholder="Name" required class="sm:w-[400px] w-[90%] px-[20px] py-[10px] bg-secondary text-white font-poppins sm:text-[18px] text-[16px] focus:outline-none rounded-[7px]">
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="price" class="text-white sm:text-[24px] text-[18px] font-poppins ">Price of Product:</label>
                <input type="number" id="price" name="price" placeholder="Price" required class="sm:w-[400px] w-[90%] px-[20px] py-[10px] bg-secondary text-white font-poppins sm:text-[18px] text-[16px] focus:outline-none rounded-[7px] [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="company" class="text-white sm:text-[24px] text-[18px] font-poppins ">Name of Company:</label>
                <input type="text" id="company" name="company" autocomplete="off" required placeholder="Company" class="sm:w-[400px] w-[90%] px-[20px] py-[10px] bg-secondary text-white font-poppins sm:text-[18px] text-[16px] focus:outline-none rounded-[7px]">
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="ram" class="text-white sm:text-[24px] text-[18px] font-poppins ">RAM:</label>
                <select name="ram" id="ram" value="4" required class="sm:w-[400px] w-[90%] px-[20px] py-[10px] sm:text-[18px] text-[16px] bg-secondary text-white rounded-[7px]">
            
                    <option value="4">4 GB</option>
                    <option value="6">6 GB</option>
                    <option value="8">8 GB</option>
                    <option value="12">12 GB</option>
                    <option value="16">16 GB</option>
                </select>
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="rom" class="text-white sm:text-[24px] text-[18px] font-poppins ">Storage:</label>
                <select name="rom" id="rom" required value="16" class="sm:w-[400px] w-[90%] px-[20px] py-[10px] sm:text-[18px] text-[16px] bg-secondary text-white rounded-[7px]"> 
            
                    <option value="16">16 GB</option>
                    <option value="32">32 GB</option>
                    <option value="64">64 GB</option>
                    <option value="128">128 GB</option>
                    <option value="256">256 GB</option>
                    <option value="512">512 GB</option>
                </select>
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="image"  class="text-white sm:text-[24px] text-[18px] font-poppins ">Image:</label>
                <input type="file" id="image" required name="gallery"  class="text-white sm:w-[400px] w-[90%] bg-secondary px-[20px] py-[10px] rounded-[7px]" accept=".jpg,.jpeg, .png,">
            </div>
            <div class="flex sm:flex-row flex-col justify-between sm:items-center items-start w-full">
                <label for="desc" class="text-white sm:text-[24px] text-[18px] font-poppins ">Description:</label>
                <textarea name="description" id="desc"  autocomplete="off" placeholder="Description" id="address" cols="80" rows="5" class="resize-none sm:text-[18px] text-[16px] text-white font-poppins sm:w-[400px] w-[90%] focus:outline-none px-[20px] py-[10px] rounded-[7px] bg-secondary"></textarea>

            </div>
        
        
        
            <input type="submit" value="Add Product" class="py-[15px] w-[200px]  bg-white font-rubik sm:text-[20px] text-[18px] font-semibold rounded-full hover:bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500 hover:text-white flex justify-center cursor-pointer">
       
    
    </form>
</div>

@endsection