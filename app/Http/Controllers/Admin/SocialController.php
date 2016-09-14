<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageFacebook;
use Facebook\FacebookRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{

    /**
     * scheduled post facebook.
     * @param $name
     * @param $image_url
     * @param null $caption
     * @param $time_scheduled
     * @return mixed
     */
    public function ScheduledPostImageToPageFacebook($name, $image_url, $caption = null, $time_scheduled)
    {
        $page = PageFacebook::where('name', $name)->first();
        $request = new FacebookRequest(
            Auth::user()->AccessToken()->facebook_token,
            'POST',
            $page->page_id . '/photos',
            array(
                'url' => $image_url,
                'caption' => $caption,
                'scheduled_publish_time' => $time_scheduled
            )
        );
        $response = $request->execute();
        $graphObject = $response->getGraphObject();
        return $graphObject;
    }

    public function getSession()
    {
        $session = null;

        return $session;
    }
}
