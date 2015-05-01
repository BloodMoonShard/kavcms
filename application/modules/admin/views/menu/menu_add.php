<div class="row">
    <div class="col-lg-12">
        <h1>Добавить пункт меню</h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-bullhorn"></i> Меню</li>
            <li class=""><i class="fa fa-plus"></i> Добавить пункт меню</li>
        </ol>
    </div>
    <div><?php if(@$msg){ echo '<span class="label label-'.$msg_type.'">'.$msg.'</span>';}?></div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <form role="form" method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Имя пункта меню</label>
                <input type="text" class="form-control"  name="name">
            </div>

            <div class="form-group">
                <label for="title">Ссылка</label>
                <input type="text" class="form-control"  name="link">
            </div>

            <div class="form-group">
                <label for="title">Отображать?</label>
                <input type="checkbox" class="form-control" value="1" checked="checked" name="display"/>
            </div>

            <!--  End meta-->

            <button type="submit" class="btn btn-success">Готово</button>
        </form>
    </div>
</div>
<hr class="divider">
<a class="btn btn-default" href="/admin/menu">Обратно</a>
