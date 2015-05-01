<div class="row">
    <div class="col-lg-12">
        <h1>Изменить пункт меню</h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-bullhorn"></i> Меню</li>
            <li class=""><i class="fa fa-plus"></i> Изменить пункт меню</li>
        </ol>
    </div>
    <div><?php if(@$msg){ echo '<span class="label label-'.$msg_type.'">'.$msg.'</span>';}?></div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <form role="form" method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Имя пункта меню</label>
                <input type="text" class="form-control"  value="<?php echo @$data['name'];?>" name="name">
            </div>

            <div class="form-group">
                <label for="title">Ссылка</label>
                <input type="text" class="form-control"  value="<?php echo @$data['дштл'];?>" name="link">
            </div>

            <div class="form-group">
                <label for="title">Отображать?</label>
                <input type="checkbox" class="form-control" value="<?php if($data['display'] != 0){echo '1';}?>" <?php if($data['display'] != 0){echo 'checked';}?> name="menu"/>
            </div>

            <!--  End meta-->

            <button type="submit" class="btn btn-success">Обновить</button>
        </form>
    </div>
</div>
<hr class="divider">
<a class="btn btn-default" href="/admin/menu">Обратно</a>
