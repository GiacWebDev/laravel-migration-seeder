<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>

    @vite('resources/js/app.js')

</head>

<body>


    <div class="conatiner">
        <h1>Train Info</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Compagnia</th>
                    <th scope="col">Slug</th>
                    <th scope="col">S. Partenza</th>
                    <th scope="col">S. Arrivo</th>
                    <th scope="col">Orario partenza</th>
                    <th scope="col">Orario ritorno</th>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Carrozza n°</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train_data)
                    <tr>
                        <td>{{ $train_data->company }}</td>
                        <td>{{ $train_data->slug }}</td>
                        <td>{{ $train_data->departure_station }}</td>
                        <td>{{ $train_data->arrival_station }}</td>
                        <td>{{ $train_data->departure_time }}</td>
                        <td>{{ $train_data->arrival_time }}</td>
                        <td>{{ $train_data->train_code }}</td>
                        <td>{{ $train_data->carriage_number }}</td>
                        <td>{{ $train_data->on_time }}</td>
                        <td>{{ $train_data->canceled }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>
