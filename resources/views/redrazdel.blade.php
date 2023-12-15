@include('style')
@include('admin.sidebar')


<div class="main-container" id="container">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">

                        <form action="/redrazdel" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{$names['id']}}">
                                    <label>
                                        <input type="text" class="form-control" name="namerazd"
                                               placeholder="Название раздела" value="{{$names['name']}}">
                                    </label>
                                </div>
                            </div>
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
                            <div class="container mt-3">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-success">Отправить</button>
                                </div>
                            </div>
                        </form>
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Image</th>
                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($names->gallerys as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <div class="container mt-0" id="sem">
                                            <img src="{{asset('/storage/'. $user['image'])}}"
                                                 style="float: left; width: 100px; height: 100px; object-fit: cover;">
                                        </div>
                                    </td>
                                    <td>
                                        <form method="POST" action="/redrazdel/{{$user->id}}">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="btn btn-danger mb-2">Delete</button>
                                        </form>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>


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
