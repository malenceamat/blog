@extends('admin')
@include('style')


<style type="text/css">
    .gallery {
        display: inline-block;
        margin-top: 20px;
    }

    .close-icon {
        border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }

    .form-image-upload {
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
</style>
<div class="main-container" id="container">
    @include('admin.sidebar')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">


                        <input type="button" onclick="location.href='/createslide';" value="добавить картинку в раздел"
                               class="btn btn-outline-primary mb-2"/>
                        <input type="button" onclick="location.href='/galleryedit';" value="Редактировать раздел"
                               class="btn btn-outline-primary mb-2"/>
                        <input type="button" onclick="location.href='/createrazdel';" value="Создать раздел"
                               class="btn btn-outline-primary mb-2"/>
                        <input type="button" onclick="location.href='/allimage';" value="Все картинки"
                               class="btn btn-outline-primary mb-2"/>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
