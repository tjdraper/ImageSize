# ImageSize for Statamic

A plugin to get either the width or height of an image.

## Usage:

	{{ imagesize path="{hero_image}" type="width" divide="2" }}

As in the example above, the tag is "imagesize" and takes the following parameters:

### path="/my/image"

Supply the path to the image you want ImageSize to get the width or height for. You can use a variable from one of your fields or hard code if needed.

### type="width|height"

Tell ImageSize if you want the width or the height of the image.

### divide="2"

This is actually why I developed this add-on, but I'll get to that in a minute. Supply an number to divide the image size by.

## Why Is This Needed?!?

This solved a specific problem for me in developing a responsive, retina screen ready site with Statamic. I want all my images to be double resolution for retina devices, and I want the image to display at a maximum of half the actual size if the image for that reason. But I also need for it to be responsive for mobile devices, or as the browser width changes.

My solution is to get the image width, divide it in half, and set that as the width in the image tag. Then using CSS, the image is set to a max-width of 100% (or a pixel value if the specific context calls for it). This allows the image to be whatever size the user uploads (hopefully within reason, or limited by an image transform), but never get over half the size of the image.

## Feedback

I am pretty new to PHP and add-on development in general. I'm an HTML/CSS kind of guy. But I'm having fun learning new sills. That said, if you see any issues with this add-on or have general feed back, please do let me know. I promise I won't be offended.

## License

Copyright 2014 TJ Draper.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

	http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.