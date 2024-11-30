@extends("masterSeller")
@section("content")
<div class="flex flex-col justify-center items-center w-full py-[40px]">
    
<table class="table text-white sm:text-[24px] text-[18px] flex flex-col gap-[10px] w-[100%]">
         
    <thead class="flex flex-col gap-[20px] text-left sm:text-[32px]  text-[24px]">
        <tr class="grid sm:grid-cols-4 grid-cols-3 sm:gap-[20px] text-center">
            <th class="border-b-2">Name</th>
            <th class="border-b-2">Email</th>
            <th class="border-b-2 sm:block hidden">Phone</th>
            <th class="border-b-2"></th>
            
        </tr>
    </thead>
    <tbody class="flex flex-col gap-[20px] py-[20px]">
        @foreach ($users as $user)
            
        
      <tr class="grid sm:grid-cols-4 grid-cols-3 gap-[10px] hover:bg-secondary rounded-[10px]">
        <td class="sm:px-[20px] py-[10px]  overflow-hidden text-ellipsis">{{$user->name}}</td>
        <td class="sm:px-[30px] py-[10px] text-center overflow-hidden text-ellipsis">{{$user->email}}</td>
        <td class="sm:px-[50px] py-[10px] text-center sm:block hidden">{{$user->phone}}</td>
        <td class="sm:px-[70px] py-[10px] text-right "><a href="/deleteUser/{{$user->id}}" onclick="return confirm('Are you sure?')" class="px-[10px] text-[16px] py-[7px] bg-red-500 rounded-[6px] cursor-pointer">Delete</a></td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
  <div class="flex gap-[40px]">
    <a href="/adminhome" class="py-[15px] w-[200px] my-[30px] bg-white font-rubik text-[20px] font-semibold rounded-full hover:bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500 hover:text-white flex justify-center cursor-pointer" >Home</a>
</div>
@endsection