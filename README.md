
## Add submodule

	git submodule add git@github.com:wet-boew/wet-boew-dist.git vendor/wet-boew

## Get latest code

	cd vendor/wet-boew
	git pull origin v4.0-dist

## Checkout desired version

	cd vendor/wet-boew
	git checkout v4.0.5

## Store reference in parent project

	git add vendor/wet-boew
	git commit ..
