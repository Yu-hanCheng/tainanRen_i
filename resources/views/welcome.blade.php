<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>發一崇德台南道場</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link href="{{ URL::to('/') }}/css/app.css" rel="stylesheet" />

    <!-- SEO -->
    <meta name=" keywords" content="發一崇德台南道場,發一崇德,台南道場,台南" />
    <meta name="description"
        content="發一崇德台南道場，響應您我善願同步誦經祈願，恭誦彌勒救苦真經，心經誦經後點擊「我已經完成誦經」迴向，把愛串起來 凝聚您我慈悲之心，叩求諸天仙佛慈悲挽化疫情止息 願天下眾生平安" />

    <!-- Open Graph -->
    <meta property="og:title" content="發一崇德台南道場,發一崇德,台南道場,台南" />
    <meta property="og:description"
        content="發一崇德台南道場，響應您我善願同步誦經祈願，恭誦彌勒救苦真經，心經誦經後點擊「我已經完成誦經」迴向，把愛串起來 凝聚您我慈悲之心，叩求諸天仙佛慈悲挽化疫情止息 願天下眾生平安" />
</head>

<body>
    <div class="container py-3">
        <header>
            <div class="pricing-header p-2 pb-md-4 mx-auto text-center">
                <h1 class="display-6 fw-normal">發一崇德台南學界
                    <span class="badge rounded-pill bg-light text-dark my-1">愛的共振
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dc3545"
                            class="bi bi-heart-fill mb-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg></span>
                </h1>
                <img src="{{ URL::to('/') }}/image/command.jpg" class="img-fluid rounded mb-4 col-sm-12 col-md-8"
                    alt="號召令" />
                <h2>響應您我善願同步祈願</h2>
                <p class="fs-6 text-muted">
                    相信上天、相信愿力、相信愿力抵業力<br>
                    事事感恩遇考懺悔、望人人都能脫劫關
                </p>
                <h2>善願同步迴向祈願</h2>
                <p class="fs-6 text-muted">
                    下面三類其一完成後，
                    <br>點擊「我已經完成」迴向
                    <br>把愛串起來 凝聚您我慈悲之心
                </p>
            </div>
        </header>

        <main>
            <form action="/" method="post">
                @csrf
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">彌勒救苦真經</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">
                                    <small class="text-muted fw-light">誦經累計</small> {{ $chanting }}
                                    <small class="text-muted fw-light">次</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>1 萬 5 千部迴向</li>
                                </ul>
                                <button name="chanting" type="submit" class="w-100 btn btn-lg btn-danger">
                                    我已經完成誦經 1 部/次
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">誠心叩首祈願祝禱</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">
                                    <small class="text-muted fw-light">叩首累計</small> {{ $kowtow }}
                                    <small class="text-muted fw-light">次</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>300 萬叩頭迴向</li>
                                </ul>
                                <button name="kowtow" type="submit" class="w-100 btn btn-lg btn-success">
                                    我已經完成叩首 1000 下/次
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">蔬醒行動人人響應</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">
                                    <small class="text-muted fw-light">一日一齋累計</small> {{ $veg }}
                                    <small class="text-muted fw-light">次</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>1 日 1 齋疫情消災</li>
                                </ul>
                                <button name="veg" type="submit" class="w-100 btn btn-lg btn-primary">
                                    我已經響應吃素1餐/次
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
