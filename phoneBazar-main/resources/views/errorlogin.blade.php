<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Errorr</title>

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




</head>

<body class="bg-primary_bg h-[100vh]">
    <div class="flex flex-col justify-center items-center h-[100vh]">
        <div class="py-[20px] text-white font-rubik text-[64px] font-semibold ">Your Username or Password is Incorrect
        </div>
        <a href="/login"
            class="py-[20px] w-[200px] bg-white font-rubik text-[20px] font-semibold rounded-full hover:bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500 hover:text-white flex justify-center cursor-pointer">View
            Login</a>
    </div>
</body>

</html>
