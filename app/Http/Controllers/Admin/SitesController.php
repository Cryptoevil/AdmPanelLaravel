<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySiteRequest;
use App\Http\Requests\StoreSiteRequest;
use App\Http\Requests\UpdateSiteRequest;
use App\Site;

class SitesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('site_access'), 403);

        $sites = Site::all();

        return view('admin.sites.index', compact('sites'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('site_create'), 403);

        return view('admin.sites.create');
    }

    public function store(StoreSiteRequest $request)
    {
        abort_unless(\Gate::allows('site_create'), 403);

        $site = Site::create($request->all());

        return redirect()->route('admin.sites.index');
    }

    public function edit(Site $site)
    {
        abort_unless(\Gate::allows('site_edit'), 403);

        return view('admin.sites.edit', compact('site'));
    }

    public function update(UpdateSiteRequest $request, Site $site)
    {
        abort_unless(\Gate::allows('site_edit'), 403);

        $site->update($request->all());

        return redirect()->route('admin.sites.index');
    }

    public function show(Site $site)
    {
        abort_unless(\Gate::allows('site_show'), 403);

        return view('admin.sites.show', compact('site'));
    }

    public function destroy(Site $site)
    {
        abort_unless(\Gate::allows('site_delete'), 403);

        $site->delete();

        return back();
    }

    public function massDestroy(MassDestroySiteRequest $request)
    {
        Site::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
