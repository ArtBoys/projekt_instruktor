<!DOCTYPE html>
<html lang="en">
<head>
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
            <div align="center" style="padding-top: 100px">
                <table>
                    <tr style="background-color: black">
                        <th style="padding: 10px">Nazwa Instruktora</th>
                        <th style="padding: 10px">Telefon</th>
                        <th style="padding: 10px">Kategoria</th>
                        <th style="padding: 10px">Miejsce</th>
                        <th style="padding: 10px">Zdjęcie</th>
                        <th style="padding: 10px">Usuń</th>
                        <th style="padding: 10px">Aktualizuj profil</th>
                    </tr>

                    @foreach($data as $instructor)
                    <tr align="center" style="background-color: skyblue">
                        <td style="padding: 0.5rem">{{$instructor->name}}</td>
                        <td style="padding: 0.5rem">{{$instructor->phone}}</td>
                        <td style="padding: 0.5rem">{{$instructor->category}}</td>
                        <td style="padding: 0.5rem">{{$instructor->place}}</td>
                        <td><img height="100px" width="100px" src="instructorimage/{{$instructor->image}}" alt=""></td>
                        <td style="padding: 0.5rem"><a  onclick="return confirm('Czy Jestes pewnien że chcesz usunąć lekarza ?')" class="btn btn-danger" href="{{url('deleteinstructor', $instructor->id)}}">Usuń</a></td>
                        <td style="padding: 0.5rem"><a  class="btn btn-primary" href="{{url('udpateinstructor', $instructor->id)}}">Aktualizuj</a></td>
                    </tr>
                @endforeach



            </div>
        </div>

        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('admin.script')
</body>
</html>
