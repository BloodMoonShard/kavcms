<div class="row">
    <div class="col-lg-12">
        <h1>Редактирование типа</h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-bullhorn"></i> Типы страниц</li>
            <li class=""><i class="fa fa-edit"></i> Редактировать тип</li>
        </ol>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <form role="form" method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Имя типа</label>
                <input type="text" class="form-control" value="<?php echo @$data['human_name'];?>"  name="human_name">
            </div>

            <div class="form-group">
                <label for="title">Системное имя типа</label>
                <input type="text" class="form-control" value="<?php echo @$data['name_module'];?>" name="name_module">
            </div>

            <div class="form-group">
                <label for="title">Шаблон</label>
                <input type="text" class="form-control" value="<?php echo @$data['template'];?>" name="template">
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
                            <input type="text" class="form-control" id="title_seo" value="<?php echo @$data['seo_title'];?>" name="seo_title"
                                   placeholder="Рекомендация: до 70 символов.">
                        </div>
                        <div class="form-group">
                            <label for="description_seo">Описание (Description)</label>
                            <textarea name="seo_description" id="description_seo" class="form-control ta_desc"
                                      placeholder="Рекомендация: до 150 символов."><?php echo @$data['seo_description'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="keywords_seo">Ключевые слова (Keywords)</label>
                            <input type="text" class="form-control" id="keywords_seo" name="seo_keywords" value="<?php echo @$data['seo_keywords'];?>"
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
<a class="btn btn-default" href="/admin/content_type">Обратно</a>
