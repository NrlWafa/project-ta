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
                <form class="flex flex-col pt-3 md:pt-8" action={{ url('user/create') }} method="POST">
                    @csrf

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
                        <label for="nama" class="text-lg">Username</label>
                        <input type="text" value="{{ Session::get('nama') }}" name="nama"
                            placeholder="Masukkan Username"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>

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

                    <button name="submit" type="submit"
                        class="text-center bg-black text-white font-bold text-lg hover:bg-blue-700 p-2 mt-8">Sign
                        In</button>

                    <p class="text-center"> Sudah memiliki akun? <strong><a href="Login">Log In</a></strong> </p>
                </form>
            </div>
        </div>

        {{-- Foto kaya awal --}}
        <!-- Image Section -->
        {{-- <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="{{ asset('AdminLTE/dist/img/pt.jpg') }}">
            <p class="object-cover w-full h-screen hidden md:block">Coba Aja</p>
            <div class="flex flex-col pt-4">
                <p> Coba Aja</p>
            </div>
        </div> --}}

        {{-- Tulisan diatas foto --}}
        {{-- <div class="relative">
            <img src="{{ asset('AdminLTE/dist/img/pt.jpg') }}" alt="Foto"
                class="object-cover w-full h-screen hidden md:block">
            <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-4xl">
                Coba Aja</p>
        </div> --}}

        {{-- <div class="w-1/2 shadow-2xl">

            <p class="object-cover w-full h-screen hidden md:block">Coba Aja</p>
            <div class="flex flex-col pt-4">
                <p> Coba Aja</p>
            </div>
        </div> --}}
        <div class="w-1/2 shadow-2xl flex flex-col justify-center items-center">
            {{-- <div class="object-cover w-full h-screen hidden md:block"> --}}
            <div class="card-body">
                <p>Untuk mengajukan lamaran, Anda perlu memiliki akun Pelamar terlebih dahulu. Jika
                    belum memiliki akun, Anda dapat melakukan pendaftaran dengan cara membuat akun
                    pelamar dengan mengikuti langkah-langkah berikut:</p>
                <ol>
                    <li>1. Buka halaman registrasi (Sign In). Isi username, alamat e-mail, dan password
                        yang akan digunakan. Kemudian klik tombol Sign In. Pastikan alamat e-mail yang
                        didaftarkan adalah alamat yang valid agar pelamar dapat melakukan aktivasi
                        melalui link verifikasi yang dikirimkan ke e-mail yang didaftarkan.</li>
                    <li>2. Kemudian akan muncul pesan pemberitahuan yang berisi link verifikasi untuk
                        aktivasi akun pelamar. Klik tombol Verify Email Address. Pastikan untuk
                        memeriksa folder "Spam" atau "Promosi" jika Anda tidak menemukan email tersebut
                        di kotak masuk utama.</li>
                    <li>3. Setelah mengeklik link verifikasi, pelamar akan diarahkan kembali ke halaman
                        registrasi untuk melakukan Login. Masukkan e-mail dan password yang telah
                        terdaftar, lalu klik tombol Login.</li>
                    <li>4. Setelah berhasil masuk ke akun Anda, Anda sekarang dapat mengajukan lamaran
                        dengan mengeklik tombol Ajukan Lamaran. Isi form lamaran dengan data diri Anda.
                    </li>
                </ol>
            </div>

        </div>

        {{-- <div class="relative flex justify-center items-center w-full h-screen">
            <p class="text-center text-white text-4xl">Coba Aja</p>
        </div> --}}
    </div>

</body>

</html>
