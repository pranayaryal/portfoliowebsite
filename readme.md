
##Features of this website

1. This site is hosted on Digital Ocean on a Ubuntu droplet. I had to install composer there.
2. It is built using the Laravel framework
3. I push my code changes using ssh and git webhooks

A good place to get a hang of the project would be to start from the routes file. https://github.com/pranayaryal/portfoliowebsite/blob/master/app/Http/routes.php

The route will give you and idea about which controller to go to and which method in the controller. I have tried using explicit route names to keep it simple. The controller methods will then lead to the respective views.
