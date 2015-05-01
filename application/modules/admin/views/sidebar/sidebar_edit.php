<div class="row">
    <div class="col-lg-12">
        <h1>Изменить сайдбар</h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-bullhorn"></i> Сайдбар</li>
            <li class=""><i class="fa fa-plus"></i> Изменить сайдбар</li>
        </ol>
    </div>
    <div><?php if(@$msg){ echo '<span class="label label-'.$msg_type.'">'.$msg.'</span>';}?></div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <form role="form" method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Имя сайдбара</label>
                <input type="text" class="form-control"  value="<?php echo @$data['name_sidebar'];?>" name="name_sidebar">
            </div>


            <button type="submit" class="btn btn-success">Обновить</button>
        </form>
        </br> </br>
        <div class="panel panel-default">
            <div class="panel-body">
                <?php if (sizeof($datas)>0) {?>
                    <h3>Элементы сайдбара</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped tablesorter">
                            <thead>
                            <tr>
                                <th>Имя элемента</th>
                                <th>Ссылка</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $counter=sizeof($datas); foreach ($datas as $d) { ?>
                                <tr>
                                    <th><a href=""><?php echo $d['name'] ?></a></th>
                                    <th><a href=""><?php echo $d['link'] ?></a></th>
                                    <th><a style="color: red;" href="/admin/sidebar/delete_elem/<?php echo $d['id_sidebar_elements'] ?>" onclick="return confirm('Удалить елемент?')">Удалить</a></th>
                                </tr>
                                <?php $counter--;} ?>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" >Добавить елемент</a>
                <?php } else {?>
                    <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" >Добавить елемент</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/assets/js/sidebar/sidebar.js"></script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Форма добавления нового элемента в сайдбар</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" id="addElement" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Имя элемента</label>
                        <input type="text" class="form-control"  value="" name="name">
                    </div>
                    <div class="form-group">
                        <label for="title">Ссылка</label>
                        <input type="text" class="form-control"  value="" name="link">
                    </div>
                    <input type="hidden" value="<?php echo $data['id_sidebar'];?>" name="id_sidebar"/>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary" id="addElementSidebar">Добавить</button>
            </div>
        </div>
    </div>
</div>
<hr class="divider">
<a class="btn btn-default" href="/admin/menu">Обратно</a>
