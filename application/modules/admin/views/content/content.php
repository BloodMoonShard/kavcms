<div class="row">
    <div class="col-lg-12">
        <h1>Страницы</h1>
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
                                <th>Название страницы</th>
                                <th>Тип</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $counter=sizeof($data); foreach ($data as $d) { ?>
                                <tr>
                                    <th><?php echo $counter; ?></th>
                                    <th><a href=""><?php echo $d['title'] ?></a></th>
                                    <th><a href=""><?php echo $d['human_name'] ?></a></th>
                                    <th><a href="/admin/content/edit/<?php echo $d['id_content'] ?>">Редактировать</a> /
                                        <a style="color: red;" href="/admin/content/delete/<?php echo $d['id_content'] ?>" onclick="return confirm('Удалить страницу?')">Удалить</a></th>
                                </tr>
                                <?php $counter--;} ?>
                            </tbody>
                        </table>
                    </div>
                    <a class="btn btn-info" href="/admin/content/add">Добавить тип</a>
                <?php } else {
                    echo '<p class="lead">Вы еще не создали ни одной страницы.</p>';
                    echo '<p>   <a class="btn btn-info" href="/admin/content/add">Добавить страницу</a></p>';
                } ?>
            </div>
        </div>
    </div>
</div>
