<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    {{-- <link href="{{ asset('css/logout.css') }}" rel="stylesheet"> --}}

    <script src="https://cdn.tailwindcss.com"></script>


    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary_bg: '#1C1C1C',
                        secondary: "#6B6B6B",
                        secondary_text: "#E3E3E3"
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
        .Btn {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 55px;
            height: 55px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition-duration: .3s;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
            background-color: rgb(255, 65, 65);
        }

        /* plus sign */
        .sign {
            width: 100%;
            transition-duration: .3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sign svg {
            width: 23px;
        }

        .sign svg path {
            fill: white;
        }

        /* text */
        .text {
            position: absolute;
            right: 0%;
            width: 0%;
            opacity: 0;
            color: white;
            font-size: 1.4em;
            font-weight: 600;
            transition-duration: .3s;
        }

        /* hover effect on button width */
        .Btn:hover {
            width: 175px;
            border-radius: 60px;
            transition-duration: .3s;
        }

        .Btn:hover .sign {
            width: 40%;
            transition-duration: .3s;
            padding-left: 20px;
        }

        /* hover effect button's text */
        .Btn:hover .text {
            opacity: 1;
            width: 70%;
            transition-duration: .3s;
            padding-right: 10px;
            padding-left: 15px
        }

        /* button click effect*/
        .Btn:active {
            transform: translate(2px, 2px);
        }


    </style>
</head>

<body class="bg-primary_bg py-[40px]">
    <nav class="flex w-full justify-between gap-0 sm:gap-[160px] items-center md:px-[47px] md:pb-[40px] px-[10px] pb-[24px]">
        <a href="/adminhome"
            class="md:text-[40px] text-[24px] font-kaushan bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500 bg-clip-text text-transparent  ">
            PhoneBazaar
    </a>
        <div class="md:text-[48px] sm:text-[32px] text-[24px] text-white text-center font-poppins font-bold tracking-[2px] resize-none md:block hidden">{{$page}}</div>
        {{-- <div class="search w-full relative" >
            <form action="">
                <input type="text" name="" id="" placeholder="Search your mobile phone" class="w-full text-[24px] text-secondary_text font-poppins px-[25px] py-[12px] rounded-full bg-secondary">
                <input type="submit" value="Search" class="px-[20px] bg-white absolute right-0 py-[12px] px-[50px] rounded-full text-[24px] font-semibold cursor-pointer">
            </form>
        </div> --}}
        <div class="flex flex-row items-center justify-between gap-[20px]">
            {{-- <a href="/cart" class="text-white text-[28px] font-regular font-poppins hover:underline w-[250px]">View Orders</a> --}}
            <a href="/users" class="text-white md:text-[28px] text-[18px] font-regular font-poppins hover:underline md:w-[250px] sm:text-left text-center">View Customers</a>
            {{-- <button class="text-white text-[28px] font-regular font-poppins hover:underline">Cart</button> --}}
            {{-- <button class="text-white text-[28px] font-regular font-poppins hover:underline">
                Signout
            </button> --}}
            <div class="">
                <a href="/logout" class="Btn md:h   -[55px] md:w-[55px] w-[40px] h-[40px] w-[24px] h-[24px]">

                    <div class="sign"><svg viewBox="0 0 512 512">
                            <path
                                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                            </path>
                        </svg></div>

                    <div class="text">Logout</div>
                </a>
            </div>



        </div>
    </nav>
    <div class="bg-secondary h-[4px] w-full" ></div>
    <div class="md:text-[48px] sm:text-[32px] text-[24px] text-white text-center font-poppins font-bold tracking-[2px] resize-none md:hidden block">{{$page}}</div>

    @yield('content')
</body>

</html>
