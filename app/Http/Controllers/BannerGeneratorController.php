<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Spatie\Browsershot\Browsershot;

class BannerGeneratorController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('components.banner-moox', [
            'title' => $request->get('title'),
            'description' => str_replace('++', "\n", $request->get('description')),
            'screenshot' => $request->get('screenshot'),
            'commercial' => $request->boolean('commercial'),
            'community' => $request->boolean('community'),
            'useLayout' => true,
        ]);
    }

    public function generate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:300',
            'screenshot' => 'required|url',
            'community' => 'nullable|boolean',
            'commercial' => 'nullable|boolean',
        ]);

        $title = $validated['title'];
        $description = str_replace('++', "\n", $validated['description']);
        $screenshot = $validated['screenshot'];
        $isCommunity = (bool) ($validated['community'] ?? false);
        $isCommercial = (bool) ($validated['commercial'] ?? false);

        $view = $isCommunity ? 'components.banner-community' : 'components.banner-moox';

        $html = View::make($view, [
            'title' => $title,
            'description' => $description,
            'screenshot' => $screenshot,
            'commercial' => $isCommercial,
            'useLayout' => true,
        ])->render();

        $image = Browsershot::html($html)
            ->setNodeBinary('"/Users/alfdrollinger/Library/Application Support/Herd/config/nvm/versions/node/v21.7.3/bin/node"')
            ->setNpmBinary('"/Users/alfdrollinger/Library/Application Support/Herd/config/nvm/versions/node/v21.7.3/bin/npm"')
            ->windowSize(2560, 1440)
            ->deviceScaleFactor(2)
            ->waitUntilNetworkIdle()
            ->timeout(30)
            ->quality(90)
            ->setScreenshotType('jpeg')
            ->screenshot();

        return response($image, 200)->header('Content-Type', 'image/jpeg');
    }
}
