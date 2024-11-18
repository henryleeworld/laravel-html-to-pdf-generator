<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel</title>
        <style>
            body {
                font-family: "hanwangming light";
                margin: 0;
            }

            table {
                border-collapse: collapse;
            }

            thead {
                display: table-header-group;
                vertical-align: middle;
            }

            tbody {
                display: table-row-group;
                vertical-align: middle;
            }

            tr {
                display: table-row;
                vertical-align: inherit;
            }

            *,
            :after,
            :before {
                box-sizing: border-box;
                border: 0 solid #e2e8f0;
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
            }

            .container {
                max-width: 1140px;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }

            .mt-5,
            .my-5 {
                margin-top: 3rem !important;
            }

            .table {
                width: 100%;
                color: #212529;
                margin-bottom: 1rem;
            }

            .table-bordered {
                border: 1px solid #dee2e6;
            }

            .table-danger,
            .table-danger > td,
            .table-danger > th {
                background-color: #f5c6cb;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container mt-5">
            <div class="d-flex justify-content-center">
                <img src="data:image/jpg;base64, {{ base64_encode(@file_get_contents(storage_path('images/kamen-rider-black.jpg'))) }}" width="30" height="30" alt="Flowers in Chania">
            </div>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-danger">
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Name') }}</th>
                        <th scope="col">{{ __('Email') }}</th>
                        <th scope="col">{{ __('Created at') }}</th>
                        <th scope="col">{{ __('Updated at') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users ?? '' as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>