<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
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

            <div class="container" align="center" style="padding: 100px">

                @if(session()->has('message'))

                    <div class="alert alert-success">

                        <spna type="button" class="close" data-dismiss="alert">
                        </spna>

                        {{session()->get('message')}}

                    </div>
                @endif

                <form action="{{url('edditinstructor', $data->id)}}"  method="POST" enctype="multipart/form-data">
                    @csrf

                    <div style="padding: 15px">
                        <label for="">Imie Doktora</label>
                        <input type="text" name="name" value="{{$data->name}}">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Numer doktora</label>
                        <input type="number" name="phone" value="{{$data->phone}}">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Kategoria</label>
                        <input type="text" name="category" value="{{$data->category}}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">Numer pokoju</label>
                        <input type="text" name="room" value="{{$data->place}}">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Zdjecie</label>
                        <img height="150" width="150" src="doctorimage/{{$data->image}}" alt="">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Zmień Zdjęcie</label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding: 15px">
                        <label for="">Aktualizuj profil</label>
                        <input type="submit" class="btn btn-primary">
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

