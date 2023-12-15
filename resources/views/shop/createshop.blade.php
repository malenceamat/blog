@extends('admin')
@include('style')
<div class="main-container" id="container">
    @include('admin.sidebar')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">

                        <br>


                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form action="/createshop" method="POST" enctype="multipart/form-data">
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


                                    <div class="form-row mb-4">
                                        <div class="col-7">
                                            <input type="text" class="form-control" placeholder="Описание товара"
                                                   name="description">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Товар" name="name">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Цена" name="price">
                                        </div>
                                    </div>

                                    <div class="container mt-5">
                                        <p>Выбор раздела</p>
                                        <label>
                                            <select id="example-getting-started" name="categories[]" multiple>
                                                @foreach($data as $ke)
                                                    <option value="1">3</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-success" id="t123ext">Отправить</button>
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
