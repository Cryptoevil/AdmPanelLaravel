<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSiteRequest;
use App\Http\Requests\UpdateSiteRequest;
use App\Site;

class SitesApiController extends Controller
{
    public function index()
    {
        $sites = Site::all();

        return $sites;
    }

    public function store(StoreSiteRequest $request)
    {
        return Site::create($request->all());
    }

    public function update(UpdateSiteRequest $request, Site $site)
    {
        return $site->update($request->all());
    }

    public function show(Site $site)
    {
        return $site;
    }

    public function destroy(Site $site)
    {
        $site->delete();

        return response("OK", 200);
    }
}
