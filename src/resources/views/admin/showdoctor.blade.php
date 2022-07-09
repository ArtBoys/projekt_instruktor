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
                        <th style="padding: 10px">Nazwa Doktora</th>
                        <th style="padding: 10px">Telefon</th>
                        <th style="padding: 10px">Specializacja</th>
                        <th style="padding: 10px">Numer pokoju</th>
                        <th style="padding: 10px">Zdjęcie</th>
                        <th style="padding: 10px">Usuń</th>
                        <th style="padding: 10px">Przekaż plik</th>
                    </tr>

                    @foreach($data as $doctor)
                    <tr align="center" style="background-color: skyblue">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img height="100px" width="100px" src="doctorimage/{{$doctor->image}}" alt=""></td>
                        <td style="padding: 0.5rem"><a  onclick="return confirm('Czy Jestes pewnien że chcesz usunąć lekarza ?')" class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}">Usuń</a></td>
                        <td style="padding: 0.5rem"><a  class="btn btn-primary" href="{{url('udpatedoctor', $doctor->id)}}">Dodaj</a></td>
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
