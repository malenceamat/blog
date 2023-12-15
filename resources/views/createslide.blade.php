@extends('admin')
@include('style')
@include('admin.sidebar')
<div class="main-container" id="container">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="row">


                            <form action="/createslide" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="file">
                                            <input type="file" name="image" placeholder="Выбрать изображение" id="image"
                                                   src="">
                                        </label>
                                        @error('image')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <img id="preview-image-before-upload"
                                         src={{asset("images/product_image_not_found.gif")}} alt=""
                                         style="max-height: 250px;" alt="">
                                </div>

                                <div class="container mt-5">
                                    <p>Выбор раздела</p>
                                    <label>
                                        <select id="example-getting-started" name="categories[]" multiple>
                                            @foreach($data as $ke)
                                                <option value="{{$ke->id}}">{{$ke->name}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                <div class="container mt-3">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-success">Отправить</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
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
