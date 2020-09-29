RewriteEngine On 
RewriteCond %{SERVER_PORT} 80
RewriteCond %{HTTP_HOST} ^(www\.)?faciostores\.com
RewriteRule ^(.*)$ https://www.faciostores.com/$1 [R,L]