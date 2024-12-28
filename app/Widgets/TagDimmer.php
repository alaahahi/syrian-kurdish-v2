<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use App\Models\Tag;

class TagDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Tag::count();
        $string = trans_choice('Tags', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-ticket',
            'title'  => "{$count} {$string}",
            'text'   => "Click on button below to view all tags now.",
            'button' => [
                'text' => __('view all tags'),
                'link' => "/admin/tag",
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }



}
