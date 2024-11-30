@extends('master')
@section('content')
    <div class="flex flex-col items-center justify-between px-[30px]">
        <h1 class="md:text-[64px] sm:text-[48px] text-[32px] font-bold text-white font-poppins text-center py-[40px]">Buy Now!!!</h1>


        <table class="table text-white sm:text-[24px] flex flex-col gap-[10px] sm:w-[400px] w-[90%]">
         
            <tbody class="flex flex-col gap-[20px] ">
              <tr class="flex justify-between border-b-2">
                <td>Amount</td>
              @isset($price)
                <td>Rs. {{$price['price']}}</td>
              @endisset
              @isset($total)
                <td>Rs. {{$total}}</td>
              @endisset

              </tr>
              <tr class="flex justify-between border-b-2">
                <td>Tax</td>
                <td>Rs. 0</td>
              </tr>
              <tr class="flex justify-between border-b-2">
                <td>Delivery </td>
                <td>Rs. 500</td>
              </tr>
              <tr class="flex justify-between ">
                <td>Total Amount</td>
                @isset($price)
                <td>Rs. {{$price['price']+500}}</td>
              @endisset
              @isset($total)
                <td>Rs. {{$total+500}}</td>
              @endisset

              {{-- <td>Rs. {{$total+500}}</td> --}}
              </tr>
            </tbody>
          </table>

        <form action="/orderplace" method="POST" class="flex flex-col items-start justify-around sm:w-[80%] gap-[40px] py-[20px]">
            @csrf
            {{-- <textarea type="text" name="address" placeholder="Enter your complete Address" id="address" class="text-white text-[24px] ">        --}}
            <div class="flex flex-col items-start ">
                <label for="address" class="sm:text-[36px] text-[24px] text-white font-poppins">Address</label>
                <textarea name="address" placeholder="Enter your complete address" id="address" cols="30" rows="3" class="resize-none text-[20px] focus:outline-none p-[5px] ld:w-[1000px] md:w-[600px] sm:w-[400px] w-[200px]"></textarea>
            </div>
            <div class="form-group flex flex-col items-start ">
                <label for="payment" class="sm:text-[36px] text-[24px] text-white font-poppins">Payment Method</label>
                <div class="flex items-center justify-center gap-[8px]">
                    <input type="radio" name="payment" id="cod" value="cash"><label class="text-white sm:text-[24px] text-[18px] font-poppins "
                        for="cod"> Cash On Delivery</label>
                </div>
                <div class="flex items-center justify-center gap-[8px]">
                    <input type="radio" name="payment" id="cre" value="cash"><label class="text-white sm:text-[24px] text-[18px] font-poppins "
                        for="cre"> Credit / Debit Card</label>
                </div> 
            </div>

            <button
                class="bg-orange-500 px-[40px] py-[20px] text-white font-poppins font-semibold text-[24xpx] rounded-[14px] ">
                Buy Now
            </button>
        </form>


    </div>
@endsection
