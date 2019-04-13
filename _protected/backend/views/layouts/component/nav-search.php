<form class="search-form" action="<?= url(['/content/post']) ?>" method="GET">
    <div class="input-group">
        <input type="text" class="form-control input-sm" placeholder="<?= t('app', 'Search ...') ?>" name="PostSearch[title]">
        <span class="input-group-btn">
            <a href="javascript:;" class="btn submit">
                <i class="icon-magnifier"></i>
            </a>
        </span>
    </div>
</form>