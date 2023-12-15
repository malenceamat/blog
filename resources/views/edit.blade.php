@include('style')


<div class="main-container" id="container">
    @include('admin.sidebar')

    <div id="content" class="main-content">

        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="main-container" id="container mt-3">

                            <form action="/edit" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label class="file">
                                    <input type="file" name="body" id="image" value="{{$data['body']}}">
                                </label>

                                @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror <br> <br>


                                <img id="preview-image-before-upload" style="max-height: 25px;" alt="" src="">

                                <div class="container mt-3">
                                    <input type="hidden" name="id" value="{{$data['id']}}">

                                    <input type="text" class="form-control" name="head" value="{{$data['head']}}"> <br>
                                    <br>
                                    <input type="text" class="form-control" name="support" value="{{$data['support']}}">
                                    <br> <br>
                                    <input type="text" class="form-control" name="buttons" value="{{$data['buttons']}}">
                                    <br> <br>
                                    <input type="text" class="form-control" name="mama" value="{{$data['mama']}}"> <br>
                                    <br>
                                    <button class="btn btn-success mb-2">Update</button>
                                </div>

                            </form>
                            <div class="container" id="sem">
                                <img src="{{asset('/storage/'. $data['body'])}}" class="d-block w-25 float-left width="
                                     alt="...">
                            </div>

                            <div class="container">
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
</div>
