<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Color Library UI Kit</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//unpkg.com/a11y-slider@latest/dist/a11y-slider.css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/elements/color_library.css" rel="stylesheet" type="text/css" />
    <style>
        .col {
            min-width: auto;
        }
        .create-post {
            border: solid 1px silver;
            border-radius: 10px;
            text-align: center;
        }


        .w-100 {
            width: 100%!important;
        }
        .d-block {
            display: block!important;
        }
        img {
            vertical-align: middle;
            border-style: none;
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }

        img {
            overflow-clip-margin: content-box;
            overflow: clip;
        }
        .main-container {
            min-height: 100vh;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .knopka {

            float: right;
        }

    </style>




    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="140">





@include('admin.sidebar')




<div class="main-container" id="container">


    <div id="content" class="main-content">








            <div class="card">

                <div class="card-header text-center font-weight-bold">
                    <h2> Upload Image </h2>
                </div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('save') }}" >
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="file">
                                        <input type="file" name="image" placeholder="Выбрать изображение" id="image" src="/">
                                    </label>
                                    @error('image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <img id="preview-image-before-upload" src="/images/product_image_not_found.gif"
                                     alt="" style="max-height: 250px;">
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" id="submit">Отправить</button>
                            </div>



                            {{--  @foreach($photos as $ph)
                                  {{$ph['name']}}
                                  {{$ph['path']}}
                                  <img src="{{asset('/storage/'. $ph['path'])}}" class="d-block w-100" alt="...">
                              @endforeach--}}
                        </div>
                    </form>
                    <div class="row">



                        <form action="" method="post" id="text">
                        @csrf
                        <div class="container mt-3">
                            <div class="create-post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Основной текст" name="body">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Вспомогательный текст">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Текст для кнопок">
                                </div>

                            </div>
                            <div class="container mt-3">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-success" id="text">Отправить</button>
                            </div>
                            </div>
                        </div>

                          </form>

                    </div>





                </div>






            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

            <script type="text/javascript">

                $(document).ready(function (e) {


                    $('#image').change(function(){

                        let reader = new FileReader();

                        reader.onload = (e) => {

                            $('#preview-image-before-upload').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(this.files[0]);

                    });

                });

            </script>
            </div>

<div class="main-content" id="content">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/600x300.jpg" alt="First slide">
                </div>
            </div>

                    <button class="btn btn-outline-success mb-2">Сохранить слайдер</button>
                    <div class="knopka">

                        <button class="btn btn-outline-danger mb-2">Удалить</button>
                    </div>
            </div>
        </div>

    </div>








    {{--        <div id="content" class="main-content">--}}
{{--            <div class="widget-content widget-content-area  style-custom-1">--}}
{{--                <div class="container" style="max-width: 928px;">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12 col-md-12 mb-5 p-0">--}}
{{--                            <div id="style1" class="carousel slide style-custom-1" data-ride="carousel">--}}
{{--                                <ol class="carousel-indicators">--}}
{{--                                    <li data-target="#style1" data-slide-to="0" class="active"></li>--}}
{{--                                    <li data-target="#style1" data-slide-to="1"></li>--}}
{{--                                    <li data-target="#style1" data-slide-to="2"></li>--}}
{{--                                </ol>--}}
{{--                                <div class="carousel-inner">--}}
{{--                                    <div class="carousel-item active">--}}
{{--                                        <img class="d-block w-100 slide-image" src="assets/img/600x300.jpg" alt="First slide">--}}
{{--                                        <div class="carousel-caption">--}}
{{--                                            <span class="badge">Lifestyle</span>--}}
{{--                                            <h3>How To Make More Blog By Doing Less</h3>--}}
{{--                                            <div class="media">--}}
{{--                                                <img src="assets/img/90x90.jpg" class="" alt="avatar">--}}
{{--                                                <div class="media-body">--}}
{{--                                                    <h6 class="user-name">User name</h6>--}}
{{--                                                    <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> Jan, 14 2020</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="carousel-item">--}}
{{--                                        <img class="d-block w-100 slide-image" src="assets/img/600x300.jpg" alt="Second slide">--}}
{{--                                        <div class="carousel-caption">--}}
{{--                                            <span class="badge">Lifestyle</span>--}}
{{--                                            <h3>How To Make Blog</h3>--}}
{{--                                            <div class="media">--}}
{{--                                                <img src="assets/img/90x90.jpg" class="" alt="avatar">--}}
{{--                                                <div class="media-body">--}}
{{--                                                    <h6 class="user-name">User name</h6>--}}
{{--                                                    <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> Jan, 14 2020</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="carousel-item">--}}
{{--                                        <img class="d-block w-100 slide-image" src="assets/img/600x300.jpg" alt="Third slide">--}}
{{--                                        <div class="carousel-caption">--}}
{{--                                            <span class="badge">Lifestyle</span>--}}
{{--                                            <h3>Best Blog Android Apps</h3>--}}
{{--                                            <div class="media">--}}
{{--                                                <img src="assets/img/90x90.jpg" class="" alt="avatar">--}}
{{--                                                <div class="media-body">--}}
{{--                                                    <h6 class="user-name">User name</h6>--}}
{{--                                                    <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> Jan, 14 2020</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <a class="carousel-control-prev" href="#style1" role="button" data-slide="prev">--}}
{{--                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                                    <span class="sr-only">Previous</span>--}}
{{--                                </a>--}}
{{--                                <a class="carousel-control-next" href="#style1" role="button" data-slide="next">--}}
{{--                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                    <span class="sr-only">Next</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <button class="btn btn-outline-success mb-2">Сохранить</button>--}}
{{--                <div class="knopka">--}}

{{--                    <button class="btn btn-outline-danger mb-2">Удалить</button>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}





        <!-- END MAIN CONTAINER -->

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="//unpkg.com/a11y-slider@latest/dist/a11y-slider.js"></script>
        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="assets/js/custom.js"></script>
        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/js/scrollspyNav.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>
