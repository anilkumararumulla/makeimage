# Make Image

This package helps in accessing the images which are stored in storage directory of laravel


## Requirements

- PHP >=5.3
- Image Intervention

## Getting started

- Use composer to install the package
```php
	# sudo composer require "anilkumar/makeimage"
```

- Once MakeImage is installed, you need to register Laravel service provider, in your `app/config/app.php`:

```php
'providers' => array(
	...
	'Anilkumar\Makeimage\MakeimageServiceProvider'
)
```

## Code Examples
- Suppose an image is stored in this path
	`ProjectName/app/storage/one.png`

- You can access that image
	`<img src='make/image/one.png'>`

- If image is stored in deep directory structure 
	`ProjectName/app/storage/files/product/images/one.png`

- You can access that image by replacing '/' with ':'
	`<img src='make/image:files:product:images:one.png'>`


## License


Copyright 2015