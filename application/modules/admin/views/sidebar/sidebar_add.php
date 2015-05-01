<div class="row">
    <div class="col-lg-12">
        <h1>Добавить сайдбар</h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-bullhorn"></i> Сайдбар</li>
            <li class=""><i class="fa fa-plus"></i> Добавить сайдбар</li>
        </ol>
    </div>
    <div><?php if(@$msg){ echo '<span class="label label-'.$msg_type.'">'.$msg.'</span>';}?></div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <form role="form" method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Имя сайдбара</label>
                <input type="text" class="form-control"  name="name_sidebar">
            </div>

            <!--  End meta-->

            <button type="submit" class="btn btn-success">Готово</button>
        </form>
    </div>
</div>
<hr class="divider">
<a class="btn btn-default" href="/admin/sidebar">Обратно</a>
