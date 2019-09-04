<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smart Society</title>
        <link rel="icon" type="image/ico" href="{{asset('./img/favicon.ico')}}" sizes="any" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: url('img/wallp.jpg') no-repeat center center fixed;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                background: #0066FF;
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
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="links">
                    <i class="fa fa-align-justify"></i><B>Data Warga</B></div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Agama</th>
                          <th>Pendidikan</th>
                          <th>Pekerjaan</th>
                          <th>Status Tinggal</th>
                          <th>NO Rumah</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($members as $members)
                        <tr>
                          <td>{{ $members->name }}</td>
                          <td>{{ $members->place_of_birth }}</td>
                          <td>{{ $members->date_of_birth }}</td>
                          <td>{{ $members->gender }}</td>
                          <td>{{ $members->religion }}</td>
                          <td>{{ $members->education }}</td>
                          <td>{{ $members->work }}</td>
                          <td>{{ $members->residence_status }}</td>
                          <td>{{ $members->home_number }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="welcome"> Back<a>
                  </div>
                </div>
            </div>
</body>
</html>