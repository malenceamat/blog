@extends('admin')
@include('style')
@include('admin.sidebar')

<style>
    .hidden {
        display: none;
    }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .time-range-input {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 300px;
    }

    .time-range-input input[type="time"] {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        height: 36px;
        width: 45%; /* set the width for each input */
        padding: 0 10px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 5px;
    }
</style>


<div class="main-container" id="container">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">

                        <form @if (isset($dis->id)) action="{{url('discount/edit')}}"
                              @else action="{{url('discount/save')}}" @endif  method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @if(isset($dis->id))
                                @method('POST')
                            @endif
                            <div>
                                <input type="checkbox" id="showFormCheckbox1" class="show-form-checkbox"> Скидка на
                                счастливые часы
                                <div id="dynamicForm1" class="hidden">
                                    <label for="inputField1">Введите время:</label>
                                    <input type="time" id="startTime" name="start" >
                                    <span>-</span>
                                    <input type="time" id="endTime" name="end" >
                                </div>
                            </div>

                            <div>
                                <input type="checkbox" id="showFormCheckbox2" class="show-form-checkbox"> Скидка на
                                кол-во
                                товаров
                                <div id="dynamicForm2" class="hidden">
                                    <label for="inputField2">Введите кол-во товаров:</label>
                                    <input type="text" id="inputField2" class="form-control" placeholder="3"
                                           name="count" {{--value="{{$dis['count']}}"--}}>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" id="showFormCheckbox3" class="show-form-checkbox"> Простая скидка
                                на
                                товар
                                <div id="dynamicForm3" class="hidden">
                                    <label for="inputField3">Введите скидку на товар:</label>
                                    <input type="text" id="inputField3" class="form-control" placeholder="25%"
                                           name="discount" >
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" id="showFormCheckbox4" class="show-form-checkbox"> Скидка на
                                самовывоз
                                <div id="dynamicForm4" class="hidden">
                                    <label for="inputField4">Введите скидку на самовывоз:</label>
                                    <input type="text" id="inputField4" class="form-control" placeholder="25%"
                                           name="delivery" >
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{$dis['id'] ?? ''}}" >
                            @if (isset($dis->id))

                                <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">
                                    Редактировать скидку
                                </button>

                            @else
                                <button class="btn btn-outline-secondary btn-rounded mb-2 me-4">
                                    создать скидку
                                </button>

                            @endif
                        </form>


                        <script>
                            const checkboxes = document.querySelectorAll('.show-form-checkbox');

                            checkboxes.forEach(function (checkbox) {
                                checkbox.addEventListener('change', function () {
                                    const formId = this.id.replace('showFormCheckbox', '');
                                    const form = document.getElementById('dynamicForm' + formId);
                                    if (this.checked) {
                                        form.classList.remove('hidden');
                                    } else {
                                        form.classList.add('hidden');
                                    }
                                });
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
