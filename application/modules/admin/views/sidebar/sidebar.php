<div class="row">
    <div class="col-lg-12">
        <h1>Сайдбар</h1>
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
                                <th>Имя сайдбара</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $counter=sizeof($data); foreach ($data as $d) { ?>
                                <tr>
                                    <th><?php echo $counter; ?></th>
                                    <th><a href=""><?php echo $d['name_sidebar'] ?></a></th>
                                    <th><a href="/admin/sidebar/edit/<?php echo $d['id_sidebar'] ?>">Редактировать</a> /
                                        <a style="color: red;" href="/admin/sidebar/delete/<?php echo $d['id_sidebar'] ?>" onclick="return confirm('Удалить сайдбар?')">Удалить</a></th>
                                </tr>
                                <?php $counter--;} ?>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-info" href="/admin/sidebar/add">Добавить сайдбар</a>
                <?php } else {
                    echo '<p class="lead">Вы еще не создали ни одного сайдбара.</p>';
                    echo '<p>   <a class="btn btn-info" href="/admin/sidebar/add">Добавить сайдбар</a></p>';
                } ?>
            </div>
        </div>
    </div>
</div>
