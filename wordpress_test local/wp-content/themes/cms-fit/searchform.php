<form role="search" method="get" class="card card-sm shadow-sm" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="card-body row no-gutters align-items-center">
        <div class="col-auto">
            <i class="fas fa-search h4 text-body"></i>
        </div>
        <div class="col">
            <input class="form-control form-control-lg form-control-borderless" type="search" name="s"
                placeholder="Search topics or keywords" value="<?php echo esc_attr(get_search_query()); ?>">
        </div>
        <div class="col-auto">
            <button class="btn btn-lg btn-success" type="submit">Search</button>
        </div>
    </div>
</form>