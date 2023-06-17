<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Yaza Pratama </title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>

<body class="bg-white font-family-karla h-screen">
    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <a href="#"><img src="{{ asset('AdminLTE/dist/img/yazapratama_logo.png') }}" alt="User Image"
                        height="90px" width="90px"></a>
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl font-weight-bold">PT Yaza Pratama</p>



                <form class="flex flex-col pt-3 md:pt-8" action={{ url('user/login') }} method="POST">
                    {{ csrf_field() }}

                    @if ($errors->any())
                        <div class="alert alert-danger text-center text-red-500">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">E-Mail</label>
                        <input type="email" value="{{ Session::get('email') }}" name="email"
                            placeholder="Masukkan E-Mail"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" value="{{ Session::get('password') }}" name="password"
                            placeholder="Masukkan Password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>

                    {{-- <a href="send-email" type="submit" --}}
                    <button name="submit" type="submit"
                        class="text-center bg-black text-white font-bold text-lg hover:bg-blue-700 p-2 mt-8">Log
                        In</button>

                    <p class="text-center"> Belum memiliki akun? <strong><a href="SignIn">Sign
                                In</a></strong> </p>
                </form>
            </div>
        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="{{ asset('AdminLTE/dist/img/wahan.jpg') }}">
        </div>
    </div>

</body>

</html>
