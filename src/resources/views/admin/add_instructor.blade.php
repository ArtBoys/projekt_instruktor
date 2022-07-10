
<!DOCTYPE html>
<html lang="en">
<head>

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')
</head>
<body>
<div class="container-scroller">

    @include('admin.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding-top: 100px">

            @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">
                    </button>
                    {{session()->get('message')}}

                </div>
            @endif

            <form action="{{url('upload_instructor')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="padding: 15px">
                    <label for="">Imie Instruktora</label>
                    <input type="text" name="name" style="color: black" placeholder="Napisz imie" required>
                </div>

                <div style="padding: 15px">
                    <label for="">Telefon</label>
                    <input type="number" name="number" style="color: black" placeholder="Napisz numer" required>
                </div>

                <div style="padding: 15px">
                    <label for="">Kategoria</label>
                    <select name="category" id="" style="color: black; width: 200px" required>

                        <option value="">--Wybierz--</option>
                        <option value="Kategoria A">Kategoria A</option>
                        <option value="Kategoria B">Kategoria B</option>
                        <option value="Kategoria C">Kategoria C</option>
                        <option value="Kategoria D">Kategoria D</option>

                    </select>
                </div>

                <div style="padding: 15px">
                    <label for="">Miejsce</label>
                    <input type="text" name="place" style="color: black" placeholder="Wpisz miejsce spotkania" required>
                </div>

                <div style="padding: 15px">
                    <label for="">Zdjęcie Instruktora</label>
                    <input type="file" name="file" required>
                </div>

                <div style="padding: 15px">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>
        </div>

        </div>

        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('admin.script')
</body>
</html>
