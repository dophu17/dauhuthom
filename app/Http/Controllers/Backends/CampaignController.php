<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Campaign;

class CampaignController extends Controller
{
	public function index() {
		$data['list'] = Campaign::orderBy('created_at', 'DESC')->get();
		return view('backends.campaigns.index', $data);
	}

    public function getAdd() {
    	return view('backends.campaigns.add');
    }

    public function postAdd() {
    	$campaign = new Campaign;
    	$campaign->banner = request()->banner;
    	$campaign->product_link = request()->product_link;
    	$campaign->product_link_short = request()->product_link_short;
    	$campaign->origin_link = request()->origin_link;
    	$campaign->save();
    	return redirect()->route('admin.campaign.index');
    }
}
