<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Code For Social</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            /* height: 100vh; */
            margin: 0;
        }

        .flex-center {
            align-items: center;
            /* display: flex; */
            justify-content: center;
        }

        li {
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .position-ref {
            position: relative;
            margin-bottom: 65px;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            /* position: absolute; */
        }

        .title {
            font-size: 84px;
        }


        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <!-- <script>
            $(document).ready(function() {
                $('input:checkbox').click(function() {
                    $('input:checkbox').not(this).prop('checked', false);
                });
            });
        </script> -->
    <div class="flex-center position-ref">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Code For Social
            </div>

            <div>
                <h2>FORMULIR GAMBARAN ANAK DARI SUDUT PANDANG ORANG TUA</h2>
            </div>

        </div>
    </div>

    <!-- <div class="container">
        <div class="accordion md-accordion accordion-2" id="accordionEx7" role="tablist" aria-multiselectable="true">
            @yield('test')
        </div> 
    </div> -->

    <div class="container">
        <form>
            <table>
                <tr>
                    <td>
                        <h3>Nama : </h3>
                    </td>
                    <td>
                        <input type="text" size="100">
                    </td>
                </tr>
            </table>

            <!-- </form> -->

            <div id="accordion">
                @yield('partA')
                @yield('partB')
                @yield('partC')
                @yield('partD')
                @yield('partE')
            </div>
        </form>
        <br>
        <div class="text-right">
            <button type="button" class="btn btn-primary"><a href="{{route('customer.printpdf')}}">Print PDF</a></button>
        </div>
        <br>
        <br>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        function msg() {
            alert("Belum dapat digunakan");
        }
    </script>
</body>

</html>