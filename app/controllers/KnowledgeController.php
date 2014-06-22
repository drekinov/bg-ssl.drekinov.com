<?php

class KnowledgeController extends BaseController
{
    public function index()
    {
        return View::make('knowledge.index');
    }

    public function show($site_id)
    {
        return View::make('knowledge.show');
    }
}
