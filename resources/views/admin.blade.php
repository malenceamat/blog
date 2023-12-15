<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Color Library UI Kit</title>
    <link rel="icon" type="image/x-icon" href={{asset("/assets/img/favicon.ico")}}/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href={{asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("assets/css/plugins.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("assets/css/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("plugins/file-upload/file-upload-with-preview.min.css" )}} rel="stylesheet" type="text/css">
    <link rel="stylesheet"
          href={{asset("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css")}}>
    <link
        rel={{asset("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css")}} type="text/css"/>
    <link
        rel={{asset("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css")}} type="text/css"/>
    <link href={{asset("/assets/css/elements/color_library.css")}} rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href={{asset("plugins/table/datatable/datatables.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("plugins/table/datatable/dt-global_style.css")}}>

</head>
<div class="main-container" id="container">


    @yield('qwe')


</div>


<script src={{asset("plugins/file-upload/file-upload-with-preview.min.js")}}></script>
<script src={{asset("assets/js/libs/jquery-3.1.1.min.js")}}></script>
<script src={{asset("bootstrap/js/popper.min.js")}}></script>
<script src={{asset("bootstrap/js/bootstrap.min.js")}}></script>
<script src={{asset("plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
<script src={{asset("assets/js/app.js")}}></script>
<script>firstUpload = new FileUploadWithPreview('myFirstImage')</script>
<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src={{asset("assets/js/custom.js")}}></script>
<script src={{asset("assets/js/scrollspyNav.js")}}></script>
<script src={{asset("assets/js/gallery.js")}}></script>
<script> var secondUpload = new FileUploadWithPreview('mySecondImage') </script>
<script src={{asset("plugins/select2/custom-select2.js")}}></script>
<script src={{asset("plugins/select2/select2.min.js")}}></script>
<script src={{asset("plugins/bootstrap-select/bootstrap-select.min.js")}}></script>
<script
    src={{asset("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js")}}></script>
<script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js")}}></script>
<script type="text/javascript"
        src={{asset("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js")}}></script>
<script type="text/javascript"
        src={{asset("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js")}}></script>


</html>
