<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-PhoneBazaar</title>
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
        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding-left: 2em;
            padding-right: 2em;
            padding-bottom: 0.4em;
            background-color: #171717;
            border-radius: 20px;

        }

        #heading {
            text-align: center;
            /* margin: 2em; */
            height: 40%;
            display: flex ;
            justify-content: center;
            align-items: center;
            color: white;

        }

        .field {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5em;
            border-radius: 25px;
            padding: 0.9em;
            border: none;
            outline: none;
            color: white;
            background-color: #171717;
            box-shadow: inset 2px 5px 10px rgb(5, 5, 5);
        }

        .input-icon {
            height: 1.5em;
            width: 1.5em;
            fill: white;
        }

        .input-field {
            background: none;
            border: none;
            outline: none;
            width: 100%;
            color: white;
            font-size: 24px;
        }
        @media screen and (max-width:768px){
            .input-field {
            
            font-size: 16px;
        }
        }

        .form .btn {
            display: flex;
            justify-content: center;
            flex-direction: row;
            margin-top: 3em;
        }

        .button1 {
            padding: 0.9em;
            padding-left: 1.3em;
            padding-right: 1.3em;
            border-radius: 8px;
            margin-right: 0.5em;
            font-weight: bold;
            border: none;
            outline: none;
            transition: .4s ease-in-out;
            background-image: linear-gradient(266.26deg, #FF5FEF 0.25%, #BA00A7 0.26%, rgba(255, 0, 46, 0.5) 51.05%, #1400FF 101.85%);
            color: rgb(0, 0, 0);
        }

        .button1:hover {
            background-image: linear-gradient(266.26deg, #FF5FEF 0.25%, #BA00A7 0.26%, rgba(255, 0, 46, 0.5) 51.05%, #1400FF 101.85%);
            color: white;
        }

        .button2 {
            padding: 0.5em;
            padding-left: 2.3em;
            padding-right: 2.3em;
            border-radius: 5px;
            font-weight: bold;
            border: none;
            outline: none;
            transition: .4s ease-in-out;
            background-image: linear-gradient(266.26deg, #FF5FEF 0.25%, #BA00A7 0.26%, rgba(255, 0, 46, 0.5) 51.05%, #1400FF 101.85%);
            color: rgb(0, 0, 0);
        }

        .button2:hover {
            background-image: linear-gradient(266.26deg, #FF5FEF 0.25%, #BA00A7 0.26%, rgba(255, 0, 46, 0.5) 51.05%, #1400FF 101.85%);
            color: white;
        }

        /* .button3 {
  margin-bottom: 3em;
  padding: 0.5em;
  border-radius: 5px;
  border: none;
  outline: none;
  transition: .4s ease-in-out;
  background-image: linear-gradient(266.26deg, #FF5FEF 0.25%, #BA00A7 0.26%, rgba(255, 0, 46, 0.5) 51.05%, #1400FF 101.85%);
  color: rgb(0, 0, 0);
} */

        .button3:hover {
            background-image: linear-gradient(266.26deg, #FF5FEF 0.25%, #BA00A7 0.26%, rgba(255, 0, 46, 0.5) 51.05%, #1400FF 101.85%);
            color: rgb(255, 255, 255);
        }

        .card {
            background-image: linear-gradient(266.26deg, #FF5FEF 0.25%, #BA00A7 0.26%, rgba(255, 0, 46, 0.5) 51.05%, #1400FF 101.85%);
            border-radius: 22px;
            transition: all .3s;
        }

        .card2 {
            border-radius: 0;
            transition: all .2s;
        }

        .card2:hover {
            transform: scale(0.98);
            border-radius: 20px;
        }

        .card:hover {
            box-shadow: 0px 0px 20px 1px #FF5FEF;
        }
    </style>

</head>

<body class="bg-primary_bg flex flex-col justify-center items-center h-[100vh]">
    <div class="my-[40px]">
        <div
            class="sm:text-[120px] text-[64px] font-kaushan bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500 bg-clip-text text-transparent ">
            PhoneBazaar</div>
        <div class="w-full h-[4px] bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500"></div>
    </div>
    <div class="card sm:w-[700px] sm:h-[700px] w-[90%] h-[70vh]">
        <div class="card2 sm:h-[700px] h-[70vh] ">
            <form class="form py-[40px] sm:h-[700px] h-[70vh]" action="login" method="POST">
                @csrf
                <p id="heading" class="text-[48px] font-poppins">Login</p>
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16"
                        xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path
                            d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z">
                        </path>
                    </svg>
                    <input type="text" name="email" class="input-field font-poppins" placeholder="Username" autocomplete="off">
                </div>
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16"
                        xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                        </path>
                    </svg>
                    <input type="password" name="password" class="input-field font-poppins" placeholder="Password">
                </div>
                <div class="btn flex sm:flex-row flex-col sm:gap-0 gap-[10px]">
                    <button 
                        class="button1 flex-1 font-poppins sm:text-[18px] text-[16px]" >Login</button>
                    <a href="/signup" class="button2 flex-1 font-poppins flex items-center justify-center cursor-pointer text-[18px]">Sign Up</a>
                </div>
                {{-- <button class="button3">Forgot Password</button> --}}
            </form>
        </div>
    </div>
    {{-- <div class="text-[120px]">{{$text}}</div> --}}
    {{-- <a href="/myorders">Myorders</a> --}}
</body>

</html>
