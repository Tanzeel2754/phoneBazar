<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup-PhoneBazaar</title>
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
            margin: 1em;
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
            class="sm:text-[120px] text-[64px]  font-kaushan bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500 bg-clip-text text-transparent ">
            PhoneBazaar</div>
        <div class="w-full h-[4px] bg-gradient-to-r from-pink-500 via-purple-700 via-opacity-50 to-blue-500"></div>
    </div>
    <div class="card sm:w-[700px] sm:h-[700px] w-[90%] h-[70vh]">
        <div class="card2 sm:h-[700px] h-[70vh] ">
            <form class="form py-[40px] sm:h-[700px] h-[70vh]" action="signup" method="POST">
                @csrf
                <p id="heading" class="text-[48px] font-poppins">Signup</p>
                <div class="field">
                    
                    <input type="text" name="name" class="input-field font-poppins" placeholder="Enter your Name" autocomplete="off">
                </div>
                <div class="field">
                    
                    <input type="text" name="email" class="input-field font-poppins" placeholder="Enter your Username / Email" autocomplete="off">
                </div>
                <div class="field">
                    
                    <input type="text" name="phone" class="input-field font-poppins" placeholder="Enter your contact no." autocomplete="off">
                </div>
                <div class="field">
                    
                    <input type="password" name="password" class="input-field  font-poppins" placeholder="Enter your Password">
                </div>
                <div class="btn flex sm:flex-row flex-col sm:gap-0 gap-[10px]">
                    <button class="button2 flex-1 font-poppins sm:text-[18px] text-[16px]">Sign Up</button>
                    <a href="/login"
                        class="button1 flex justify-center items-center flex-1 font-poppins sm:text-[18px] text-[16px] cursor-pointer" >Login</a>
                        
                </div>
                {{-- <button class="button3">Forgot Password</button> --}}
            </form>
        </div>
    </div>
</body>

</html>
