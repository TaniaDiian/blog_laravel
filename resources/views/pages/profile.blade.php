@extends('layout')

@section('content')

    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="leave-comment mr0"><!--leave comment-->

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif

                        <h3 class="text-uppercase">
                            Мій профіль
                        </h3>

                        @include('admin.errors')

                        <br>

                        <img src="{{$user->getImage()}}"
                             alt=""
                             class="profile-image">

                        <form class="form-horizontal contact-form"
                              role="form"
                              method="post"
                              action="/profile"
                              enctype="multipart/form-data">

                            {{csrf_field()}}

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text"
                                           class="form-control"
                                           id="name"
                                           name="name"
                                           placeholder="Name"
                                           required
                                           value="{{$user->name}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email"
                                           class="form-control"
                                           id="email"
                                           name="email"
                                           placeholder="Email"
                                           value="{{$user->email}}"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password"
                                           class="form-control"
                                           id="password"
                                           name="password"
                                           placeholder="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="file"
                                           class="form-control"
                                           id="image"
                                           name="avatar"
                                           style="height: 70px;">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        Кілька слів про мене
                                    </label>
                                    <textarea name="description"
                                              id=""
                                              cols="30"
                                              rows="10"
                                              class="form-control"
                                    >{{$user->description}}</textarea>
                                </div>
                            </div>

                            <button type="submit"
                                    class="btn send-btn">
                                Оновити
                            </button>

                        </form>
                    </div><!--end leave comment-->
                </div>

                @include('pages._sidebar')

            </div>
        </div>
    </div>

@endsection

