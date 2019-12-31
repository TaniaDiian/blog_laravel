@extends('admin.layout');
@section('content');


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Додати категорію
            <small>...</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            {!! Form::open(['route' => 'categories.store']) !!}
            <div class="box-header with-border">
                <h3 class="box-title">
                    Додаємо категорію
                </h3>
                @include('admin.errors');
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            Назва
                        </label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               placeholder="" name="title">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button class="btn btn-success pull-right">
                    Додати
                </button>
            </div>
            <!-- /.box-footer-->
            {!! Form::close() !!}
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>

@endsection