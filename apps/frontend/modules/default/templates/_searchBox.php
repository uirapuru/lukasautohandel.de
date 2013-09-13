<div class="grid_4 bg-white">
    <div class="inner-block">
        <div class="pad-1">
            <div class="form-title"><?= __("search.formLabel"); ?><span><?= __("search.formSubLabel"); ?></span></div>  
            <form id="form1" method="post" action="<?= url_for("@search"); ?>">
                <label>
                    <span><?= __("search.carTypes"); ?></span>
                    <strong class="select1">
                        <?= $filterForm["variant"]->render(); ?>
                    </strong>
                </label>
                <label>
                    <span><?= __("search.carBrands"); ?></span>
                    <strong class="select1">
                        <?=
                        $filterForm["brand"]->render(array(
                            "data-models-url"      => url_for("@models_for_brand"),
                            "data-models-selected" => $filterForm["model"]->getValue(),
                        ));
                        ?>
                    </strong>
                </label>
                <label><span><?= __("search.carModels"); ?></span>
                    <strong class="select1">
                        <?= $filterForm["model"]->render(); ?>
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
        var $modelSelect = $("select[name=car_filters\\[model\\]]");
        var emptyModelOption = '<option value=""><?= __("search.allModelsLabel"); ?></option>';

        $modelSelect.html(emptyModelOption);

        $brandSelect.change(function(e) {
            if ($(this).val() == "") {
                return false;
            }

            $brandSelect.data("lastModelOption", $(":selected", $modelSelect));

            $.get(
                    $(this).attr("data-models-url"),
                    {
                        brand: $(this).val()
                    },
            function(data) {
                $modelSelect.html(emptyModelOption);
                $.each(data, function(key, val) {
                    var $option = $("<option />").text(key).val(val);
                    if (val == $brandSelect.attr("data-models-selected"))
                    {
                        $option.attr("selected", "SELECTED");
                    }

                    $modelSelect.append($option);
                });
            }
            );
        });

        $brandSelect.trigger("change");
    });
</script>