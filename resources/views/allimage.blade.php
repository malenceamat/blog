@extends('admin')
@include('style')
@include('admin.sidebar')

<div class="main-container" id="container">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">


                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vsefotki as $data)
                                <tr>
                                    <td>
                                        <div class="container mt-0" id="sem">
                                            <img src="{{asset('/storage/'. $data['image'])}}"
                                                 style="float: left; width: 100px; height: 100px; object-fit: cover;">
                                        </div>
                                    </td>
                                    <td>
                                        <form method="POST" action="/allimage/{{$data->id}}">
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


<script> secondUpload = new FileUploadWithPreview('mySecondImage')</script>
