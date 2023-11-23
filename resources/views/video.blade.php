@extends('admin')
@include('style')







<div class="main-container" id="container">
    @include('admin.sidebar')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">





                        <form method="POST" action="{{ Route ('video') }}" enctype="multipart/form-data">

                           @csrf
                            <div class="col-md-12">
                                <div class="form-group">

                                        <input type="file" name="video" placeholder="Выбрать изображение" value="{{$video['video']}}">
                                    <input type="hidden" class="form-control" name="video"  value="{{$video['video']}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="text" class="form-control" name="Text" placeholder="Основной текст" value="{{$video['Text']}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="text" class="form-control" name="SmallText" placeholder="Вспомогательный текст" value="{{$video['SmallText']}}">
                                </label>
                            </div>


                            <div class="container">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-success" name="click">Отправить</button>
                                </div>
                            </div>
                        </form>



                            <video width="320" height="240" autoplay muted loop>
                                <source src="{{asset('/storage/'. $video['video'])}}">
                            </video>








                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {


        $('#image').change(function(){

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

    });

</script>
