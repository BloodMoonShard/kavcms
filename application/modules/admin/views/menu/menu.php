<div class="row">
    <div class="col-lg-12">
        <h1>Меню</h1>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php if (sizeof($data)>0) {?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped tablesorter">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Имя пункта меню</th>
                                <th>Ссылка</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $counter=sizeof($data); foreach ($data as $d) { ?>
                                <tr>
                                    <th><?php echo $d['id_menu']; ?></th>
                                    <th><a href=""><?php echo $d['name'] ?></a></th>
                                    <th><a href=""><?php echo $d['link'] ?></a></th>
                                    <th><a href="/admin/menu/edit/<?php echo $d['id_menu'] ?>">Редактировать</a> /
                                        <a style="color: red;" href="/admin/menu/delete/<?php echo $d['id_menu'] ?>" onclick="return confirm('Удалить пунк меню?')">Удалить</a></th>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-info" href="/admin/menu/add">Добавить пункт меню</a>
                <?php } else {
                    echo '<p class="lead">Вы еще не создали ни одного пункта меню.</p>';
                    echo '<p>   <a class="btn btn-info" href="/admin/menu/add">Добавить пункт меню</a></p>';
                } ?>
            </div>
        </div>
    </div>
</div>
