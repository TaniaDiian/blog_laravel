@extends('admin.layout');

@section('content');

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Привіт! Це адмін панель
            <small>...</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">

            <div class="box-header with-border">
                <h3 class="box-title">
                    Головна сторінка
                </h3>
            </div>

            <div class="box-body">
                Деяка інструкція про те як користуватись адмінкою
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                і тут є місце для деякого тексту
            </div>
            <!-- /.box-footer-->

        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>

@endsection
