<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class BannerGeneratorController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('components.banner-moox', [
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'screenshot' => $request->get('screenshot'),
            'commercial' => $request->boolean('commercial'),
            'community' => $request->boolean('community'),
            'isPreview' => false,
        ]);
    }

    public function preview(Request $request)
    {
        $rawDescription = $request->get('description');
        $description = $rawDescription;

        $viewName = $request->boolean('community') ? 'components.banner-community' : 'components.banner-moox';

        return view($viewName, [
            'title' => $request->get('title'),
            'description' => $description,
            'screenshot' => $request->get('screenshot'),
            'commercial' => $request->boolean('commercial'),
            'community' => $request->boolean('community'),
            'isPreview' => ! $request->has('generate'),
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

        $description = $validated['description'];

        $url = route('bannergenerator.preview', [
            'title' => $validated['title'],
            'description' => $validated['description'],
            'screenshot' => $validated['screenshot'],
            'community' => $validated['community'],
            'commercial' => $validated['commercial'],
            'generate' => true,
        ]);

        $image = Browsershot::url($url)
            ->setNodeBinary('"/Users/alfdrollinger/Library/Application Support/Herd/config/nvm/versions/node/v21.7.3/bin/node"')
            ->setNpmBinary('"/Users/alfdrollinger/Library/Application Support/Herd/config/nvm/versions/node/v21.7.3/bin/npm"')->windowSize(2560, 1440)
            ->quality(60)
            ->setScreenshotType('jpeg')
            ->screenshot();

        return response($image, 200)->header('Content-Type', 'image/jpeg');
    }
}
