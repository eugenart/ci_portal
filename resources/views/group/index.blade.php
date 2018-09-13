@extends('layout.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/paraia_multi_select.css') }}">
@endsection
@section('content')
    <div class="modal fade" id="ModalCreateUser" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Создание группы</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="" onsubmit="">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input name="group_name" id="" class="form-control" placeholder="Название группы"></input>
                        </div>

                        <div id="photo" class="form-group">
                            <img src="http://via.placeholder.com/185x185"
                                 style="width:185px;height:185px;border:#41719C 2px solid;" id="photo_preview"
                                 class="img-thumbnail" alt="Фото группы">
                        </div>
                        <label class="custom-file hidden-print" style="">
                            <input type="file" id="btnImagemPaciente" style="width: 160px;"
                                   class="form-control form-control-sm">
                            <span class="custom-file-control"></span>
                        </label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="brands" data-paraia-multi-select="true"
                                   placeholder="Select a brand">

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Создать</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button class="btn btn-primary create-user-button" data-toggle="modal" data-target="#ModalCreateUser">
                Создать группу
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="card account-profile-main">
                <div class="row">
                    <div class="col account-main-info-col">
                        <img src="https://api.adorable.io/avatars/150/2" class="account-profile-avatar"
                             alt="">
                    </div>
                    <div class="col">
                        <ul class="account-profile-main_information">
                            <li><b>Группа развития</b></li>
                        </ul>
                        <ul class="account-profile-contact_information">
                            <li><span><b>6</b></span><span> участников</span></li>
                        </ul>
                        <hr>
                        <div>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/1" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/2" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/3" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/4" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/5" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/6" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="card account-profile-main">
                <div class="row">
                    <div class="col account-main-info-col">
                        <img src="https://api.adorable.io/avatars/150/1" class="account-profile-avatar"
                             alt="">
                    </div>
                    <div class="col">
                        <ul class="account-profile-main_information">
                            <li><b>Группа пирожков</b></li>
                        </ul>
                        <ul class="account-profile-contact_information">
                            <li><span><b>6</b></span><span> участников</span></li>
                        </ul>
                        <hr>
                        <div>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/1" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/2" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/3" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/4" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/5" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>
                            <a href=""><img class="group-user-avatar" src="https://api.adorable.io/avatars/150/6" alt=""
                                            data-container="body" data-toggle="popover" data-placement="top"
                                            data-content="Имя Пользователя" data-html="true" data-trigger="hover"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/paraia_multi_select.js')  }}"></script>
    <script>
        $("#photo").click(function () {
            $("#btnImagemPaciente").trigger('click');
        })


        $('#btnImagemPaciente').change(function () {
            if (this.files && this.files[0]) {
                let img = document.getElementById('photo_preview');
                img.src = URL.createObjectURL(this.files[0]); // set src to file url
            }
        });
    </script>
    <script>
        var items = [
            {value: 11, text: 'Apple'},
            {value: 12, text: 'Nokia'},
            {value: 13, text: 'Sony'},
            {value: 14, text: 'LG'},
            {value: 15, text: 'HTC'},
            {value: 16, text: 'Motorola'},
            {value: 17, text: 'Samsung'},
            {value: 18, text: 'ZTE'},
            {value: 19, text: 'Asus'},
            {value: 20, text: 'Alcatel'}
        ];
        var select = $('[data-paraia-multi-select="true"]').paraia_multi_select({
            items: items,
            // enable multi select
            multi_select: true,
            // selected items on init
            defaults: [],
            // filter text
            filter_text: 'Filter',
            // is Right To Left?
            rtl: false,
            // is case sensitive?
            case_sensitive: false

        });

    </script>
@endsection
