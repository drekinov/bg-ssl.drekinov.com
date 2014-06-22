<?php

class SitesController extends BaseController
{
    public function index()
    {
        return View::make('sites.index');
    }

    public function show($site_id)
    {
        return View::make('sites.show');
    }
}
