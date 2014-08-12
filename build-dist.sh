cp -a wet-boew wet-boew-copy
cd wet-boew-copy
# sudo npm install -g grunt-cli yo bower
# npm install
grunt build assets-min
cd ..
rm -rf wet-boew-dist
mv wet-boew-copy/dist wet-boew-dist