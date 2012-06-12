chmod 0700 ./ci_chmod.sh ./ci_recess.sh
find ./application -type f -exec chmod 0644 {} +
find ./application -type d -exec chmod 0755 {} +
find ./system -type f -exec chmod 0644 {} +
find ./system -type d -exec chmod 0755 {} +
find ./database -type f -exec chmod 0644 {} +
find ./database -type d -exec chmod 0755 {} +
find ./asset -type f -exec chmod 0644 {} +
find ./asset -type d -exec chmod 0755 {} +
find . -regex '.*\.htaccess.*' -type f -exec chmod 0755 {} +
chmod 0644 .gitignore index.php license.txt README.md crossdomain.xml humans.txt robots.txt 404.html
