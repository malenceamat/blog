@extends('admin')
@include('style')


<div class="main-container" id="container">
    @include('admin.sidebar')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">


                        <div class="card">
                            <div class="card-header text-center font-weight-bold">
                                <h2> Загрузка слайда </h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form action="/slider" method="POST" id="text" enctype="multipart/form-data">

                                        @csrf
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="file">
                                                    <input type="file" name="image" placeholder="Выбрать изображение"
                                                           id="image" src="">

                                                </label>
                                                @error('image')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <img id="preview-image-before-upload" src={{asset("images/product_image_not_found.gif")}}
                                 alt="" style="max-height: 250px;" alt="">
                                        </div>
                                        <div class="container mt-3">
                                            <div class="create-post">
                                                <div class="containet mt-3">
                                                    <div class="form-group">
                                                        <label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Основной текст" name="body">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>
                                                        <input type="text" class="form-control"
                                                               placeholder="Вспомогательный текст" name="text">
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label>
                                                        <input type="text" class="form-control" name="buttons"
                                                               placeholder="Текст для кнопок">
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label>
                                                        <input type="text" class="form-control" name="mama"
                                                               placeholder="Ссылка для кнопки">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="container mt-3">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-success" id="t123ext">
                                                        Отправить
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                            <script type="text/javascript">

                                $(document).ready(function () {


                                    $('#image').change(function () {

                                        let reader = new FileReader();

                                        reader.onload = (e) => {

                                            $('#preview-image-before-upload').attr('src', e.target.result);
                                        }

                                        reader.readAsDataURL(this.files[0]);

                                    });

                                });

                            </script>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
