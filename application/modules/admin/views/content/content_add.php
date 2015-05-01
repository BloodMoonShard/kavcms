<div class="row">
    <div class="col-lg-12">
        <h1>Добавить страницу</h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-bullhorn"></i> Страниц</li>
            <li class=""><i class="fa fa-plus"></i> Добавить страницу</li>
        </ol>
    </div>
    <div><?php if(@$msg){ echo '<span class="label label-'.$msg_type.'">'.$msg.'</span>';}?></div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <form role="form" method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Имя страницы</label>
                <input type="text" class="form-control"  name="title">
            </div>

            <div class="form-group">
                <label for="content">Краткое содержимое</label>
                <textarea name="short_content" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="content">Содержимое</label>
                <textarea name="content" class="form-control" id="tinyTextarea"></textarea>
            </div>

            <div class="form-group">
                <label for="title">Раздел</label>
                <select class="form-control" name="type">
                    <?php foreach(@$type as $k=>$v){?>
                    <option value="<?php echo @$v['id_type'];?>"><?php echo @$v['human_name'];?></option>
                    <?php } ?>

                </select>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            МЕТА-информация (для SEO)
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="title_seo">Заголовок (Title)</label>
                            <input type="text" class="form-control" id="title_seo" name="seo_title"
                                   placeholder="Рекомендация: до 70 символов.">
                        </div>
                        <div class="form-group">
                            <label for="description_seo">Описание (Description)</label>
                            <textarea name="seo_description" id="description_seo" class="form-control ta_desc"
                                      placeholder="Рекомендация: до 150 символов."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="keywords_seo">Ключевые слова (Keywords)</label>
                            <input type="text" class="form-control" id="keywords_seo" name="seo_keywords"
                                   placeholder="Рекомендация: не более 15 ключевых слов (через запятую).">
                        </div>
                    </div>
                </div>
            </div>
            <!--  End meta-->

            <button type="submit" class="btn btn-success">Готово</button>
        </form>
    </div>
</div>
<hr class="divider">
<a class="btn btn-default" href="/admin/content">Обратно</a>
