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
                                <form @if (isset($shop->id)) action="{{url('createshop/edit')}}"
                                      @else action="{{url('createshop/save')}}" @endif method="post"
                                      enctype="multipart/form-data" id="save">
                                    @csrf
                                    @if($shop->id)
                                        @method('POST')
                                    @endif
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="file">
                                                <input type="file" name="image" placeholder="Выбрать изображение"
                                                       id="image" value="{{$shop['image']}}" src="">
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
                                                   value="{{$shop['description']}}"
                                                   name="description">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Товар" name="name"
                                                   value="{{$shop['name']}}">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Цена" name="price"
                                                   value="{{$shop['price']}}">
                                        </div>
                                    </div>
                                    {{--<div class="container mt-5">
                                        <p>Выбор раздела</p>
                                        <label>
                                            <select id="example-getting-started" name="categories[]" multiple>

                                                <option value="time">Счастливые часы</option>
                                                <option value="">123123</option>
                                                <option value=""></option>

                                            </select>
                                        </label>
                                    </div>--}}

                                    @if(isset($shop->id))
                                        <div class="container">
                                            <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">
                                                Редактировать
                                            </button>
                                        </div>

                                        <div class="container" id="sem">
                                            <img src="{{asset('/storage/'. $shop['image'])}}"
                                                 class="d-block w-25 float-left width=" alt="...">
                                        </div>

                                    @else
                                        <div class="container">
                                            <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">Создать
                                            </button>
                                        </div>
                                    @endif
                                    <input type="hidden" name="id" value="{{$shop['id']}}">
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
                        <script>$(document).ready(function () {
                                $('#example-getting-started').multiselect();
                            });</script>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
