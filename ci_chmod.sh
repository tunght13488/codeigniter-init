find ./application -type f -exec chmod 0644 {} +
find ./application -type d -exec chmod 0755 {} +
find ./system -type f -exec chmod 0644 {} +
find ./system -type d -exec chmod 0755 {} +
chmod 0644 .gitignore index.php license.txt README.md
