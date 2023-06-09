<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weight Tracks - Fitgo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-light">
    <main class="container">
        <div class="container" style="padding-top:2%">
            <div class="row">
                <div class="col-1">
                    <div class="btn btn-dark"><a href="/fitgo/{user}" class="text-white fw-bold" style="text-decoration:none;">Back</a></div>
                </div>
            </div>
        </div>
        <!-- CANVAS -->
        <div class="container" style="padding-top:3%;">
            <canvas id="chart" onclick="toggleMenu()" style="width: 100%; max-height:70vh;background-color:white;">
            </canvas>
        </div>
        <!-- END OF CANVAS -->

        <!-- START FORM -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
                
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                
            @endif

            <form action={{'/fitgo/weight_track/create/'.$id}} method='post'>
            @csrf
                
                {{-- @if (Route::current()->uri == '/fitgo/weight_track/update/{id}')
                    @method('put')
                @endif
                @method('put') --}}

                <div class="mb-3 row">
                    <label for="weight" class="col-sm-2 col-form-label">Weight (Kg)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='weight' id="weight" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="date_add_weight" class="col-sm-2 col-form-label">Date Add Weight</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control w-50" name='created_at' id="tanggal_publikasi" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Add Weight</button>
                    </div>
                </div>
            </form>
        </div>

        {{-- @if (Route::current()->uri == '/fitgo/weight-tracks/6') --}}

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-4">Weight</th>
                        <th class="col-md-4">Date</th>
                        <th class="col-md-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$i}}</td>
                        <td>{{$item["weight_atm"]}}</td>
                        <td>{{$item["created_at"]}}</td>
                        <td>
                            
                            
                            <form action={{"/fitgo/weight_track/".$item['id']}} 
                            method="post" 
                            onsubmit="return confirm('apakah yakin akan menghapus data?')"
                            class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                            </form>
                            
                        </td>
                        </tr>
                    <?php $i++ ?>
                    @endforeach
                    
            
                </tbody>
            </table>

        </div>
    
        <!-- AKHIR FORM -->

            
        <!-- START DATA -->
        
        <!-- AKHIR DATA -->
       
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }

        const chart = document.querySelector("#chart").getContext('2d');

        var data = @json($data)

        var data_weight = []

        for (var i = 0; i < 7; i++) {
            if(data[i]['weight_atm']==null){
                data_weight[i] = 0
            }else{
                data_weight[i] = data[i]['weight_atm']
            }
        }


        // CREATE NEW CHART INSTANCE
        new Chart(chart, {
                type: 'line',
                data: {
                    labels: ['-6', '-5', '-4', '-3', '-2', 'Last', 'Current'],
                    datasets: [
                        {
                            label: 'Weight',
                            data: [data_weight[6], data_weight[5], data_weight[4], data_weight[3], data_weight[2], data_weight[1], data_weight[0]],
                            backgroundColor: ['black', 'black', 'black', 'black', 'black', 'black', 'rgb(160, 99, 245)'],
                            borderColor: ['black', 'black', 'black', 'black', 'black', 'black', 'rgb(160, 99, 245)'],
                            borderWidth: 2
                        },

                        {
                            label: "Weight before",
                            data: [],
                            borderColor: 'rgb(160, 99, 245)',
                            borderWidth: 2
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            title: {
                                display: true,
                                text: 'Kg'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Weeks'
                            }
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Weight Tracks',
                            font: {
                                size: 24
                            }
                        },
                        legend: {
                            labels: {
                                generateLabels: function(chart) {
                                    const labels = Chart.defaults.plugins.legend.labels.generateLabels(chart);
                                    labels[1].text = 'Current: ' + chart.data.datasets[0].data[6].toFixed(2) + ' Kgs';
                                    labels.push({
                                        text: 'Last 6 Weeks: ' + (chart.data.datasets[0].data[6] - chart.data.datasets[0].data[0]).toFixed(2) + ' Kgs',
                                        fillStyle: 'yellowgreen',
                                        strokeStyle: 'yellowgreen',
                                        lineWidth: 2
                                    });
                                    labels[1].fillStyle = 'rgb(160, 99, 245)';
                                    labels[1].strokeStyle = 'rgb(160, 99, 245)';
                                    return labels;
                                }
                            }
                        }
                    },
                    responsive: true
                }
            })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    

</body>

</html>