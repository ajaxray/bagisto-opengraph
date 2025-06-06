<?php

namespace Ajaxray\OpenGraph\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class InjectOpenGraphTags
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($response->headers->get('content-type') === 'text/html; charset=UTF-8') {
            $content = $response->getContent();
            
            $content = $this->injectOpenGraphTag($content, 'og:type', 'website');
            $content = $this->injectOpenGraphTag($content, 'twitter:card', 'summary_large_image');

            $ogImage = core()->getConfigData('general.design.social-preview.image');
            if ($ogImage) {
                $imageUrl = asset('storage/' . $ogImage);
                $content = $this->injectOpenGraphTag($content, 'og:image', $imageUrl);
                $content = $this->injectOpenGraphTag($content, 'twitter:image', $imageUrl);
            }

            $titleValue = core()->getConfigData('general.design.social-preview.title');
            if ($titleValue) {
                $content = $this->injectOpenGraphTag($content, 'og:title', $titleValue);
                $content = $this->injectOpenGraphTag($content, 'twitter:title', $titleValue);
            }

            $descriptionValue = core()->getConfigData('general.design.social-preview.description');
            if ($descriptionValue) {
                $content = $this->injectOpenGraphTag($content, 'og:description', $descriptionValue);
                $content = $this->injectOpenGraphTag($content, 'twitter:description', $descriptionValue);
            }

            $response->setContent($content);
        }

        return $response;
    }

    /**
     * Injects an OpenGraph meta tag if not already present.
     */
    private function injectOpenGraphTag(string $content, string $property, string $value): string
    {
        $pattern = '/<meta\s+property=["\']' . preg_quote($property, '/') . '["\']\s+content=["\'][^"\']*["\']/';
        if (!preg_match($pattern, $content)) {
            $metaTag = "<meta property=\"{$property}\" content=\"{$value}\">\n";
            $content = str_replace('</head>', $metaTag . '</head>', $content);
        }

        return $content;
    }
}