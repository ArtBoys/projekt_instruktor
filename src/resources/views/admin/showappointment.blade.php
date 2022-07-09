

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
                        <th style="padding: 10px">Nazwa Pacjenta</th>
                        <th style="padding: 10px">Email</th>
                        <th style="padding: 10px">Numer</th>
                        <th style="padding: 10px">Imie Doktora</th>
                        <th style="padding: 10px">Data</th>
                        <th style="padding: 10px">Wiadomość</th>
                        <th style="padding: 10px">Status</th>
                        <th style="padding: 10px">Zatwiedz</th>
                        <th style="padding: 10px">Anuluj</th>
                    </tr>

                    @foreach($data as $appoint)

                    <tr align="center" style="background-color: skyblue">
                        <td style="padding: 1rem">{{$appoint->name}}</td>
                        <td style="padding: 1rem">{{$appoint->email}}</td>
                        <td style="padding: 1rem">{{$appoint->phone}}</td>
                        <td style="padding: 1rem">{{$appoint->doctor}}</td>
                        <td style="padding: 1rem">{{$appoint->date}}</td>
                        <td style="padding: 1rem">{{$appoint->message}}</td>
                        <td style="padding: 1rem">{{$appoint->status}}</td>

                        <td style="padding: 1rem">
                            <a class="btn btn-success" href="{{url('zatwiedzony', $appoint->id)}}">Zatwierdz</a>
                        </td>
                        <td style="padding: 1rem">
                            <a class="btn btn-danger" href={{url('cancel', $appoint->id)}}>Anuluj</a>
                        </td>
                    </tr>

                    @endforeach

                </table>
            </div>

        </div>


{{--        @include('admin.body')--}}
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('admin.script')
</body>
</html>
