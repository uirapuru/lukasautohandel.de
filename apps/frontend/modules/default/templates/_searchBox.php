<div class="grid_4 bg-white">
    <div class="inner-block">
        <div class="pad-1">
            <div class="form-title"><?= __("search.formLabel"); ?><span><?= __("search.formSubLabel"); ?></span></div>  
            <form id="form1" method="post" action="<?= url_for("@search"); ?>">
                <label>
                    <span><?= __("search.carTypes"); ?></span>
                    <strong class="select1">
                        <?= $filterForm["variant_id"]->render(); ?>
                    </strong>
                </label>
                <label>
                    <span><?= __("search.carBrands"); ?></span>
                    <strong class="select1">
                        <?= $filterForm["brand"]->render(); ?>
                    </strong>
                </label>
                <label><span><?= __("search.carModels"); ?></span>
                    <strong class="select1">
                        <?= $filterForm["model_id"]->render(); ?>
                    </strong>
                </label>
                <a onClick="document.getElementById('form1').submit()" href="#" class="button"><?= __("search.searchButtonLabel"); ?></a>
            </form>
        </div>
    </div>
</div> 

<script>
    $(function() {
        var $brandSelect = $("select[name=car_filters\\[brand\\]]");
        var $modelSelect = $("select[name=car_filters\\[model_id\\]]");
        var emptyModelOption = '<option value=""><?= __("search.allModelsLabel"); ?></option>';

        $brandSelect.data("groups", $("optgroup", $modelSelect));
        $("optgroup", $modelSelect).remove();
        $modelSelect.html(emptyModelOption);

        $brandSelect.change(function(e) {
            $("optgroup", $modelSelect).remove();
            var options = $(this).data("groups").filter("[label='" + $(this).val() + "']").html();
            $modelSelect.html(emptyModelOption + options);
        });

        $brandSelect.trigger("change");
    });
</script>