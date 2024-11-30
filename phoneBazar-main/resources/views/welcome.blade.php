<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PhoneBazaar</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

        <script>
            tailwind.config = {
              theme: {
                extend: {
                  colors: {
                    primary_bg: '#1C1C1C',
                  },
                  fontFamily: {
                        rubik: ["Rubik", "sans-serif"],
                        poppins: ["Poppins", "sans-serif"],
                        kaushan: ['Kaushan Script', 'cursive']
                    },
                },
                
              }
            }
          </script>


        <style>
          #phonebazar{
            /* font-size: 120px; */
            font-family: 'Kaushan Script', 'cursive';
            animation: load 1s ease-out 0s 1 ;
          }
          



          
        </style>
          
    </head>
    <body class="bg-primary_bg">
        <div class="flex flex-col justify-center items-center h-[100vh]">
            <div class="flex flex-col justify-center items-center"> 
                <div class="sm:text-[120px] text-[50px] text-white font-kaushan topdown">Welcome</div>
                <div class="text-[80px] text-white font-kaushan topdown">to</div>
                <div id="phonebazar" class="bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500 bg-clip-text text-transparent sm:text-[120px] text-[64px]" >PhoneBazaar</div>
            </div>
            <div class="flex sm:flex-row flex-col sm:gap-0 gap-[15px] justify-between items-center w-[29%]">
                <a href="/login" class="btn py-[20px] w-[200px] bg-white font-rubik text-[20px] font-semibold rounded-full hover:bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500 hover:text-white flex justify-center cursor-pointer">Login</a>
                <a href="/signup" class="btn py-[20px] w-[200px] bg-white font-rubik text-[20px] font-semibold rounded-full hover:bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500 hover:text-white flex justify-center cursor-pointer">Signup</a>
                
            </div>
        </div>
    </body>
</html>
