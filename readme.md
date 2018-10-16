PHP Project using jQuery,Less,Bootstrap,animate


Project uses its own template system.
To add a content page you need to crate new php file in app/templates/content the loader.php will load it automatically into navbar 
and javascript allows to redirect to it by url.
The only file that is aproached differently is homepage.php wich sets as main page in javascript and pushed as first in loader to ensure Home is always first in list. (navbar)

Project does not come with compilled css to maintain latest styles, so you have to compile them urself :)
_______________________________________
compile less/main.less to css/main.css in order for styles to work
