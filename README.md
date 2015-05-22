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
	`<img src="make/image/files:product:images:one.png">`

- Make sure that image should have readable permissions 


## License

Intervention Image is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2015 [Anil kumar](https://www.facebook.com/anilkumarmudiraj)