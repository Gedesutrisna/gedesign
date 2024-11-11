@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <div class="box">
            <div class="d-flex justify-content-between align-items-center  gap-4">
                <div class="">
                    <h3>Statistik</h3>
                    <p></p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 col-4">
                    <div class="group border-end d-flex align-items-center gap-3">
                        <div class="">
                            <div class="icon">
                                <img src="/assets-dashboard/memer-i.svg" alt="">
                            </div>
                        </div>
                        <div class="">
                            <h5 class="average">{{ $services->count() }}</h5>
                            <p class="">Total Service</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <div class="group border-end d-flex align-items-center gap-3">
                        <div class="">
                            <div class="icon">
                                <img src="/assets-dashboard/memer-i.svg" alt="">
                            </div>
                        </div>
                        <div class="">
                            <h5 class="average">{{ $portfolios->count() }}</h5>
                            <p class="">Total Portfolio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <div class="group d-flex align-items-center gap-3">
                        <div class="">
                            <div class="icon">
                                <img src="/assets-dashboard/exist-i.svg" alt="">
                            </div>
                        </div>
                        <div class="">
                            <h5 class="average">{{ $blogs->count() }}</h5>
                            <p class="">Total Blog</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-12">
        <div class="box h-100">
            <div class="">
                <h3>Statistik Chart</h3>
            </div>
            <div class="mt-4">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
<script>
    
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Portfolios', 'Blogs'],
        datasets: [
        {
            data: [{{ $portfolios->count() }}, {{ $blogs->count() }}],
            backgroundColor:['#4066CF','#F5F5F5'],
            spaceBetween:'30',
            borderRadius:'6',
            borderSkipped: false,
            borderRadius: {
                topLeft: 6,
                topRight: 6,
                bottomRight: 6,
                bottomLeft: 6,
            },
            offset: 20,
        },
    ],


    },
    options: {
        plugins: {
            legend: {
                display: false,
            },
        },

        responsive: true,
        scales: {
            x: {
                grid: {
                    display: false, // Hapus garis grid vertikal
                },
            },
            y: {
                display: false, // Tampilkan garis grid horizontal
                grid: {
                    display: false, // Tampilkan garis grid horizontal
                },
            },
            xAxes: [{                
            }],
            yAxes: [{
                offset: true
            }]

        }
    }
});
</script>
@endsection