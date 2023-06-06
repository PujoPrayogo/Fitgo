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

            <form action='' method='post'>
                <!-- @csrf
                @if (Route::current()->uri == 'buku/{id}')
                    @method('put')
                @endif
                @method('put') -->

                <div class="mb-3 row">
                    <label for="weight" class="col-sm-2 col-form-label">Weight (Kg)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='weight' id="weight" value="{{ isset($data['weight'])?$data['weight']:old('weight')}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="date_add_weight" class="col-sm-2 col-form-label">Date Add Weight</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control w-50" name='tanggal_publikasi' id="tanggal_publikasi" value="{{ isset($data['tanggal_publikasi'])?$data['tanggal_publikasi']:old('tanggal_publikasi')}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Add Weight</button>
                    </div>
                </div>
            </form>
        </div>

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


        // CREATE NEW CHART INSTANCE
        new Chart(chart, {
                type: 'line',
                data: {
                    labels: ['-6', '-5', '-4', '-3', '-2', 'Last', 'Current'],
                    datasets: [
                        {
                            label: 'Weight',
                            data: [72.5, 71, 71.2, 70, 68, 67.2, 74.5],
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