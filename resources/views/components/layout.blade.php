<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eye Track</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="icon" type="image/x-icon" href="{{asset("imgs/eye.ico")}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body class="">
    <!-- Navigation -->
    <x-header></x-header>

    @if (Session::has('success'))
        <script>
            Swal.fire({
                text: "{{ Session::get('success') }}",
                icon: "success"
            });
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            Swal.fire({
                text: "{{ Session::get('error') }}",
                icon: "error"
            });
        </script>
    @endif

    <main class="">
        @auth
            <div class="d-flex flex-row pt-20" style="min-height:100vh">
                <!-- Sidebar -->
                <div class=" bg-blue me-0 me-md-5">
                    <div class="d-flex flex-column align-items-center sidebar-column sticky-top">
                        <a href="{{ url('/dashboard') }}" class="rounded-circle border border-3 m-3">
                            <img src="{{asset("imgs/museum.svg")}}" alt="" class="p-md-2 sidebar-icon">
                        </a><a href="{{ url('/employees') }}" class="rounded-circle border border-3 m-3">
                            <img src="{{asset("imgs/users.svg")}}" alt="" class="p-md-2 sidebar-icon">
                        </a>
                    </div>
                </div>
                <!-- Main content -->
                <div class="container">
                    <div class="row">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        @else
            <div class="container" style="min-height:100vh">{{ $slot }}</div>

        @endauth
    </main>

    <!-- Footer -->
    <footer class="position-absolute w-100  text-center bg-blue text-green pt-4 ">
        <div class="container">
            <img src="{{asset("imgs/Logo-green.svg")}}" alt="logo" class="mb-4" style="width: 150px;">
            <div class="w-50 mx-auto mb-4">
                <p class="text-sm">
                    Eye Track е стартираща компания, която помага на екипа да работи ефективно, като използва метода
                    kanban. Проследяването на
                    задачите помага на всички служители и мениджъри да имат по-голям контрол върху работата си.
                </p>
            </div>
            <ul class="w-75 mx-auto mb-4 navbar-nav  d-flex flex-lg-row justify-content-evenly">
                <li class="nav-item "><img src="{{asset("imgs/phone.svg")}}" class="me-2 contacts" alt="phone">+00000000
                </li>
                <li class="nav-item "><img src="{{asset("imgs/email.svg")}}" class="me-2 contacts"
                        alt="email">email@mail.com
                </li>
                <li class="nav-item "><img src="{{asset("imgs/address.svg")}}" class="me-2 contacts"
                        alt="address">Варна,
                    Младост,
                    ж.к.
                    Младост
                    бл. 144
                </li>
            </ul>
            <ul class="w-50 mx-auto mb-2 navbar-nav  d-flex flex-row justify-content-center gap-3">
                <li class="nav-item rounded-circle bg-yellow ">
                    <a class="nav-link p-2" href="https://instagram.com"><img src="{{asset("imgs/instagram-logo.svg")}}"
                            alt=" instagram" class="socials"></a>
                </li>
                <li class="nav-item rounded-circle bg-yellow">
                    <a class="nav-link p-2" href="https://facebook.com"><img src="{{asset("imgs/facebook-logo.svg")}}"
                            alt="facebook" class="socials"></a>
                </li>
                <li class="nav-item rounded-circle bg-yellow">
                    <a class="nav-link p-2 " href="https://bsky.app"><img src="{{asset("imgs/Bluesky_Logo.svg")}}"
                            alt="bluesky" class="socials"></a>
                </li>
            </ul>

        </div>
        <hr>
        <p>&copy; 2024 Eye Track | Проектът е създаден учебния цел</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>