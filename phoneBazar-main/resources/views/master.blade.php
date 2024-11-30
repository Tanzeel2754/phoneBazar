<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhoneBazaar</title>

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
                screens: {
                    xs: "480px",
                    ss: "620px",
                    sm: "768px",
                    md: "1060px",
                    lg: "1200px",
                    xl: "1700px",

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


    {{-- <script type="text/javascript" src="{{asset('js/home.js')}}"></script> --}}
</head>

<body class="bg-primary_bg py-[40px]">

    <?php
    use App\Http\Controllers\productController;
    $total = 0;
    if (Session::has('user')) {
        $total = productController::cartItems();
    }
    ?>
    <nav
        class="flex w-full justify-around md:gap-[150px] gap-[40px] items-center md:px-[33px] md:pb-[40px] px-[10px] pb-[24px]">
        <a href="/home"
            class="md:text-[40px] text-[24px] font-kaushan bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500 bg-clip-text text-transparent ">
            PhoneBazaar
        </a>
        <button class="sm:hidden block text-[white]" id="button">
            <svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M29 27.586L21.448 20.034C23.2628 17.8553 24.1678 15.0608 23.9747 12.2319C23.7816 9.40297 22.5052 6.75739 20.4112 4.84552C18.3172 2.93364 15.5667 1.90267 12.732 1.96709C9.89717 2.0315 7.19635 3.18633 5.19133 5.19134C3.18632 7.19635 2.03149 9.89717 1.96708 12.732C1.90267 15.5667 2.93363 18.3172 4.84551 20.4112C6.75738 22.5053 9.40296 23.7816 12.2319 23.9747C15.0608 24.1678 17.8553 23.2628 20.034 21.448L27.586 29L29 27.586ZM3.99999 13C3.99999 11.22 4.52783 9.47991 5.51677 7.99987C6.5057 6.51983 7.91131 5.36627 9.55584 4.68508C11.2004 4.0039 13.01 3.82567 14.7558 4.17293C16.5016 4.5202 18.1053 5.37737 19.364 6.63604C20.6226 7.89471 21.4798 9.49836 21.8271 11.2442C22.1743 12.99 21.9961 14.7996 21.3149 16.4442C20.6337 18.0887 19.4802 19.4943 18.0001 20.4832C16.5201 21.4722 14.78 22 13 22C10.6139 21.9974 8.32621 21.0483 6.63896 19.361C4.9517 17.6738 4.00264 15.3861 3.99999 13Z"
                    fill="#F8F8F8" />
            </svg>

        </button>
        <div class="search w-full relative sm:block hidden">
            <form action="{{ url('/search') }}" method="get">
                @csrf
                <input type="text" name="search" id="" autocomplete="off"
                    placeholder="Search your mobile phone"
                    class="w-full md:text-[24px] text-[16px] text-secondary_text font-poppins lg:px-[25px] px-[15px] py-[12px] rounded-full bg-secondary">
                <input type="submit" value="Search"
                    class=" bg-white absolute right-0 py-[12px] lg:px-[50px] px-[20px] rounded-full md:text-[24px] text-[16px] font-semibold cursor-pointer">

            </form>
        </div>
        <div class="flex flex-row items-center justify-end sm:gap-[20px] gap-0">
            <a href="/cart"
                class="text-white md:text-[24px] sm:text-[20px] text-[18px] font-regular font-poppins hover:underline w-[100px]">Cart
                ({{ $total }})</a>
            {{-- <button class="text-white text-[28px] font-regular font-poppins hover:underline">
                Signout
            </button> --}}
            <div class="">
                <a href="/logout" class="Btn md:w-[55px] md:h-[55px] w-[40px] h-[40px] ">

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
    <div class="mb-[20px] px-[40px] hidden" id="searchForm">
        <form class=" " action="{{ url('/search') }}" method="get">
            @csrf
            <input type="text" name="search" id="" autocomplete="off"
                placeholder="Search your mobile phone"
                class="w-full md:text-[24px] text-[14px] text-secondary_text font-poppins lg:px-[25px] px-[15px] py-[10px] rounded-full bg-secondary">
            <input type="submit" value="Search"
                class=" bg-white absolute right-[40px] py-[10px] px-[20px] rounded-full md:text-[24px] text-[14px] font-semibold cursor-pointer">
        </form>

    </div>
    <div class="bg-secondary h-[4px] w-full"></div>
    @yield('content')


    <script>
        const search = document.getElementById("searchForm");
        const button = document.getElementById("button");

        button.addEventListener('click', () => {

            search.style.display = "block";

        })
    </script>
</body>

</html>
